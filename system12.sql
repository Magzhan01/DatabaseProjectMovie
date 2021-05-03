


CREATE OR REPLACE PACKAGE search_mov_pkg
IS
    
PROCEDURE search_mov (p_title IN VARCHAR2,  p_cursr OUT SYS_REFCURSOR);

END search_mov_pkg;

CREATE OR REPLACE PACKAGE BODY search_mov_pkg
IS
PROCEDURE search_mov (p_title IN VARCHAR2, p_cursr OUT SYS_REFCURSOR)
IS
BEGIN
    OPEN p_cursr FOR
        SELECT *
        FROM movies
        WHERE UPPER(title) = UPPER(p_title);
END;
END search_mov_pkg;








CREATE OR REPLACE PACKAGE search_mov_pkg
IS
    
PROCEDURE search_mov (p_title IN VARCHAR2,  p_cursr OUT SYS_REFCURSOR);

END search_mov_pkg;

CREATE OR REPLACE PACKAGE BODY search_mov_pkg
IS
PROCEDURE search_mov (p_title IN VARCHAR2, p_cursr OUT SYS_REFCURSOR)
IS

BEGIN
    OPEN p_cursr FOR
        SELECT *
            FROM movies
                WHERE UPPER(title) LIKE '%'||p_title||'%';
END;
END search_mov_pkg;





CREATE OR REPLACE PACKAGE search_mov_pkg
IS
    
PROCEDURE search_mov (p_title IN VARCHAR2,  p_cursr OUT SYS_REFCURSOR);

END search_mov_pkg;

CREATE OR REPLACE PACKAGE BODY search_mov_pkg
IS
PROCEDURE search_mov (p_title IN VARCHAR2, p_cursr OUT SYS_REFCURSOR)
IS
BEGIN
    OPEN p_cursr FOR
        SELECT *
        FROM movies
        WHERE UPPER(title) = UPPER(p_title);
END;
END search_mov_pkg;












create or replace PACKAGE search_block_pkg
IS
PROCEDURE search_for_genre(p_genre IN VARCHAR2 DEFAULT NULL, p_ñursr OUT SYS_REFCURSOR);
PROCEDURE search_for_year(p_year IN movies.year%TYPE DEFAULT NULL, p_ñursr OUT SYS_REFCURSOR);
PROCEDURE  search_of_raiting(p_num1 IN movies.avg_vote%TYPE DEFAULT 4, p_num2 IN movies.avg_vote%TYPE DEFAULT 6, p_ñursr OUT SYS_REFCURSOR  );

END search_block_pkg;


create or replace PACKAGE BODY search_block_pkg
IS
------------------------------------------------------------------------
PROCEDURE search_for_genre(p_genre IN VARCHAR2 DEFAULT NULL, p_ñursr OUT SYS_REFCURSOR)
AS 
BEGIN
    OPEN p_ñursr FOR
    SELECT *                                                           --Ïîèñê ïî æàíðàì
        FROM movies
        WHERE genre LIKE '%'||p_genre||'%';
END;
---------------------------------------------------------
PROCEDURE search_for_year(p_year IN movies.year%TYPE DEFAULT NULL, p_ñursr OUT SYS_REFCURSOR)
AS 
BEGIN
    OPEN p_ñursr FOR
    SELECT *                                                          --Ïîèñê ïî âûïóñêó(ãîä)
        FROM movies 
        WHERE year = p_year;
END;
-------------------------------------------------------------------------
PROCEDURE  search_of_raiting(p_num1 IN movies.avg_vote%TYPE DEFAULT 4, p_num2 IN movies.avg_vote%TYPE DEFAULT 6, p_ñursr OUT SYS_REFCURSOR )
IS                                                               
                                                                         --Ïîèñê ïî ðåéòèíãó
BEGIN
    OPEN p_ñursr FOR
    SELECT *
        FROM movies
        WHERE avg_vote BETWEEN p_num1 AND p_num2;
END;
-------------------------------------------------------------------------
END search_block_pkg;







CREATE OR REPLACE PROCEDURE ins_mov
(
    p_id IN movies.IMDB_TITLE_ID%TYPE,
    p_title IN VARCHAR2,
    p_year IN movies.year%TYPE,
    p_genre IN VARCHAR2,
    p_country IN VARCHAR2
) IS
BEGIN
        INSERT INTO movies(IMDB_TITLE_ID,title,year,genre,country)
        VALUES(p_id, p_title, p_year, p_genre,p_country);
        DBMS_OUTPUT.PUT_LINE('Inserted ' || ' ' || SQL%ROWCOUNT || ' row');
END ins_mov;
---------------------------------------------------------------------------------
CREATE OR REPLACE PROCEDURE upd_mov
(
    p_id IN movies.IMDB_TITLE_ID%TYPE,
    p_title IN VARCHAR2,
    p_year IN movies.year%TYPE,
    p_genre IN VARCHAR2,
    p_country IN VARCHAR2,
    p_ch_id IN movies.IMDB_TITLE_ID%TYPE
) IS
BEGIN
        UPDATE movies
        SET IMDB_TITLE_ID = p_id, title = p_title, year = p_year, genre = p_genre, country = p_country
        WHERE IMDB_TITLE_ID = p_ch_id;
        DBMS_OUTPUT.PUT_LINE('Inserted ' || ' ' || SQL%ROWCOUNT || ' row');
END upd_mov;
---------------------------------------------------------------------------------
CREATE OR REPLACE PROCEDURE del_mov
(
    p_id IN movies.IMDB_TITLE_ID%TYPE
) IS
BEGIN
        DELETE FROM movies
        WHERE IMDB_TITLE_ID = p_id;
        DBMS_OUTPUT.PUT_LINE('Inserted ' || ' ' || SQL%ROWCOUNT || ' row');
END del_mov;





CREATE TABLE movies_log(old_id NUMBER, new_id NUMBER, operation_date DATE, old_title VARCHAR2(26 BYTE), new_title VARCHAR2(26 BYTE),
                        old_year NUMBER(38,0), new_year NUMBER(38,0),
                            old_genre VARCHAR2(128 BYTE), new_genre VARCHAR2(128 BYTE),
                                old_country VARCHAR2(26 BYTE), new_country VARCHAR2(26 BYTE));
                                
---------------------------------------------------------------------------------


CREATE OR REPLACE TRIGGER log_ins_mov
AFTER INSERT ON movies FOR EACH ROW
BEGIN
    INSERT INTO movies_log(old_id, new_id, operation_date, old_title, new_title, old_year, new_year, old_genre, new_genre, old_country, new_country)
    VALUES(:OLD.IMDB_TITLE_ID, :NEW.IMDB_TITLE_ID, SYSDATE, :OLD.title, :NEW.title, :OLD.year, :NEW.year,:OLD.genre, :NEW.genre,:OLD.country, :NEW.country);
END;
---------------------------------------------------------------------------------
CREATE OR REPLACE TRIGGER log_upd_mov
AFTER UPDATE ON movies FOR EACH ROW
BEGIN
    INSERT INTO movies_log(old_id, new_id, operation_date, old_title, new_title, old_year, new_year, old_genre, new_genre, old_country, new_country)
    VALUES(:OLD.IMDB_TITLE_ID, :NEW.IMDB_TITLE_ID, SYSDATE, :OLD.title, :NEW.title, :OLD.year, :NEW.year,:OLD.genre, :NEW.genre,:OLD.country, :NEW.country);
END;
---------------------------------------------------------------------------------
CREATE OR REPLACE TRIGGER log_del_mov
AFTER DELETE ON movies FOR EACH ROW
BEGIN
    INSERT INTO movies_log(old_id, new_id, operation_date, old_title, new_title, old_year, new_year, old_genre, new_genre, old_country, new_country)
    VALUES(:OLD.IMDB_TITLE_ID, :NEW.IMDB_TITLE_ID, SYSDATE, :OLD.title, :NEW.title, :OLD.year, :NEW.year,:OLD.genre, :NEW.genre,:OLD.country, :NEW.country);
END;





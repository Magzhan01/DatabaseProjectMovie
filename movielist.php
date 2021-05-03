<?php
    include "action.php";
    
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">

<!-- movielist07:38-->
<head>
	<!-- Basic need -->
	<title>Open Pediatrics</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link rel="profile" href="#">

    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
	<!-- Mobile specific meta -->
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone-no">

	<!-- CSS files -->
	 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
	
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="css/style.css">



	
</head>
<body>
<!--preloading-->
<div id="preloader">
    <img class="logo" src="images/logo1.png" alt="" width="119" height="58">
    <div id="status">
        <span></span>
        <span></span>
    </div>
</div>
<!--end of preloading-->
<!--login form popup-->
<div class="login-wrapper" id="login-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>Login</h3>
        <form method="post" action="#">
        	<div class="row">
        		 <label for="username">
                    Username:
                    <input type="text" name="username" id="username" placeholder="Hugh Jackman" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
                </label>
        	</div>
           
            <div class="row">
            	<label for="password">
                    Password:
                    <input type="password" name="password" id="password" placeholder="******" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
            <div class="row">
            	<div class="remember">
					<div>
						<input type="checkbox" name="remember" value="Remember me"><span>Remember me</span>
					</div>
            		<a href="#">Forget password ?</a>
            	</div>
            </div>
           <div class="row">
           	 <button type="submit">Login</button>
           </div>
        </form>
        <div class="row">
        	<p>Or via social</p>
            <div class="social-btn-2">
            	<a class="fb" href="#"><i class="ion-social-facebook"></i>Facebook</a>
            	<a class="tw" href="#"><i class="ion-social-twitter"></i>twitter</a>
            </div>
        </div>
    </div>
</div>
<!--end of login form popup-->
<!--signup form popup-->
<div class="login-wrapper"  id="signup-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>sign up</h3>
        <form method="post" action="#">
            <div class="row">
                 <label for="username-2">
                    Username:
                    <input type="text" name="username" id="username-2" placeholder="Hugh Jackman" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
                </label>
            </div>
           
            <div class="row">
                <label for="email-2">
                    your email:
                    <input type="password" name="email" id="email-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
             <div class="row">
                <label for="password-2">
                    Password:
                    <input type="password" name="password" id="password-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
             <div class="row">
                <label for="repassword-2">
                    re-type Password:
                    <input type="password" name="password" id="repassword-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
           <div class="row">
             <button type="submit">sign up</button>
           </div>
        </form>
    </div>
</div>
<!--end of signup form popup-->

<!-- BEGIN | Header -->
<header class="ht-header">
	<div class="container">
		<nav class="navbar navbar-default navbar-custom">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header logo">
				    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					    <span class="sr-only">Toggle navigation</span>
					    <div id="nav-icon1">
							<span></span>
							<span></span>
							<span></span>
						</div>
				    </div>
				    <a href="index.php"><img class="logo" src="images/logo1.png" alt="" width="119" height="58"></a>
			    </div>
				<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav flex-child-menu menu-left">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li class="dropdown first">
							
							
								<li><a href="index.php">Home</a></li>
								
						
						</li>
						<li class="dropdown first">
										
								<li><a href="movielist.php">Movies</a></li>
							
						</li>
						<li class="dropdown first">
								<li><a href="celebritylist.php">Celebrities</a></li>
								
							
						</li>
						<li class="dropdown first">	
								<li><a href="bloglist.php">News</a></li>
							</li>
					
					</ul>
					<ul class="nav navbar-nav flex-child-menu menu-right">
						
						<li class="loginLink"><a href="#">LOG In</a></li>
						<li class="btn signupLink"><a href="#">sign up</a></li>
					</ul>
				</div>
			<!-- /.navbar-collapse -->
	    </nav>
	    
	    <!-- top search form -->
		
	   
		<form class="form-style-1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	    	<input type="text"  name="searchname" placeholder="Search for a movie by name: ">
			<input class="submit" type="submit" value="submit" name="seaname">
			</form>
			
	   
		
	</div>
</header>
<!-- END | Header -->

<div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1> movie listing - list</h1>
					<ul class="breadcumb">
						<li class="active"><a href="#">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span> movie listing</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-single movie_list">
	<div class="container">
		<div class="row ipad-width2">
			<div class="col-md-8 col-sm-12 col-xs-12">
				
			<table class="table" id="myTable" >
    <thead>
    <tr>
      <th scope="col">Movies</th>
      
    </tr>
  </thead>
  <tbody  style="background-color: black;">


  <?php
	
				if (isset($_POST["seaname"])) {
				
					$p = $_POST['searchname'];
 
				 $s = oci_parse($conn, "begin search_mov_pkg.search_mov( :p1 ,:p2); end;");
  $res = oci_new_cursor($conn);

  oci_bind_by_name($s, ":p1", $p);
  oci_bind_by_name($s, ":p2", $res, -1, OCI_B_CURSOR);
  
  
  
  oci_execute($s);
  oci_execute($res);
 while ($row = oci_fetch_array($res, OCI_RETURN_NULLS+OCI_ASSOC)) {

  ?>
  
	  
  		<tr style="background-color: black;">
			<td style="background-color: black;">
			  <div style="background-color: black;" class="movie-item-style-2">
					<img src="images/uploads/mv1.jpg" alt="" style="width:230px; height:350px; ">
					<div class="mv-item-infor">
						<h6><a href="moviesingle.html"><?= $row['TITLE'];  ?> <span><?= $row['YEAR'];  ?></span></a></h6>
						<p class="rate"><i class="ion-android-star"></i><span><?= $row['AVG_VOTE'];  ?></span> /10</p>
						<p class="describe"><?= $row['DESCRIPTION'];  ?></p>
						<p class="run-time"> GENRE: <?= $row['GENRE'];  ?>  </p>
						<p>PRODUCTION COMPANY: <?= $row['PRODUCTION_COMPANY'];  ?></p>
						<p>LANGUAGE: <?= $row['LANGUAGE'];  ?></p>
						<p>DIRECTOR: <?= $row['DIRECTOR'];  ?></p>
						<p>WRITER: <?= $row['WRITER'];  ?></p>
						<p>ACTORS: <?= $row['ACTORS'];  ?></p>
					</div>
				</div>
			</td>
		</tr>
		

  <?php 
      }
    } else if (isset($_POST["seanGenr"])) {
				
		$p = $_POST['searchGenr'];

	 $s = oci_parse($conn, "begin search_block_pkg.search_for_genre( :p1 ,:p2); end;");
$res = oci_new_cursor($conn);

oci_bind_by_name($s, ":p1", $p);
oci_bind_by_name($s, ":p2", $res, -1, OCI_B_CURSOR);



oci_execute($s);
oci_execute($res);
while ($row = oci_fetch_array($res, OCI_RETURN_NULLS+OCI_ASSOC)) {

?>


<tr style="background-color: black;">
<td style="background-color: black;">
  <div style="background-color: black;" class="movie-item-style-2">
		<img src="images/uploads/mv1.jpg" alt="" style="width:230px; height:350px; ">
		<div class="mv-item-infor">
			<h6><a href="moviesingle.html"><?= $row['TITLE'];  ?> <span><?= $row['YEAR'];  ?></span></a></h6>
			<p class="rate"><i class="ion-android-star"></i><span><?= $row['AVG_VOTE'];  ?></span> /10</p>
			<p class="describe"><?= $row['DESCRIPTION'];  ?></p>
			<p class="run-time"> GENRE: <?= $row['GENRE'];  ?>  </p>
			<p>PRODUCTION COMPANY: <?= $row['PRODUCTION_COMPANY'];  ?></p>
			<p>LANGUAGE: <?= $row['LANGUAGE'];  ?></p>
			<p>DIRECTOR: <?= $row['DIRECTOR'];  ?></p>
			<p>WRITER: <?= $row['WRITER'];  ?></p>
			<p>ACTORS: <?= $row['ACTORS'];  ?></p>
		</div>
	</div>
</td>
</tr>



<?php 
}
} else if (isset($_POST["seanRating"])) {
	
				
	$p = $_POST['searchRating1'];
	$p1 = $_POST['searchRating2'];


 $s = oci_parse($conn, "begin search_block_pkg.search_of_raiting(:p ,:p1 ,:p2); end;");
$res = oci_new_cursor($conn);

oci_bind_by_name($s, ":p", $p);
oci_bind_by_name($s, ":p1", $p1);
oci_bind_by_name($s, ":p2", $res, -1, OCI_B_CURSOR);



oci_execute($s);
oci_execute($res);
while ($row = oci_fetch_array($res, OCI_RETURN_NULLS+OCI_ASSOC)) {

?>


<tr style="background-color: black;">
<td style="background-color: black;">
<div style="background-color: black;" class="movie-item-style-2">
	<img src="images/uploads/mv1.jpg" alt="" style="width:230px; height:350px; ">
	<div class="mv-item-infor">
		<h6><a href="moviesingle.html"><?= $row['TITLE'];  ?> <span><?= $row['YEAR'];  ?></span></a></h6>
		<p class="rate"><i class="ion-android-star"></i><span><?= $row['AVG_VOTE'];  ?></span> /10</p>
		<p class="describe"><?= $row['DESCRIPTION'];  ?></p>
		<p class="run-time"> GENRE: <?= $row['GENRE'];  ?>  </p>
		<p>PRODUCTION COMPANY: <?= $row['PRODUCTION_COMPANY'];  ?></p>
		<p>LANGUAGE: <?= $row['LANGUAGE'];  ?></p>
		<p>DIRECTOR: <?= $row['DIRECTOR'];  ?></p>
		<p>WRITER: <?= $row['WRITER'];  ?></p>
		<p>ACTORS: <?= $row['ACTORS'];  ?></p>
	</div>
</div>
</td>
</tr>


<?php 
}
} else if (isset($_POST["subYear"])) {
				
	$p = $_POST['seaYear'];

 $s = oci_parse($conn, "begin search_block_pkg.search_for_year( :p1 ,:p2); end;");
$res = oci_new_cursor($conn);

oci_bind_by_name($s, ":p1", $p);
oci_bind_by_name($s, ":p2", $res, -1, OCI_B_CURSOR);



oci_execute($s);
oci_execute($res);
while ($row = oci_fetch_array($res, OCI_RETURN_NULLS+OCI_ASSOC)) {

?>


<tr style="background-color: black;">
<td style="background-color: black;">
<div style="background-color: black;" class="movie-item-style-2">
	<img src="images/uploads/mv1.jpg" alt="" style="width:230px; height:350px; ">
	<div class="mv-item-infor">
		<h6><a href="moviesingle.html"><?= $row['TITLE'];  ?> <span><?= $row['YEAR'];  ?></span></a></h6>
		<p class="rate"><i class="ion-android-star"></i><span><?= $row['AVG_VOTE'];  ?></span> /10</p>
		<p class="describe"><?= $row['DESCRIPTION'];  ?></p>
		<p class="run-time"> GENRE: <?= $row['GENRE'];  ?>  </p>
		<p>PRODUCTION COMPANY: <?= $row['PRODUCTION_COMPANY'];  ?></p>
		<p>LANGUAGE: <?= $row['LANGUAGE'];  ?></p>
		<p>DIRECTOR: <?= $row['DIRECTOR'];  ?></p>
		<p>WRITER: <?= $row['WRITER'];  ?></p>
		<p>ACTORS: <?= $row['ACTORS'];  ?></p>
	</div>
</div>
</td>
</tr>



<?php 
}
}

	else {
      $sql = 'SELECT * FROM movies';
      $stid = oci_parse($conn, $sql);
      oci_execute($stid);
  
      while($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {

  ?>
  
	  
  		<tr style="background-color: black;">
			<td style="background-color: black;">
			  <div style="background-color: black;" class="movie-item-style-2">
					<img src="images/uploads/mv1.jpg" alt="" style="width:230px; height:350px; ">
					<div class="mv-item-infor">
						<h6><a href="moviesingle.html"><?= $row['TITLE'];  ?> <span><?= $row['YEAR'];  ?></span></a></h6>
						<p class="rate"><i class="ion-android-star"></i><span><?= $row['AVG_VOTE'];  ?></span> /10</p>
						<p class="describe"><?= $row['DESCRIPTION'];  ?></p>
						<p class="run-time"> GENRE: <?= $row['GENRE'];  ?>  </p>
						<p>PRODUCTION COMPANY: <?= $row['PRODUCTION_COMPANY'];  ?></p>
						<p>LANGUAGE: <?= $row['LANGUAGE'];  ?></p>
						<p>DIRECTOR: <?= $row['DIRECTOR'];  ?></p>
						<p>WRITER: <?= $row['WRITER'];  ?></p>
						<p>ACTORS: <?= $row['ACTORS'];  ?></p>
					</div>
				</div>
			</td>
		</tr>
		

  <?php 
      }
	}
  ?>
    </tbody>
  </table>

				
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="sidebar">
					<div class="searh-form">
						<h4 class="sb-title">Search for movie</h4>
						<div class="row">

								<div class="col-md-12 form-it">
									<label>Genres & Subgenres</label>
						<form class="form-style-1"  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
							
									
									<input type="text"  name="searchGenr" placeholder="Search for a movie by genre: ">

									<input class="submit" type="submit" value="submit" name="seanGenr">
									</form>
								</div>
							</div>
						

						<form class="form-style-1"   method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
							<div class="row">

																<div class="col-md-12 form-it">
									<label>Rating Range</label>
									<input type="text"  name="searchRating1" placeholder="from">
									<input type="text"  name="searchRating2" placeholder="to">
									 
									
								</div>
								<div class="col-md-12 ">
									<input class="submit" type="submit" value="submit" name="seanRating">
								</div>
							</div>
						</form>

						<form class="form-style-1"  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
							<div class="row">

								<div class="col-md-12 form-it">
									<label>Release Year</label>
									<div class="row">
										<div class="col-md-6">
										<input type="text" placeholder="Enter year" name="seaYear">
										</div>
										
									</div>
								</div>
								<div class="col-md-12 ">
									<input class="submit" type="submit" value="submit" name="subYear">
								</div>
							</div>
						</form>
					</div>
					<div class="ads">
						<img src="images/uploads/ads1.png" alt="">
					</div>
					<div class="sb-facebook sb-it">
						<h4 class="sb-title">Find us on Facebook</h4>
						<iframe src="#" data-src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftemplatespoint.net%2F%3Ffref%3Dts&tabs=timeline&width=340&height=315px&small_header=true&adapt_container_width=false&hide_cover=false&show_facepile=true&appId"  height="315" style="width:100%;border:none;overflow:hidden" ></iframe>
					</div>
					<div class="sb-twitter sb-it">
						<h4 class="sb-title">Tweet to us</h4>
						<div class="slick-tw">
							<div class="tweet item" id=""><!-- Put your twiter id here -->
							</div>
							<div class="tweet item" id=""><!-- Put your 2nd twiter account id here -->
							</div>
						</div>							
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- footer section-->

<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/plugins2.js"></script>
<script src="js/custom.js"></script>

 <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
      $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
</body>

<!-- movielist07:38-->
</html>
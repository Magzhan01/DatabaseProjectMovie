<?php
    include "action.php";
    
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
	
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="css/style.css">
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
<div class="hero user-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1>User’s profile</h1>
					<ul class="breadcumb">
						<li class="active"><a href="#">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span>Profile</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-single">
	<div class="container"  >
		<div class="row ipad-width">
			<div class="col-md-9 col-sm-12 col-xs-12">
				<div class="form-style-1 user-pro" action="#">
					
<div class="container-xl">
  <div class="table-responsive">
    <div class="table-wrapper">
      <div class="table-title">
        <div class="row">
          <div class="col-sm-6">
            <h2>Add <b>Movie</b></h2>
          </div>
          <div class="col-sm-6">
            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Movie</span></a>
                        
          </div>
        </div>
      </div>


      <?php
if (isset($_POST["insertdata"])) {

  $callpro = oci_parse($conn, "call ins_mov(:id_bv,:title_bv,:year_bv,:genre_bv,:country_bv)");


  $id=$_POST['id'];
  $title=$_POST['title'];
  $year=$_POST['year'];
  $genre=$_POST['genre'];
  $country=$_POST['country'];
 
  
  oci_bind_by_name($callpro, ":id_bv", $id);
  oci_bind_by_name($callpro, ":title_bv", $title);
  oci_bind_by_name($callpro, ":year_bv", $year);
  oci_bind_by_name($callpro, ":genre_bv", $genre);
  oci_bind_by_name($callpro, ":country_bv", $country);

oci_execute($callpro);
echo "Procedure completed";
}

if (isset($_POST["editdata"])) {

  $callpro = oci_parse($conn, "call upd_mov(:id_bv,:title_bv,:year_bv,:genre_bv,:country_bv,:ch_id_bv)");


  $id=$_POST['id'];
  $title=$_POST['title'];
  $year=$_POST['year'];
  $genre=$_POST['genre'];
  $country=$_POST['country'];
  $ch_id=$_POST['ch_id'];
  
  oci_bind_by_name($callpro, ":id_bv", $id);
  oci_bind_by_name($callpro, ":title_bv", $title);
  oci_bind_by_name($callpro, ":year_bv", $year);
  oci_bind_by_name($callpro, ":genre_bv", $genre);
  oci_bind_by_name($callpro, ":country_bv", $country);
  oci_bind_by_name($callpro, ":ch_id_bv", $ch_id);

oci_execute($callpro);
echo "Procedure completed";
}

if (isset($_POST["delData"])) {

  $callpro = oci_parse($conn, "call del_mov(:id_bv)");


  $id=$_POST['id'];
 
  
  oci_bind_by_name($callpro, ":id_bv", $id);
 

oci_execute($callpro);
echo "Procedure completed";
}

  $query = 'select IMDB_TITLE_ID , TITLE , YEAR, GENRE,COUNTRY from movies';
  $stid = oci_parse($conn, $query);
  $r = oci_execute($stid);
  
  // Fetch each row in an associative array
  print '<table class="table table-striped table-hover" id="myTable" border="1">';
  print '<thead style="background-color: white;">';
  print '<tr>';
  print '<td>'."IMDB_TITLE_ID".'</td>';
  print '<td>'."TITLE".'</td>';
  print '<td>'."YEAR".'</td>';
  print '<td>'."GENRE".'</td>';
  print '<td>'."COUNTRY".'</td>';
  print '<td>'."operations".'</td>';
  print '</tr>';
  print '</thead>';
  print '  <tbody style="background-color: white;">';
  while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
     print '<tr>';
     foreach ($row as $item) {
         print '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
     }
     print  '<td>';
     print ' <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>';
     print '<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>';
     print '</td>';
     print '</tr>';
  }
  print '</tbody>';
  print '</table>';
?>

 
  </div>        
</div>
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <div class="modal-header">            
          <h4 class="modal-title">Add Employee</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">          
          <div class="form-group">
            <label>ID</label>
            <input name="id" type="text" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Title</label>
            <input name="title" type="text" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Year</label>
            <input name="year" type="text" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Genre</label>
            <input name="genre" type="text" class="form-control" required>
          </div> 
          <div class="form-group">
            <label>COUNTRY</label>
            <input name="country" type="text" class="form-control" required>
          </div>          
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-success" value="Add" name="insertdata">
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <div class="modal-header">            
          <h4 class="modal-title">Edit Employee</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">          
        <div class="form-group">
            <label>ID</label>
            <input name="id" type="text" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Title</label>
            <input name="title" type="text" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Year</label>
            <input name="year" type="text" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Genre</label>
            <input name="genre" type="text" class="form-control" required>
          </div> 
          <div class="form-group">
            <label>COUNTRY</label>
            <input name="country" type="text" class="form-control" required>
          </div>  
          <div class="form-group">
            <label>write the ID of the line you want to CHANGE</label>
            <input name="ch_id" type="text" class="form-control" required>
          </div>        
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-info" value="Save" name="editdata">
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <div class="modal-header">            
          <h4 class="modal-title">Delete Employee</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">  
        <div class="form-group">
            <label>ID</label>
            <input name="id" type="text" class="form-control" required>
          </div>        
          <p>Are you sure you want to delete these Records?</p>
          <p class="text-warning"><small>This action cannot be undone.</small></p>
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-danger" value="Delete" name="delData">
        </div>
      </form>
    </div>
  </div>
</div>
				</div>
			</div>
		</div>
	</div>
</div>
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

<!-- userprofile14:04-->
</html>
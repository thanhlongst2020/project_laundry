<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width= , initial-scale=1.0">

	<!-- <link rel="stylesheet" href="bootstrap-3.4.1/dist/js/bootstrap.min.js">
	<link rel="stylesheet" href="bootstrap-3.4.1/dist/css/bootstrap.css"> -->
	<!-- <link rel="stylesheet" href="bootstrap-3.4.1/dist/js/bootstrap.js"> -->
	<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
    <script
        src="https://code.jquery.com/jquery-3.6.0.slim.js"
        integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY="
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>
	<title>Document</title>
	<?php 
		require('require_file.php');
		require('database/Connection.php');
		require('data/insert_laundry_type.php');
	 ?>
	
</head>
<body>
	<div class="container-fluid">
		<nav class="navbar navbar-inverse">
			<div class="container-fluid row ">
				<a class="navbar-brand col-md-2" href="#" ><font size="6" class="brand">LAUNDRY</font></a>
				<ul class="nav navbar-nav col-md-10" style="margin-left: 12px">
					<li class="active">
						<span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
					</li>
				</ul>
			</div>
		</nav>
		<div class="container-fluid">
		  <div class="row whole">
		    <div class="col-md-2 sidebar" >
		    	<div class="list-group">
				  <?php require_once('navigation.php') ?>
				</div>
		    </div>
  			<div class="col-md-10 content" style="background: #8bc0f2">
  				<div class="container-fluid sub-content">
  					<h1><small>Welcome Administrator!</small></h1>
  					<div class="container-fluid main">
  						<div class="row">
  							<div class="col-md-8"><h4 class="home">Laundry Type</h4></div>  							
  							<!-- Gôm 2 nút thu nhỏ và close bên phải home lại  -->
  							<div class=" col-md-4 box-tools pull-right">
  								
									<!-- Nút thu nhỏ bên phải -->
  									<button  class="btn btn-box-tool collapsible" data-widget="collapse" data-toggle="tooltip" title="Collapse"></button>
				                	<!-- Nút close bên phải -->
									<button  class="btn btn-box-tool remove" data-widget="remove" data-toggle="tooltip" title="Remove"></i></button>	
  								
			              </div>
  						</div>
  						<hr style="margin-top: 0px">

					<div id="contents" class="contents">

						<!-- Nút thêm new type Laundry -->
  						<div class="group-btn">
  							<button id="new_type" type="button" class="btn btn-success">New Type
  								<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
  							</button>
  						</div>
						
						<!-- Bảng chi tiết Laundry Type -->
  						<!-- <div class="form-group">

						  		//Số lượng entries hiển thị
  								<label for="input" class="col-sm-2 control-label">Number of entries</label>
  								<div class="col-sm-2">
  									<select name="" id="input" class="form-control" required="required">
  										<option value="">1</option>
  										<option value="">25</option>
  										<option value="">50</option>
  										<option value="">100</option>
  									</select>
  								</div>

  								<div class="col-sm-2 search" style="float: right;">		
  									<input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="" placeholder="Search">
  								</div>
  								<label for="input" class="col-sm-2 control-label lbl-search">Search: </label>
						</div> -->
						<table id="table_id" class="display" class="table table-hover">
							<thead>
								<tr>
									<th>Laundry Type Description</th>
									<th>Price/Kg</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<!-- Lấy dữ liệu ra từ Database -->
								<?php 
									require_once('data/get_laundry_type.php');
								?>
							</tbody>
						</table>
						<!-- <nav aria-label="..." class="page">
						  <ul class="pagination">
						    <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
						    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
						    <li ><a href="#">2 <span class="sr-only">(current)</span></a></li>
						    <li><a href="#">3 <span class="sr-only">(current)</span></a></li>				<li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a>
    							</li>	  
						  </ul>
						</nav> -->
					</div>
						
  					</div>
  				</div>
  				<div class="panel panel-default footer">
				  <div class="panel-body">
				    Copyright © 2016-2017 <a href="#">Laundry Shop</a>. All rights reserved.
				  </div>
				</div>
  			</div>
		  </div>
		</div>
	</div>
	<!-- Popup form newtype -->

	<div class="bg-modal">
					<div class="modal-content">
						<div class="title_close">
							<div class="title"><h3>New Laundry Type</h3></div>
							<div id="close" class="close">
								+
							</div>
						</div>
						
						<br>
						<hr>

						<div >
							<form method="POST">
								<div class="group-form">
									<label class="label_input col-sm-3">Laundry Type: </label>
									<div class="inpt col-sm-9">
										<input class="new_name" name="new_type" type="text" placeholder="Enter laundry type description">
									</div>
								</div>
								<div class="group-form">
									<label class="label_input col-sm-3">Price:</label>
									<div class="inpt col-sm-9">
										<input class="new_name" name="new_price" type="text" placeholder="Enter price per kilo">
									</div>
								</div>
								<button class="save_newLaundry" type="submit">
									Save
								</button>
							</form>
						</div>
					</div>
		</div>

		<!-- Import Jquery, Ajax vào, các thẻ import phải nằm ở vị trí cuối 
		như này nếu không sẽ không hoạt động -->
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
		<?php require_once('javascript_type.php')?>

		<script>
			$(document).ready( function () {
				$('#table_id').DataTable();
			} );
    	</script>
		
</body>
</html>
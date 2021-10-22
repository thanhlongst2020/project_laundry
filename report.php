<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width= , initial-scale=1.0">
	<title>Document</title>
	<?php 
		require('require_file.php');
		require('database/Connection.php')
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
  							<div class="col-md-8"><h4 class="home">Home</h4></div>  							
  							<div class=" col-md-4 box-tools pull-right">
  							
									<!-- Nút thu nhỏ bên phải -->
  									<button  class="btn btn-box-tool collapsible" data-widget="collapse" data-toggle="tooltip" title="Collapse"></button>
				                	<!-- Nút close bên phải -->
									<button  class="btn btn-box-tool remove" data-widget="remove" data-toggle="tooltip" title="Remove"></i></button>	
  						
			              	</div>
  						</div>
  						<hr style="margin-top: 0px">

						<div id="contents" class="contents">
							<div class="group-btn">
								<div class="form-group col-sm-10">
									<label for="input" class="col-sm-2 control-label">Daily Sales:</label>
									<div class="col-sm-10">
										<input style="width: 160px;" type="date" name="inputdate" id="input" class="form-control inputdate" value="27/04/2021" required="required" title="sdfd">
									</div>
								</div>
								<div class="col-sm-2 print" style="float: right">
										<div id="printBut" class="pull-right">
										<button id="print-button" type="button" class="btn btn-success btn-sm">
										PRINT
										<span class="glyphicon glyphicon-print" aria-hidden="true"></span>
										</button>
									</div>
									</button>
								</div>
								
							</div>
							<div class="form-group">
									<div class="col-sm-8">
										<label for="input" class="control-label col-sm-3">Number of entries</label>
										<select name="" id="input" class="form-control col-sm-3" required="required">
											<option value="">10</option>
											<option value="">25</option>
											<option value="">50</option>
											<option value="">100</option>
										</select>
									</div>

									<div class="col-sm-2 search" style="float: right;">		
										<input type="text" name="" id="input" class="form-control col-sm-4" value="" required="required" pattern="" title="" placeholder="Search">
									</div>
									<label for="input" class="col-sm-2 control-label lbl-search">Search report</label>
							</div>
							<table class="table table-hover">
								<thead>
									<tr>
										<th>Customer Name</th>
										<th>Type</th>
										<th>Laundry Received</th>
										<th>Date Paid</th>
										<th>Amount</th>
									</tr>
								</thead>
								<tbody>

								<!-- Lấy thông tin chi tiết ra từ Database -->
									<?php 
										require_once('data/get_report.php');
									?>
									
								</tbody>
							</table>
							<nav aria-label="..." class="page">
							<ul class="pagination">
								<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
								<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
								<li ><a href="#">2 <span class="sr-only">(current)</span></a></li>
								<li><a href="#">3 <span class="sr-only">(current)</span></a></li>				<li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a>
									</li>	  
							</ul>
							</nav>
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

	<?php require_once('javascript.php')?>
</body>
</html>
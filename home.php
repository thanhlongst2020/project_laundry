<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width= , initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery Library -->
	<script src="assets/js/jquery-3.3.1.min.js"></script>
	
	<?php 
		require('require_file.php');
		require('database/Connection.php');
		require('data/insert_laundry.php');
		require('data/edit_laundry.php');
		
	 ?>

	 <?php 
	 	if(isset($_POST['submit'])){
			// echo '<script>console.log("hello")</script>';
			 if(!empty($_POST['checkArr'])){
				 foreach($_POST['checkArr'] as $checked){
					// echo '<script>console.log("'.$checked.'")</script>';
					 $sql = 'update laundry set stats=1 where id='.$checked.';';
					 $result = $conn->query($sql);
					
				 }
			 }
			 echo "<meta http-equiv='refresh' content='0'>";
		 }
	 ?>

	 <?php 
		if(isset($_POST['delete'])){
			// echo '<script>console.log("hello")</script>';
			 if(!empty($_POST['checkArr'])){
				 foreach($_POST['checkArr'] as $checked){
					// echo '<script>console.log("'.$checked.'")</script>';
					 $sql = 'delete from laundry where id = '.$checked.';';
					 $result = $conn->query($sql);
					
				 }
			 }
			 echo "<meta http-equiv='refresh' content='0'>";
		 }
	 ?>

	 <?php

	 	
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
		  	<!-- Ph???n navbar -->
		    <div class="col-md-2 sidebar" >
		    	<div class="list-group">
				  <?php require_once('navigation.php');?>
				</div>
		    </div>

			<!-- Ph???n mainbody -->
  			<div class="col-md-10 content" style="background: #8bc0f2">
  				<div class="container-fluid sub-content">
  					<h1><small>Welcome Administrator!</small></h1>
  					<div class="container-fluid main">
						<!-- G??m ti??u ????? home v?? 2 n??t thu nh??? v???i close l???i -->
  						<div class="row">
							<!-- Ti??u ????? Home -->
  							<div class="col-md-8"><h4 class="home">Home</h4></div> 
							<!-- G??m 2 n??t thu nh??? v?? close b??n ph???i home l???i  -->
  							<div class=" col-md-4 box-tools pull-right">	
									<!-- N??t thu nh??? b??n ph???i -->
  									<button  class="btn btn-box-tool collapsible" data-widget="collapse" data-toggle="tooltip" title="Collapse"></button>
				                	<!-- N??t close b??n ph???i -->
									<button  class="btn btn-box-tool remove" data-widget="remove" data-toggle="tooltip" title="Remove"></i></button>	
			              	</div>
  						</div>
						<!-- D??ng k??? ph??n c??ch d?????i ti??u ????? Home -->
  						<hr style="margin-top: 0px">

						<!-- <button  class="btn btn-box-tool collapsible" data-widget="collapse" data-toggle="tooltip" title="Collapse"></button> -->
						<div id="contents" class="contents ten">
							<!-- G??m 3 n??t g???m New Laundry, Claim, Delete ??? gi???a trang l???i -->
							<div class="group-btn">
							<!-- N??t New Landry -->
  							<div id="new_laundry" type="button" class="btn btn-success">
								  <a class="button_a" href="#login-show" role="button">New Laundry</a>
  								<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
							</div>
							<!-- N??t ????nh d???u ???? xong Claim -->
  							<button type="submit" onclick="if(!confirm(' B???n ???? ho??n th??nh nh???ng ????n h??ng n??y ?')){return false}" form="myForm" class="btn btn-primary" id="claim" name="submit" >Claim
  								<span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
  							</button>
							  
							<!-- N??t x??a ????n h??ng Delete -->
  							<button  type="submit" onclick="if(!confirm('B???n mu???n x??a nh???ng ????n h??ng n??y ?')){return false}" class="btn btn-danger" form="myForm" id="delete" name="delete"  >Delete
  								<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
  							</button>
							</div>

							<!-- S??? l?????ng entry ???????c hi???n th??? trong b???ng -->
							<div class="form-group">
									<label for="input" class="col-sm-2 control-label">Number of entries</label>
									<div class="col-sm-2">
										<!-- C??c option s??? l?????ng entry trong m???i b???ng nh???-->
										<select disabled name="num_entries" id="inputentries" class="form-control num_entries" required="required">
											<option value="10">10</option>
											<option value="5">5</option>
										</select>
									</div>
									<!-- Input ????? search t??m ki???m th??ng tin entry -->
									<div class="col-sm-2 search" style="float: right;">		
										<input type="text" name="input_search" id="input_search" class="form-control" value="" required="required" onfocus="get_all()" onfocusout="get_out()" onkeyup="myFunction()"  placeholder="Search" title="Type in a name">
									</div>
									<label for="input" class="col-sm-2 control-label lbl-search">Search laundry</label>
							</div>

							<!-- B???ng ??? gi???a hi???n th??? c??c entry l?? c??c ????n h??ng -->
							<form  method="post" id="myForm" >
								<table id="myTable" class="table table-hover">
									<!-- Ti??u ????? c???t c???a b???ng -->
									<thead>
										<tr>
											<th><p class="collect"></p></th>
											<th>Customer Name</th>
											<!-- Priority c??ng l???n th?? ????? ??u ti??n c??ng th???p -->
											<th>Priority</th>
											<th>Weight</th>
											<th>Type</th>
											<th>Date Received</th>
											<th>Amount</th>
											<th>Action</th>
										</tr>
									</thead>

									<!-- Ph???n body show d??? li???u chi ti???t t??? Database -->
									<tbody id="target_content">
										
									</tbody>
								</table>
							</form>

							
							<!-- Ph???n ph??n trang: n???u d??? li???u trong CSDL qu?? nhi???u, b???ng hi???n th??? ???????c chia th??nh c??c page -->
							<nav aria-label="Page navigation" id="page"  class="page">
		 						<?php require_once('number_page.php') ?>
							</nav>
						</div>
						
  					</div>
  				</div>
				
				<!-- Ph???n footer g???m: b???ng quy???n. -->
  				<div class="panel panel-default footer">
				  <div class="panel-body">
				    Copyright ?? 2016-2017 <a href="#">Laundry Shop</a>. All rights reserved.
				  </div>
				</div>

  			</div>
			
			
		  </div>
		</div>
		
	</div>
	
	<!-- Ph???n popup form hi???n l??n khi nh???n n??t New Laundry m??u xanh c?? ch???c n??ng th??m ????n h??ng m???i. -->
	<div class="bg-modal">
					<div class="modal-content" >
						<div class="title_close">
							<div class="title"><h3>New Laundry</h3></div>
							<div id="close" class="close">
								+
							</div>
						</div>
						
						<br>
						<hr>

						<div>
							<form method="POST" >
								<div class="group-form">
									<label class="label_input col-sm-3">Customer Name: </label>
									<div class="inpt col-sm-9">
										<input class="new_name" name="customer_name" type="text"  require>
									</div>
								</div>
								<div class="group-form">
									<label class="label_input col-sm-3">Priority #:</label>
									<div class="inpt col-sm-9">
										<input class="new_name" name="priority" type="text" require>
									</div>
								</div>
								<div class="group-form">
									<label class="label_input col-sm-3">Weight: </label>
									<div class="inpt col-sm-9">
										<input class="new_name" name="weight" type="text" require>
									</div>
								</div>
								<div class="group-form">
									<label class="label_input col-sm-3">Type: </label>
									<div class="inpt col-sm-9">
										<select class="btn btn-default" name="type_name" require>
											<option value="Blanket">Blanket</option>
											<option value="Clothes">Clothes</option>
										</select>
									</div>
								</div>
								<button class="save_newLaundry" type="submit" name="submit">
									Save
								</button>
							</form>
						</div>
					</div>

					
	</div>

	<!-- Ph???n popup form hi???n l??n khi nh???n n??t Edit -->
	<div class="bg-modal-edit">
					<div class="modal-content">
						<div class="title_close">
							<div class="title"><h3>Edit Laundry</h3></div>
							<div id="close-edit" class="close">
								+
							</div>
						</div>
						
						<br>
						<hr>

						<div>
							<form method="POST" >
								<div class="group-form" style="display:none;">
									<label class="label_input col-sm-3">ID: </label>
									<div class="inpt col-sm-9">
										<input class="edit-id" name="edit_id" type="text" require>
									</div>
								</div>
								<div class="group-form">
									<label class="label_input col-sm-3">Customer Name: </label>
									<div class="inpt col-sm-9">
										<input class="edit-name" name="edit_customer_name" type="text" require>
									</div>
								</div>
								<div class="group-form">
									<label class="label_input col-sm-3">Priority #:</label>
									<div class="inpt col-sm-9">
										<input class="edit-priority" name="edit_priority" type="text" require>
									</div>
								</div>
								<div class="group-form">
									<label class="label_input col-sm-3">Weight: </label>
									<div class="inpt col-sm-9">
										<input class="edit-weight" name="edit_weight" type="text" require>
									</div>
								</div>
								<div class="group-form">
									<label class="label_input col-sm-3">Type: </label>
									<div class="inpt col-sm-9">
										<select class="btn btn-default edit-type" name="edit_type_name" require>
											<option id="Blanket" value="Blanket">Blanket</option>
											<option id="Clothes" selected value="Clothes">Clothes</option>
										</select>
									</div>
								</div>
								<button onclick="if(!confirm(' C???p nh???t ????n h??ng n??y ?')){return false}" class="save_newLaundry" type="submit" name="submit">
									Save
								</button>
							</form>
						</div>
					</div>

					
	</div>

	
	<!-- Import Jquery, Ajax v??o, c??c th??? import ph???i n???m ??? v??? tr?? cu???i 
		nh?? n??y n???u kh??ng s??? kh??ng ho???t ?????ng -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<?php require_once('javascript.php')?>
	


	
	<script>
		$(document).ready(function() {
			
			// Khi trang t???i xong, load d??? li???u trang 1 c???a paginition.php v??o table
			$('#target_content').load("paginition.php?page=1");
				
			// S??? ki???n khi click v??o c??c s??? trang 1,2,3,....
			$(".page-link").click(function(){
				//L???y data t??n id c???a className page-link
				var id =$(this).attr("data-id");

				// L???y t??n id c???a th??? cha c???a clasName page-link l?? <li>
				var select_id = $(this).parent().attr("id");

				// alert(select_id);
				$.ajax({
					url: "paginition.php",
					type: "GET",
					data: {
						page: id
					},
					cache: false,
					success: function(data){
						// ?????n d??? li???u ???????c load v??? v??o th??? <tbody id="target_content">
						$('#target_content').html(data);

						// Lo???i b??? className active c???a li c??
						$(".pageitem").removeClass("active");

						// K??ch ho???t className active cho li m???i
						$("#" + select_id).addClass("active");

						// $("#contents").css("max-height", "100px");
					}
				})
			});

			// $("#inputentries").on('change', function(){
			// 	var selectVal = $('#inputentries option:selected').val();
			// 	console.log(selectVal);

			// 	$.ajax({
			// 		url: "paginition.php",
			// 		type: 'POST',
			// 		data: {
			// 			limit: selectVal
			// 		},
			// 		cache: false,
			// 		success: function(data){
			// 			console.log(data);
			// 			if(selectVal==5){
			// 				$(".contents").removeClass("ten");
			// 				$(".contents").addClass("five");
			// 			}
			// 			else{
			// 				$(".contents").removeClass("five");
			// 				$(".contents").addClass("ten");
			// 			}
			// 			// ?????n d??? li???u ???????c load v??? v??o th??? <tbody id="target_content">
			// 			$('#target_content').html(data);

			// 			$.ajax({
			// 				url: "number_page.php",
			// 				type: 'POST',
			// 				data: {
			// 					limit: selectVal
			// 				},
			// 				cache: false,
			// 				success: function(data){
			// 					console.log(data);
			// 				} 
			// 			})
			// 			// $('.page').load();


			// 		} 
			// 	})

				

			// });


			
		});
	</script>

		<!-- Auto search in table -->
    <script>
			function myFunction() {
			var input, filter, table, tr, td, i, txtValue;
			// T??? kh??a ???????c search
			input = document.getElementById("input_search");

			filter = input.value.toUpperCase();

			// L???y table
			table = document.getElementById("myTable");

			// L???y h??ng c???a Table
			tr = table.getElementsByTagName("tr");

			// T??m ki???m t??? kh??a tr??n m???i h??ng
			for (i = 0; i < tr.length; i++) {

				// Ch??? t??m tr??n c???t th??? 1 c???a m???i h??ng
				td = tr[i].getElementsByTagName("td")[1];
				if (td) {
				txtValue = td.textContent || td.innerText;
				if (txtValue.toUpperCase().indexOf(filter) > -1) {
					// H??ng n??o c?? t??? kh??a ph?? h???p th?? hi???n l??n
					tr[i].style.display = "";
				} else {
					// H??ng n??o kh??ng c?? t??? kh??a ph?? h???p th?? ???n ??i
					tr[i].style.display = "none";
				}
				}       
			}
			}
    </script>

	<script>
		function get_all(){
			$('#target_content').load("auto_search_1.php");
			$(".contents").removeClass("five");
			$(".contents").removeClass("ten");
			x = document.getElementById("page");
			x.style.display = "none";

		}

		function get_out(){
			var input;
			input = document.getElementById("input_search");
	
			if(!input.value){
				$('#target_content').load("paginition.php?page=1");
				x = document.getElementById("page");
				x.style.display = "";
				$(".contents").addClass("ten");
			}
			
		}
	</script>

	<script>	
		$(document).ready(function (){
			$(".edit_laundry").click(function(){
			console.log('hello');
		})
		})
	</script>


		<!-- Import Jquery, Ajax v??o, c??c th??? import ph???i n???m ??? v??? tr?? cu???i 
		nh?? n??y n???u kh??ng s??? kh??ng ho???t ?????ng -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</body>
</html>
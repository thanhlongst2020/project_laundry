<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
</head>
<body>

<?php require_once("database/Connection.php") ?>

<h2>My Customers</h2>

<input type="text" id="myInput" onfocus="get_all()" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
<div id="target_content">

</div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
function myFunction() {

  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  console.log(table);
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

<script>
		$(document).ready(function() {
			// $(".btn").click(function(){
			// 	$("#contents").css("max-height", "200px");
			// })
			// Khi trang tải xong, load dữ liệu trang 1 của paginition.php vào table
			$('#target_content').load("auto_search_1.php");
            $.ajax({ url: 'auto_search_1.php', 
                success: function(data) { 
                    console.log(data); 
                } 
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
			// 			// Độn dữ liệu được load về vào thẻ <tbody id="target_content">
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
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
        <script>
            
        </script>
</body>
</html>

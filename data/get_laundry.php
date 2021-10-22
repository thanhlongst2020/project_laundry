<?php
require('../database/Connection.php');
$len = 3;
// $start = 0;
// var_dump($_POST["pages"]);
if(isset($_POST["pages"])){ 
    $number = $_POST["pages"];
    var_dump($number);
    $start = ($number-1)*$len;
}
else{
    $start = 0;
}
$sql = 'select * from  laundry order by id desc limit '.$start.','.$len.';';
$result = $conn->query($sql);

if($result->num_rows >0 ){
    while($row = $result->fetch_assoc()){
        if(!$row["stats"]){
            echo '
            <tr>
                <td class="check">
                    <input type="checkbox" name="checkArr[]" value='.$row["id"].'>
                </td>
                <td>'.$row["customer_name"].'</td>
                <td>'.$row["priority"].'</td>
                <td>'.$row["weight"].'</td>
                <td>'.$row["type_name"].'</td>
                <td>'.$row["date_receive"].'</td>
                <td>'.$row["amount"].'</td>
                <td>
                    <button onclick="editType("2");" type="button" class="btn btn-warning btn-xs">Edit
                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                    </button>
                </td>
            </tr>
        ';
        }
        
    }
}


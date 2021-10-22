<?php 
if(isset($_POST['customer_name']) && isset($_POST['priority']) && isset($_POST['weight']) && isset($_POST['type_name']) ){
    $customer_name= $_POST['customer_name'];
    $priority = $_POST['priority'];
    $weight = $_POST['weight'];
    $type_name = $_POST['type_name'];
    
    $sql = 'select price from type_laundry where type_name="'.$type_name.'"';
    $result = $conn->query($sql);
    $row = $result->fetch_row();
    $price = $row[0];

    $sql = 'insert into laundry(customer_name,priority,weight,type_name,date_receive,amount,stats) 
    values( "'.$customer_name.'", '.$priority.', '.$weight.' ,"'.$type_name.'",now(),'.$price*$weight.',0);';
    $result = $conn->query($sql);
    
    echo "<meta http-equiv='refresh' content='0'>";
}
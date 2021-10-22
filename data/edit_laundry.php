<?php 
if(isset($_POST['edit_id']) && isset($_POST['edit_customer_name']) && isset($_POST['edit_priority']) && isset($_POST['edit_weight']) && isset($_POST['edit_type_name']) ){
    $id = $_POST['edit_id'];
    $customer_name= $_POST['edit_customer_name'];
    $priority = $_POST['edit_priority'];
    $weight = $_POST['edit_weight'];
    $type_name = $_POST['edit_type_name'];
    // echo $type_name ;
    $sql = 'select price from type_laundry where type_name="'.$type_name.'"';
    $result = $conn->query($sql);
    $row = $result->fetch_row();
    $price = $row[0];

    // $sql = 'insert into laundry(customer_name,priority,weight,type_name,date_receive,amount,stats) 
    // values( "'.$customer_name.'", '.$priority.', '.$weight.' ,"'.$type_name.'",now(),'.$price*$weight.',0);';
    $sql = 'update laundry set customer_name="'.$customer_name.'", priority='.$priority.', 
            weight = '.$weight.', type_name= "'.$type_name.'", amount= '.$price*$weight.' where id ='.$id.';';
    $result = $conn->query($sql);
    
    echo "<meta http-equiv='refresh' content='0'>";
}
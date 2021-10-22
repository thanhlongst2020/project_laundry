<?php 
if(isset($_POST['new_type']) && isset($_POST['new_price']) ){
    $new_type= $_POST['new_type'];
    $new_price = $_POST['new_price'];
    

    $sql = 'insert into type_laundry(type_name,price) values("'.$new_type.'",'.$new_price.');';
    $result = $conn->query($sql);
    
    echo "<meta http-equiv='refresh' content='0'>";
}
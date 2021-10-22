<?php 
$sql = 'select * from  report;';
$result = $conn->query($sql);

if($result->num_rows >0 ){
    while($row = $result->fetch_assoc()){
        echo '
            <tr>
                <td>'.$row['customer_name'].'</td>
                <td>'.$row['type_name'].'</td>
                <td>'.$row['date_receive'].'</td>
                <td>'.$row['date_pay'].'</td>
                <td>'.$row['amount'].'</td>
            </tr>
        ';
    }
}
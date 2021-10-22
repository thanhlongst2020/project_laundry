<?php 
$sql = 'select * from  type_laundry order by id DESC';
$result = $conn->query($sql);

if($result->num_rows >0 ){
    while($row = $result->fetch_assoc()){
        echo '
            <tr id_type='.$row['id'].'>
                <td>'.$row['type_name'].'</td>
                <td>'.$row['price'].'</td>
                <td>
                    <button onclick="editType("2");" type="button" class="btn btn-warning btn-xs">Edit
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                    </button>
                </td>									
            </tr>
        ';
    }
}
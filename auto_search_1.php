<?php 
    require('database/Connection.php');
    // Mỗi trang hiển thị 5 entries nên $limit=5
    if(isset($_POST['limit'])){
        $limit = $_POST['limit'];
        // echo 'TEN';
    }
    else{
        $limit = 20;
        // echo 'FIVE';
    }
    

    // Nếu $_GET["page"] tồn tại thì trang đang đứng($page) bằng $_GET["page"]
    if(isset($_GET["page"])){
        $page = $_GET["page"];
    }
    // Ngược lại trang đang đứng mặc định bằng 1 
    else{
        $page = 1   ;
    }

    //Công thức tính $start_from
    $start_from = ($page -1)*$limit;

    // Hiển thị entries giới hạn trong khoảng từ  $start_from đến $limit
    $sql = 'select * from laundry where stats = 0 order by id desc ;';
    $result = $conn->query($sql);
?>
    
    <!-- Đoạn code dưới đây lòng PHP vào thẻ HTML, không phải sử dụng echo để hiển thị thẻ HTML -->
    <table id="myTable">
        <thead>
            <th >Name</th>
            <th >Country</th>
            <th >Name</th>
            <th >Country</th>
            <th >Name</th>
            <th >Country</th>
            <th >Name</th>
            <th >Country</th>
            
        </thead>
        <tbody>
            <!-- Lệnh vòng lặp trong PHP -->
            <?php 
                while($row = $result->fetch_assoc()){
            ?>

            <!-- Đoạn code HTML nằm ở đây sẽ lặp lại theo quy luật while của PHP -->
            <tr>
            <td class="check">
                <!-- Các biến nằm trong vòng lặp được lấy ra dùng -->
                <input type="checkbox" name="checkArr[]" value='<?php echo $row["id"] ?>'>
            </td>
            <td><?php echo $row["customer_name"] ?></td>
            <td><?php echo $row["priority"] ?></td>
            <td><?php echo $row["weight"] ?></td>
            <td><?php echo $row["type_name"] ?></td>
            <td><?php echo $row["date_receive"] ?></td>
            <td><?php echo $row["amount"] ?></td>
            <td>
                <button type="button" class="btn btn-warning btn-xs">Edit
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                </button>
            </td>
            </tr>
            <!-- Ngoặc đóng của while -->
            <?php 
            }
            ?>
        </tbody>
    </table>
    


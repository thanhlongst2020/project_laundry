<?php 
    require('database/Connection.php');
    // Mỗi trang hiển thị 5 entries nên $limit=5
    if(isset($_POST['limit'])){
        $limit = $_POST['limit'];
        echo 'TEN';
    }
    else{
        $limit = 10;
        echo 'FIVE';
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
    $sql = 'select * from  laundry  where stats = 0 order by id desc limit '.$start_from.','.$limit.';';
    $result = $conn->query($sql);
?>
    <!-- Đoạn code dưới đây lòng PHP vào thẻ HTML, không phải sử dụng echo để hiển thị thẻ HTML -->
    
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
    <td data-customer_name="<?php echo $row["customer_name"] ?>" 
        data-priority=<?php echo $row["priority"] ?>
        data-weight=<?php echo $row["weight"] ?>
        data-type_name="<?php echo $row["type_name"] ?>"
        data-id=<?php echo $row["id"] ?>>
        <button type="button" data-id="2"  class="btn btn-warning btn-xs edit_laundry">Edit
            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        </button>
    </td>
    </tr>
    <!-- Ngoặc đóng của while -->
    <?php 
    }
    ?>

<script>	
		$(document).ready(function (){
			$(".edit_laundry").click(function(){

                // Lấy giá trị data của thẻ cha của thẻ button có classname="edit_laundry"
                var customer_name = $(this).parent().attr("data-customer_name");
                var priority = $(this).parent().attr("data-priority");
                var weight = $(this).parent().attr("data-weight");
                var type_name = $(this).parent().attr("data-type_name");
                var id = $(this).parent().attr("data-id");

                // Lấy thẻ có className là "bg-modal-edit", set display thành flex
                document.querySelector('.bg-modal-edit').style.display='flex';
                
                // Set giá trị cho id trong Edit form
                $('.edit-id').val(id);

                // Set giá trị cho Customer name trong Edit form
                $('.edit-name').val(customer_name);

                // Set giá trị cho priority trong Edit form
                $('.edit-priority').val(priority);

                // Set giá trị cho weight trong Edit form
                $('.edit-weight').val(weight);

                // Set giá trị cho select box trong Edit form
                $('.edit-type').val(type_name);

		    })

            document.getElementById('close-edit').addEventListener('click',
            function(){
                document.querySelector('.bg-modal-edit').style.display='none';
            }
    )
        
		})
</script>
    


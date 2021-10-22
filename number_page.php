<?php require('database/Connection.php'); ?>
    <ul class="pagination">
        <!-- Đoạn code lồng vòng lặp của PHP với HTML -->
        <?php 
        if(isset($_POST['limit'])){
            $limit = $_POST['limit'];
            
        }
        else{
            $limit = 10;

        }
        // var_dump($_POST);
        $sql = 'select count(id) from laundry where stats = 0 ';
        $result = $conn->query($sql);
        $row = $result->fetch_row();
        $total_records = $row[0];
        // echo $total_records;
        $total_pages = ceil($total_records/$limit);

        if(!empty($total_pages)){
            // Đoạn code HTML sẽ được lặp lại $total_pages lần
            for($i=1; $i<=$total_pages; $i++){
                if($i==1){
        ?>
                    <!-- Thẻ li là button số trang 1,2,3..., khi được click sẽ kích hoạt lớp active -->
                    <li class="pageitem active" id=<?php echo 'li'.$i;?>>
                        <!-- javascript:void(0) được sử dụng để ngăn trình duyệt chuyển tiếp người dùng sang trang khác. 
                            Ngoài việc sử dụng href="javascript:void(0)" bạn cũng có thể sử dụng href="#" -->
                        <a href="JavaScript:Void(0);" data-id="<?php echo $i;?>" class="page-link" >
                            <!-- Số 1,2,3 -->
                            <?php echo $i;?>
                        </a>
                    </li>
                <?php } else { ?>
                    
                    <!-- Thẻ li là button số trang 1,2,3..., khi được click sẽ kích hoạt lớp active -->
                    <li class="pageitem" id=<?php echo 'li'.$i;?>>
                        <!-- javascript:void(0) được sử dụng để ngăn trình duyệt chuyển tiếp người dùng sang trang khác. 
                            Ngoài việc sử dụng href="javascript:void(0)" bạn cũng có thể sử dụng href="#" -->
                        <a href="JavaScript:Void(0);" class="page-link" data-id="<?php echo $i;?>">
                            <!-- Số 1,2,3 -->
                            <?php echo $i;?>
                        </a>
                    </li>

                <?php 
                } 											
            }
        } 
        ?>
    </ul>

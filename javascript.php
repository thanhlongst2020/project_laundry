<?php
?>
<!-- Set chức năng Javascript: hiện popup form khi nhấn nút New Laundry, ẩn form khi nhấn nút Close trên Popup form -->
<script>
    // Chức năng hiện popup form khi nhấn nút New Laundry
    document.getElementById('new_laundry').addEventListener('click',
        function(){
            document.querySelector('.bg-modal').style.display='flex';
            var x = document.querySelector('.modal-content');
            x.style.visibility='visible';
            x.style.transition = 'all 1s ease-out';
            
        }
    )

    // Chức năng ẩn form khi nhấn nút Close trên Popup form
    document.getElementById('close').addEventListener('click',
        function(){
            document.querySelector('.bg-modal').style.display='none';
            
        }
    )
    

</script>

<!-- Set chức năng collapse -->
<script>
    var coll = document.getElementsByClassName('collapsible');
    // var tes = document.querySelector('.contents');
    var i;

    // console.log(tes);
    
    for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener('click', function() {
        this.classList.toggle('actives');
        var contents = document.querySelector('.contents');
        // console.log(contents);
        if (contents.style.maxHeight){
        contents.style.maxHeight = null;
        } else {
        contents.style.maxHeight = '0px';
        } 
    });
    }
</script>

<!-- Set chức năng detete -->
<script>
    var coll = document.getElementsByClassName('remove');
    var i;
    
    for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener('click', function() {
        var contents = document.querySelector('.main');
        contents.style.maxHeight = '0px';
    });
    }
</script>

<!-- <script
  src='https://code.jquery.com/jquery-3.6.0.slim.js'
  integrity='sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY='
  crossorigin='anonymous'>
</script> -->



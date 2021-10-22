<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        if(isset($_POST['submit'])){
            if(!empty($_POST['checkArr'])){
            foreach($_POST['checkArr'] as $checked){
                echo $checked."</br>";
            }
            }
        }
    ?>
</head>
<body>
    <form action="" method="post">
    <label>
        Apple
        <input type="checkbox" name="checkArr[]" value="Apple">
    </label>
    <label>
        Banana
        <input type="checkbox" name="checkArr[]" value="Banana">
    </label>
    <label>
        Coconut
        <input type="checkbox" name="checkArr[]" value="Coconut">
    </label>
    <label>
        Blueberry
        <input type="checkbox" name="checkArr[]" value="Blueberry">
    </label>
    <input type="submit" name="submit" value="Choose options" />
    </form>
</body>
</html>
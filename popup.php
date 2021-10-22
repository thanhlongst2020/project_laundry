<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bg-modal{
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.7);
            opacity: 0.7;
            position: absolute;
            top: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            display: none;
        }
        .modal-content{
            width: 500px;
            height: 300px;
            background-color: white;
            border-radius: 4px;
            position: relative;
        }

        .close{
            position: absolute;
            top: 0;
            right: 14px;
            font-size: 30px;
            font-weight: bold;
            transform: rotate(45deg);
        }
        .close:hover{
            cursor: pointer;
            color: red;
        }
    </style>
</head>
<body>
    <div>
        <button id="btn">Add laundry</button>
    </div>
    <div class="bg-modal">
        <div class="modal-content">
            <div id="close" class="close">
                +
            </div>
        </div>
    </div>
    <script>
        document.getElementById('btn').addEventListener('click',
            function(){
                document.querySelector('.bg-modal').style.display='flex';
            }
        )
        document.getElementById('close').addEventListener('click',
            function(){
                document.querySelector('.bg-modal').style.display='none';
            }
        )
    </script>
</body>
</html>
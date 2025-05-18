<?php
include "connect.php";
echo "<h2>out put</h2>";
isset($_SERVER[$_POST])




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

    <label for=""> name</label>
    <input type="text" name="name" placeholder="ent name">
    <br><br><br>
    <label for=""> email</label>
    <input type="text" name="email" placeholder="ent email">
    <br><br><br>
    <label for="">phone</label>
    <input type="text" name="phone" placeholder="ent phone">
    <br><br>
    <button name="submit" onclick="change()">submit</button>




<!-- 
    </form>
    <script>
        function change(){
            document.body.style.backgroundColor="pink"
           
        }
    </script> -->

    
</body>
</html>
<?php
    $me = $_POST['name'];
    $pass = $_POST['pass'];
    $wel = "<h1>ようこそ</h1>"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    if($pass == "123456" and $me == "guest"){
        print $wel;
    }else{
        Header("Location:form.html");
    }
    
    ?>
</body>
</html>
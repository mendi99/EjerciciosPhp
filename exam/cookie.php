<html>
<head>
</head>
<body>
<?php
    if(isset($_POST["send"])){
        setcookie("UserName", $_POST["name"], time()+3600);
        header('Location: http://localhost/EjeciciosPhp/exam/index.php');
    }

?>
<form method="POST">
    <p>Give me your name<input type="text" name="name"></p>
    <input type="submit" name="send">
</form>
</body>

</html>
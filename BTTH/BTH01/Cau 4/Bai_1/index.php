<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý hoa</title>
</head>
<body>
    
</body>
</html>

<?php 
    include "./models/DBConfig.php";
    $db = new Database;
    $db-> connect();

    if(isset($_GET['controller'])){
        $controller = $_GET['controller'];
    }
    else {
        $controller = '';
    }

    switch($controller){
        case 'hoa':{
            require_once('./controllers/controller.php');
        }
    }
?>

<!-- admin chạy file http://localhost/BTTH/TH1/Bai_4/Bai_1/index.php?controller=hoa&action=list --> 
 <!-- member chạy file http://localhost/BTTH/TH1/Bai_4/Bai_1/view/members/index.php -->
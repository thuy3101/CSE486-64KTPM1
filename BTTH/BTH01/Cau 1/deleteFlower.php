<?php
require 'flower.php';
session_start();
if (isset($_SESSION['flowers']) && !empty($_SESSION['flowers']))
    $flowers = $_SESSION['flowers'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cửa hàng hoa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center text-primary mb-4">Xoá</h1>

        <form action="crud.php" method="POST" id="deleteFlowerForm">
            <!-- Hidden input để gửi chỉ mục hoa -->
            <input type="hidden" name="index" value="<?= $_GET['id']; ?>">

            <button type="submit" class="btn btn-danger">Xóa</button>
            <a href="admin.php" class="btn btn-secondary">Quay lại</a>
        </form>

    </div>

    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>
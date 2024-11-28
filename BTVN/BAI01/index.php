<?php
$products = [
 ['name' => 'Sản phẩm 1', 'price' => 1000],
 ['name' => 'Sản phẩm 2', 'price' => 2000],
 ['name' => 'Sản phẩm 3', 'price' => 3000]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-6.5.2-web/css/all.min.css">
    <title>Quản lý sản phẩm</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container-fluid">
        <?php include 'header.php'; ?> 

        <!-- Thêm mới -->
        <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#addModal">Thêm mới</button>

        <!-- Bảng sản phẩm -->
        <table class="table table-striped" id="productTable">
            <thead>
                <tr>
                    <th>Sản phẩm</th>
                    <th>Giá thành</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= htmlspecialchars($product['name']) ?></td>
                    <td><?= htmlspecialchars($product['price']) ?> VND</td>
                    <td><button class="btn btn-sm edit-btn text-primary"><i class="fas fa-pencil-alt"></i></button></td>
                    <td><button class="btn btn-sm delete-btn text-primary"><i class="fas fa-trash"></i></button></td>
                    
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <?php include 'footer.php'; ?>
    </div>
</body>
</html>
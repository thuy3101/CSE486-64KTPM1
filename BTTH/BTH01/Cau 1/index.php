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
</head>

<body>
    <?php include 'header.php'; ?>
    <main>
    <div class="container-fluid mt-4" >
        <h1 class="text-center mb-4 text-primary">Danh Sách Các Loài Hoa</h1>
                <table class="table">
                    <thead class="text-center">
                    <tr>
                        <th>STT</th>
                        <th>Image</th>
                        <th>Decription</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    static $dem = 0;
                    foreach ($flowers as $index => $flower) : ?>
                        <tr>
                            <td><?= ++$dem?></td>
                            <td><img src="<?php echo $flower['image']; ?>" width="200px" alt="" ></td>
                            <td><?php echo $flower['description']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
        
    </div>

    <?php include 'footer.php'; ?>
    <script src="./bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

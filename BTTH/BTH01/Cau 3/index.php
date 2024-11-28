<?php
        // Đường dẫn tới file CSV
		$filename = "./sinhvien.csv";
        // Mảng chứa dữ liệu sinh viên
		$sinhvien = [];
        
		// Kiểm tra nếu tệp CSV có thể mở được
		if (file_exists($filename) && ($handle = fopen($filename, "r")) !== FALSE) {
			
			$bom = fread($handle, 3);
			if ($bom == "\xEF\xBB\xBF") {
				 // Đọc dòng đầu tiên (tiêu đề)
				$headers = fgetcsv($handle, 1000, ",");
			} else {
				rewind($handle); // Đưa con trỏ về đầu tệp
				$headers = fgetcsv($handle, 1000, ",");
			}

			// Kiểm tra nếu có dữ liệu tiêu đề
			if ($headers !== FALSE) {
				// Đọc từng dòng dữ liệu và thêm vào mảng
				while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

					// Nếu dữ liệu không đầy đủ, bỏ qua dòng đó
					if (count($data) === count($headers)) {
						$sinhvien[] = array_combine($headers, $data);
					}
				}
			}

			fclose($handle); 
		} else {
			echo "<div class='alert alert-danger' role='alert'>Không thể mở tệp CSV hoặc tệp không tồn tại.</div>";
		}

		?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
        <h1 class="text-center mb-4">Danh sách sinh viên</h1>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Họ</th>
                    <th>Tên</th>
                    <th>City</th>
                    <th>Email</th>
                    <th>Khóa học</th>
                </tr>
            </thead>
			<tbody>
				<?php
				// Hiển thị dữ liệu sinh viên từ mảng
				if (!empty($sinhvien)) {
					foreach ($sinhvien as $sv) {
						$username = isset($sv['username']) ? $sv['username'] : 'N/A';
						$password = isset($sv['password']) ? $sv['password'] : 'N/A';
						$lastname = isset($sv['lastname']) ? $sv['lastname'] : 'N/A';
						$firstname = isset($sv['firstname']) ? $sv['firstname'] : 'N/A';
						$city = isset($sv['city']) ? $sv['city'] : 'N/A';
						$email = isset($sv['email']) ? $sv['email'] : 'N/A';
						$course1 = isset($sv['course1']) ? $sv['course1'] : 'N/A';

						echo "<tr>";
						echo "<td>{$username}</td>";
						echo "<td>{$password}</td>";
						echo "<td>{$lastname}</td>";
						echo "<td>{$firstname}</td>";
						echo "<td>{$city}</td>";
						echo "<td>{$email}</td>";
						echo "<td>{$course1}</td>";
						echo "</tr>";
					}
				} else {
					echo "<tr><td colspan='7' class='text-center'>Không có dữ liệu để hiển thị</td></tr>";
				}
				?>
			</tbody>
		</table>
	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>


</html>
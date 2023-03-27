<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="POST" action="process.php" enctype="multipart/form-data">
		Nhập Tên: <input type="text" name="ten">
		<br>
		Ngày Sinh
		<input type="date" name="ngay_sinh">
		<br>
		Mật khẩu
		<input type="password" name="mat_khau">
		<br>
		Giới tính
		<input type="radio" name="gioi_tinh" checked value="Nam">Nam
		<input type="radio" name="gioi_tinh" value="Nữ">Nữ
		<br>
		Sở thích
		<select name="so_thich">
			<option value="1">Kinh dị</option>
			<option value="2">Hài hước</option>
			<option value="3">Trinh thám</option>
			<option value="4">Hành động</option>
		</select>
		<br>
		Giới thiệu bản thân
		<textarea name="gioi_thieu_ban_than"></textarea>
		<br>
		<button >GoGo</button>
	</form>
</body>
</html>

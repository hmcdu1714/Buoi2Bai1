<?php  
$ten = $_POST['ten'];
echo 'Bạn đã nhập tên : '.$ten.'<br>';
$ngay_sinh = $_POST['ngay_sinh'];
echo 'Ngày sinh của bạn là : '.$ngay_sinh.'<br>';

$mat_khau = $_POST['mat_khau'];
echo 'Mật khẩu của bạn là : '.$mat_khau.'<br>' ;

$gioi_tinh = $_POST['gioi_tinh'];
echo 'Giới tính của bạn là : '.$gioi_tinh.'<br>' ;

$so_thich = $_POST['so_thich'];
switch ($so_thich) {
	case '1':
		$so_thich="Kinh dị";
		break;
	case '2':
		$so_thich="Hài hước";
		break;
	case '3':
		$so_thich="Trinh thám";
		break;
	case '4':
		$so_thich="Hành động";
		break;
	default:
		// code...
		break;
}
echo 'Bạn có sở thích là : '.$so_thich.'<br>';

$gioi_thieu_ban_than = $_POST['gioi_thieu_ban_than'];
echo 'Mô tả về bạn : '.$gioi_thieu_ban_than.'<br>' ;

// $anh_dai_dien = $_POST['anh_dai_dien'];
// echo '<img src="'.$anh_dai_dien.'">';



$target_dir = "uploads/";
$target_file = $target_dir.basename($_FILES["anh_dai_dien"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

?>
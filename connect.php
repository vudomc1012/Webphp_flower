
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "Myflower";

	$connect = mysqli_connect($servername,$username,$password,$database);
	if(!$connect){
        // echo '<script>alert("Kết nối thất bại ! !")</script>';
	}
    else{
		// echo '<script>alert("Kết nối thành công ! !")</script>';
   //header("location: http://localhost:8012/Homepage.php");
}
// if(isset($_GET['detail'])){
// 	$IDflower = $_GET['detail'];
// 	$connect -> query("SELECT FROM myflower WHERE IDflower = $IDflower");
// 	header("Location: https://hoayeuthuong.com/?ref=awd_shop%20hoa&gclid=Cj0KCQiAj4ecBhD3ARIsAM4Q_jHXMxa5UFgjPKGsPAPtOXKsDsVoBB5Eet6CRh1bTj7g8qPwvwP7M6QaAuUbEALw_wcB");
// }
if(isset($_GET['delete'])){
	$IDflower = $_GET['delete'];
	$connect -> query("DELETE FROM Myflower WHERE IDflower = $IDflower");
	header("location: viewdata.php");
}
?>

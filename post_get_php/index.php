<h4>POST METHOD</h4><hr>
<form action="" method="post"> <!-- action de trong tat la gui vao file index.php hien tai-->
	<label>Ho va ten: </label>
	<input type="text" name="hovaten" value=""><br>
	<label>Nam sinh: </label>
	<input type="number" name="namsinh">
	<input type="submit" name="submit" value="Gửi"> <!-- Thong tin duoc day len file index.php, phuong phap nay an toan hon voi check login-->
</form>
<h4>GET METHOD</h4><hr>
<form action="" method="get"> <!-- Thong tin duoc gui len URL-->
	<label>Ho va ten: </label>
	<input type="text" name="hovaten" value=""><br>
	<label>Nam sinh: </label>
	<input type="number" name="namsinh">
	<input type="submit" name="submit" value="Gửi">
</form>
<hr>

<?php
if (isset($_POST['submit'])) { //isset de kiem tra xem co click vao button submit chua
	$hovaten = $_POST['hovaten'];
	$namsinh = $_POST['namsinh'];
	echo "Ban da POST: ".$hovaten." sinh nam ".$namsinh; //In du lieu
}
if (isset($_GET['submit'])) {
	$hovaten = $_GET['hovaten'];
	$namsinh = $_GET['namsinh'];
	echo "Ban da GET: ".$hovaten." sinh nam ".$namsinh;  //In du lieu
}

?>
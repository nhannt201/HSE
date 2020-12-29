<h4>POST METHOD</h4><hr>
<form action="/test/design.php" method="post"> <!-- action de trong tat la gui vao file index.php hien tai-->
	<label>Ho va ten: </label>
	<input type="text" name="hovaten" value=""><br>
	<label>Nam sinh: </label>
	<input type="number" name="namsinh"><br>
	<input type="url" value="https://i.imgur.com/3pSQSEg.jpeg" name="link">
	<input type="submit" name="submit" value="Gửi"> <!-- Thong tin duoc day len file index.php, phuong phap nay an toan hon voi check login-->
</form>
<h4>GET METHOD</h4><hr>
<form action="" method="get"> <!-- Thong tin duoc gui len URL-->
	<label>Ho va ten: </label>
	<input type="text" name="hovaten" value=""><br>
	<label>Nam sinh: </label>
	<input type="number" name="namsinh">
	<input type="submit" name="submit" value="Gửi"> <!--Bấm vô nút này nè, ở method GET nó gửi dữ liệu qua link như-->
	<!-- ?hovaten=Trung+Nhan&namsinh=1999&submit=Gửi Mấy cái đó là cái name của input + với giá trị của inpux là value --> 
	<!-- Nó khác với cái POST METHOD là , POST nó nhận dữ liệu luôn, mỗi lần gửi sẽ file xác nhận như vậy ne-->
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
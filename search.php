<!DOCTYPE html>
<html lang="vi">
<head>
  <title><?php echo $_GET['q']." - Tìm với Nhà ngay"; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  .img-fluid {
      position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
.search {
	padding-top: 5px;
	background-color: #fff;
	height: 50px;
}
body {
	padding-top: 25px;
}
.img_logo {
	margin-right: auto;
    margin-left: auto;
}


#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: blue;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
  </style>
</head>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
	
<div class="border fixed-top search container">
	<form method="get" action="search" id="search_q" >
		<div class="form-group row">
			<div class="col-sm-4 pt-1"><a href="/"><img  class="img_logo" src="./images/logo.png" width="90px"/></a>
			 <div class="input-group-btn">
			  <button class="btn btn-default" type="submit">
				<i class="glyphicon glyphicon-search"></i>
			  </button>
			</div>
			</div>
			<div class="col-sm-8 ">
				<input id="search" class="form-control" name="q" type="text" value="<?php echo $_GET['q']; ?>" placeholder="Bạn muốn tìm phòng trọ ở đâu?" >
				  <div class="input-group-btn">
				  <button class="btn btn-default" type="submit">
					<i class="glyphicon glyphicon-search"></i>
				  </button>
				</div>
			</div>
		</div>
	</form>
</div>
<div class="container pt-1 my-1">

 <div class="row">
  <div class="col-4 my-3 pt-1 border">
  <!--NC-->

        <!-- Search Widget - Cần thêm tuỳ chọn quận để tìm kiếm chính xác hơn-->


        <!-- Categories Widget -->
    <div class="mb-5">   

        <h2 class="grid-title"><i class="fa fa-filter"></i> Bộ lọc</h2>
        <!-- END SEARCH INPUT -->
        <hr>
        <!-- BEGIN FILTER BY SERVICE -->
			<!--<h5>Loại chỗ ở</h5>
			<div class="checkbox">
				<label><input name="hp-advanced-search-room-type" type="checkbox" class="icheck" value="0"> Ký túc xá</label>
			</div>
			<div class="checkbox">
				<label><input name="hp-advanced-search-room-type" type="checkbox" class="icheck" value="1"> Phòng trọ</label>
			</div>
			<div class="checkbox">
				<label><input name="hp-advanced-search-room-type" type="checkbox" class="icheck" value="2"> Căn hộ dịch vụ</label>
			</div><hr>-->
        <!-- END FILTER BY SERVICE -->
        
        <!-- BEGIN FILTER BY AREA -->
        <h5>Chọn theo khu vực</h5>
        <select class="form-control" id="sl-province" name="sl-province">
            <option value="" >Tỉnh/Thành phố</option>
            <option value="79" selected="">Thành phố Hồ Chí Minh</option>
        </select>
        <select class="form-control ml-0 my-2" id="district" onChange="redictQ(this);">>
            <option class="" value="1">Quận 1</option>
			<option class="" value="2">Quận 2</option>
            <option class="" value="3">Quận 3</option>
			 <option class="" value="4">Quận 4</option>
            <option class="" value="5">Quận 5</option>
            <option class="" value="6">Quận 6</option>
			 <option class="" value="7">Quận 7</option>
			  <option class="" value="8">Quận 8</option>
			 <option class="" value="9">Quận 9</option>
			 <option class="" value="10">Quận 10</option>
            <option class="" value="11">Quận 11</option>
            <option class="" value="12">Quận 12</option>
            <option class="" value="13">Quận Thủ Đức</option>         
            <option class="" value="14">Quận Gò Vấp</option>
            <option class="" value="15">Quận Bình Thạnh</option>
            <option class="" value="16">Quận Tân Bình</option>
            <option class="" value="17">Quận Tân Phú</option>
            <option class="" value="18">Quận Phú Nhuận</option>
            <option class="" value="19">Quận Bình Tân</option>
            <option class="" value="20">Huyện Củ Chi</option>
            <option class="" value="21">Huyện Hóc Môn</option>
            <option class="" value="22">Huyện Bình Chánh</option>
            <option class="" value="23">Huyện Nhà Bè</option>
            <option class="" value="24">Huyện Cần Giờ</option>
        </select>
		<hr>
		<h5>Chọn theo khoảng giá</h5>
        <select class="form-control" id="" name="">
            <option value="0">Tất cả</option>
			<option value="1">Dưới 3 triệu</option>
			<option value="2">Từ 3 đến 5 triệu</option>
			<option value="3">Từ 5 đến 7 triệu</option>
        </select>
		<hr>
		<h5>Chọn theo trang</h5>
        <select class="form-control" id="typesite">
			<?php
			if (isset($_GET['type'])) {
				$type = trim($_GET['type']);
				switch($type) {
					case 0:
						echo '<option value="0" selected>Tất cả</option>
							<option value="1">nha.chotot.com</option>
							<option value="2">batdongsan.com.vn</option>
							<option value="3">muaban.net</option>';
						break;
					case 1:
						echo '<option value="0">Tất cả</option>
							<option value="1" selected>nha.chotot.com</option>
							<option value="2">batdongsan.com.vn</option>
							<option value="3">muaban.net</option>';
						break;
					case 2:
						echo '<option value="0">Tất cả</option>
							<option value="1">nha.chotot.com</option>
							<option value="2" selected>batdongsan.com.vn</option>
							<option value="3">muaban.net</option>';
						break;
					case 3:
						echo '<option value="0">Tất cả</option>
							<option value="1">nha.chotot.com</option>
							<option value="2">batdongsan.com.vn</option>
							<option value="3" selected>muaban.net</option>';
						break;
					default:
						echo '<option value="0" selected>Tất cả</option>
							<option value="1">nha.chotot.com</option>
							<option value="2">batdongsan.com.vn</option>
							<option value="3">muaban.net</option>';
				}
			} else {
				echo '<option value="0" selected>Tất cả</option>
							<option value="1">nha.chotot.com</option>
							<option value="2">batdongsan.com.vn</option>
							<option value="3">muaban.net</option>';
			}
			
			?>
        </select>
  <!--END_NC-->
  </div> </div>
  <div class="col-8 my-3 border">
  <div id="result" class="pt-3">
  </div>
  </div>
</div>
</div>
<script type="text/javascript">
	setTimeout(function(){ clickSearch(); }, 1);

		function clickSearch() {
			var get_keyword = "<?=$_GET['q'] ?>";
			document.getElementById("result").innerHTML = "<div class='row text-center'>Kết quả tìm kiếm cho '"+get_keyword+"'...</div>";
			url_read = "";
			if (getParameterByName('type')) {
				url_read = getParameterByName('type');
			} else {
				url_read = "0";
			}
			readTextFile("/back_end/?q=" + get_keyword + "&type=" + url_read, function(text){
			var data = JSON.parse(text); //Lấ kết quả search JSON
			//console.log(data);
			document.getElementById("result").innerHTML = '<div class="alert alert-success">\
  <strong>Đã tìm thấy ' + data.length + ' kết quả!!</strong>\
</div>';
			data.forEach(printResult); //Đưa vào vòng lặp và in ra
			
		});
		}
		//Print result
		function printResult(item, index) {
		 // document.getElementById("demo").innerHTML += index + ":" + item + "<br>"; 
		  document.getElementById("result").innerHTML +=  '<!--Block-->'+
'        <div class="row">'+
'            <div class="col-lg-4 mt-4">'+
'                <img class="img-fluid rounded" src="' +item['image']+ '" alt="' +item['title']+ '">'+
'            </div>'+
'            <div class="col-lg-7 mt-4">'+
'                <div>'+
'                  '+
'                  <div class="card-body">'+
'                    <h4 class="card-title">' +item['title']+ '</h4>'+
'					<p class="lead">' +item['district']+ '</p>'+
'                    <p class="card-text">' +item['price']+ '</p>'+
'					<a href="'+item['link']+'" target="_blank" class="btn btn-primary float-right">Xem chi tiết</a>' +
'                  </div>'+
'				'+
'               '+
'            </div>'+
'        </div>'+
'      </div>'+
'      <hr>  <!--End block-->';
		}		
		
	
	
		
		document.getElementById('typesite').addEventListener('change', function (e) {
		  //if (e.target.value === "0") {
			 window.location.replace('/search?q=' + getParameterByName('q').replaceAll( ' ', '+') + '&type=' + e.target.value);
		//  }
		 
		});
		
		function redictQ(idd) { 
			 if (!getParameterByName('type')) {
			   window.location.replace('/search?q=' + idd.options[idd.selectedIndex].text.replaceAll( ' ', '+') + '&type=all');
		  } else {
			   window.location.replace('/search?q=' + idd.options[idd.selectedIndex].text.replaceAll( ' ', '+') + '&type=' + getParameterByName('type'));
		  }
		}
		
		
	</script>
	<script src="/js/json.js" type="text/javascript"></script>
	<script>
	//Get the button
	var mybutton = document.getElementById("myBtn");

	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		mybutton.style.display = "block";
	  } else {
		mybutton.style.display = "none";
	  }
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
	  document.body.scrollTop = 0;
	  document.documentElement.scrollTop = 0;
	}
	</script>
</body>
</html>
<html>
  <head>
   <title>Nhà Ngay!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="nhannt201">
    <link href="https://fonts.googleapis.com/css?family=Arial" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/main.css" rel="stylesheet" />
	
	<style>
		.main_title {
			font-size: 30px;
			text-align: center;
			padding: 20px;
		}
.ui-autocomplete {
    top: 100%;
    left: 0;
    z-index: 1000;
    float: left;
    display: none;
    min-width: 160px;   
    padding: 4px 0;
    margin: 0 0 10px 25px;
    list-style: none;
    background-color: #d9f1e3;
    border-color: #fff;
    border-color: rgba(0, 0, 0, 0.2);
    border-style: solid;
    border-width: 1px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    -webkit-background-clip: padding-box;
    -moz-background-clip: padding;
    background-clip: padding-box;
    *border-right-width: 2px;
    *border-bottom-width: 2px;
	padding-top: 5px;
	
}

.ui-menu-item > a.ui-corner-all {
    display: block;
    padding: 3px 15px;
    clear: both;
    font-weight: normal;
    line-height: 18px;
    color: #555555;
    white-space: nowrap;
    text-decoration: none;
}

.ui-state-hover, .ui-state-active {
    color: #ffffff;
    text-decoration: none;
    background-color: #0088cc;
    border-radius: 0px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    background-image: none;
}

	</style>
	<script src="http://code.jquery.com/jquery-1.6.2.js"></script>
     <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.14/jquery-ui.min.js"></script>
  </head>
  <body>
    <div class="s130">
	
      <form method="get" action="search" id="search_q" ><div class="main_title"><!--CÔNG CỤ TÌM KIẾM PHÒNG TRỌ--><img src="./images/logo.png" width="380px"/></div>	
        <div class="inner-form">
			
          <div class="input-field first-wrap">
            <div class="svg-wrapper">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
              </svg>
            </div>
            <input id="search" name="q" type="text" placeholder="Bạn muốn tìm phòng trọ ở đâu?" >
			  <div class="svg-wrapper">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z"/></svg>
            </div>
          </div>

        </div>
		<div class="btn-s2">
            <button class="btn-search" onClick='document.getElementById("search_q").submit();' type="button">Tìm ngay</button>
         
        <!--<span class="info">Ví dụ: Bình Thạnh, Đại học Văn Lang, Cầu Sài Gòn</span>-->
      </form>
</div>
 
    </div>
   <!--<script type="text/javascript">
	 $( function() {
    var availableTags = [
		"ActionScript",
		"AppleScript",
		"Asp",
		"BASIC",
		"C",
		"C++",
		"Clojure",
		"COBOL",
		"ColdFusion",
		"Erlang",
		"Fortran",
		"Groovy",
		"Haskell",
		"Java",
		"JavaScript",
		"Lisp",
		"Perl",
		"PHP",
		"Python",
		"Ruby",
		"Scala",
		"Scheme"];
    $( "#search" ).autocomplete({
		maxResults: 5,
      source: function(request, response) {
        var results = $.ui.autocomplete.filter(availableTags, request.term);
        
        response(results.slice(0, this.options.maxResults));
    }
    });
	
  } );
   </script>-->
  </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $title ?></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

 	<link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>assets/css/header-fixed.css"> 
</head>
<body>
<header class="header-fixed">
	<div class="header-limiter">
		<!-- <h1><a href="#"><span>BabyFirst</span></a></h1> -->
		<a href="<?php echo base_url()?>index.php"><img src="<?php echo base_url(); ?>assets/img/title/titlekategori.png" class="img-fluid d-block mx-auto"></a>
		<nav>
			<span>
				<a href="<?php echo base_url()?>index.php/c_akun">My Account</a>
				<a href="#">Cart</a>
				<a onclick="openNav()">Categories</a>
				<a onclick="location.href = '<?php echo site_url('c_akun/logout') ?>';" >Logout</a>
			</span>

		</nav>
	</div>

</header>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="<?php echo base_url()?>index.php/c_product/carseat">Carseat</a>
  <a href="<?php echo base_url()?>index.php/c_product/fashion">Fashion</a>
  <a href="<?php echo base_url()?>index.php/c_product/shoes">Shoes</a>
  <a href="<?php echo base_url()?>index.php/c_product/stroller">Stroller</a>
</div>

<div class="header-fixed-placeholder"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

<script>
	$(document).ready(function(){

		var showHeaderAt = 150;

		var win = $(window),
				body = $('body');

		// Show the fixed header only on larger screen devices

		if(win.width() > 400){

			// When we scroll more than 150px down, we set the
			// "fixed" class on the body element.

			win.on('scroll', function(e){

				if(win.scrollTop() > showHeaderAt) {
					body.addClass('fixed');
				}
				else {
					body.removeClass('fixed');
				}
			});

		}

	});
</script>


</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<script
	  src="https://code.jquery.com/jquery-3.3.1.js"
	  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	  crossorigin="anonymous"></script>
      <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>assets/css/carousel.css"> 
	<title></title>
</head>
<body>

 <?php
if ($this->session->flashdata('alert')=='sukses_insert'){
    echo "<script>alert('Sukses Insert Data');</script>";
}else if ($this->session->flashdata('alert')=='sukses_edit'){
    echo "<script>alert('Sukses Edit Data');</script>";
}else if ($this->session->flashdata('alert')=='sukses_hapus'){
    echo "<script>alert('Sukses Hapus Data');</script>";
}

?> 
  <!-- horizontal line -->


<header style="background-color: #ffd1d1 ">
      <img class="img-fluid d-block mx-auto" src="<?php echo base_url(); ?>assets/img/title/titlekategori.png" alt="">
</header>
  <div align="center" class="row">
    <div class="col" style="width: 100%;"><hr></div>
  </div>
<section class="section-white">
<div class="container">    
     <!-- carousel slide -->
     <div id="demo" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      
      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
         <img  class="img-fluid" src="<?php echo base_url(); ?>assets/img/img-product/img-baju/2.jpg" alt="baju">
         <div class="carousel-caption">
            <a style="text-decoration: none;" href="<?php echo base_url()?>index.php/c_product/fashion"><h2>Fashion</h2></a>
         </div>
       </div>
       
       <div class="carousel-item">
         <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/img-product/img-shoes/2.jpg" alt="sepatu">
          <div class="carousel-caption">
            <a style="text-decoration: none;" href="<?php echo base_url()?>index.php/c_product/shoes"><h2>Shoes</h2></a>
          </div>
       </div>
       <div class="carousel-item">
         <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/img-product/img-carseat/1.jpg" alt="Carseat">
          <div class="carousel-caption">
            <a style="text-decoration: none;" href="<?php echo base_url()?>index.php/c_product/carseat"><h2>Carseat</h2></a>
          </div>
       </div>
     </div>
     
     <!-- Left and right controls -->
     <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>	
</div>
</section>

 
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/reset.css"> 

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/css/v_product.css">





</head>
<body>

<div class="container-fluid" style="padding-top: 15px;">
	<div class="row">
		<?php
		    $numOfCols = 4;
			$rowCount = 0;
			$bootstrapColWidth = 12 / $numOfCols;
			$no=1;
			foreach ($product as $prd) {
		?>

		<div class="cd-item col-md-<?php echo $bootstrapColWidth; ?>">
						<div class="kat-pilih">
							<img src="<?php echo base_url(); ?>assets/img/img-product/img-carseat/<?php echo $prd['img']; ?>" style="max-width: auto; max-height: auto;">
							<h6> <?php echo $prd['name']; ?></h6>
							<h6>Rp. <?php echo $prd['price']; ?>  </h6>
								<button id="hoam" class='btn btn-block my-cart-btn'>
											Add to cart
								</button>

						</div>
						   
		</div>
		<?php
		 $rowCount++;
    	if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
		};
	?>	
	</div>

</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Product</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

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
							<img src="<?php echo base_url(); ?>assets/img/img-product/img-<?php echo $prd['Category']; ?>/<?php echo $prd['img']; ?>" style="max-width: auto; max-height: auto;">
							<h6> <?php echo $prd['name']; ?></h6>
							<h6>Rp. <?php echo $prd['price']; ?>  </h6>
							<input type="number" name="quantity" id="<?php echo $prd['ID']; ?>" value="1" class="quantity form-control">
								<button id="hoam" class="add_cart btn btn-block my-cart-btn"
								data-produkid="<?php echo $prd['ID']; ?>"
								data-produknama="<?php echo $prd['name']; ?>"
								data-produkharga="<?php echo $prd['price']; ?> ">
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
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-2.2.3.min.js'?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.add_cart').click(function(){
            var produk_id    = $(this).data("produkid");
            var produk_nama  = $(this).data("produknama");
            var produk_harga = $(this).data("produkharga");
            var quantity     = $('#' + produk_id).val();
            $.ajax({
                url : "<?php echo base_url();?>index.php/cart/add_to_cart",
                method : "POST",
                data : {produk_id: produk_id, produk_nama: produk_nama, produk_harga: produk_harga, quantity: quantity},
                success: function(data){
                    $('#detail_cart').html(data);
                }
            });
        }); 	
    });
</script>

<!-- Indah Ayu NF_1301164004 -->
<?php
    $this->load->view('footer');
?>
</body>
</html>
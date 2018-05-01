<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
      <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>assets/css/footer.css"> 

  <title></title>
</head>
<body>
  <!-- Modal Telepon -->

  <div class="modal fade" id="telepon" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Baby First</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p>Need more information?</p>
        <p>Call me!</p>
        <img src="<?php echo base_url(); ?>assets/img/img-about/contact.png" height="50px" width="50px">0812345678
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    
  </div>
</div>

<!-- Modal Sosmed -->
<div class="modal fade" id="sosmed" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Baby First</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p>Need more information about us?</p>
        <p>Search me!</p>
        <img src="<?php echo base_url(); ?>assets/img/img-about/email.png" height="50px" width="50px">cs@babyfirst.co<br>
        <img src="<?php echo base_url(); ?>assets/img/img-about/fb.png" height="50px" width="50px">Baby First<br>
        <img src="<?php echo base_url(); ?>assets/img/img-about/g+.png" height="50px" width="50px">+Baby First<br>
        <img src="<?php echo base_url(); ?>assets/img/img-about/ig.png" height="50px" width="50px">babyfirst<br>
        <img src="<?php echo base_url(); ?>assets/img/img-about/twitter.png" height="50px" width="50px">@babyfirst
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div> 
  </div>
</div>

<!-- Modal Store -->
<div class="modal fade" id="store" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Baby First</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p>Need more information about us?</p>
        <p>Search me!</p>
        <img src="<?php echo base_url(); ?>assets/img/img-about/toko.png" height="50px" width="50px">Jl Banda Aceh no 23A, Bandung, Jawa Barat, Indonesia
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Payment -->
<div class="modal fade" id="payment" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Baby First</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <h5>Langkah Pembayaran</h5>
        <p>1. Tambahkan produk ke keranjang</p>
        <p>2. Klik checkout</p>
        <p>3. Pilih metode pembayaran</p>
        <p>4. Klik Konfirmasi</p>
        <p>5. Periksa kembali pesanan anda</p>
        <p>6. Lalu buat pesanan</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


  <footer class="footer row">
    <div class="container mt-3">
      <div class="row ">
        <div class="col text-center">
          <p class="social-icons-header">
            <a data-toggle="modal" data-target="#telepon"><img src="<?php echo base_url(); ?>assets/img/img-about/phone.png" height="40px" align="center"></a>
            <a data-toggle="modal" data-target="#sosmed"><img src="<?php echo base_url(); ?>assets/img/img-about/socmed.png" height="40px" align="center"></a>
            <a data-toggle="modal" data-target="#store"><img src="<?php echo base_url(); ?>assets/img/img-about/store.png" height="40px" align="center"></a>
            <a data-toggle="modal" data-target="#payment"><img src="<?php echo base_url(); ?>assets/img/img-about/payment.png" height="40px" align="center"></a>  
          </p>
          <p style="font-size: 10px;" align="center">Copyright @ BabyFirst</p>
        </div>
      </div>
    </div>
  </div>
</footer>

</body>
</html>
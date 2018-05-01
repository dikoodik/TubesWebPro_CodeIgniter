<?php

//2. disini tampilkan flashdata dari controller
if ($this->session->set_flashdata('alert')=='berhasil_daftar') {
     echo "<script>alert('Daftar berhasil');</script>";
} elseif ($this->session->set_flashdata('alert')=='gagal_login') {
    echo "<script>alert('Daftar gagal');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>assets/css/login.css">
    <link rel = "stylesheet" type = "text/js" 
         href = "<?php echo base_url(); ?>assets/js/login.js">
</head>
<body>
    
  <!-- Indah Ayu NF_1301164004 -->
    <?php $atribut = array(
        'class' => 'login-page'
    );?>
    <?php
        echo form_open("c_akun/cek_login",$atribut);
    ?>
    <div class="login-page">
      <div class="form">
        <form class="login-form">
          <input type="text" placeholder="username" required name="username" />
          <input type="password" placeholder="password" required name="password" />
          <button>login</button>
          <a href="<?php echo site_url('c_akun/v_regist') ?>" class="txt3">
                        Create acount
            </a>
        </form>
      </div>
    </div>
    

</body>
</html>

<!-- Indah Ayu NF_1301164004 -->
<?php
$this->load->view('footer'); ?>
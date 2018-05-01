<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
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
                'class' => 'login100-form validate-form p-l-55 p-r-55 p-t-178'
    );?>
    <?php
        echo form_open("c_akun/daftar_akun",$atribut);
        echo "<center>".$this->session->flashdata('info')."</center><br>";
    ?>

    <div class="login-page">
      <div class="form">
        <form class="login-form">
            <input type="text" placeholder="Name" required name="nama" />
            <input type="text" placeholder="username" required name="username" />
            <input type="text" placeholder="Email" required name="email" />
            <input type="password" placeholder="password" required name="password" />
            <input type="text" placeholder="Address" required name="alamat" />
            <button>Regist</button>
            <a href="<?php echo site_url('c_akun/index') ?>" class="txt3">
                        Login Now
                    </a>
        </form>
      </div>
    </div>



</body>
</html>

<!-- Indah Ayu NF_1301164004 -->
<?php
$this->load->view('footer'); ?>
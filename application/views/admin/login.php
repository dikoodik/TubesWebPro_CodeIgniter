<?php
$this->load->view('admin/header');
//2. disini tampilkan flashdata dari controller
if ( $this->session->set_flashdata('alert')== 'berhasil_daftar') {
     echo "<script>alert('Berhasil Daftar!');</script>";
} elseif( $this->session->set_flashdata('alert')== 'gagal_login') {
    echo "<script>alert('Gagal Daftar!');</script>";
}
?>

<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <?php $atribut = array(
                'class' => 'login100-form validate-form p-l-55 p-r-55 p-t-178'
            );?>
            <?php
            echo form_open("admin_C/cek_login",$atribut);
            ?>
					<span class="login100-form-title">
						Login Admin
					</span>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                    <input class="input100" type="text" required name="username" placeholder="Username">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Please enter password">
                    <input class="input100" type="password" required name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                </div>

                <br>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Sign in
                    </button>
                </div>
                <div style="height: 55px">
                    
                </div>
            </form>
        </div>
    </div>
</div>

<?php
$this->load->view('admin/footer'); ?>
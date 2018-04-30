<?php
$this->load->view('head');
//2. disini tampilkan flashdata dari controller
if ($this->session->set_flashdata('alert')=='berhasil_daftar') {
     echo "<script>alert('Daftar berhasil');</script>";
} elseif ($this->session->set_flashdata('alert')=='gagal_login') {
    echo "<script>alert('Daftar gagal');</script>";
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
            echo form_open("c_akun/cek_login",$atribut);
            //2.            isi dengan form_open ke controller Akun_C dengan method cek_login
            ?>
                    <span class="login100-form-title">
                        Login
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

                <div class="flex-col-c p-t-170 p-b-40">
                        <span class="txt1 p-b-9">
                            Ga Punya Akun?
                        </span>

                    <a href="<?php echo site_url('c_akun/v_regist') ?>" class="txt3">
                        Daftar Dulu Sekarang
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
$this->load->view('footer'); ?>
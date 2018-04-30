<?php
$this->load->view('admin/header');
?>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <?php $atribut = array(
                'class' => 'login100-form validate-form p-l-55 p-r-55 p-t-178'
            );?>
            <?php
            echo form_open("admin_C/daftar_akun",$atribut);
            echo "<center>".$this->session->flashdata('info')."</center><br>";
            ?>
					<span class="login100-form-title">
						Daftar
					</span>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter ID">
                    <input class="input100" type="text" required name="id" placeholder="ID">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                    <input class="input100" type="text" required name="username" placeholder="Username">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email">
                    <input class="input100" type="email" required name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Please enter password">
                    <input class="input100" type="password" required name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter name">
                    <input class="input100" type="text" required name="name" placeholder="Name">
                    <span class="focus-input100"></span>
                </div>

                <br>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Daftar
                    </button>
                </div>
                <div style="height: 55px">
                    
                </div>
            </form>
        </div>
    </div>
</div>

<?php
//disini load view footer
$this->load->view('admin/footer'); ?>
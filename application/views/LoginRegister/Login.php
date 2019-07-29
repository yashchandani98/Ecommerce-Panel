<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('LoginRegister/vw_header');
?>
<head>
<title>Dealer Login</title>
</head>
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="<?=base_url()?>">
                                <img src="<?=base_url()?>assets/admin/images/logo.jpg" alt="E-Commerce">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="<?=base_url()?>dealer/loginCheck" method="post">
                                <div class="form-group">
                                    <label>Dealer Id</label>
                                    <input class="au-input au-input--full" type="number" name="dealerid" placeholder="ex:960667">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="pwd" placeholder="Password">
                                </div>
                                <!-- <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div> -->
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                                <!-- <div class="social-login-content">
                                    <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20">sign in with facebook</button>
                                        <button class="au-btn au-btn--block au-btn--blue2">sign in with twitter</button>
                                    </div>
                                </div> -->
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="../Dealer/Register">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('LoginRegister/vw_footer');?>
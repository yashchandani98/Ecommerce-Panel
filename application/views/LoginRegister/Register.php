<<<<<<< HEAD
<style>
.page-wrapper{
    overflow: auto !important;
}
</style>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('LoginRegister/vw_header');
?>
<head>
<title>Dealer Register</title>
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
                            <form action="<?=base_url()?>dealer/register" method="post">
                                <div class="form-group">
                                    <label>Dealer Name</label>
                                    <input class="au-input au-input--full" type="text" name="dealername" placeholder="Dealer Name">
                                </div>
                                <div class="form-group">
                                    <label>Business Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Business Name</label>
                                    <input class="au-input au-input--full" type="text" name="businessName" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Business Category</label>
                                    <select class="au-input au-input--full" id="businesscategory" name="businesscategory">
                                        <?php
                                        if(isset($business_details)){
                                            echo "<option value='0'>-----Select-----</option>";
                                            foreach($business_details as $row){
                                                echo "<option value='.$row->Pk_id.'>".$row->Name."</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>City</label>
                                    <select class="au-input au-input--full" id="city" name="city">
                                        <?php
                                        if(isset($city_details)){
                                            echo "<option value='0'>-----Select-----</option>";
                                            foreach($city_details as $row){
                                                echo "<option value='.$row->Pk_id.'>".$row->City_name."</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Business Phone</label>
                                    <input class="au-input au-input--full" type="number" name="phone" placeholder="Phone goes here">
                                </div>
                                <div class="form-group">
                                    <label>Pan</label>
                                    <input class="au-input au-input--full" type="text" name="pan" placeholder="Pan goes here">
                                </div>
                                <div class="form-group">
                                    <label>GST</label>
                                    <input class="au-input au-input--full" type="text" name="gst" placeholder="GST goes here">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <!-- <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="aggree">Agree the terms and policy
                                    </label>
                                </div> -->
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>
                                <!-- <div class="social-login-content">
                                    <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20">register with facebook</button>
                                        <button class="au-btn au-btn--block au-btn--blue2">register with twitter</button>
                                    </div>
                                </div> -->
                            </form>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="../Dealer/Login">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('LoginRegister/vw_footer');?>
    <script>
    // $(".animsition").css({"overflow":"visible"});
=======
<style>
.page-wrapper{
    overflow: auto !important;
}
</style>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('LoginRegister/vw_header');
?>
<head>
<title>Dealer Register</title>
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
                            <form action="<?=base_url()?>dealer/register" method="post">
                                <div class="form-group">
                                    <label>Dealer Name</label>
                                    <input class="au-input au-input--full" type="text" name="dealername" placeholder="Dealer Name">
                                </div>
                                <div class="form-group">
                                    <label>Business Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Business Name</label>
                                    <input class="au-input au-input--full" type="text" name="businessName" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Business Category</label>
                                    <select class="au-input au-input--full" id="businesscategory" name="businesscategory">
                                        <?php
                                        if(isset($business_details)){
                                            echo "<option value='0'>-----Select-----</option>";
                                            foreach($business_details as $row){
                                                echo "<option value='.$row->Pk_id.'>".$row->Name."</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>City</label>
                                    <select class="au-input au-input--full" id="city" name="city">
                                        <?php
                                        if(isset($city_details)){
                                            echo "<option value='0'>-----Select-----</option>";
                                            foreach($city_details as $row){
                                                echo "<option value='.$row->Pk_id.'>".$row->City_name."</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Business Phone</label>
                                    <input class="au-input au-input--full" type="number" name="phone" placeholder="Phone goes here">
                                </div>
                                <div class="form-group">
                                    <label>Pan</label>
                                    <input class="au-input au-input--full" type="text" name="pan" placeholder="Pan goes here">
                                </div>
                                <div class="form-group">
                                    <label>GST</label>
                                    <input class="au-input au-input--full" type="text" name="gst" placeholder="GST goes here">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <!-- <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="aggree">Agree the terms and policy
                                    </label>
                                </div> -->
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>
                                <!-- <div class="social-login-content">
                                    <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20">register with facebook</button>
                                        <button class="au-btn au-btn--block au-btn--blue2">register with twitter</button>
                                    </div>
                                </div> -->
                            </form>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="../Dealer/Login">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('LoginRegister/vw_footer');?>
    <script>
    // $(".animsition").css({"overflow":"visible"});
>>>>>>> 3015471eb805ce11df823647f8848c9cd7c70ca9
    </script>
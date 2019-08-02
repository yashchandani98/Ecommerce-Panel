<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('main/aside');
$this->load->view('main/header');
?>
<br/><br/><br/><br/><br/>
<div class="container" style="background-color: white;">
    <div class="row">
        <!-- edit form column -->
        <div class="col-lg-4 text-lg-center">
            <h2>Edit Profile</h2>
        </div>
        <div class="col-lg-8">
            <!-- <div class="alert alert-info alert-dismissable"> <a class="panel-close close" data-dismiss="alert">×</a>
                This is an <strong>.alert</strong>. Use this to show important messages to the user.
            </div> -->
        </div>
        <div class="col-lg-8 push-lg-4 personal-info">
             <form role="form">
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Dealer name</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" value="<?=$this->session->userdata('Dealer_name')?>"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Business name</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" value="<?=$this->session->userdata('Business_name')?>" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Email</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="email" value="<?=$this->session->userdata('Email')?>" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Phone</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" value="<?=$this->session->userdata('Phone')?>" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Pan</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" value="<?=$this->session->userdata('Pan_card')?>" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">GST</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" value="<?=$this->session->userdata('Gst_numbber')?>"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"></label>
                    <div class="col-lg-6">
                        <input class="form-control" type="text" value="" placeholder="City" />
                    </div>
                    <div class="col-lg-3">
                        <input class="form-control" type="text" value="" placeholder="State" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Time Zone</label>
                    <div class="col-lg-9">
                        <select id="user_time_zone" class="form-control" size="0">
                            <option value="Hawaii">(GMT-10:00) Hawaii</option>
                            <option value="Alaska">(GMT-09:00) Alaska</option>
                            <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                            <option value="Arizona">(GMT-07:00) Arizona</option>
                            <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                            <option value="Central Time (US &amp; Canada)"
                            selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                            <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                            <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Username</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" value="janeuser" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Password</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="password" value="11111122333" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Confirm password</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="password" value="11111122333" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"></label>
                    <div class="col-lg-9">
                        <input type="reset" class="btn btn-secondary" value="Cancel" />
                        <input type="button" class="btn btn-primary" value="Save Changes" />
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-4 pull-lg-8 text-xs-center">
                <img src="//placehold.it/150" class="m-x-auto img-fluid img-circle" alt="avatar" />
                <h6 class="m-t-2">Upload a different photo</h6>
                <label class="custom-file">
                  <input type="file" id="file" class="custom-file-input">
                  <span class="custom-file-control">Choose file</span>
                </label>
        </div>
    </div>
</div>
<hr/>
<?php
$this->load->view('main/footer');
?>
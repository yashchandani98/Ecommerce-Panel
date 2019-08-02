<<<<<<< HEAD
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © <?=date('Y')?> Ecommerce. All rights reserved. Template by <a href="<?=base_url()?>">Ecommerce</a>.</p>
                                </div>
                            </div>
                        </div>
                        <?php
                        $this->load->view('LoginRegister/vw_footer');
=======
<?php
$msg = '';
$error_class = '';
$hint_text = '';
if ($this->session->flashdata("success") != "") {
    $msg = $this->session->flashdata("success");
    $error_class = 'alert-success';
    $hint_text = 'Success';
} else if ($this->session->flashdata("error") != "" || (validation_errors() != "")) {
    $msg = ($this->session->flashdata("error") ? $this->session->flashdata("error") : validation_errors());
    $error_class = 'alert-danger';
    $hint_text = 'Error';
}
?>
<br/><br/><br/>
<div class="err-msg2" style="position: absolute;right: 0px;top: 56px;z-index: 1; <?php echo (!empty($msg) ? 'display:block;' : 'display:none;'); ?>">
    <div class="alert <?php echo $error_class; ?>"  >
        <!-- <a href="#" data-dismiss="msg_div" class="close" id="close_cross" aria-label="close" style="text-decoration: none;position: absolute;top: 1px;right: 6px;opacity: 0.4;">&times;</a> -->
        <strong><?php echo $hint_text; ?>! </strong> <?php echo $msg; ?>
    </div>
</div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © <?=date('Y')?> Ecommerce. All rights reserved. Template by <a href="<?=base_url()?>">Ecommerce</a>.</p>
                                </div>
                            </div>
                        </div>
                        <?php
                        $this->load->view('LoginRegister/vw_footer');
>>>>>>> 3015471eb805ce11df823647f8848c9cd7c70ca9
                        ?>
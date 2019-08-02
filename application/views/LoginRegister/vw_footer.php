<<<<<<< HEAD
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
<div class="err-msg2" style="position: absolute;right: 0px;top: 56px;z-index: 1; <?php echo (!empty($msg) ? 'display:block;' : 'display:none;'); ?>">
    <div class="alert <?php echo $error_class; ?>"  >
        <!-- <a href="#" data-dismiss="msg_div" class="close" id="close_cross" aria-label="close" style="text-decoration: none;position: absolute;top: 1px;right: 6px;opacity: 0.4;">&times;</a> -->
        <strong><?php echo $hint_text; ?>! </strong> <?php echo $msg; ?>
    </div>
</div>
    <script src="<?=base_url()?>assets/admin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?=base_url()?>assets/admin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?=base_url()?>assets/admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?=base_url()?>assets/admin/vendor/slick/slick.min.js">
    </script>
    <script src="<?=base_url()?>assets/admin/vendor/wow/wow.min.js"></script>
    <script src="<?=base_url()?>assets/admin/vendor/animsition/animsition.min.js"></script>
    <script src="<?=base_url()?>assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?=base_url()?>assets/admin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?=base_url()?>assets/admin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?=base_url()?>assets/admin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?=base_url()?>assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?=base_url()?>assets/admin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?=base_url()?>assets/admin/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?=base_url()?>assets/admin/js/main.js"></script>

</body>

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
<div class="err-msg2" style="position: absolute;right: 0px;top: 56px;z-index: 1; <?php echo (!empty($msg) ? 'display:block;' : 'display:none;'); ?>">
    <div class="alert <?php echo $error_class; ?>"  >
        <!-- <a href="#" data-dismiss="msg_div" class="close" id="close_cross" aria-label="close" style="text-decoration: none;position: absolute;top: 1px;right: 6px;opacity: 0.4;">&times;</a> -->
        <strong><?php echo $hint_text; ?>! </strong> <?php echo $msg; ?>
    </div>
</div>
    <script src="<?=base_url()?>assets/admin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?=base_url()?>assets/admin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?=base_url()?>assets/admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?=base_url()?>assets/admin/vendor/slick/slick.min.js">
    </script>
    <script src="<?=base_url()?>assets/admin/vendor/wow/wow.min.js"></script>
    <script src="<?=base_url()?>assets/admin/vendor/animsition/animsition.min.js"></script>
    <script src="<?=base_url()?>assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?=base_url()?>assets/admin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?=base_url()?>assets/admin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?=base_url()?>assets/admin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?=base_url()?>assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?=base_url()?>assets/admin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?=base_url()?>assets/admin/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?=base_url()?>assets/admin/js/main.js"></script>

</body>

>>>>>>> 3015471eb805ce11df823647f8848c9cd7c70ca9
</html>
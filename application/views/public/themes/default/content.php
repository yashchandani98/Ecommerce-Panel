<<<<<<< HEAD
<?php
if (isset($page)) {
    if (isset($module)) {
        $this->load->view("$module/$page");
    } else {
        $this->load->view($page);
    }
}
=======
<?php
if (isset($page)) {
    if (isset($module)) {
        $this->load->view("$module/$page");
    } else {
        $this->load->view($page);
    }
}
>>>>>>> 3015471eb805ce11df823647f8848c9cd7c70ca9
?>
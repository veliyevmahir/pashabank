<?php
if(isset($_SESSION['user_login']) == FALSE){
    redirect(base_url('Home/login'));
}
?>

<link rel="stylesheet" href="<?php echo base_url('assets/style/user.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/style/uikit.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/style/uikit.min.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/style/uikit-rtl.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/style/uikit-rtl.min.css') ?>">
<script src="<?php echo base_url('assets/javascript/uikit.js'); ?>"></script>
<script src="<?php echo base_url('assets/javascript/uikit.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/javascript/uikit-icons.js'); ?>"></script>
<script src="<?php echo base_url('assets/javascript/uikit-icons.min.js'); ?>"></script>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/js/user.js'); ?>"></script>







<div uk-sticky class="uk-navbar-container tm-navbar-container uk-active uk-light">
    <div class="uk-container uk-container-expand">
        <nav uk-navbar>
            <div class="uk-navbar-left">
                <a id="sidebar_toggle" class="uk-navbar-toggle" uk-navbar-toggle-icon></a>
                <a href="#" class="uk-navbar-item uk-logo">
                    İstifadəçi Panel
                </a>
            </div>
        </nav>
    </div>
</div>
<?php $user_data = $this->session->userdata('user_data'); ?>
<div id="sidebar" class="tm-sidebar-left uk-background-default">
    <center>
        <div class="user">
            <img id="avatar" width="100" class="uk-border-circle" src="<?php if($user_data[0]['c_image'] != 'default_profile.jpg'){
                echo base_url('upload/Customer/'.$user_data[0]['c_image']);
            }else{
                echo base_url('upload/'.$user_data[0]['c_image']);
            }  

            ?>" />
            <div class="uk-margin-top"></div>
            <h3 class="uk-text-truncate"><?php echo $user_data[0]['c_name'].' '.$user_data[0]['c_surname'] ?></h3>
            <div id="email" class="uk-text-truncate"><?php echo $user_data[0]['c_email'] ?> <br>
                <span id="status" class="uk-margin-top uk-label uk-label-success">Aktİv</span>
<span id="status" class="uk-margin-top uk-label uk-label-danger"><a style="color: white" href="<?php echo base_url('Action/logout'); ?>">Çıxış</a></span>
             </div>
            
        </div>
        <br />
    </center>
    <ul class="uk-nav uk-nav-default">

        <li class="uk-nav-header">
          İdarəetmə
        </li>
        <li><a href="<?php echo base_url('User/'); ?>">Müraciət göndər</a></li>
        <li><a href="<?php echo base_url('User/all_request'); ?>">Müraciətlərim</a></li>

    </ul>
</div>
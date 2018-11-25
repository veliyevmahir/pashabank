<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pasha Bank - Giriş</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>style/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>style/login.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
<div class="login-screen">
  <div class="left-item">
    <div class="login-panel">
      <div class="inner-login-panel">
        <div class="content-panel">
          <h3 class="title">Daxil ol</h3>
          <form action="<?php echo base_url('Action/login'); ?>" method="post">
            <input name="emailornumber" type="text" placeholder="Mobil nömrə daxil edin" />
            <input name="password" type="password" placeholder="Şifrə daxil edin" />
            <button type="submit" value="daxil olun">Daxil olun</button><hr>
            <!-- <a href="<?php echo base_url('Home/register'); ?>">Hesab yarat</a><br> -->
            <a href="<?php echo base_url('Welcome/'); ?>">Aylıq Hesab al</a>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="right-item">
    <div class="slider-panel">
      <div class="inner-slider-panel">
        <h3>
          <?php if($this->session->userdata('success_register')){
            echo $this->session->userdata('success_register');
            $this->session->unset_userdata('success_register');
          } ?>


          <?php if($this->session->userdata('failed_login')){
            echo $this->session->userdata('failed_login');
            $this->session->unset_userdata('failed_login');
          } ?>


        </h3>

        
        <p>Hesabınıza keçmək üçün daxil olun.</p>
      </div>
    </div>
  </div>

</div>
  
</body>
</html>

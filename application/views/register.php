<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pasha Bank - Qeydiyyat</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>style/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>style/register.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
<div class="login-screen">
  <div class="left-item">
    <div class="login-panel">
      <div class="inner-login-panel">
        <div class="content-panel">
          <h3 class="title">Hesab yarat</h3>
          <form action="<?php echo base_url('Action/register'); ?>" method="POST" enctype="multipart/form-data">
            <input name="name" type="text" placeholder="Adınız" />
            <input name="surname" type="text" placeholder="Soyadınız" />
            <input name="email" type="text" placeholder="E-mail" />
            <input name="mobile" type="text" placeholder="Telefon nömrəsi" />
            <input name="fincode" type="text" placeholder="Şəxsiyyət Fin-kod">
            <br><br>
            <label for="">Şəkil</label>
            <input name="image" type="file" placeholder="Şəkil">
            <input name="password" type="password" placeholder="Şifrə" />
            <button type="submit" value="register">Qeyidiyyatdan keçin</button><hr>
            <p style="display: inline-block;">Hesabınız var ?</p><a href="<?php echo base_url('Home/login'); ?>"> Daxil olun.</a>
          </form>
        </div>
      </div>
    </div>
  </div>


  <div class="right-item">
    <div class="slider-panel">
      <div class="inner-slider-panel">
        <h3>
          <?php if($this->session->userdata('failed_register')){
            echo $this->session->userdata('failed_register');
            $this->session->unset_userdata('failed_register');
          } ?>
        </h3>
        <p>Hesab yaratmaq üçün qeydiyyatdan keçin.</p>
      </div>
    </div>
  </div>

</div>
  
</body>
</html>

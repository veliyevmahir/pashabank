<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>style/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>style/form.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
<div class="login-screen" style="height: 700px;margin-top: -350px">
  <div class="left-item">
    <div class="login-panel">
      <div class="inner-login-panel">
        <div class="content-panel">
          <h3 class="title">Müracİət formu</h3>
          <form action="<?php echo base_url('User/send_form'); ?>" method="POST">
            <input required name="title" style="padding: 5px" type="text" placeholder="Başlıq" />
            <input required name="fincode" style="padding: 5px" type="text" placeholder="Fincode" />
            <input required name="phone" style="padding: 5px" type="text" placeholder="Mobil nömrə" />
            <input required name="email" style="padding: 5px" type="text" placeholder="E-poçt" />
            <textarea style="padding: 5px" placeholder="Məzmun" name="desc" id="about" cols="51" rows="10"></textarea>
            <div class="checkbox">
              <label>
                <a class="btn btn-default" style="border: none;background: #51326A;padding: 5px;color: white" href="<?php echo base_url('Welcome'); ?>">Aylıq Abunə</a>
                <span title="Aylıq Abunə olduqda göndərdiyiniz müraciətlər yalnız Pasha Bank tərəfindən görülür.">?</span>
              </label>
            </div>
        <!--  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div> -->
            <button class="sendbutton" type="submit" value="daxil olun">Göndər</button><hr>
            
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
  
</body>
</html>

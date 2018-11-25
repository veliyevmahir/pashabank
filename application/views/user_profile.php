<?php $this->load->view('user_left_menu'); ?>

<div class="content-padder content-background">
    <!-- <div class="uk-section-small uk-section-default header">
        <div class="uk-container uk-container-large">
            <p>
                Müraciət göndər
            </p>
        </div>
    </div> -->
    <div class="uk-section-small">
        <div class="uk-container uk-container-large">
            <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-2@m uk-child-width-1-4@xl">
           

<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
<style>
    #cke_about{
        width: 650px;
    }
</style>

<div class="login-screen">
  <div class="left-item">
    <div class="login-panel">
      <div class="inner-login-panel">
        <div class="content-panel">
          <h3 class="title">Müraciət formu</h3>
          <form action="<?php echo base_url('User/send_request'); ?>" method="POST">
            <input name="r_title" style="padding: 10px;width: 650px;"  type="text" placeholder="Başlıq" /><br><br>
            <textarea style="padding-left: 10px;padding-top: 10px;width: 650px" placeholder="Məzmun" name="textarea1" id="about" cols="51" rows="10"></textarea>
                <script>
                    CKEDITOR.replace( 'textarea1' );
                </script>
           <br>
            <button class="sendbutton" type="submit" value="Göndər" style="border: none;background: #1E87F0;color: white;padding: 10px">Göndər</button><hr>
            
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

            </div>
          
        </div>
    </div>
</div>
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
table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 15px;
}
</style>

<div class="login-screen">
  <div class="left-item">
    <div class="login-panel">
      <div class="inner-login-panel">
        <div class="content-panel">
          <h3 class="title">Bütün müraciətlərim</h3>


        <table style="width: 800px">
              <tr>
                <th>№</th>
                <th>Müraciət başlığı</th>
                <th>Müraciət Hal Statusu</th>
                <th>Əlavə olunma tarixi</th>
              </tr>

            <?php $m=0; foreach($all_request as $all_request_key){ $m++; ?>
              <tr>
                <td><?php echo $m; ?></td>
                <td><?php echo $all_request_key['r_title'] ?></td>
                <td><?php if($all_request_key['r_status'] == 0){ echo 'Baxılmadı'; }elseif( $all_request_key['r_status'] == 1 ){ echo "Baxıldı"; }elseif($all_request_key['r_status'] == 2){ echo 'Rədd edildi'; }elseif($all_request_key['r_status'] == 3){ echo 'Qəbul edildi'; } ?></td>
                <!-- <td><?php if($all_request_key['r_vip_status'] == 1){ echo 'VİP istifadəçi'; }else{ echo 'Normal İstifadəçi'; } ?></td> -->
                <td><?php echo $all_request_key['r_create_date'] ?></td>
              </tr>
            <?php } ?>

        </table>


        </div>
      </div>
    </div>
  </div>
</div>

            </div>
          
        </div>
    </div>
</div>
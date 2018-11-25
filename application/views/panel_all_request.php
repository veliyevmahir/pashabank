<?php $this->load->view('panel_left_menu'); ?>
  
  <!-- Content Area -->
  <div id="content-area">
    
    <?php foreach($all_all_request as $all_all_request_key){ ?>
      <div class="message-row">
        <img width="40px" height="40px" src="<?php  echo base_url('upload/default_profile.jpg'); ?>">
        <span class="sender-name"><?php echo $all_all_request_key['c_name'].' '.$all_all_request_key['c_surname'] ?></span></br>
        <span class="message"><span class="label blue-label label-left"><?php echo $all_all_request_key['r_create_date'] ?></span><strong><?php echo $all_all_request_key['r_title'] ?></strong> <?php echo $all_all_request_key['r_desc']; ?> <br>
        <hr>
        <a style="background: grey;color: white;padding: 3px" class="btn btn-primary" href="<?php echo base_url('Panel/delete/'.$all_all_request_key['r_id']); ?>">Ləğv et </a> <a style="background: grey;color: white;padding: 3px" class="btn btn-primary" href="<?php echo base_url('Panel/success/'.$all_all_request_key['r_id']); ?>"> Təsdiqlə</a>
         </span>
      </div>
    <?php } ?>


  </div>
  <!-- End Content Area -->
</div>

<?php $this->load->view('panel_left_menu'); ?>
  
  <!-- Content Area -->
  <div id="content-area">
    
    <?php foreach($all_new_request as $all_new_request_key){ ?>
      <div class="message-row">
       <img width="40px" height="40px" src="<?php  echo base_url('upload/default_profile.jpg'); ?>">
        <span class="sender-name"><?php echo $all_new_request_key['c_name'].' '.$all_new_request_key['c_surname'] ?></span></br>
        <span class="message"><span class="label blue-label label-left"><?php echo $all_new_request_key['r_create_date'] ?></span><strong><?php echo $all_new_request_key['r_title'] ?></strong> <?php echo substr($all_new_request_key['r_desc'], 0,200).'...'; ?> </span>
      </div>
    <?php } ?>


  </div>
  <!-- End Content Area -->
</div>

<div id="credit">
  <p>Based on Dribbble by Victor Erixon</p>
</div>
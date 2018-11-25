<link rel="stylesheet" href="<?php echo base_url('assets/style/panel.css'); ?>">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div id="main-container">
  <!-- Menus -->
  <a id="logo" href="#">Pasha Bank</a>
  <div id="top-menu">
    <div id="top-menu-left">
      <a href="<?php echo base_url('Panel'); ?>"><span class="menu-item active">Müraciətlər</span></a>
      <a id="new-ticket" href="#">Cavab göndər <i class="fa fa-envelope" aria-hidden="true"></i></a>
    </div>
<!--     <div id="top-menu-right">
      <a href="#"><span class="menu-item"><i class="fa fa-search fa-lg" aria-hidden="true"></i></span></a>
      <a href="#"><span class="menu-item"><i class="fa fa-cog fa-lg" aria-hidden="true"></i></span></a>
      <a href="#"><span class="menu-item"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></span></a>
      <a href="#"><span class="menu-item"><i class="fa fa-sign-out fa-lg" aria-hidden="true"></i></span></a>
    </div> -->
  </div>
  <!-- End Menus -->

  <?php 

  $data_new_request = $this->db->where('r_status',0)->get('request')->result_array(); 
  $data_seen_request = $this->db->where('r_status',1)->get('request')->result_array(); 
  $data_accepted_request = $this->db->where('r_status',3)->get('request')->result_array(); 
  $data_removed_request = $this->db->where('r_status',2)->get('request')->result_array(); 
  $data_all_request = $this->db->get('request')->result_array(); 
  $data_all_payment = $this->db->get('orders')->result_array(); 

  ?>
  
  <!-- Left Column -->
  <div id="left-column">
    <div class="vertical-menu">
      <a href="<?php echo base_url('Panel/panel_all_news'); ?>" class="highlight"><i class="fa fa-inbox fa-lg" aria-hidden="true"></i> Müraciətlər <span class="num"><?php echo count($data_all_request); ?></span></a>
      <a href="<?php echo base_url('Panel/panel_new_request'); ?>" class="side-menu-item active">Yeni <span class="num"><?php echo count($data_new_request); ?></span></a>
      <a href="<?php echo base_url('Panel/panel_seen_request'); ?>" class="side-menu-item">Baxılmış <span class="num"><?php echo count($data_seen_request); ?></span></a>
      <a href="<?php echo base_url('Panel/panel_accepted_request'); ?>" class="side-menu-item">Qəbul olunmuş <span class="num"><?php echo count($data_accepted_request); ?></span></a>
      <a href="<?php echo base_url('Panel/panel_removed_request'); ?>" class="side-menu-item">Rədd olunmuş <span class="num"><?php echo count($data_removed_request); ?></span></a>
      <a href="<?php echo base_url('Panel/payments'); ?>" class="side-menu-item">Ödəmələr<span class="num"><?php echo count($data_all_payment); ?></span></a>

      <!-- <a href="#" class="menu-icon active"><i class="fa fa-file-text fa-lg" aria-hidden="true"></i> Inquires <span class="num">10</span></a>
      <a href="#" class="menu-icon active"><i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i> New Inbox <span class="num"></span></a> -->
    </div>
  </div>
  <!-- End Left Column -->
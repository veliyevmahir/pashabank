<?php $this->load->view('panel_left_menu'); ?>
  
  <!-- Content Area -->
  <div id="content-area" style="overflow: scroll;">
    <style>

      tr,th,td{
        font-size: 12px;
        text-align: center;
        border: 1px solid grey;
      }
    </style>
    

      <table style="overflow: scroll;width: 250px">
        <tr>
          <th>Name</th>
          <th>email</th>
          <th>card_num</th>
          <th>card_cvc</th>
          <th>card_exp_month</th>
          <th>card_exp_year</th>
          <th>card_brand</th>
          <th>item_number</th>
          <th>item_price</th>
          <th>item_price_currency</th>
          <th>payment_status</th>
          <th>created</th>
          <th>modified</th>
        </tr>

          <?php foreach($all_payments as $all_payments_key){ ?>
            <tr>
              <td><?php echo $all_payments_key['name']; ?></td>
              <td><?php echo $all_payments_key['email']; ?></td>
              <td><?php echo $all_payments_key['card_num']; ?></td>
              <td><?php echo $all_payments_key['card_cvc']; ?></td>
              <td><?php echo $all_payments_key['card_exp_month']; ?></td>
              <td><?php echo $all_payments_key['card_exp_year']; ?></td>
              <td><?php echo $all_payments_key['card_brand']; ?></td>
              <td><?php echo $all_payments_key['item_number']; ?></td>
              <td><?php echo $all_payments_key['item_price']; ?></td>
              <td><?php echo $all_payments_key['item_price_currency']; ?></td>
              <td><?php echo $all_payments_key['payment_status']; ?></td>
              <td><?php echo $all_payments_key['created']; ?></td>
              <td><?php echo $all_payments_key['modified']; ?></td>
            </tr>
          <?php } ?>


      </table>


  </div>
  <!-- End Content Area -->
</div>

<div id="credit">
  <p>Based on Dribbble by Victor Erixon</p>
</div>
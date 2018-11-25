<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    
	<title>Stripe Gateway Integration | Codeigniter</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />    

    <!-- jQuery is used only for this example; it isn't required to use Stripe -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/bootstrap.min.js" />
	
</head>
<body style="background: #51326A;color: white;">


<br><br>

    <!-- Begin page content -->
    <div class="container">
        <div class="row mt-3">
            <!-- <div class="col-sm-4"></div> -->
            <div class="col-4 mx-auto">
                <div class="card" style="text-align: center;">
                    <img class="card-imgs-top" src="https://cdn.dribbble.com/users/411286/screenshots/2619563/desktop_copy.png" alt="Card image cap" width="349" height="250">
                    <div class="card-block" style="padding: 20px;">
                        <h4 class="card-title">Uğurla ödənildi . E-poçtanızı yoxlayın.</h4>
                        <p class="card-text">Aylıq abunə ödənişi uğurla qəbul edildi</p>
                        <a href="<?php echo site_url('Home/login'); ?>" class="btn btn-primary btn-sm float-right">Giriş</a>
                    </div>
                </div>
            </div>
        </div>
    </div> 

  </body>
</html>

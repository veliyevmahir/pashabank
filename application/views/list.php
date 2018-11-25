
<style>
	body {
  background: #f5f5f5;
  font-family: 'Roboto', sans-serif;
  color: rgba(0, 0, 0, 0.87);
  letter-spacing: .005em;
}

h1 {
  font-weight: 200;
}

.align-middle, .card .card-header :not(.material-icons) {
  vertical-align: middle;
}

.card {
  position: relative;
  border-radius: 2px;
  background: #fff;
  box-sizing: border-box;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
}
.card * {
  box-sizing: border-box;
}
.card.active {
  z-index: 2;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23) !important;
}
.card hr {
  padding: 0;
  margin: 0;
}
.card .card-header,
.card .card-main,
.card .card-footer {
  padding: 1.15em 1.5em;
}
.card .card-header .card-title {
  margin: 0;
  font-size: 20px;
  line-height: 20px;
  display: inline-block;
}

.card-list {
  padding: 0;
  list-style-type: none;
}
.card-list .card {
  cursor: pointer;
  border-radius: 0;
}
.card-list .card:first-child {
  border-top-left-radius: 2px;
  border-top-right-radius: 2px;
}
.card-list .card:last-child {
  border-bottom-left-radius: 2px;
  border-bottom-right-radius: 2px;
}
.card-list .card.active {
  margin: 1em -1em !important;
  border-radius: 2px;
}
.card-list .card.active .card-inner {
  max-height: 500px;
}
.card-list .card:hover {
  z-index: 1;
  box-shadow: 0 0 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
}
.card-list .card .card-inner {
  transition: max-height 1s cubic-bezier(0.25, 0.8, 0.25, 1);
  max-height: 0;
  overflow: hidden;
}

.expander {
  position: fixed;
  right: 25px;
  bottom: 25px;
  border: none;
  color: #000;
  margin: 0;
  min-width: 64px;
  padding: 0 16px;
  display: inline-block;
  font-size: 14px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 0;
  overflow: hidden;
  will-change: box-shadow;
  transition: box-shadow 0.2s cubic-bezier(0.4, 0, 1, 1), background-color 0.2s cubic-bezier(0.4, 0, 0.2, 1), color 0.2s cubic-bezier(0.4, 0, 0.2, 1);
  outline: none;
  cursor: pointer;
  text-decoration: none;
  text-align: center;
  line-height: 36px;
  vertical-align: middle;
  background: #ff4081;
  color: #fff;
  z-index: 999;
  border-radius: 50%;
  font-size: 24px;
  height: 56px;
  margin: auto;
  min-width: 56px;
  width: 56px;
  padding: 0;
  overflow: hidden;
  box-shadow: 0 1px 1.5px 0 rgba(0, 0, 0, 0.12), 0 1px 1px 0 rgba(0, 0, 0, 0.24);
  line-height: normal;
}
.expander:active {
  box-shadow: 0 4px 5px 0 rgba(0, 0, 0, 0.14), 0 1px 10px 0 rgba(0, 0, 0, 0.12), 0 2px 4px -1px rgba(0, 0, 0, 0.2);
}
.expander .material-icons {
  vertical-align: middle;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-12px, -12px);
  transform: translate(-12px, -12px);
  line-height: 24px;
  width: 24px;
}

.fade {
  opacity: 0;
}

</style>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<br><br>
<div class="container" style="position: relative;">
	<a href="<?php echo base_url('Home/form'); ?>" class="btn btn-primary btn-sm">Müraciət Göndər</a>
	<!-- <div> -->
	<a href="<?php echo base_url('Home/login'); ?>" class="btn btn-primary btn-sm" style="position: absolute;right: 15px">Giriş</a>
	<!-- </div> -->
	<br><br>
	<div class="row">

		<?php foreach($all_request as $all_request_key){ ?>
		<div class="col-lg-12" style="margin-bottom: 20px">
			<div class="card">
				<div class="card-header">
					<h2 class="card-title"><?php echo $all_request_key['r_title'] ?></h2>
					<!-- <a href="#" class="pull-right"><i class="material-icons">more_vert</i></a> -->
				</div>
				<div class="card-inner">
					<hr>
					<div class="card-main">
						<?php echo $all_request_key['r_desc'] ?>
					</div>
					<hr/>
					<div class="card-footer">
						<a href="#">
							Ətraflı
						</a>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>

	</div>
</div>


	<script>
		var $card = $('.card');
for (var i = 0; i < 4; i ++) {
	$card.clone().appendTo('.card-list'); // clone some examples!
}


$('.card-list .card').click(function() {	
	$(this).toggleClass('active');
});

$('.expander').click(function() {
	$(this).find('.material-icons').toggleClass('fade');
	$('.card-list .card').toggleClass('active');
})
	</script>
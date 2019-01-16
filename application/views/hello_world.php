<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to My First CodeIgniter Aplication</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/hello_world.css">

</head>
<body>

<div id="Container">
	<h1>Hello Friends</h1>

	<div id="body">
		<p class="ii">Welcome to My Profile!</p>

		<img src="assets/15.jpg">

		<p >NISN : 0014975104</p>

		<p >Name	: Firda Reinika</p>

		<p>Address 	: Sawojajar, Malang</p>

		<p>School 		: SMK Telkom Malang </p>

		<p>Phone 		: 082272440698</p>

		<p>Email 		: firda_reinika_26rpl@studentsmktelkom-mlg.sch.id<p>

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>
</body>
</html>
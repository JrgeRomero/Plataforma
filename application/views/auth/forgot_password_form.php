<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'class' => 'input100',
	'placeholder' => 'Usuario o correo',
);
if ($this->config->item('use_username', 'tank_auth')) {
	$login_label = 'Usuario o Correo';
} else {
	$login_label = 'usuario o correo';
}
?>
<?php echo form_open($this->uri->uri_string()); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url("assets/images/icons/favicon.ico");?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/vendor/animate/animate.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/vendor/css-hamburgers/hamburgers.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/vendor/select2/select2.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/util.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/main.css');?>">
<!--===============================================================================================-->
</head>
<!--===================================INICIA FORMULARIO CON CSSS============================================================-->
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?php echo base_url("assets/images/img-01.png");?>" alt="IMG">
				</div>
				<form class="login100-form">
					<span class="login100-form-title">
						Recupera tu cotraseña
					</span>
					<div class="wrap-input100">
						<span class="focus-input100">
							<?php echo form_label('',$login_label, $login['id']); ?>
						</span>
						<td class="focus-input100">
							<?php echo form_input($login); ?>
						</td>
						<td style="color: red;">
							<?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?>
						</td>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="reset" value="Genera una nueva contraseña">
							Genera una nueva contraseña
						</button>
					</div>
				</form>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
<!--===============================================================================================-->
<script src="<?php echo site_url('assets/vendor/jquery/jquery-3.2.1.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo site_url('assets/vendor/bootstrap/js/popper.js');?>"></script>
	<script src="<?php echo site_url('assets/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo site_url('assets/vendor/select2/select2.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo site_url('assets/vendor/tilt/tilt.jquery.min.js');?>"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?php echo site_url('assets/js/main.js');?>"></script>

</body>
</html>
<table>
	<tr>
		<td></td>
		<td></td>
	</tr>
</table>

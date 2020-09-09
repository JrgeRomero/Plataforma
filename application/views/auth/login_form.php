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

if ($login_by_username AND $login_by_email) {
	$login_label = '';
} else if ($login_by_username) {
	$login_label = 'Usuario';
} else {
	$login_label = 'Email';
}
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30,
	'class' => 'input100',
	'placeholder' => 'Contraseña',
);
$remember = array(
	'name'	=> 'remember',
	'id'	=> 'remember',
	'value'	=> 1,
	'checked'	=> set_value('remember'),
	'style' => 'margin:0;padding:0',
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>
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
				<?php echo form_open($this->uri->uri_string()); ?>
				<form class="login100-form">
					<span class="login100-form-title">
						Inicia sesión
					</span>
					<div class="wrap-input100">
						<span class="focus-input100">
							<?php echo form_label($login_label, $login['id']); ?>
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
					<div class="wrap-input100">
						<span class="focus-input100">
							<?php echo form_label('', $password['id']); ?>
						</span>
						<td class="focus-input100">
							<?php echo form_password($password); ?>
						</td>
						<td style="color: red;">
							<?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?>
						</td>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Ingresar
						</button>
					</div>
					<div class="text-center p-t-12">
						<span class="txt1">
							Olvidaste
						</span>
						<a class="txt2">
						<a	href="<?php echo site_url('password'); ?>">
							Contraseña
						</a>
					</div>
					<div class="text-center p-t-12">
						<td colspan="3">
							<?php echo form_checkbox($remember); ?>
							<?php echo form_label('Recordar usuario y contraseña', $remember['id']); ?><br>
						</td>
					</div>
				<!--	<div class="text-center p-t-136">
						<a class="txt2">
							<?php if ($this->config->item('allow_registration', 'tank_auth')) echo anchor('/auth/register/', 'Crea tu cuenta'); ?>
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>-->
				</form>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
<!--===================================TERMINA FORMULARIO CON CSS============================================================-->



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
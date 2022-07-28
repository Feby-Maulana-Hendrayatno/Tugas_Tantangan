<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<center>
	<form method="POST" action="<?php echo e(url('/kirim_login')); ?>">
		<?php echo csrf_field(); ?>
		<table border="3" cellpadding="10" cellspacing="0">
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input type="text" name="email" placeholder="Email">
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td>
					<input type="password" name="password">
				</td>
			</tr>
			<tr>
				<td>
					<button type="submit">
						Kirim
					</button>
				</td>
			</tr>
		</table>
	</form>
</center>


</body>
</html><?php /**PATH C:\Users\USER\Desktop\Proyek-MPM-POLINDRA\Contoh\resources\views/page/user/auth/login.blade.php ENDPATH**/ ?>
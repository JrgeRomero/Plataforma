<div class="pull-right">
	<a href="<?php echo site_url('user/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Ac Online</th>
		<th>Password</th>
		<th>Forgotten Password Code</th>
		<th>Forgotten Password Time</th>
		<th>Ip Address</th>
		<th>Username</th>
		<th>Salt</th>
		<th>Email</th>
		<th>Activation Code</th>
		<th>Remember Code</th>
		<th>Created On</th>
		<th>Last Login</th>
		<th>Active</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Company</th>
		<th>Phone</th>
		<th>Ac Image</th>
		<th>Actions</th>
    </tr>
	<?php foreach($users as $u){ ?>
    <tr>
		<td><?php echo $u['id']; ?></td>
		<td><?php echo $u['ac_online']; ?></td>
		<td><?php echo $u['password']; ?></td>
		<td><?php echo $u['forgotten_password_code']; ?></td>
		<td><?php echo $u['forgotten_password_time']; ?></td>
		<td><?php echo $u['ip_address']; ?></td>
		<td><?php echo $u['username']; ?></td>
		<td><?php echo $u['salt']; ?></td>
		<td><?php echo $u['email']; ?></td>
		<td><?php echo $u['activation_code']; ?></td>
		<td><?php echo $u['remember_code']; ?></td>
		<td><?php echo $u['created_on']; ?></td>
		<td><?php echo $u['last_login']; ?></td>
		<td><?php echo $u['active']; ?></td>
		<td><?php echo $u['first_name']; ?></td>
		<td><?php echo $u['last_name']; ?></td>
		<td><?php echo $u['company']; ?></td>
		<td><?php echo $u['phone']; ?></td>
		<td><?php echo $u['ac_image']; ?></td>
		<td>
            <a href="<?php echo site_url('user/edit/'.$u['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('user/remove/'.$u['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

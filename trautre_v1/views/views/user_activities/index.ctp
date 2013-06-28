<!-- Thông báo lỗi -->
<?php 
	$success_mess = $this->Session->flash('success'); 
	$fail_mess = $this->Session->flash('error');
	if(!empty($success_mess)) { 
		echo '<div class="message success" style="display: block;">'.$success_mess.'</div> ';
	}
	else if(!empty($fail_mess)) { 
		echo '<div class="message errormsg" style="display: block;">'.$fail_mess.'</div> ';
	}
?>
 
<div class="box">
	<div class="box-header">
		<h1>User activities</h1>
	</div>
	
	<table class="datatable">
		<thead>
			<tr>
				<th>Total of users</th>
				<th>Total of paid users</th>
				<th>Total of unpaid users</th>
				<th>Signup</th>
				<th>Logged in</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $total_user ; ?></td>
				<td><?php echo $paid ; ?></td>
				<td><?php echo $unpaid ; ?></td>
				<td><?php echo $signup ; ?></td>
				<td><?php echo $logged ; ?></td>
			</tr>
		</tbody>
	</table>	
</div>

<div class="box">
	<div class="box-header">
		<h1>Location Report</h1>
	</div>
	
	<table class="datatable">
		<thead>
			<tr>
				<th>Location</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($countries as $country):?>
			<tr>
				<td>
				<?php 
					if(!empty($country['users']['location'])) echo $country['users']['location'] ;
					else echo "Other";
				?>
				</td>
				<td><?php echo $country[0]['number']; ?>
				</td>
			</tr>
		<?php endforeach;?>
		</tbody>
	</table>
</div>





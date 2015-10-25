<?=$menu?>
<div id="page-wrapper">
	<h1 class="page-header margin-top-none">User Management</small></h1>
	<table id="users" class="table table-striped table-bordered" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
                <th>Last Seen</th>
				<th>IP</th>
                <th>Action</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
                <th>Last Seen</th>
				<th>IP</th>
                <th>Action</th>
			</tr>
		</tfoot>
		<tbody>
        <?php
		if (is_array($users)) {			
			foreach ($users as $user) {
				echo "<tr>";
				echo "<td>".$user->user_fname."</td>";
				echo "<td>".$user->user_lname."</td>";
				echo "<td>".$user->user_email."</td>";
				echo "<td>".($user->last_logged == 0 ? "N/A" : date('m/d/Y g:i:sa', strtotime($user->last_logged)))."</td>";
				echo "<td>".$user->user_ip."</td>";
				echo "<td><a href='".base_url('users/edit/?id='.$user->user_id)."'>Edit</a></td>";
				echo "</tr>";
			}			
		}
		?>
		</tbody>
	</table>
</div>
<?=$footer?>
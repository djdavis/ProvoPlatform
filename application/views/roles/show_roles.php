<?=$menu?>
<div id="page-wrapper">
	<h1 class="page-header margin-top-none">Role Management</small></h1>
	<table id="users" class="table table-striped table-bordered" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Role</th>
                <th>Action</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Role</th>
                <th>Action</th>
			</tr>
		</tfoot>
		<tbody>
        <?php
		if (is_array($roles)) {			
			foreach ($roles as $role) {
				echo "<tr>";
				echo "<td>".$role->role."</td>";
				echo "<td><a href='".base_url('role/edit/?id='.$role->id)."'>Edit Definition</a></td>";
				echo "</tr>";
			}			
		}
		?>
		</tbody>
	</table>
</div>
<?=$footer?>
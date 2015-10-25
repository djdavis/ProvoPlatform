<?=$menu?>
<div id="page-wrapper">
	<h1 class="page-header margin-top-none">Module Management</small></h1>
	<table id="users" class="table table-striped table-bordered" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Module Name</th>
				<th>Date Added</th>
                <th>Action</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Module Name</th>
				<th>Date Added</th>
                <th>Action</th>
			</tr>
		</tfoot>
		<tbody>
        <?php
		if (is_array($modules)) {			
			foreach ($modules as $module) {
				echo "<tr>";
				echo "<td>".$module->module_name."</td>";
				echo "<td>".($module->date_added == 0 ? "N/A" : date('m/d/Y g:i:sa', strtotime($module->date_added)))."</td>";
				echo "<td><a href='".base_url('modules/edit/?id='.$module->module_id)."'>Edit</a></td>";
				echo "</tr>";
			}			
		}
		?>
		</tbody>
	</table>
</div>
<?=$footer?>
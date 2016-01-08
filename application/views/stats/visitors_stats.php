<?=$menu?>
<div id="page-wrapper">
	<h1 class="page-header margin-top-none text-center"><?=$page[0]->page_name?> Analytics</small></h1>
	<table id="visitor_stats" class="table table-striped table-bordered" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Email</th>
				<th>Date</th>
				<th>IP</th>
				<th>City</th>
				<th>State</th>
				<th>Source</th>
				<th>Referrer</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Email</th>
				<th>Date</th>
				<th>IP</th>
				<th>City</th>
				<th>State</th>
				<th>Source</th>
				<th>Referrer</th>
			</tr>
		</tfoot>
		<tbody>
		<?php
		if (is_array($visitors)) {			
			foreach ($visitors as $stat) {
				echo "<tr>";
				echo "<td>".$stat->email."</td>";
				echo "<td>".$stat->date."</td>";
				echo "<td>".$stat->ip."</td>";
				echo "<td>".$stat->city."</td>";
				echo "<td>".$stat->state."</td>";
				echo "<td>".$stat->source."</td>";
				echo "<td>".$stat->referrer."</td>";
				echo "</tr>";
			}			
		}
		?>
		</tbody> 
	</table>
</div>
<?=$footer?>
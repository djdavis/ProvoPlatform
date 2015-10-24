<?=$menu?>
<div id="page-wrapper">
	<h1 class="page-header margin-top-none">Download Analytics</h1>
	<p class="lead">Unique and total downloads for each tracked file</p>
	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>PDF</th>
				<th>DL Count</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>PDF</th>
				<th>DL Count</th>
			</tr>
		</tfoot>
		<tbody>
		<?php
		if (is_array($downloads)) {			
			foreach ($downloads as $download) {
				echo "<tr>";
				echo "<td>".$download->shortname."</td>";
				echo "<td>".$download->count."</td>";
				echo "</tr>";
			}			
		}
		?>
		</tbody>
	</table>
</div>
<?=$footer?>
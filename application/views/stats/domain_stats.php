<?=$menu?>
<div id="page-wrapper">
	<h1 class="page-header margin-top-none">Domain Analytics</h1>
	<p class="lead">Unique and total page views for each tracked page</p>
	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Page</th>
				<th>Unique Views</th>
				<th>Total Views</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Page</th>
				<th>Unique Views</th>
				<th>Total Views</th>
			</tr>
		</tfoot>
		<tbody>
		<?php
		if (is_array($domains)) {			
			foreach ($domains as $domain) {
				echo "<tr>";
				echo "<td>".$domain->domain."</td>";
				echo "<td>".$domain->unique_pageviews."</td>";
				echo "<td>".$domain->pageviews."</td>";
				echo "</tr>";
			}			
		}
		?>
		</tbody>
	</table>
</div>
<?=$footer?>
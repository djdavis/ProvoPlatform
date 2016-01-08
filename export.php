<?php
    
    	$dbc['host']	= "localhost";
	$dbc['usr']		= "root";
	$dbc['pwd']		= "root";
	$dbc['db']		= "analytics";
	$con = mysqli_connect($dbc['host'],$dbc['usr'],$dbc['pwd']);
	mysqli_select_db($con, $dbc['db']);
	
	$query = mysqli_query($con,"SELECT * FROM page_visitors LEFT JOIN module_pages ON module_pages.slug = page_visitors.source");    
	while ($rows = mysqli_fetch_assoc($query)) {
    	//echo $rows['email']."<br />";
    	//echo "UPDATE page_visitors SET module_id = '".$rows['module_id']."', page_id = '".$rows['page_id']."' WHERE page_visitors.id = '".$rows['id']."'<br />";
    	$query2 = mysqli_query($con,"UPDATE page_visitors SET module_id = '".$rows['module_id']."', page_id = '".$rows['page_id']."' WHERE page_visitors.id = '".$rows['id']."'");
	}
    ?>
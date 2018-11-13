<?php
require_once('core.php');

// declare variables
$h = $_POST['hostname'];

// for debugging ONLY
$req_dump = print_r($_REQUEST, TRUE);
$fp = fopen('dump.log', 'a');
fwrite($fp, $req_dump);
fwrite($fp, "\n\r\n\r");
fclose($fp);

if ($_REQUEST['rawdata']=="") { // 
	echo "Houstan, we have a problem. Data not found";	
} else {
	// verify data before inserting into database
	if ($server_id = getServerID($_REQUEST['hostname'])) {
		// no need to do anytihng, host already exists
	} else {
		$server_id = addServer($_REQUEST['hostname']);
	}
	$dumpID = addServerDump($server_id, $_REQUEST);
	echo "================================================================================\n\r";
	echo "=> NOTE: Dump '$dumpID' recorded against server '$h' (ServerID = $server_id)\n\r";
	echo "================================================================================\n\r";
}
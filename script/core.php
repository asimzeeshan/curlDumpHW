<?php
// connect to MariaDB via MySQLi
$mysqli = new mysqli("mariadb", "curldump", "xebF7994i4hu", "curldump");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
// echo $mysqli->host_info . "\n";

// function
// #### DO NOT FUCKIN TRY TO FUCK ANYTHING UP BEYOND THIS POINT. STAY DOWN!! STAY THE FUCK DOWN

function getServerID($h) {
	global $mysqli;

	if (isset($h) && trim($h)!="") {
		if ($result = $mysqli->query("SELECT id FROM servers WHERE hostname = '$h' LIMIT 1")) {
	    	$row = $result->fetch_assoc();
	    	return intval($row['id']);
		} else {
			return false;
		}
	} else {
		return false;
	}
}

function addServer($h) {
	global $mysqli;

	if (isset($h) && trim($h)!="") {
		$mysqli->query("INSERT INTO servers SET hostname='$h'");
		return $mysqli->insert_id;
	}
}

function addServerDump($id, $data) {
	global $mysqli;

	$host 		= $data['hostname'];
	$path 		= $data['scriptpath'];
	$data 		= addslashes($data['rawdata']);

	$mysqli->query("INSERT INTO dumps SET server_id='$id', script_path='$path', data='$data'");
	return $mysqli->insert_id;
}
<?php
require_once('core.php');
echo $server_id = getServerID('test-1');
echo "\n\r";
echo $server_id = postServerID('test-2');
echo "\n\r";
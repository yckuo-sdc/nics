<?php
// input validation
foreach($_GET as $getkey => $val){
	if(empty($val)){
		echo "沒有輸入";
		return 0;
	}
	$$getkey = escapeshellcmd($val);
}

$output = shell_exec("/usr/bin/nslookup $target $server");
echo "<pre>$output</pre>";
system("killall -q nslookup");	//kill the task

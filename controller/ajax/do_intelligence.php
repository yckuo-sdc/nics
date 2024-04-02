<?php
// Sanitizes data and converts strings to UTF-8 (if available), according to the provided field whitelist
$whitelist = array("search_input");
$_GET = $gump->sanitize($_GET, $whitelist); 

foreach($_GET as $getkey => $val){
	$$getkey = $val;
}

if (empty($search_input)) {
	echo "No input";
	return 0;
}

// Simulating the process of data
sleep(1);

$data = array(
    'input' => $search_input,
    'output' => $search_input,
);

// Convert data to JSON
$jsonString = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
$render = "<pre style='white-space: pre-wrap'>" . $jsonString . "</pre>";
$flash->success($render);

require 'view/ajax/do_intelligence.php';

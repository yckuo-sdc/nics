<?php
if (!$userValidator->isLogin()) {
	header("Location: /logout"); 
	return;
}

// Sanitizes data and converts strings to UTF-8 (if available), according to the provided field whitelist
$whitelist = array("notice_id");
$_POST = $gump->sanitize($_POST, $whitelist); 

$notice_id = $_POST['notice_id'];

if (empty($notice_id)) {
	$flash->error("failure");
}

$url = "http://10.3.81.77:8000/api/notice/noticeid/" . $notice_id;
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_SSL_VERIFYHOST => false,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_HTTPHEADER => array("Content-Type: application/json")
));

$response = curl_exec($curl);
curl_close($curl);

$result = json_decode($response, true);

if (is_array($result['result'])) {
    $render = "<pre style='white-space: pre-wrap'>" . json_encode(json_decode($response),JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) . "</pre>";
	$flash->success($render);
} else {
    $render = "<pre style='white-space: pre-wrap'>" . json_encode(json_decode($response),JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) . "</pre>";
	$flash->error($render);
}

header("Location: ".$_SERVER['HTTP_REFERER']); 

<?php
require_once __DIR__ .'/../../vendor/autoload.php';

$db = Database::get();

$table = "rss_feed_items";
$sql = "
    SELECT a.*, b.title as source, CONCAT(a.title, '|', a.link) AS hyperlink
    FROM rss_feed_items AS a 
    LEFT JOIN rss_feeds AS b 
    on a.rss_feed_id = b.id
";

$entries = $db->execute($sql);

//$entries = $db->query($table, $condition = "1 = ?", $order_by = "1", $fields = "*", $limit = "", $data_array = [1]);

$data = array();
$data['data'] = $entries;

echo json_encode($data, JSON_UNESCAPED_UNICODE);

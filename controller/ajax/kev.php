<?php
require_once __DIR__ .'/../../vendor/autoload.php';

$db = Database::get();

$table = "cisa_kevs";

$sql = 
"SELECT 
    *, 
    (
        SELECT
            CONCAT(
                '[',
                    GROUP_CONCAT(
                        CONCAT('{\"title\":\"', cisa_kev_pocs.title, '\",'),
                        CONCAT('\"url\":\"', cisa_kev_pocs.url, '\"}')
                    ),
                ']'
            ) AS pocs
        FROM 
            cisa_kev_pocs
        WHERE 
            cisa_kev_pocs.cve_id = cisa_kevs.cve_id
        GROUP BY 
            cisa_kev_pocs.cve_id
    ) AS poc
FROM 
    cisa_kevs
";
$entries = $db->execute($sql);

$data = array();
$data['data'] = $entries;

echo json_encode($data, JSON_UNESCAPED_UNICODE);

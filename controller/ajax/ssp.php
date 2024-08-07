<?php

$whitelist = array("draw", "start", "length", "search", "order", "columns");
$_GET = $gump->sanitize($_GET, $whitelist);

$draw = intval($_GET['draw']);
$start = intval($_GET['start']);
$length = intval($_GET['length']);
$searchValue = $_GET['search']['value'];
$orderColumnIndex = intval($_GET['order'][0]['column']); // Column index
$orderDir = $_GET['order'][0]['dir']; // asc or desc

// Map DataTables columns to Elasticsearch fields
$columns = [
    //0 => null,
    1 => 'Update_Month',
    2 => 'ACC.keyword',
    3 => 'Hostname.keyword',
    4 => 'IP.keyword',
    5 => 'Port',
    6 => 'Scan_Module.keyword',
    7 => 'Data_Source.keyword',
];


// Get search values for each column
$searchValues = [
    //0 => null,
    1 => $_GET['columns'][1]['search']['value'],
    2 => $_GET['columns'][2]['search']['value'],
    3 => $_GET['columns'][3]['search']['value'],
    4 => $_GET['columns'][4]['search']['value'],
    5 => $_GET['columns'][5]['search']['value'],
    6 => $_GET['columns'][6]['search']['value'],
    7 => $_GET['columns'][7]['search']['value'],
];

$searchFields = [
    //0 => null,
    2 => 'ACC.keyword',
    3 => 'Hostname.keyword',
    4 => 'IP.keyword',
    5 => 'Port',
    6 => 'Scan_Module.keyword',
    7 => 'Data_Source.keyword',
];


$sortField = $columns[$orderColumnIndex];


$es_index = 'gsn_asset*';
// Build the Elasticsearch query
$query = [
    'index' => $es_index,
    'body' => [
        'from' => $start,
        'size' => $length,
        'sort' => [
            $sortField => [
                'order' => $orderDir
            ]
        ],
       'query' => [
            'bool' => [
                'must' => [
                    0 => ['match_all' => (object) []]
                ]
            ]
        ]
    ]
];

if (!empty($searchValue)) {
    $query['body']['query'] = [
        'bool' => [
            'must' => [
                [
                    'multi_match' => [
                        'query' => $searchValue,
                        'fields' => ['ACC.keyword', 'Hostname.keyword', 'IP.keyword', 'Scan_Module.keyword', 'Data_Source.keyword']
                    ]
                ]
            ]
        ]
    ];
}


// Add column-specific searches
foreach ($searchValues as $index => $value) {
    if (!empty($value)) {
        $query['body']['query']['bool']['must'][] = [
               'match' => [
                   $columns[$index] => $value
               ]
        ];
    }
}

#print_r($query);
// Execute the search query
$response = $es_client->search($query);

// Prepare the data for DataTables
$data = [];
foreach ($response['hits']['hits'] as $hit) {
    $data[] = $hit['_source'];
}


// Get total records
$totalRecords = $es_client->count(['index' => $es_index])['count'];

// Return the data in the format required by DataTables
echo json_encode([
    'draw' => $draw,
    'recordsTotal' => $totalRecords,
    'recordsFiltered' => $response['hits']['total']['value'],
    'data' => $data
]);

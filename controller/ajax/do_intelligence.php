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

$data = array(
    'input' => $search_input,
    'output' => $search_input,
);

// Convert data to JSON
$jsonString = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
$render = "<pre style='white-space: pre-wrap'>" . $jsonString . "</pre>";
#echo $render;
$flash->success($render);
?>
<?= flash() ?>
<h3 class="ui header">Accordion Layout</h3>
<div class="ui styled fluid accordion">
    <div class="title">
        <i class="dropdown icon"></i>
        Shodan
        <div class="ui right floated label">23</div>
    </div>
    <div class="content">
         <p> The description for Shodan.</p>
    </div>
    <div class="title">
        <i class="dropdown icon"></i>
        Virustotal 
        <div class="ui right floated label">2</div>
    </div>
    <div class="content">
        <p> The description for Virustotal.</p>
    </div>
    <div class="title">
        <i class="dropdown icon"></i>
        Censys
        <div class="ui right floated label">13</div>
    </div>
    <div class="content">
     <p> The description for Censys.</p>
    </div>
    <div class="title">
        <i class="dropdown icon"></i>
        Madiant 
        <div class="ui right floated label">3</div>
    </div>
    <div class="content">
        <p> The description for Madiant.</p>
    </div>
</div>


<h3 class="ui header">Card Layout</h3>
<div class="ui two stackable cards">
    <div class="card">
        <div class="content">
            <div class="header">
                Shodan
                <div class="ui right floated label">23</div>
            </div>
            <div class="description">
                The description for Shodan.
            </div>
        </div>
        <div class="ui bottom attached button">
            <i class="add icon"></i>
        </div>
        <div class="detail">
            The detail for Shodan.
        </div>
    </div>
    <div class="card">
        <div class="content">
            <div class="header">
                Virustotal
                <div class="ui right floated label">2</div>
            </div>
            <div class="description">
                The description for Virustotal.
            </div>
        </div>
        <div class="ui bottom attached button">
            <i class="add icon"></i>
        </div>
        <div class="detail">
            The detail for Virustotal.
        </div>
     </div>
    <div class="card">
        <div class="content">
            <div class="header">
                Censys
                <div class="ui right floated label">13</div>
            </div>
            <div class="description">
                The description for Censys.
            </div>
        </div>
        <div class="ui bottom attached button">
            <i class="add icon"></i>
        </div>
        <div class="detail">
            The detail for Censys.
        </div>
    </div>
    <div class="card">
        <div class="content">
            <div class="header">
                Madiant
                <div class="ui right floated label">3</div>
            </div>
            <div class="description">
                The description for Madiant.
            </div>
        </div>
        <div class="ui bottom attached button">
            <i class="add icon"></i>
        </div>
        <div class="detail">
            The detail for Madiant.
        </div>
    </div>
</div>

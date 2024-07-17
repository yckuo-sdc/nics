<div id="page" class="container">
    <div id="content">
		<div class="sub-content show">
			<div class="post">
                <?=$route->createBreadcrumbs(' > ');?>
                <h2 class="ui dividing header">Attack Surface Management</h2>
                <div id="map"></div>
                <div class="post_cell">
                    <div class="ui grid stackable padded">
                        <div class="eight wide computer eight wide tablet sixteen wide mobile column">
                            <div class="ui fluid card">
                                <div class="content">
                                    <div class="ui right floated header red">
                                        <i class="product hunt icon"></i>
                                    </div>
                                    <div class="header">
                                        <div class="ui header red">
                                            Top 10 Products
                                        </div>
                                    </div>
                                    <div id="top_product_chart" class="chart"></div>	
                                </div>
                                 <div class="extra content">
                                    <a href="#assets">				
                                        <div class="ui two buttons">
                                            <div class="ui red button">More Info</div>
                                        </div>
                                    </a>		    
                                 </div>
                             </div> 
                        </div>
                        <div class="eight wide computer eight wide tablet sixteen wide mobile column">
                            <div class="ui fluid card">
                                <div class="content">
                                    <div class="ui right floated header green">
                                        <i class="anchor icon"></i>
                                    </div>
                                    <div class="header">
                                        <div class="ui header green">
                                            Top 10 Ports
                                        </div>
                                    </div>
                                    <div id="top_port_chart" class="chart"></div>	
                                </div>
                                <div class="extra content">
                                    <a href="#assets">				
                                        <div class="ui two buttons">
                                          <div class="ui green button">More Info</div>
                                        </div>
                                    </a>
                                </div> 
                            </div>
                        </div>
                        <div class="four wide computer eight wide tablet sixteen wide mobile column">
                            <div class="ui fluid card">
                                <div class="content">
                                    <div class="ui right floated header teal">
                                        <i class="desktop icon"></i>
                                    </div>
                                    <div class="header">
                                        <div class="ui teal header">
                                            300
                                        </div>
                                    </div>
                                    <div class="meta"> 端點設備 </div>
                                    <div class="description">
                                        檢視 Endpoints, 統計防護軟體部屬情形
                                    </div>
                                </div>
                                <div class="extra content">
                                    <a href="/info/client/">				
                                        <div class="ui two buttons">
                                            <div class="ui teal button">More Info</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="four wide computer eight wide tablet sixteen wide mobile column">
                            <div class="ui fluid card">
                                <div class="content">
                                    <div class="ui right floated header purple">
                                        <i class="user secret icon"></i>
                                    </div>
                                    <div class="header">
                                        <div class="ui purple header">
                                            700
                                        </div>
                                    </div>
                                    <div class="meta"> 惡意中繼站 </div>
                                    <div class="description">
                                        彙整 C2 情資，並驗證資安設備阻擋結果
                                    </div>
                                </div>
                                <div class="extra content">
                                    <a href="/network/malware/">				
                                        <div class="ui two buttons">
                                          <div class="ui purple button">More Info</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="four wide computer eight wide tablet sixteen wide mobile column">
                            <div class="ui fluid card">
                                <div class="content">
                                    <div class="ui right floated header blue">
                                        <i class="server icon"></i>
                                    </div>
                                    <div class="header">
                                        <div class="ui blue header">
                                            100
                                        </div>
                                    </div>
                                    <div class="meta"> 伺服器 </div>
                                    <div class="description">
                                        查詢 Servers 基本資訊, 提供防護軟體部屬情形
                                    </div>
                                </div>
                                <div class="extra content">
                                    <a href="/query/server/">				
                                        <div class="ui two buttons">
                                            <div class="ui blue button">More Info</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="four wide computer eight wide tablet sixteen wide mobile column">
                            <div class="ui fluid card">
                                <div class="content">
                                    <div class="ui right floated header pink">
                                        <i class="database icon"></i>
                                    </div>
                                    <div class="header">
                                        <div class="ui pink header">
                                            10
                                        </div>
                                    </div>
                                    <div class="meta"> Data collection </div>
                                    <div class="description">
                                        Extract data from web service and load into database
                                    </div>
                                </div>
                                <div class="extra content">
                                    <a href="/about/data/">				
                                        <div class="ui two buttons">
                                          <div class="ui pink button">More Info</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!--end .ui.grid --> 
                </div>		
                <div id="assets" class="post_title">Assets</div>
				<div class="post_cell">
                    <table id="example_table" class="ui celled stripe table" style="width:100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Update Month</th>
                                <th>ACC</th>
                                <th>Hostname</th>
                                <th>IP</th>
                                <th>Port</th>
                                <th>Scan Module</th>
                                <th>Data Source</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>Update Month</th>
                                <th>ACC</th>
                                <th>Hostname</th>
                                <th>IP</th>
                                <th>Port</th>
                                <th>Scan Module</th>
                                <th>Data Source</th>
                            </tr>
                        </tfoot>
                    </table>
				</div><!--end of .post_cell-->
			</div><!--end of .post-->
		</div><!--end of .sub-content-->
		<div style="clear: both;"></div>
	</div><!-- end #content -->
</div> <!--end #page-->

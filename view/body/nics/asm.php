<div id="page" class="container">
    <div id="content">
		<div class="sub-content show">
			<div class="post">
                <?=$route->createBreadcrumbs(' > ');?>
                <h2 class="ui dividing header">Attack Surface Management</h2>
                <div id="map"></div>
                <div class="post_cell">
                    <div class="ui grid stackable padded">
                        <div class="four wide computer eight wide tablet sixteen wide mobile column">
                            <div class="ui fluid card">
                                <div class="content">
                                    <div class="ui right floated header teal">
                                        <i class="globe icon"></i>
                                    </div>
                                    <div class="header">
                                        <div class="ui teal header">
                                            Web 服務
                                        </div>
                                    </div>
                                    <div class="description">
                                        <div class="ui small teal statistic">
                                            <div class="value">1532</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="extra content">
                                    <a href="#">				
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
                                            惡意中繼站
                                        </div>
                                    </div>
                                    <div class="description">
                                        <div class="ui small purple statistic">
                                            <div class="value">700</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="extra content">
                                    <a href="#">				
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
                                    <div class="ui right floated brown header">
                                        <i class="server icon"></i>
                                    </div>
                                    <div class="header">
                                        <div class="ui brown header">
                                            供應商漏洞
                                        </div>
                                    </div>
                                    <div class="description">
                                        <div class="ui small brown statistic">
                                            <div class="value">3332</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="extra content">
                                    <a href="#">				
                                        <div class="ui two buttons">
                                            <div class="ui brown button">More Info</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="four wide computer eight wide tablet sixteen wide mobile column">
                            <div class="ui fluid card">
                                <div class="content">
                                    <div class="ui right floated header pink">
                                        <i class="exclamation circle icon"></i>
                                    </div>
                                    <div class="header">
                                        <div class="ui pink header">
                                            偵測異常攻擊
                                        </div>
                                    </div>
                                    <div class="description">
                                        <div class="ui small pink statistic">
                                            <div class="value">5214</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="extra content">
                                    <a href="#">				
                                        <div class="ui two buttons">
                                          <div class="ui pink button">More Info</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
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
                                    <canvas id="topProductChart"></canvas>
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
                                    <canvas id="topPortChart"></canvas>
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
                        <div class="eight wide computer eight wide tablet sixteen wide mobile column">
                            <div class="ui fluid card">
                                <div class="content">
                                    <div class="ui right floated blue header">
                                        <i class="building icon"></i>
                                    </div>
                                    <div class="header">
                                        <div class="ui blue header">
                                            Class Rank
                                        </div>
                                    </div>
                                    <canvas id="classRankChart"></canvas>
                                </div>
                                 <div class="extra content">
                                    <a href="#assets">				
                                        <div class="ui two buttons">
                                            <div class="ui blue button">More Info</div>
                                        </div>
                                    </a>		    
                                 </div>
                             </div> 
                        </div>
                        <div class="eight wide computer eight wide tablet sixteen wide mobile column">
                            <div class="ui fluid card">
                                <div class="content">
                                    <div class="ui right floated grey header">
                                        <i class="chart line icon"></i>
                                    </div>
                                    <div class="header">
                                        <div class="ui grey header">
                                            Line Chart
                                        </div>
                                    </div>
                                    <canvas id="lineChart"></canvas>
                                </div>
                                 <div class="extra content">
                                    <a href="#assets">				
                                        <div class="ui two buttons">
                                            <div class="ui grey button">More Info</div>
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
                                <th>Product</th>
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
                                <th>Product</th>
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

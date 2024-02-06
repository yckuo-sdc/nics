<div id="page" class="container">
    <div id="content">
		<div class="sub-content show">
			<div class="post intelligence">
                <?=$route->createBreadcrumbs(' > ');?>
                <h2 class="ui dividing header">Intelligence Search</h2>
				<div class="post_cell">
					<form class="ui form" action="" method="post">
						<div class="field">
							<label>關鍵字</label>
							<div class="ui input">
								<input type="text" name="search_input" placeholder="URL, IP address, domain, or file hash" required>
							</div>
						</div>
						<div class="field">
							<input type="submit" id="nslookup_btn" class="ui button" value="搜尋">
							<div class="ui centered inline loader"></div>
						</div>
					</form>
                    <p></p>
					<div class="record_content">
<!--
                        <div class="ui styled fluid accordion">
                          <div class="title">
                            <i class="dropdown icon"></i>
                            DDI Threat &nbsp <a class="ui small grey label">2</a>
                          </div>
                          <div class="content">
                            <table class="ui very basic collapsing celled table">
                              <thead>
                                <tr>
                                    <th>Time</th>
                                    <th>Source</th>
                                    <th>Link</th>
                                <tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    2024-01-09 11:12:20
                                  </td>
                                  <td>
                                    reason:["IP address: 80.66.88.214"] interstedIp:80.66.88.214 hostSeverity:1 Name:SECURITY_RISK_DETECTION dvc:172.17.43.123 act:not blocked Version:0 malType:OTHERS compressedFileType:-65536 appGroup:Remote Access compressedFileHash:0000000000000000000000000000000000000000 vLANId:4095 DeviceProduct:Deep Discovery Inspector deviceRiskConfidenceLevel:3 ruleId:2388 DeviceVendor:Trend Micro shost:124.199.97.86 pAttackPhase:Point of Entry app:RDP cs10:0 cn5Label:AggregatedCount cn2:0 cn4:2 cn3:1 cn5:1 fsize:0 spt:63389
                                  </td>
                                  <td>
                                    <a href="#">#</a>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    2024-01-09 11:12:20
                                  </td>
                                  <td>
                                    reason:["IP address: 80.66.88.214"] interestedIp:80.66.88.214 hostSeverity:1 Name:SECURITY_RISK_DETECTION dvc:172.17.43.123 act:not blocked Version:0 malType:OTHERS compressedFileType:-65536 appGroup:Remote Access compressedFileHash:0000000000000000000000000000000000000000 vLANId:4095 DeviceProduct:Deep Discovery Inspector deviceRiskConfidenceLevel:3 ruleId:2388 DeviceVendor:Trend Micro shost:124.199.97.86 pAttackPhase:Point of Entry app:RDP cs10:0 cn5Label:AggregatedCount cn2:0 cn4:2 cn3:1 cn5:1 fsize:0 spt:63389
                                  </td>
                                  <td>
                                    <a href="#">#</a>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    2024-01-09 11:12:20
                                  </td>
                                  <td>
                                    reason:["IP address: 80.66.88.214"] interestedIp:80.66.88.214 hostSeverity:1 Name:SECURITY_RISK_DETECTION dvc:172.17.43.123 act:not blocked Version:0 malType:OTHERS compressedFileType:-65536 appGroup:Remote Access compressedFileHash:0000000000000000000000000000000000000000 vLANId:4095 DeviceProduct:Deep Discovery Inspector deviceRiskConfidenceLevel:3 ruleId:2388 DeviceVendor:Trend Micro shost:124.199.97.86 pAttackPhase:Point of Entry app:RDP cs10:0 cn5Label:AggregatedCount cn2:0 cn4:2 cn3:1 cn5:1 fsize:0 spt:63389
                                  </td>
                                  <td>
                                    <a href="#">#</a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                            </p>
                          </div>
                          <div class="title">
                            <i class="dropdown icon"></i>
                            Ip2Geo &nbsp <a class="ui small grey label">1</a> 
                          </div>
                          <div class="content">
                            <p>There are many breeds of dogs. Each breed varies in size and temperament. Owners often select a breed of dog that they find to be compatible with their own lifestyle and desires from a companion.</p>
                          </div>
                          <div class="title">
                            <i class="dropdown icon"></i>
                            GSN Netflow &nbsp <a class="ui small grey label">2</a> 
                          </div>
                          <div class="content">
                            <p>There are many breeds of dogs. Each breed varies in size and temperament. Owners often select a breed of dog that they find to be compatible with their own lifestyle and desires from a companion.</p>
                          </div>
                          <div class="title">
                            <i class="dropdown icon"></i>
                            VT &nbsp <a class="ui small grey label">0</a> 
                          </div>
                          <div class="content">
                            <p>Three common ways for a prospective owner to acquire a dog is from pet shops, private owners, or shelters.</p>
                            <p>A pet shop may be the most convenient way to buy a dog. Buying a dog from a private owner allows you to assess the pedigree and upbringing of your dog before choosing to take it home. Lastly, finding your dog from a shelter, helps give a good home to a dog who may not find one so readily.</p>
                          </div>
                          <div class="title">
                            <i class="dropdown icon"></i>
                            Shodan &nbsp <a class="ui small grey label">1</a> 
                          </div>
                          <div class="content">
                            <p>Three common ways for a prospective owner to acquire a dog is from pet shops, private owners, or shelters.</p>
                            <p>A pet shop may be the most convenient way to buy a dog. Buying a dog from a private owner allows you to assess the pedigree and upbringing of your dog before choosing to take it home. Lastly, finding your dog from a shelter, helps give a good home to a dog who may not find one so readily.</p>
                          </div>
                        </div>
-->
                    </div>
				</div> <!-- end .post_cell-->
			</div><!--end of .post-->
		</div><!--end of .sub-content-->
		<div style="clear: both;"></div>
	</div><!-- end #content -->
</div> <!--end #page-->

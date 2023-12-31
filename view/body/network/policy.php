<div id="page" class="container">
    <div id="content">
		<div class="sub-content show">
			<div class="post">
                <?=$route->createBreadcrumbs(' > ');?>
                <h2 class="ui dividing header">網路防護政策(Policy)</h2>
                <div class="ui secondary pointing menu">
                    <a class="active item">Yonghua</a>
                    <a class="item">Minjhih</a>
                    <a class="item">IDC</a>
                    <a class="item">IntraYonghua</a>
                </div>
                <div class="ui noborder bottom attached segment">
                    <div class="tab-content yonghua show">
                       <div id="yonghuaJumpMenu">top
							<ul>
								<li><a href="#yonghuaExpiredSecurityRules">ExpiredSecurityRules</a></li> 
								<li><a href="#yonghuaSecurityRules">SecurityRules</a></li>
								<li><a href="#yonghuaNatRules">NatRules</a></li>
                            </ul>
                       </div>
                        <?php foreach($host_policy_results['yonghua'] as $policy_key => $policy_result): ?>
                            <div id="yonghua<?=$policy_key?>" class="post_title"><?=$policy_result['label']?></div>
                            <?php $policy_result = $policy_result['data']; ?>
                            <div class="post_cell">
                            <?php if($policy_result['status'] != 'success'): ?>
                                <p>很抱歉，該分類目前沒有資料！</p>
                            <?php else: ?>
                                <p>該分類共搜尋到 <?=$policy_result['total_count']?> 筆資料！</p>
                                <div class="ui relaxed divided list">
                                <?php foreach($policy_result['apps'] as $app): ?>
                                    <div class="item">
                                        <div class="content">
                                            <div class="header">
                                                <?php if ($policy_key == "ExpiredSecurityRules"): ?>
                                                    <div style="background-color:#db2828; color: white"><i class="exclamation circle icon"></i> 警告 &nbsp;|&nbsp;
                                                        <?=$app['@name']?>&nbsp;|&nbsp;
                                                        <?=$app['action']?>
                                                        <?=empty($app['description']) ? "" : "&nbsp;|&nbsp;" . $app['description'] ?>
                                                    </div>
                                                <?php elseif ($policy_key == "SecurityRules"): ?>
                                                    <?=$app['@name']?>&nbsp;|&nbsp;
                                                    <?=$app['action']?>
                                                    <?=empty($app['description']) ? "" : "&nbsp;|&nbsp;" . $app['description'] ?>
                                                <?php elseif ($policy_key == "NatRules"): ?>
                                                    <?=$app['@name']?>
                                                    <?=empty($app['description']) ? "" : "&nbsp;|&nbsp;" . $app['description'] ?>
                                                <?php endif ?>
                                            </div>
                                            <div class="description" style="display:block">
                                                <div class="ui ordered list">
                                                    <?php foreach($app as $keyindex => $val): ?>
                                                        <div class="item">
                                                            <?=$keyindex?>:&nbsp;
                                                             <?php if(!is_array($val)): ?>
                                                                <?=$val?>
                                                             <?php else: ?>
                                                                <?php array_walk_recursive($val, 'test_print'); ?>
                                                             <?php endif ?>
                                                        </div>
                                                    <?php endforeach ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                                </div>
                            <?php endif ?>
							<a href="#yonghuaJumpMenu">top</a>
                            </div><!--end of .post_cell-->
                        <?php endforeach ?>
                    </div> <!-- end of .tabular-->
                    <div class="tab-content minjhih">
                       <div id="minjhihJumpMenu">top
							<ul>
								<li><a href="#minjhihExpiredSecurityRules">ExpiredSecurityRules</a></li>
								<li><a href="#minjhihSecurityRules">SecurityRules</a></li>
								<li><a href="#minjhihNatRules">NatRules</a></li>
							</ul> 
						</div>
                        <?php foreach($host_policy_results['minjhih'] as $policy_key => $policy_result): ?>
                            <div id="minjhih<?=$policy_key?>" class="post_title"><?=$policy_result['label']?></div>
                            <?php $policy_result = $policy_result['data']; ?>
                            <div class="post_cell">
                            <?php if($policy_result['status'] != 'success'): ?>
                                <p>很抱歉，該分類目前沒有資料！</p>
                            <?php else: ?>
                                <p>該分類共搜尋到 <?=$policy_result['total_count']?> 筆資料！</p>
                                <div class="ui relaxed divided list">
                                <?php foreach($policy_result['apps'] as $app): ?>
                                    <div class="item">
                                        <div class="content">
                                            <div class="header">
                                                <?php if ($policy_key == "ExpiredSecurityRules"): ?>
                                                    <div style="background-color:#db2828; color: white"><i class="exclamation circle icon"></i> 警告 &nbsp;|&nbsp;
                                                    <?=$app['@name']?>&nbsp;|&nbsp;
                                                    <?=$app['action']?>
                                                    <?=empty($app['description']) ? "" : "&nbsp;|&nbsp;" . $app['description'] ?>
                                                    </div>
                                                <?php elseif ($policy_key == "SecurityRules"): ?>
                                                    <?=$app['@name']?>&nbsp;|&nbsp;
                                                    <?=$app['action']?>
                                                    <?=empty($app['description']) ? "" : "&nbsp;|&nbsp;" . $app['description'] ?>
                                                <?php elseif ($policy_key == "NatRules"): ?>
                                                    <?=$app['@name']?>
                                                    <?=empty($app['description']) ? "" : "&nbsp;|&nbsp;" . $app['description'] ?>
                                                <?php endif ?>
                                            </div>
                                            <div class="description" style="display:block">
                                                <div class="ui ordered list">
                                                    <?php foreach($app as $keyindex => $val): ?>
                                                        <div class="item">
                                                            <?=$keyindex?>:&nbsp;
                                                             <?php if(!is_array($val)): ?>
                                                                <?=$val?>
                                                             <?php else: ?>
                                                                <?php array_walk_recursive($val, 'test_print'); ?>
                                                             <?php endif ?>
                                                        </div>
                                                    <?php endforeach ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                                </div>
                            <?php endif ?>
							<a href="#minjhihJumpMenu">top</a>
                            </div><!--end of .post_cell-->
                        <?php endforeach ?>
                    </div> <!-- end of .tabular-->
                    <div class="tab-content idc">
                       <div id="idcJumpMenu">top
							<ul>
								<li><a href="#idcExpiredSecurityRules">ExpiredSecurityRules</a></li>
								<li><a href="#idcSecurityRules">SecurityRules</a></li>
								<li><a href="#idcNatRules">NatRules</a></li>
							</ul> 
						</div>
                        <?php foreach($host_policy_results['idc'] as $policy_key => $policy_result): ?>
                            <div id="idc<?=$policy_key?>" class="post_title"><?=$policy_result['label']?></div>
                            <?php $policy_result = $policy_result['data']; ?>
                            <div class="post_cell">
                            <?php if($policy_result['status'] != 'success'): ?>
                                <p>很抱歉，該分類目前沒有資料！</p>
                            <?php else: ?>
                                <p>該分類共搜尋到 <?=$policy_result['total_count']?> 筆資料！</p>
                                <div class="ui relaxed divided list">
                                <?php foreach($policy_result['apps'] as $app): ?>
                                    <div class="item">
                                        <div class="content">
                                            <div class="header">
                                                <?php if ($policy_key == "ExpiredSecurityRules"): ?>
                                                    <div style="background-color:#db2828; color: white"><i class="exclamation circle icon"></i> 警告 &nbsp;|&nbsp;
                                                    <?=$app['@name']?>&nbsp;|&nbsp;
                                                    <?=$app['action']?>
                                                    <?=empty($app['description']) ? "" : "&nbsp;|&nbsp;" . $app['description'] ?>
                                                    </div>
                                                <?php elseif ($policy_key == "SecurityRules"): ?>
                                                    <?=$app['@name']?>&nbsp;|&nbsp;
                                                    <?=$app['action']?>
                                                    <?=empty($app['description']) ? "" : "&nbsp;|&nbsp;" . $app['description'] ?>
                                                <?php elseif ($policy_key == "NatRules"): ?>
                                                    <?=$app['@name']?>
                                                    <?=empty($app['description']) ? "" : "&nbsp;|&nbsp;" . $app['description'] ?>
                                                <?php endif ?>
                                            </div>
                                            <div class="description" style="display:block">
                                                <div class="ui ordered list">
                                                    <?php foreach($app as $keyindex => $val): ?>
                                                        <div class="item">
                                                            <?=$keyindex?>:&nbsp;
                                                             <?php if(!is_array($val)): ?>
                                                                <?=$val?>
                                                             <?php else: ?>
                                                                <?php array_walk_recursive($val, 'test_print'); ?>
                                                             <?php endif ?>
                                                        </div>
                                                    <?php endforeach ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                                </div>
                            <?php endif ?>
							<a href="#idcJumpMenu">top</a>
                            </div><!--end of .post_cell-->
                        <?php endforeach ?>
                    </div> <!-- end of .tabular-->
                    <div class="tab-content intrayonghua">
                       <div id="intrayonghuaJumpMenu">top
							<ul>
								<li><a href="#intrayonghuaExpiredSecurityRules">ExpiredSecurityRules</a></li>
								<li><a href="#intrayonghuaSecurityRules">SecurityRules</a></li>
								<li><a href="#intrayonghuaNatRules">NatRules</a></li>
							</ul> 
						</div>
                        <?php foreach($host_policy_results['intrayonghua'] as $policy_key => $policy_result): ?>
                            <div id="intrayonghua<?=$policy_key?>" class="post_title"><?=$policy_result['label']?></div>
                            <?php $policy_result = $policy_result['data']; ?>
                            <div class="post_cell">
                            <?php if($policy_result['status'] != 'success'): ?>
                                <p>很抱歉，該分類目前沒有資料！</p>
                            <?php else: ?>
                                <p>該分類共搜尋到 <?=$policy_result['total_count']?> 筆資料！</p>
                                <div class="ui relaxed divided list">
                                <?php foreach($policy_result['apps'] as $app): ?>
                                    <div class="item">
                                        <div class="content">
                                            <div class="header">
                                                <?php if ($policy_key == "ExpiredSecurityRules"): ?>
                                                    <div style="background-color:#db2828; color: white"><i class="exclamation circle icon"></i> 警告 &nbsp;|&nbsp;
                                                    <?=$app['@attributes']['name']?>&nbsp;|&nbsp;
                                                    <?=$app['action']?>
                                                    <?=empty($app['description']) ? "" : "&nbsp;|&nbsp;" . $app['description'] ?>
                                                    </div>
                                                <?php elseif ($policy_key == "SecurityRules"): ?>
                                                    <?=$app['@attributes']['name']?>&nbsp;|&nbsp;
                                                    <?=$app['action']?>
                                                    <?=empty($app['description']) ? "" : "&nbsp;|&nbsp;" . $app['description'] ?>
                                                <?php elseif ($policy_key == "NatRules"): ?>
                                                    <?=$app['@name']?>
                                                    <?=empty($app['description']) ? "" : "&nbsp;|&nbsp;" . $app['description'] ?>
                                                <?php endif ?>
                                            </div>
                                            <div class="description" style="display:block">
                                                <div class="ui ordered list">
                                                    <?php foreach($app as $keyindex => $val): ?>
                                                        <div class="item">
                                                            <?=$keyindex?>:&nbsp;
                                                             <?php if(!is_array($val)): ?>
                                                                <?=$val?>
                                                             <?php else: ?>
                                                                <?php array_walk_recursive($val, 'test_print'); ?>
                                                             <?php endif ?>
                                                        </div>
                                                    <?php endforeach ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                                </div>
                            <?php endif ?>
							<a href="#intrayonghuaJumpMenu">top</a>
                            </div><!--end of .post_cell-->
                        <?php endforeach ?>
                    </div> <!-- end of .tabular-->
                </div> <!-- end of .attached.segment-->
			</div><!--end of .post-->
		</div><!--end of .sub-content-->
		<div style="clear: both;"></div>
	</div><!-- end #content -->
</div> <!--end #page-->

<div id="page" class="container">
	<div id="content">
		<div class="sub-content show">
			<div class="post">
                <?=$route->createBreadcrumbs(' > ');?>
                <h2 class="ui dividing header">VUL</h2>
				<div id="highRisk_post" class="post_title">高風險修補率</div>
				<div class="post_cell">
					<center>
					  <div class="ui small statistic">
						  <div class="value"><?php echo round($high_completion,0) ?> % </div>
						  <div class="label">修補率</div>
					  </div>
					  <br>
					  <div class="ui tiny statistic">
						  <div class="value"><?php echo $fixed_high_VUL ?> / <?php echo $total_high_VUL ?></div>
						  <div class="label">修補數 / 總數</div>
					  </div>
					  <br>
					  <div class="ui tiny statistic">
						  <div class="value"><?php echo $host_num ?> / <?php echo $url_num ?></div>
						  <div class="label">總掃描主機 / 網站數</div>
					  </div>
					</center>
				</div>
				<div class="post_title">弱點資訊長條圖</div>
                <div class="post_cell">
                    臺南市政府弱掃平台各單位弱點數量，高風險應於<font color="red">1</font>個月內修補完成，中風險應於<font color="red">2</font>個月內修補完成。<br>
                    <table class="ui selectable sortable celled table">
                        <thead>
                            <tr>
                                <th>OU</th>
                                <th>修補率<br> 修補數 | 總數</th>
                                <th>未逾期率<br> 未逾期未修補+修補數 | 總數</th>
                                <th>高風險修補率<br> 修補數 | 總數</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($ou_vul as $vul): ?>
                            <tr>
                                <td data-label='OU'><?=createBreadCrumbsWithOu($vul['ou'])?></td>
                                <td data-label='Total-Risks' data-sort-value='<?=round($vul['completion'],0)?>'>
                                    <div class='ui teal progress yckuo' data-sort-value='<?=round($vul['completion'],0)?>' data-percent='<?=round($vul['completion'],0)?>' data-total='100' id='example1'>
                                        <div class='bar'><div class='progress'></div></div>
                                        <div class='label'><?=$vul['fixed_number']?>/<?=$vul['number']?></div>
                                    </div>
                                </td>
                                <td data-label='Non-Overdue-Risks' data-sort-value='<?=round($vul['undue_completion'],0)?>'>
                                    <div class='ui teal progress yckuo' data-percent='<?=round($vul['undue_completion'],0)?>' data-total='100' id='example1'>
                                        <div class='bar'><div class='progress'></div></div>
                                        <div class='label'><?=$vul['undue_number']?>/<?=$vul['number']?></div>
                                    </div>
                                </td>
                                <td data-label='High-Risks' data-sort-value='<?=round($vul['high_risk_completion'],0)?>'>
                                    <div class='ui teal progress yckuo'  data-percent='<?=round($vul['high_risk_completion'],0)?>' data-total='100' id='example1'>
                                        <div class='bar'><div class='progress'></div></div>
                                        <div class='label'><?=$vul['fixed_high_risk_number']?>/<?=$vul['high_risk_number']?></div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach ?> 
                            <tr class='positive'>
                                <td data-label='OU'>Total</td>
                                <td data-label='Total-Risks'>
                                    <div class='ui teal progress yckuo' data-percent='<?=round($total_vul['completion'],0)?>' data-total='100' id='example1'>
                                        <div class='bar'><div class='progress'></div></div>
                                        <div class='label'><?=$total_vul['fixed_number']?>/<?=$total_vul['number']?></div>
                                    </div>
                                </td>
                                <td data-label='Non-Overdue-Risks'>
                                    <div class='ui teal progress yckuo' data-percent='<?=round($total_vul['undue_completion'],0)?>' data-total='100' id='example1'>
                                        <div class='bar'><div class='progress'></div></div>
                                        <div class='label'><?=$total_vul['undue_number']?>/<?=$total_vul['number']?></div>
                                    </div>
                                </td>
                                <td data-label='High-Risks'>
                                    <div class='ui teal progress yckuo' data-percent='<?=round($total_vul['high_risk_completion'],0)?>' data-total='100' id='example1'>
                                        <div class='bar'><div class='progress'></div></div>
                                        <div class='label'><?=$total_vul['fixed_high_risk_number']?>/<?=$total_vul['high_risk_number']?></div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>	
                </div>
				<div class="see_more" style="text-align:right"><a href="/vul/overview/">See More...</a></div>
                <!--
				<div class="post_title">SDC 追蹤分配表</div>
				<div class="post_cell">
					<object type="application/pdf" data="/upload/info/VULAssignment.pdf" width="100%" height="500"></object>
				</div>
                -->
                <!--end of .post_cell-->
			</div>
		</div><!--end of .sub-content-->
		<div style="clear: both;">&nbsp;</div>
	</div><!-- end #content -->
</div> <!--end #page-->

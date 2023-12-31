<div id="page" class="container">
    <div id="content">
		<div class="sub-content show">
			<div class="post">
                <?=$route->createBreadcrumbs(' > ');?>
                <h2 class="ui dividing header">應用程式群組(Client)</h2>
				<div class="post_cell">
                <?php if($status != 'success'): ?>
                    很抱歉，該分類目前沒有資料！
                <?php else: ?>
					<table class='ui celled table'>
					<thead>
						<tr>
							<th>群組名稱</th>
							<th>成員</th>
							<th>應用程式</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($apps as $app): ?>
                        <?php
                            $app_member = $app['members']['member']; 
                            $size = count($app_member);
                            $name = $app['@name'];
						?>
                        <?php foreach($app_member as $key => $member): ?>
							<tr>
							<?php if($key == 0): ?>
								<td rowspan=<?=$size?> ><?=$name?></td>
								<td rowspan=<?=$size?> ><?=$size?></td>
								<td><?=$member?></td>	
							<?php else: ?>
								<td><?=$member?></td>	
							<?php endif ?>
							</tr>
						<?php endforeach ?>
					<?php endforeach ?>
					</tbody>
					</table>
                <?php endif ?>
				</div><!--end of .post_cell-->
			</div><!--end of .post-->
		</div><!--end of .sub-content-->
		<div style="clear: both;"></div>
	</div><!-- end #content -->
</div> <!--end #page-->

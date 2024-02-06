<div id="page" class="container">
    <div id="content">
		<div class="sub-content show">
			<div class="post">
                <?=$route->createBreadcrumbs(' > ');?>
                <h2 class="ui dividing header">Notice Query</h2>
				<div class="post_cell">
					<form class="ui form" action="/do_notice" method="post">
						<div class="field">
							<label>notice id</label>
							<div class="ui input">
								<input type="text" name="notice_id" value="NICS-INT-2023-0001521" placeholder="NICS-INT-2023-0001521" required>
							</div>
						</div>
						<div class="field">
							<input type="submit" id="nslookup_btn" class="ui button" value="Query">
							<div class="ui centered inline loader"></div>
						</div>
					</form>
                    <?= flash() ?>
					<div class="record_content"></div>
				</div> <!-- end .post_cell-->
			</div><!--end of .post-->
		</div><!--end of .sub-content-->
		<div style="clear: both;"></div>
	</div><!-- end #content -->
</div> <!--end #page-->

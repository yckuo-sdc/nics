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
                    </div>
				</div> <!-- end .post_cell-->
			</div><!--end of .post-->
		</div><!--end of .sub-content-->
		<div style="clear: both;"></div>
	</div><!-- end #content -->
</div> <!--end #page-->

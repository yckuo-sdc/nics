	<div class="ui middle aligned center aligned grid">
	  <div class="column">
		<h2 class="ui sdc-blue image header">
		  <div class="content">
			<i class="shield icon"></i>Log-in to your account
		  </div>
		</h2>
		<?= flash() ?>
		<form class="ui large form" method="post" action="/do_login">
		  <div class="ui stacked segment">
			<div class="inline fields">
    			<label for="authentication">Auth</label>
				<div class="field">
				  <div class="ui radio checkbox">
					<input type="radio" name="authentication" value="ad">
					<label>ad</label>
				  </div>
				</div>
				<div class="field">
				  <div class="ui radio checkbox">
					<input type="radio" name="authentication" value="local" checked="checked">
					<label>local</label>
				  </div>
				</div>
			</div>		
			<div class="field">
			  <div class="ui left icon input">
				<i class="user icon"></i>
				<input type="text" name="username" placeholder="Username" required>
			  </div>
			</div>
			<div class="field">
			  <div class="ui left icon input">
				<i class="lock icon"></i>
				<input type="password" name="password" placeholder="Password"  required>
			  </div>
			</div>
			<div class="left field">
			  <div class="ui left checkbox">
				<input type="checkbox" name="remember" value="remember" >
				<label>Remember Me</label>
			  </div>
			</div>
			<button name="submit" class="ui sdc-blue fluid large button" type="submit">Login</button>
		 </div>
		</form>
		<div class="ui message">
			NICS-TIP System
		 </div>
	  </div>
	</div>
	<?php unset($_SESSION["error"]); ?>

<div id="page" class="container">
    <div id="content">
        <div class="sub-content show">
            <div class="post">
                <h2 class="ui dividing header">修改密碼</h2>
                <div class="ui column center aligned">
                    <?= flash() ?>
                    <form class="ui form" action="/do_password" method="post">
                        <input type="hidden" name="username" value="<?=$_SESSION['username']?>">
                        <div class="field">
                            <label>Current Password</label>
                            <input type="password" name="current_password" placeholder="Current Password" required>
                        </div>
                        <div class="field">
                            <label>New Password</label>
                            <input type="password" name="new_password" placeholder="New Password" required>
                        </div>
                        <div class="field">
                            <label>Confirm Password</label>
                            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                        </div>
                        <button name="submit" class="ui button" type="submit">Save</button>
                    </form>
                </div>
            </div><!--End of post-->
        </div><!--End of sub-content-->
        <div style="clear: both;"></div>
    </div><!-- end #content -->
</div> <!--end #page-->
<?php unset($_SESSION["error"]); ?>

<!--
<div class="ui grid middle aligned segment " style="height: 100%; margin: 0;">
  <div class="ui column center aligned">
    <div class="ui statistic">
      <div class="value">401</div>
      <div class="label">Error</div>
    </div>
    <div class="ui message ">
      <div class="header">Description</div>
      <p>Unauthorized</p>
    </div>
  </div>
</div>
-->

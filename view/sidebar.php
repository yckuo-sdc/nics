<!--siderbar-->
<div class="item">
    <a class="ui logo icon image" href="/"><img src="/images/logo.png"></a>
    <a href="/"><b>NICS TIP</b></a>
</div>
<div class="item">
	<div class="ui profile dropdown">
		<i class="user icon"></i> &nbsp <div class="text"><?=$_SESSION['displayname']?></div>
	  	<i class="dropdown icon"></i>
	  	<div class="menu">
			<a class="item" href="/password"><i class="edit icon"></i>修改密碼</a>
			<a class="item" href="/logout"><i class="sign-out icon"></i>登出</a>
	  	</div>
	</div>
</div>

<?php foreach(Menu::ITEM_ARRAY as $menu_item): ?>
    <div class="item">
        <div class="header"><?=$menu_item['header']?></div>
        <div class="menu">
            <?php foreach($menu_item['item'] as $item): ?>
                <a class="item" href="<?=$item['href']?>" target="<?=$menu_item['target']?>">
                    <?=$item['label']?>
                </a>
            <?php endforeach ?>
        </div>
    </div>
<?php endforeach ?>

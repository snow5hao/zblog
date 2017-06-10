<div id="header" class="clearfix">
    {if isset($zbp.members[1])}
		<div id="logo" class="sprite">
			<div class="sprite circle">
				<a href="{$host}" title="{name}"><img src="{$zbp.members[1].Avatar}" alt="{$zbp.members[1].Name}"></a>
			</div>
		</div>
		<div class="mod-right">
			<h1><a href="{$host}" title="{$name}">{$zbp.members[1].StaticName}</a></h1>
			<div class="description">{$zbp.members[1].Intro}</div>
            {/if}
			
				<div class="tools">
					<div><ul id="header_menu" class="clearfix">{module:navbar}</ul></div>
				</div>
				<form action="{$host}zb_system/cmd.php?act=search" method="post" class="search">
					<input class="ipt-txt" type="text" name="q" value="搜索" onblur="if(this.value == '') { this.value='搜索'}" onfocus="if (this.value == '搜索') {this.value=''}" />
					<input class="icon sb " type="submit" value="" title="搜索" />
				</form>
			
		</div>
</div>
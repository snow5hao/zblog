<div id="footer">

{if $type=='article' or $type=='page'} 
<div class="sprite navigation"><a class="btn-nav-prev" href="{$article.Prev.Url}" title="{$article.Prev.Title}"><span>上一篇</span></a><a href="{$article.Next.Url}" title="{$article.Next.Title}" class="btn-nav-next"><span>下一篇</span></a></div>
{else}
<a href="{$pagebar.nextbutton}"><span id="load-more" class="icon load-more"></span></a>
{/if}
{if $type=='index'&&$page=='1'}
    <div class="copyright">我的小伙伴们：<ul>{module:link}</ul></div>
{/if}

			<div class="copyright">
			&copy; <a href="{$host}" title="{$name}">{$name}</a> <span class="icon" title="Powered by">&#10084;</span> {$zblogphphtml}
			<span class="icon" title="Themed by">&#10047</span> {$copyright}
		</div>
</div>
<script type="text/javascript">
$('body').on('click','.post-main',function () {
	if (this.getAttribute ('data-type') != 'audio') {
		location.href=this.getAttribute ('data-url');
	}
});

$('.pages').hover(function () {
	$('.pages ul').stop().show('fast');
},function () {
	$('.pages ul').stop().hide('fast');
});

$('.search').hover(function () {
	$('.search .ipt-txt').stop().animate({width:110});
},function () {
	if ($('.search .ipt-txt:focus').length==0) {
		$('.search .ipt-txt').stop().animate({width:1});
	}
});
$('.search .ipt-txt').blur(function () {
	$('.search .ipt-txt').stop().animate({width:1});
});
</script>
<div class="bdsharebuttonbox"><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"32"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
</script>
<ul class="btn-panel"><li title="[用户登录]"><a href="{$host}zb_system/cmd.php?act=login" class="icon btn-login" target="_top">[用户登录]</a></li></ul>
{$footer}
</body>
</html>
{if $i%2 == 0}
<div class="post post-text post-left clearfix">
{else}
<div class="post post-text post-right clearfix">
{/if}
{php}
$i=$i+1;
{/php}
	<div class="post-date">
    <span class="icon day">{$article.Time('d')}</span>
    <span class="week"><a href="/?date={$article.Time('Y-m')}">{$article.Time('m月')}</a></span>
    <span class="date">{$article.Time('Y年m月d日')}</span>
    </div>
    <div class="post-content">
    	<div class="sprite post-main-bg">
        	<div class="sprite post-main" data-url="{$article.Url}" data-type="text">
            	<div class="mod-txt mod-text">
                <h2><a href="{$article.Url}" title="{$article.Title}">{$article.Title}</a></h2>
                <p>{php}$description = preg_replace('/[\r\n\s]+/', '', trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),180)).'...');{/php}
{$description}</p><p class="edui-filter-align-center"><br /></p>
                </div>
            </div>
         </div>
     <div class="sprite post-meta">
     	<div class="author-avatar"><img src="{$article.Author.Avatar}"></div>
        <h3>{$article.Author.Name}</h3>
        <div class="tags"><table><tbody><tr><td>{foreach $article.Tags as $tag}<a href="{$tag.Url}">{$tag.Name}</a>{/foreach}</td></tr></tbody></table></div><div class="like clearfix">{$article.Category.Name}<a class="hot-num" href="{$article.Url}">{$article.CommNums}℃</a></div></div></div></div>
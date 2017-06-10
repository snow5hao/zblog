<div class="list multi">
  <div class="list-title"><a href="{$article.Url}">{$article.Title}</a></div>
  <div class="list-info"> {$article.Time('Y年m月d日')} | 分类:<a href="{$category.Url}">{$article.Category.Name}</a> | 作者:<a href="{$author.Url}">{$article.Author.StaticName}</a> | 评论:<a href="{$article.Url}#comment">{$article.CommNums}</a>条评论 |  浏览:{$article.ViewNums}</div>
  <div class="list-body">{php}$description = preg_replace('/[\r\n\s]+/', '', trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),250)).'...');{/php}{$description}</div>
  <div class="list-footer">
    <div class="list-tags">{if $article.Tags}<div>{foreach $article.Tags as $tag}<a href="{$tag.Url}">#{$tag.Name}</a>{/foreach}</div>
{/if}</div>
    <div class="viewmore"><a href="{$article.Url}">阅读全文»</a></div>
    <div class="clear"></div>
  </div>
</div>

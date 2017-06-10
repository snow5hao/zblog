 <?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
		<h2 style="font-size:60px;margin-bottom:32px;">傻傻看不清楚！</h2>
</div>';die();?>

<h1 class="title">{$article.Title}</h1>
<small class="hui">{$article.Time('Y-m-d')} /  {$article.ViewNums} 次围观 / {$article.CommNums} 次吐槽  </small>


<div class="info-zi">{$article.Content}</div>

<div align="left">
{if !$article.IsLock}
{template:comments}
{/if}


</div>
</article>    
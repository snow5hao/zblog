{template:header}
</head>
<body class="single-page">
<div id="wrap">
	{template:top}
	<div id="main">
    {if $article.Type==ZC_POST_TYPE_ARTICLE}
	{template:post-single}
	{else}
	{template:post-page}
	{/if}
    </div>
</div>
{template:footer}

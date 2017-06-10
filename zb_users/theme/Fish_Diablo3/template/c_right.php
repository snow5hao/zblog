{if $type=='index'}  {* 首页 *}
	{template:sidebar}
{/if}

{if $type=='category'}  {* 分类页 *}
	{template:sidebar}
{/if}

{if $type=='article'} {* 日志页 *}
	{template:sidebar2}
{/if}

{if $type=='page'}  {* 独立页面 *}
	{template:sidebar3}
{/if}

{if $type=='author'}  {* 用户页 *}
	{template:sidebar}
{/if}

{if $type=='date'}  {* 日期页 *}
	{template:sidebar}
{/if}

{if $type=='tag'}  {* 标签页 *}
	{template:sidebar}
{/if}

{if $type==''}  {* 其他未知 *}
	{template:sidebar}
{/if}
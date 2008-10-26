{foreach from=$template.menu key=text item=href}
	<li><a href='{$href}'>{$text}</a></li>
{/foreach}

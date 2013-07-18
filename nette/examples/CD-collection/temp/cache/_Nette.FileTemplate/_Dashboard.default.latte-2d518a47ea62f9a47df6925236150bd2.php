<?php //netteCache[01]000404a:2:{s:4:"time";s:21:"0.89718600 1374185290";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:82:"C:\xampp\htdocs\nette\examples\CD-collection\app\templates\Dashboard\default.latte";i:2;i:1373623414;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"dc83a21 released on 2013-07-11";}}}?><?php

// source file: C:\xampp\htdocs\nette\examples\CD-collection\app\templates\Dashboard\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'lhx95jau09')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb5f1333aab8_content')) { function _lb5f1333aab8_content($_l, $_args) { extract($_args)
;call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars())  ?>

<p><a href="<?php echo htmlSpecialChars($_control->link("add")) ?>">Add new album</a></p>

<table class="grid">
<tr>
	<th>Title</th>
	<th>Artist</th>
	<th>&nbsp;</th>
</tr>

<?php $iterations = 0; foreach ($albums as $album): ?>
<tr>
	<td><?php echo Nette\Templating\Helpers::escapeHtml($album->title, ENT_NOQUOTES) ?></td>
	<td><?php echo Nette\Templating\Helpers::escapeHtml($album->artist, ENT_NOQUOTES) ?></td>
	<td>
		<a href="<?php echo htmlSpecialChars($_control->link("edit", array($album->id))) ?>
">Edit</a>
		<a href="<?php echo htmlSpecialChars($_control->link("delete", array($album->id))) ?>
">Delete</a>
	</td>
</tr>
<?php $iterations++; endforeach ?>
</table>
<?php
}}

//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lbab9fffdfca_title')) { function _lbab9fffdfca_title($_l, $_args) { extract($_args)
?><h1>My Albums</h1>
<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>

<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 
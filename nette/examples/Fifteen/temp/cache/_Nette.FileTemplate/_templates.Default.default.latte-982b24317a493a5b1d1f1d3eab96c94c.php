<?php //netteCache[01]000396a:2:{s:4:"time";s:21:"0.60313500 1374185310";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:74:"C:\xampp\htdocs\nette\examples\Fifteen\app\templates\Default.default.latte";i:2;i:1373623414;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"dc83a21 released on 2013-07-11";}}}?><?php

// source file: C:\xampp\htdocs\nette\examples\Fifteen\app\templates\Default.default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'aya6pow64x')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block _round
//
if (!function_exists($_l->blocks['_round'][] = '_lbff3df3548f__round')) { function _lbff3df3548f__round($_l, $_args) { extract($_args); $_control->validateControl('round')
?>round #<?php echo Nette\Templating\Helpers::escapeHtml($presenter['fifteen']->round + 1, ENT_NOQUOTES) ;
}}

//
// block _flash
//
if (!function_exists($_l->blocks['_flash'][] = '_lbf4552d2da9__flash')) { function _lbf4552d2da9__flash($_l, $_args) { extract($_args); $_control->validateControl('flash')
;if (isset($flash)): ?><h2><?php echo Nette\Templating\Helpers::escapeHtml($flash, ENT_NOQUOTES) ?>
</h2><?php endif ;
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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Fifteen - Nette Framework example</title>
	<link rel="stylesheet" media="screen" href="<?php echo htmlSpecialChars($basePath) ?>/css/style.css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo htmlSpecialChars($basePath) ?>/js/fifteen.js" type="text/javascript"></script>
	<script src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery.nette.js" type="text/javascript"></script>
</head>

<body>
	<h1>Fifteen example &ndash; <?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); } ?>
<span id="<?php echo $_control->getSnippetId('round') ?>"><?php call_user_func(reset($_l->blocks['_round']), $_l, $template->getParameters()) ?>
</span></h1>

	<div id="<?php echo $_control->getSnippetId('flash') ?>"><?php call_user_func(reset($_l->blocks['_flash']), $_l, $template->getParameters()) ?>
</div>
	<p><a class="ajax" href="<?php echo htmlSpecialChars($_control->link("fifteen:shuffle!")) ?>
">Shuffle!</a></p>

<?php $_ctrl = $_control->getComponent("fifteen"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?>
</body>
</html>
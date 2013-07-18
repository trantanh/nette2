<?php

/**
 * Nette\Forms Cross-Site Request Forgery (CSRF) protection example.
 */


require __DIR__ . '/../../Nette/loader.php';

use Nette\Forms\Form,
	Nette\Diagnostics\Debugger;

Debugger::enable();


$form = new Form;
$form->addProtection('Security token did not match. Possible CSRF attack.', 3);
$form->addHidden('id')->setDefaultValue(123);
$form->addSubmit('submit', 'Delete item');


if ($form->isSuccess()) {
	echo '<h2>Form was submitted and successfully validated</h2>';
	Debugger::dump($form->values);

	exit; // here is usually redirect to another page
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Nette\Forms CSRF protection example | Nette Framework</title>
	<link rel="stylesheet" media="screen" href="files/style.css" />
</head>

<body>
	<h1>Nette\Forms CSRF protection example</h1>

	<?php echo $form ?>
</body>
</html>

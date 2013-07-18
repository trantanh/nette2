<?php

/**
 * Test: Nette\DI\Container magic properties.
 *
 * @author     David Grudl
 * @package    Nette\DI
 */

use Nette\DI\Container;


require __DIR__ . '/../bootstrap.php';


class Service
{
}

$one = new Service;
$two = new Service;


$container = new Container;
$container->one = $one;
$container->addService('two', 'Service');
$container->three = function(){
	return new Service;
};

Assert::true( isset($container->one) );
Assert::true( isset($container->two) );
Assert::true( isset($container->three) );
Assert::false( isset($container->undefined) );

Assert::same( $one, $container->one );
Assert::type( 'Service', $container->two );
Assert::same( $container->two, $container->getService('two') );
Assert::type( '\Closure', $container->three );
Assert::true( isset($container->one) );
Assert::true( isset($container->two) );
Assert::true( isset($container->three) );
Assert::false( isset($container->undefined) );

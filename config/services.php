<?php

$container = \Bolero\Framework\Web\Container::provide();
$container = \Bolero\Plugins\Authentication\Container::provide($container);
$container = \Bolero\Plugins\FlashMessage\Container::provide($container);
$container->add('template-renderer-factory', \App\Factories\TwigFactory::class);

return $container;

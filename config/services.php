<?php

use App\Factories\TwigFactory;
use Bolero\Plugins\FlashMessage\Container;

$container = \Bolero\Framework\Web\Container::provide();
$container = \Bolero\Plugins\Authentication\Container::provide($container);
$container = Container::provide($container);
$container->add('template-renderer-factory', TwigFactory::class);

return $container;

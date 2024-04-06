<?php

namespace App\Factories;

use Bolero\Framework\Template\AbstractTwigFactory;
use Twig\Environment;

class TwigFactory extends AbstractTwigFactory
{
    public static function extendsTemplate(Environment $twig): Environment
    {
        $twig = \Bolero\Framework\Template\TwigFactory::extendsTemplate($twig);
        $twig = \Bolero\Plugins\Authentication\Factories\TwigFactory::extendsTemplate($twig);
        $twig = \Bolero\Plugins\FlashMessage\Factories\TwigFactory::extendsTemplate($twig);

        return $twig;
    }

}

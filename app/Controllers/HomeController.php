<?php

namespace App\Controllers;

use App\Widgets\Dummy;
use Bolero\Framework\Http\Response;
use Bolero\Framework\MVC\AbstractController;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class HomeController extends AbstractController
{
    public function __construct(private readonly Dummy $widget)
    {
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function index(): Response
    {
        return $this->render('Home', ['name' => $this->widget->name]);
    }
}

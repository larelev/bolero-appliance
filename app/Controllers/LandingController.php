<?php

namespace App\Controllers;

use App\Widgets\Dummy;
use Bolero\Framework\Http\Response;
use Bolero\Framework\MVC\AbstractController;

class LandingController extends AbstractController
{
    public function __construct(private Dummy $widget)
    {
    }

    public function index(): Response
    {
        return $this->render('Landing', ['name' => $this->widget->name]);
    }
}

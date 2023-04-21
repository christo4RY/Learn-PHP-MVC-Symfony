<?php

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Templating\Loader\FilesystemLoader;
use Symfony\Component\Templating\PhpEngine;
use Symfony\Component\Templating\Helper\SlotsHelper;
use Symfony\Component\Templating\TemplateNameParser;

function view($view, $data = [], $code = 200)
{
    extract($data);
    $filesystemLoader = new FilesystemLoader(__DIR__.'/../../views/%name%');
    $templating = new PhpEngine(new TemplateNameParser(), $filesystemLoader);
    $templating->set(new SlotsHelper());
    return new Response($templating->render($view.".php", $data), $code);
}

function redirect($path)
{
    return new Response("", 301, ['location'=>$path]);
}

function notFound()
{
    echo "not found";
    die();
}

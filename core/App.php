<?php

namespace core;

use core\Response\Response_interface\iResponse;
use core\Router\RouteContainer;
use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;

require "database.php";
require "helpers.php";


class App
{
    public static function Init()
    {
        require '../route/roadmap.php';
        $url = $_SERVER['REQUEST_URI'];
        $type = strtolower($_SERVER['REQUEST_METHOD']);
        $response_arr = RouteContainer::Searcher($url, $type,array_merge(self::preparePostArray(),self::prepareGetArray()));
        databaseClose();
        $page = 'index.html';
        self:self::Run($page,$response_arr);

    }

    private static function Run(string $page, array $data = [])
    {
        $loader = new FilesystemLoader('../templates');
        $twig = new Environment($loader, ['debug' => true]);
        $template = $page . ".html";
        echo $twig->render($template, $data);
    }

    private static function prepareGetArray(): array
    {
        $data = [];
        return $data['get'] = $_GET;
    }

    private static function preparePostArray(): array
    {
        $data = [];
        return $data['post'] = $_POST;
    }
}
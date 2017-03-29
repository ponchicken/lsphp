<?php

if ($app['auth']) {
  Request::redirectTo('profile');
}


require_once 'core/MailTo.php';
require_once 'core/handlers/register.php';

require_once 'core/Menu.php';

$menu = new Menu();

$template = $twig->load('register.twig');
echo $template->render([
    'post' => $_POST,
    'menu' => $menu->list,
    'title' => 'Регистрация',
    'h1' => 'Регистрация'
]);
//require_once 'views/register.view.php';


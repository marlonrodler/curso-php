<?php

class LoginController
{
    public function index()
    {
        $loader = new \Twig\Loader\FilesystemLoader('src/view');
        $twig = new \Twig\Environment($loader, [
            'cache' => '/path/to/compilation_cache',
            'auto_reload' => true,
        ]);

        $template = $twig->load('login.html');
            $parameters['error'] = $_SESSION['msg_error'] ?? null;

        return $template->render($parameters);
    }

    public function check()
    {
        try {
            $user = new user;
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
            $user->validateLogin();

            header('Location: http://localhost/curso-php/dashboard');
        } catch (\Exception $e) {
            $_SESSION['msg_error'] = array('msg' => $e->getMessage(), 'count' => 0);

            header('Location: http://localhost/curso-php/');
        }
    }
}

<?php

namespace Myapp\Controller;

class Index extends \Myapp\Controller
{

    public function run()
    {
        if (!$this->isLoggedIn()) {
            // login
            header('Location: ' . SITE_URL . '/login.php');
            exit;
        }

        // get usres info
    }
}
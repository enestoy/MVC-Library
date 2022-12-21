<?php
class main extends controller
{

    public function index()
    {

        $this->render('includes/header');
        $this->render('home');
        $this->render('includes/footer');

    }

}
<?php
class HomeController
{
    public function index()
    {
        // Cargar vista
        require __DIR__ . '/../views/auth/landing.html';
    }
}

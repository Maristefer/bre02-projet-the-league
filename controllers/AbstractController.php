<?php

abstract class AbstractController 
{
    private \Twig\Environment $twig;
    public function __construct()
    {
        $loader = new \Twig\Loader\FilesystemLoader('templates');
        $twig = new \Twig\Environment($loader,[
            'debug' => true,
        ]);

        $twig->addExtension(new \Twig\Extension\DebugExtension());

        $this->twig = $twig;
    }
    //méthode d'affichage
    protected function render(string $template, array $data) : void
    {
        echo $this->twig->render($template, $data);
    }
}
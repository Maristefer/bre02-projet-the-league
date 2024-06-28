<?php

class PlayerController extends AbstractController
{
    public function players(): void
    {
        echo "je suis la page players"; 
    }
    
    public function player(): void
    {
        echo "je suis la page player"; 
    }
}
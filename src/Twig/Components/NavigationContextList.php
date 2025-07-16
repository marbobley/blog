<?php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

/**
 * To list available path on navitation context 
 * To use , you need to create a navigation context
 */
#[AsTwigComponent]
class NavigationContextList
{
    public string $navigationContext = 'articles';
}


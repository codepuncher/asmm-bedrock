<?php

declare(strict_types=1);

namespace App\View\Composers;

use Log1x\Navi\Facades\Navi;
use Roots\Acorn\View\Composer;

class Header extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.header',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with(): array
    {
        return [
            'menu' => $this->getMenu(),
        ];
    }

    /**
     * Returns the site menu.
     *
     * @return array
     */
    public function getMenu(): array
    {
        if (Navi::build()->isEmpty()) {
            return [];
        }

        return Navi::build()->toArray();
    }
}

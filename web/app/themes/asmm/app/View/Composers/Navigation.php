<?php

declare(strict_types=1);

namespace App\View\Composers;

use Log1x\Navi\Facades\Navi;
use Roots\Acorn\View\Composer;

class Navigation extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.nav.desktop',
        'partials.nav.mobile',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with(): array
    {
        return [
            'items' => $this->getMenu(),
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

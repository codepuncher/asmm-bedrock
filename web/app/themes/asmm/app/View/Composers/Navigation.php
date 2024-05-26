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
            'items' => $this->menu(),
        ];
    }

    /**
     * Returns the site menu.
     *
     * @return array
     */
    public function menu(): array
    {
        if (Navi::build()->isEmpty()) {
            return [];
        }

        return array_map([$this, 'addItemClasses'], Navi::build()->toArray());
    }

    protected function addItemClasses(object $parent): object
    {
        $baseClasses = 'text-yellow-500 px-3 py-2 text-sm font-medium transition-colors';
        $parent->classes .= " {$baseClasses}";

        if (empty($parent->children)) {
            return $parent;
        }

        $parent->children = array_map(static function (object $item): object {
            $baseClasses = [
                'bg-blue-dark',
                'text-yellow-500',
                'text-sm',
                'block',
                'p-3',
                'hover:bg-yellow-500',
                'hover:text-blue-dark',
                'transition-colors',
            ];
            $baseClasses = implode(' ', $baseClasses);
            $item->classes .= " {$baseClasses}";

            return $item;
        }, array_values($parent->children));

        return $parent;
    }
}

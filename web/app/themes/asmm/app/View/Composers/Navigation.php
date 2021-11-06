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

        return array_map([$this, 'setItemClasses'], Navi::build()->toArray());
    }

    protected function setChildItemClasses(object $item, int $index, object $parent): object
    {

        return $item;
    }

    protected function setItemClasses(object $parent): object
    {
        $baseClasses = 'text-white px-3 py-2 text-sm font-medium transition-colors border-b-2 border-transparent hover:text-green hover:border-green';
        $activeClasses = "{$baseClasses} border-green";
        $inactiveClasses = "{$baseClasses} hover:border-b hover:border-green";
        $additionalParentclasses = $parent->active ? $activeClasses : $inactiveClasses;
        $parent->classes .= " {$additionalParentclasses}";

        if (empty($parent->children)) {
            return $parent;
        }

        $parentChildrenCount = count($parent->children);
        $parent->children = array_map(function (object $item, int $index) use ($parentChildrenCount): object {
            $baseClasses = 'bg-white text-green text-sm block p-3 hover:bg-green hover:text-white';
            $item->classes .= " {$baseClasses}";

            return $item;
        }, array_values($parent->children), array_keys($parent->children));

        return $parent;
    }
}

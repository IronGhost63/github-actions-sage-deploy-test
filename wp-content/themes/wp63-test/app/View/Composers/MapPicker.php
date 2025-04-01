<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class MapPicker extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var string[]
     */
    protected static $views = [
        'template-map'
    ];

    protected function Locations() {
        return array_map( fn( $item ) => [
            'key' => hash( 'crc32', "{$item['geo']['lat']}{$item['geo']['lng']}" ),
            'name' => $item['detail']['name'],
            'description' => $item['detail']['description'],
            'lat' => $item['geo']['lat'],
            'lng' => $item['geo']['lng']
        ], get_field('locations') ?: []);
    }

    public function with() {
        return [
            'locations' => $this->Locations(),
        ];
    }
}

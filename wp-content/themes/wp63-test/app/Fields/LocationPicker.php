<?php

namespace App\Fields;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Field;

class LocationPicker extends Field
{
    /**
     * The field group.
     */
    public function fields(): array
    {
        $fields = Builder::make('location_picker');

        $fields
            ->setLocation('page_template', '==', 'template-map.blade.php');

        $fields
            ->addRepeater('locations', [
                'layout' => 'block',
            ])
                ->addGroup('detail', [
                    'wrapper' => [
                        'width' => '50%'
                    ]
                ])
                    ->addText('name')
                    ->addWysiwyg('description')
                ->endGroup()
                ->addGoogleMap('geo', [
                    'center_lat' => '18.457061817444956',
                    'center_lng' => '99.4897808151858',
                    'zoom' => '8',
                    'wrapper' => [
                        'width' => '50%'
                    ]
                ])
            ->endRepeater();

        return $fields->build();
    }
}

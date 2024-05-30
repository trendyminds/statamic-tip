<?php

namespace Trendyminds\Tip\Fieldtypes;

use Statamic\Fields\Fieldtype;

class Tip extends Fieldtype
{
    /**
     * The blank/default value.
     *
     * @return array
     */
    public function defaultValue()
    {
        return null;
    }

    /**
     * Pre-process the data before it gets sent to the publish page.
     *
     * @param  mixed  $data
     * @return array|mixed
     */
    public function preProcess($data)
    {
        return $data;
    }

    /**
     * Process the data before it gets saved.
     *
     * @param  mixed  $data
     * @return array|mixed
     */
    public function process($data)
    {
        return $data;
    }

    protected $icon = 'content-writing';

    protected function configFieldItems(): array
    {
        return [
            'style' => [
                'display' => 'Style',
                'instructions' => 'Choose which style to use',
                'type' => 'select',
                'default' => 'tip',
                'options' => [
                    'tip' => __('Tip'),
                    'warning' => __('Warning'),
                    'error' => __('Error'),
                ],
                'width' => 100,
            ],
        ];
    }
}

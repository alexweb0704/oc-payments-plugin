<?php namespace GeeksLab\Payments;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
        return [
        'settings' => [
            'label'       => 'Платежки',
            'description' => 'Настройки платежек на сайте',
            'category'    => 'Для фанатов',
            'icon'        => 'icon-pay',
            'class'       => \GeeksLab\Payments\Models\Settings::class,
            'order'       => 500,
            'keywords'    => 'платежки',
            'permissions' => ['geekslab.payments.settings'],
        ]
    ];
    }
}

<?php namespace GeeksLab\Payments;

use System\Classes\PluginBase;
use Backend;
 
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
        ],
        'types' => [
            'label'       => 'Способы оплаты',
            'description' => 'Настройки способа оплаты на сайте',
            'category'    => 'Для фанатов',
            'icon'        => 'icon-pay',
            'url'         => Backend::url('geekslab/payments/types'),
            'order'       => 501,
            'keywords'    => 'способ оплаты',
            'permissions' => ['geekslab.payments.settings'],
        ],
        'transactions' => [
            'label'       => 'Транзакции',
            'description' => 'Транзакции платежей',
            'category'    => 'Для фанатов',
            'icon'        => 'icon-pay',
            'url'         => Backend::url('geekslab/payments/transactions'),
            'order'       => 502,
            'keywords'    => 'транзакции',
            'permissions' => ['geekslab.payments.settings'],
        ]
    ];

    }
}

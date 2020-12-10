<?php namespace GeeksLab\Payments\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Types extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'geekslab_payments_types' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('GeeksLab.Payments', 'main-menu-item');
    }
}

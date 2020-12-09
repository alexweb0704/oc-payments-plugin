<?php namespace GeeksLab\Payments\Models;

use Model;

/**
 * Model
 */
class Settings extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'geekslab_payments_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';


    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}

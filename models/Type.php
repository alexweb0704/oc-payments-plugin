<?php namespace GeeksLab\Payments\Models;

use Model;

/**
 * Model
 */
class Type extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'geekslab_payments_types';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    public function getGatewayOptions() {
        return[];
    }
    public function getModelOptions() {
        return[];
    }
    public $jsonable = ['settings'];
    
}

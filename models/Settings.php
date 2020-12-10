<?php namespace GeeksLab\Payments\Models;

use Model;
use System\Classes\PluginManager;
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
    public function getModelClassOptions($key,$data)
    {

        foreach (PluginManager::instance()->getPlugins() as $code => $plugin) {
            $modelsPath = PluginManager::instance()->getPluginPath($code) . '/models';
            if (PluginManager::instance()->exists($code) && is_dir($modelsPath)) {
                $models = $models2 = scandir($modelsPath);
                foreach ($models as $modelFile){

                    $nameSpaceModel = explode('.',$code);
                    if (is_array($nameSpaceModel)) $nameSpaceModel = array_map(function ($item) {
				        return ucwords(trim($item));
			    	}, $nameSpaceModel);

                	if(!is_dir($modelsPath . '/' . $modelFile) && !in_array($modelFile, ['.php'])){
                		$modelFile = explode('.',$modelFile);
                		$modelFile = is_array($modelFile) ? trim($modelFile[0]) : '';
                        $options['\\'.implode('\\',$nameSpaceModel).'\\Models\\'.$modelFile] 
                            = $nameSpaceModel[0].'.'.e(trans($plugin->pluginDetails()['name'])).'->'.$modelFile;
                	}
                }
            }
        }

        return $options;
    }

    public function getModelNameValue($key, $data)
    {
        return 'asdas';
    }

    public function getIdColumnOptions($key, $data)
    {

        if (!isset($data->modelClass)) {
            return [];
        }
        
        if (class_exists($data->modelClass))
        {
            $options = [];
	        if (($model = new $data->modelClass())->methodExists('getConnection'))
	        {
		        $fields = $model->getConnection()->getSchemaBuilder()->getColumnListing($model->getTable());
		        foreach  ($fields as $value)
                {
                    $options[$value] = $value;
                }
			}
            return $options;
		}
    }
    public function getModelColumnOptions($key, $data)
    {

        if (!isset($data->modelClass)) {
            return [];
        }
        
        if (class_exists($data->modelClass))
        {
            $options = [];
	        if (($model = new $data->modelClass())->methodExists('getConnection'))
	        {
		        $fields = $model->getConnection()->getSchemaBuilder()->getColumnListing($model->getTable());
		        foreach  ($fields as $value)
                {
                    $options[$value] = $value;
                }
			}
            return $options;
		}
    }

    public function getPageOptions()
    {
        return \Cms\Classes\Page::lists('title','fileName');
    }
}

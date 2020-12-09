<?php namespace GeeksLab\Payments\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGeekslabPaymentsTypes extends Migration
{
    public function up()
    {
        Schema::create('geekslab_payments_types', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('geekslab_payments_types');
    }
}

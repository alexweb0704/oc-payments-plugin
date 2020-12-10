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
            $table->string('name');
            $table->string('model');
            $table->string('type');
            $table->string('gateway');
            $table->string('code');
            $table->text('description');
            $table->text('settings');
            $table->boolean('is_active')->default(0);
            $table->integer('sort_order')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('geekslab_payments_types');
    }
}
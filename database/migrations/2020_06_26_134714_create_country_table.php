<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $date = new DateTime();
        $unixTimeStamp = $date->getTimestamp();

        Schema::connection('main')->create('country', function (Blueprint $table) {
            $table->increments('id',true)->unsigned();
            $table->string('code', 3)->default('');
            $table->string('name', 99)->default('');
            $table->string('dname', 99)->default('');
            $table->smallInteger('num_code');
            $table->mediumInteger('phone_code');
            $table->integer('created')->unsigned();
            $table->integer('register_by')->unsigned();
            $table->integer('modified')->unsigned();
            $table->integer('modified_by')->unsigned();
            $table->boolean('record_deleted')->default(0);

            $table->engine = 'InnoDB';
        });

        DB::connection('main')->table('country')->insert([
            'code' => 'in',
            'name' => 'India',
            'dname' => 'India',
            'num_code' => 0,
            'phone_code' => 91,
            'created' => $unixTimeStamp,
            'register_by' => 1,
            'modified' => $unixTimeStamp,
            'modified_by' => 1

        ]);

        Schema::connection('main')->create('country_state', function (Blueprint $table) {
            $table->increments('id',true)->unsigned();
            $table->integer('country_id')->unsigned();
            $table->string('name', 99)->default('');
            $table->string('code', 10)->default('');

            $table->integer('created')->unsigned();
            $table->integer('register_by')->unsigned();
            $table->integer('modified')->unsigned();
            $table->integer('modified_by')->unsigned();
            $table->boolean('record_deleted')->default(0);

            $table->engine = 'InnoDB';
        });

        Schema::connection('main')->table('country_state', function (Blueprint $table) {
            $table->foreign('country_id')->references('id')->on('country');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('country');
    }
}

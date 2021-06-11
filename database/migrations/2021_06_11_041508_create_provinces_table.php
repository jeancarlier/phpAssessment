<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvincesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provinces', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('country_id');
            $table->string('value');            
            $table->timestamps();
        });

        $data = [
            ['id' => '1', 'country_id'=>'1', 'value'=>'AB'],
            ['id' => '2', 'country_id'=>'1', 'value'=>'BC'],
            ['id' => '3', 'country_id'=>'1', 'value'=>'MB'],
            ['id' => '4', 'country_id'=>'1', 'value'=>'NB'],
            ['id' => '5', 'country_id'=>'1', 'value'=>'NL'],
            ['id' => '6', 'country_id'=>'1', 'value'=>'NS'],
            ['id' => '7', 'country_id'=>'1', 'value'=>'ON'],
            ['id' => '8', 'country_id'=>'1', 'value'=>'PE'],
            ['id' => '9', 'country_id'=>'1', 'value'=>'QC'],            
            ['id' => '10', 'country_id'=>'1', 'value'=>'SK'],
            ['id' => '11', 'country_id'=>'2', 'value'=>'AL'],
            ['id' => '12', 'country_id'=>'2', 'value'=>'AK'],
            ['id' => '13', 'country_id'=>'2', 'value'=>'AZ'],
            ['id' => '14', 'country_id'=>'2', 'value'=>'AR'],
            ['id' => '15', 'country_id'=>'2', 'value'=>'CA'],
            ['id' => '16', 'country_id'=>'2', 'value'=>'CO'],
            ['id' => '17', 'country_id'=>'2', 'value'=>'CT'],
            ['id' => '18', 'country_id'=>'2', 'value'=>'DE'],
            ['id' => '19', 'country_id'=>'2', 'value'=>'FL'],
            ['id' => '20', 'country_id'=>'2', 'value'=>'GA']
        ];
        
        DB::table('provinces')->insert($data);     

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provinces');
    }
}

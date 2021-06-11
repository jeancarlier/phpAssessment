<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('value');
            $table->timestamps();
        });

        $data = [
            ['id' => '1', 'value'=>'Home'],
            ['id' => '2','value'=>'Work'],
            ['id' => '3','value'=>'Other'],                                   
        ];
        
        DB::table('address_types')->insert($data);        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address_types');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Partner');
            $table->string('ContractNumber');
            $table->date('ContractStartDate');
            $table->date('ContractEndDate');
            $table->string('ContractCategory');
        });
    }

    // public function contract_details() {
    //     return $this-> hasMany(contract_details::class);
    //     }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}

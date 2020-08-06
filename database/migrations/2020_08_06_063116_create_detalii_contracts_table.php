<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetaliiContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalii_contracts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('contract_id');
            $table->string('item_name');
            $table->float('qtty');
            $table->float('price');
            $table->float('value');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalii_contracts');
    }
}

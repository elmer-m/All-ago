<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDescricaoToAnuncioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Check if the column exists before adding it
        if (!Schema::hasColumn('anuncio', 'descricao')) {
            Schema::table('anuncio', function (Blueprint $table) {
                $table->string('descricao', 9000);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Check if the column exists before removing it
        if (Schema::hasColumn('anuncio', 'descricao')) {
            Schema::table('anuncio', function (Blueprint $table) {
                $table->dropColumn('descricao');
            });
        }
    }
}

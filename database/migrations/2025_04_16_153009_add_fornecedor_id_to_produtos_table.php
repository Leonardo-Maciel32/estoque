<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(){
         Schema::table('produtos', function (Blueprint $table) {
        $table->unsignedBigInteger('fornecedor_id')->nullable()->after('id');
        $table->foreign('fornecedor_id')->references('id')->on('fornecedors')->onDelete('set null');
    });
 }

    /**
     * Reverse the migrations.
     */
    public function down(){
        Schema::table('produtos', function (Blueprint $table) { $table->dropForeign(['fornecedor_id']); 
        $table->dropColumn('fornecedor_id'); }); }
};

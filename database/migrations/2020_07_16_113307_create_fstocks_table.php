<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFstocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fstocks', function (Blueprint $table) {
            $table->id();
            $table->date('dateOperation');
            $table->string('operation');
            $table->integer('quantiteEntree');
            $table->integer('quantiteSortie');
            $table->date('datePeremption');
            $table->integer('prixAchat');
            
            $table->integer('article_id')->unsigned();
                $table->foreign('article_id')->references('id')->on('articles');
            $table->integer('client_id')->unsigned();
                $table->foreign('client_id')->references('id')->on('clients');
            $table->integer('boutique_id')->unsigned();
                $table->foreign('boutique_id')->references('id')->on('boutiques');
            $table->integer('fournisseur_id')->unsigned();
                $table->foreign('fournisseur_id')->references('id')->on('fournisseurs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fstocks');
    }
}

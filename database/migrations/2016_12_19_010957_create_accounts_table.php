<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('first_name');
            $table->enum('sex', ['homme', 'femme', 'inconnu']);
            $table->string('address');
            $table->char('postal_code', 5);
            $table->string('city');
            $table->string('country');
            $table->char('phone', 10);
            $table->char('mobile_phone', 10);
            $table->string('description');
            $table->string('photo');
            $table->integer('user_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('accounts', function (Blueprint $table) {
            $table->dropForeign('accounts_user_id_foreign');
        });

        Schema::dropIfExists('accounts');
    }
}

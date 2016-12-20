<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->string('address');
            $table->char('postal_code', 5);
            $table->string('city');
            $table->string('country');
            $table->integer('organizer_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->timestamps();

            $table->foreign('organizer_id')
                ->references('id')
                ->on('organizers')
                ->onDelete('restrict')
                ->onUpgrade('restrict');
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('restrict')
                ->onUpgrade('restrict');
            $table->foreign('type_id')
                ->references('id')
                ->on('types')
                ->onDelete('restrict')
                ->onUpgrade('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropForeign('events_organizer_id_foreign');
            $table->dropForeign('events_category_id_foreign');
            $table->dropForeign('events_type_id_foreign');
        });

        Schema::dropIfExists('events');
    }
}
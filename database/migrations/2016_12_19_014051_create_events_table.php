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
            $table->dateTime('start_date')->default(\Carbon\Carbon::now());
            $table->dateTime('end_date')->default(\Carbon\Carbon::now());;
            $table->string('address');
            $table->char('postal_code', 5);
            $table->string('city');
            $table->string('country');
            $table->boolean('is_publish')->default(false);
            $table->integer('organizer_id')->unsigned()->index();
            $table->integer('category_id')->unsigned()->index();
            $table->integer('type_id')->unsigned()->index();
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

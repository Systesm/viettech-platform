<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ControlsMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type')->unique(); // 'admin', 'frontend' ...
            $table->string('display_name'); // 'Admin Menus', 'frontend menus'  ...
            $table->timestamps();
        });

        Schema::create('menu_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->unsigned();
            $table->foreign('parent_id')->references('id')->on('menus');
            // $table->string('name');
            // $table->string('slug')->unique();
            $table->string('controls');
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
        //
        Schema::dropIfExists('menus');
        Schema::dropIfExists('menu_details');
    }
}

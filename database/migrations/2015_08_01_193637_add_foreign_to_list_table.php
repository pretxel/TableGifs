<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignToListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('list', function (Blueprint $table) {
          $table->integer('invite_id')->unsigned();
          $table->integer('item_id')->unsigned();
          $table->foreign('invite_id')->references('id')->on('invite');
          $table->foreign('item_id')->references('id')->on('item');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('list', function (Blueprint $table) {
          $table->dropForeign('list_invite_id_foreign');
          $table->dropForeign('list_item_id_foreign');
          $table->dropColumn('invite_id');
          $table->dropColumn('item_id');
        });
    }
}

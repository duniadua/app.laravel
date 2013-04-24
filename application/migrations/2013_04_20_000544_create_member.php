<?php

class Create_Member {

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up() {
        //
        Schema::create('member', function($table) {

                    $table->increments('id');
                    $table->string('nama', 32);
                    $table->integer('usia');
                    $table->string('password', 64);
                    $table->timestamps();
                });
    }

    /**
     * Revert the changes to the database.
     *
     * @return void
     */
    public function down() {
        //
        Schema::drop('member');
    }

}
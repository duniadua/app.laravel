<?php

class Create_Info_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//
             Schema::create('info', function($table) {
                    // auto incremental id (PK)
                    $table->increments('id');
                    // varchar 32
                    $table->text('detail')->nullable();
                    // int
                    $table->integer('active')->default(0);
                    // boolean
                    $table->string('user',20)->nullable();
                    $table->string('ip_address',60)->nullable();
                    $table->timestamps();
                });
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		//
            Schema::drop('info');
	}

}
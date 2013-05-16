<?php

class Add_Authors {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('authors')->insert(array(
			'name' => 'Author 1',
			'bio' => 'Author 1 bio',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s'),
			));
		
		DB::table('authors')->insert(array(
			'name' => 'Author 1',
			'bio' => 'Author 1 bio',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s'),
			));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('authors')->where('name','=','Author 1')->delete();
		DB::table('authors')->where('name','=','Author 2')->delete();
	}

}
<?php

use Illuminate\Database\Seeder;

class CatagoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catagories')->insert([
            ['name'=>'Novel'],
            ['name'=>'Romance'],
            ['name'=>'Education'],
            ['name'=>'Adventure'],
            ['name'=>'Law'],
            ['name'=>'Self Help']
        ]);
    }
}

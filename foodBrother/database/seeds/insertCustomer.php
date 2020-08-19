<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class insertCustomer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert(
            [
                'name'=> 'NguyenTheAnh',
                'gender'=>'1',
                'email'=> '123',
                'adress'=> '123',
                'phone'=> '123',
                'password' => Hash::make('123'),
            ]);
        DB::table('customers')->insert(
            [
                'name'=> 'TranCongDung',
                'gender'=>'1',
                'email'=> '123',
                'adress'=> '123',
                'phone'=> '123',
                'password' => Hash::make('123'),
            ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            insertCus::class,
            insertPro::class,
        ]);
    }

}
// class deleteCustomer extends Seeder{
//     public function run(){
//     DB::table('customer')->delete();
//     }
// }
class insertPro extends Seeder{
    public function run(){
        DB::table('products')->insert(
            [
                'name'=> 'cơm chiên',
                'unit_price'=>100000,
                'promotion_price'=>10,
                'quantity'=>1000,
                'description'=>'gom com ca rot dau trung',
                'image' => "public/img_food/food_content/1.jfif",
            ]);
            DB::table('products')->insert(
                [
                    'name'=> 'Cá mú',
                    'unit_price'=>500000,
                    'promotion_price'=>10,
                    'quantity'=>1000,
                    'description'=>'Cá mú nấu cháo có sen đậu',
                    'image' => "public/img_food/food_content/2.jfif",
                ]);
            DB::table('products')->insert(
                [
                    'name'=> 'Mực hấp',
                    'unit_price'=>50000,
                    'promotion_price'=>10,
                    'quantity'=>1000,
                    'description'=>'Mực hấp',
                    'image' => "public/img_food/food_content/3.jfif",
                ]);
            DB::table('products')->insert(
                [
                    'name'=> 'Bò hấp',
                    'unit_price'=>100000,
                    'promotion_price'=>10,
                    'quantity'=>1000,
                    'description'=>'Bò hấp lá chanh',
                    'image' => "public/img_food/food_content/1.jfif",
                ]);

    }
}
class insertCus extends Seeder{
    public function run(){
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

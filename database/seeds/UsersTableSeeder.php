<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
          'name' => 'Samsung',
        ]);
        DB::table('brands')->insert([
          'name' => 'Iphone',
        ]);
        DB::table('models')->insert([
          'name' => 'XS',
          'brand_id' => 1,
        ]);
        DB::table('models')->insert([
          'name' => 'XR',
          'brand_id' => 1,
        ]);
        DB::table('models')->insert([
          'name' => 'Galaxy S8',
          'brand_id' => 2,
        ]);
        DB::table('type_of_goods')->insert([
          'name' => 'phone',
        ]);
        DB::table('type_of_goods')->insert([
          'name' => 'tablet',
        ]);
        DB::table('order_statuses')->insert([
          'name' => 'ordered',
        ]);
        DB::table('order_statuses')->insert([
          'name' => 'paid',
        ]);
        DB::table('order_statuses')->insert([
          'name' => 'delivered',
        ]);
        DB::table('users')->insert([
          'name' => 'Ivan',
          'surname' => 'Petrov',
          'email' => 'petrov@mail.ru',
          'phone' => '892878945623',
          'password' => 'ivan111',
        ]);
        DB::table('catalog')->insert([
          'model_id' => 1,
          'quantity' => 10,
          'price' => 70000,
        ]);
        DB::table('catalog')->insert([
          'model_id' => 2,
          'quantity' => 5,
          'price' => 60000,
        ]);
        DB::table('orders')->insert([
          'user_id' => 1,
          'catalog_id' => 1,
          'quantity' => 1,
          'order_status_id' => 1,
        ]);
    }
}

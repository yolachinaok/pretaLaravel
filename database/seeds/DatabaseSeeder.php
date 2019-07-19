<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
     {
       
      factory(User::class,20)->create();

      DB::table('categories')->insert(
         [
           ['name'=> 'denim'],
           ['name'=> 'tops'],
           ['name'=> 'outerwear'],
           ['name'=> 'dresses']
         ]
       );
     }
   }

    //   OTRA FORMA
    //   DB::table('products')->insert(
    //     [
    //       ['name'=> '', 'price'=>''],
    //       ['name'=> '', 'price'=>''],
    //       ['name'=> '', 'price'=>''],
    //       ['name'=> '', 'price'=>'']
    //     ]
    //   );

      //   UNA FORMA
      // Product::create(
      //   [
      //     'name'=>'',
      //     'price'=>'',
      //     'description'=>'',
      //     'category_id'=>'',
      //     'discount'=>'',
      //     'photo1'=>'',
      //     'photo2'=>'',
      //     'photo3'=>'',
      //   ]
      // );

        // OTRA FORMA MAS
        // hay que crear un seeder especifico de productos y llamarlo, dentro del seeder va a estar el run con las instrucciones de que ejecutar
        // $this->call(UsersTableSeeder::class);

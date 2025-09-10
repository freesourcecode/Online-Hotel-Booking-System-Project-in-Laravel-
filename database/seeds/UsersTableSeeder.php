<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->truncate();
        DB::table('users')->insert([
            'first_name' => "Jude",
            'last_name' => "Suares",
            'gender' => "Male",
            'phone' => "09103456721",
            'address' => "Brgy.Suay,Himamaylan City",
            'email' => "jude@gmail.com",
            'password' => bcrypt('password'),
            'avatar' => 'girl-1.png',
            'about' => "hello from the other world",
            'status' => TRUE,
            'remember_token' => str_random(10),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'first_name' => "admin",
            'last_name' => "admin",
            'gender' => "male",
            'phone' => "0912118872",
            'address' => "Brgy.Enclaro,Binalbagan,Negros Occidental",
            'email' => "admin@gmail.com",
            'password' => bcrypt('password'),
            'avatar' => 'boy-1.png',
            'about' => "hello from the other world",
            'role' => 'admin',
            'status' => TRUE,
            'remember_token' => str_random(10),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        factory(App\Model\User::class, 10)->create();
    }
}

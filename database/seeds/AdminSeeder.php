<?php

use Illuminate\Database\Seeder;
use App\Admin;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Admin = new Admin;
        $Admin -> firstname = "Admin";
        $Admin->lastname = "admin";
       $Admin->email = "admin@gmail.com";
       $Admin->state = "Nepal";
       $Admin->specialization = "Admin";      
       $Admin->password = "admin123";      
      
       $Admin->save();
    }
}

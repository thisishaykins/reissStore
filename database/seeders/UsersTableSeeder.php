<?php

namespace Database\Seeders;

use App\Models\User;
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
      // Admin
      $user = new User;
      $user->name = "Reiss Admin";
      $user->email = "admin@reiss.com";
      $user->password = bcrypt('secret');
      $user->is_admin = true;
      $user->save();

      // Customer
      $user_customer = new User;
      $user_customer->name = "Reiss Customer";
      $user_customer->email = "customer@reiss.com";
      $user_customer->password = bcrypt('secret');
      $user_customer->save();

      // Vendor
      $user_vendor = new User;
      $user_vendor->name = "Reiss Vendor";
      $user_vendor->email = "vendor@reiss.com";
      $user_vendor->password = bcrypt('secret');
      $user_vendor->is_vendor = true;
      $user_vendor->save();
    }
}

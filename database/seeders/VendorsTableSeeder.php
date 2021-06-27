<?php

namespace Database\Seeders;

use App\Models\Vendor;
use Illuminate\Database\Seeder;

class VendorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $vendor = new Vendor;
      $vendor->user_id = 3;
      $vendor->vendor_name = "Reiss Vendor";
      $vendor->vendor_address = "vendor@reiss.com";
      $vendor->is_active = true;
      $vendor->save();
    }
}

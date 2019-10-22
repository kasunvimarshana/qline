<?php

use Illuminate\Database\Seeder;

use App\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $newCustomer = Customer::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Customer01',
            'name' => 'Customer01',
            'display_name' => 'Customer01'
        ]);
        
        /*$newCustomer = Customer::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Customer02',
            'name' => 'Customer02',
            'display_name' => 'Customer02'
        ]);
        
        $newCustomer = Customer::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Customer03',
            'name' => 'Customer03',
            'display_name' => 'Customer03'
        ]);*/
    }
}

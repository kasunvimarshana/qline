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
            'code' => 'customer_1',
            'name' => 'customer_1',
            'display_name' => 'customer_1'
        ]);
        
        /*$newCustomer = Customer::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'customer_2',
            'name' => 'customer_2',
            'display_name' => 'customer_2'
        ]);
        
        $newCustomer = Customer::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'customer_3',
            'name' => 'customer_3',
            'display_name' => 'customer_3'
        ]);*/
    }
}

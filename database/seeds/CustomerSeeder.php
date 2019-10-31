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
            'code' => 'ABG',
            'name' => 'ABG',
            'display_name' => 'ABG'
        ]);
        
        $newCustomer = Customer::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Amazon',
            'name' => 'Amazon',
            'display_name' => 'Amazon'
        ]);
        
        $newCustomer = Customer::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Calvin Klein',
            'name' => 'Calvin Klein',
            'display_name' => 'Calvin Klein'
        ]);
        
        $newCustomer = Customer::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Catherines',
            'name' => 'Catherines',
            'display_name' => 'Catherines'
        ]);
        
        $newCustomer = Customer::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Jockey',
            'name' => 'Jockey',
            'display_name' => 'Jockey'
        ]);
        
        $newCustomer = Customer::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Lane Brayant',
            'name' => 'Lane Brayant',
            'display_name' => 'Lane Brayant'
        ]);
        
        $newCustomer = Customer::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Lidl',
            'name' => 'Lidl',
            'display_name' => 'Lidl'
        ]);
        
        $newCustomer = Customer::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Loungerie',
            'name' => 'Loungerie',
            'display_name' => 'Loungerie'
        ]);
        
        $newCustomer = Customer::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Marks & Spencer',
            'name' => 'Marks & Spencer',
            'display_name' => 'Marks & Spencer'
        ]);
        
        $newCustomer = Customer::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Nayomi',
            'name' => 'Nayomi',
            'display_name' => 'Nayomi'
        ]);
        
        $newCustomer = Customer::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Olga',
            'name' => 'Olga',
            'display_name' => 'Olga'
        ]);
        
        $newCustomer = Customer::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'TRUE & CO.',
            'name' => 'TRUE & CO.',
            'display_name' => 'TRUE & CO.'
        ]);
        
        $newCustomer = Customer::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Warners',
            'name' => 'Warners',
            'display_name' => 'Warners'
        ]);
        
        $newCustomer = Customer::firstOrCreate([
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Kohl\'s',
            'name' => 'Kohl\'s',
            'display_name' => 'Kohl\'s'
        ]);
    }
}

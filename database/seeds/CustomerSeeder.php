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
            'id' => ucwords('ABG'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('ABG'),
            'name' => ucwords('ABG'),
            'display_name' => ucwords('ABG')
        ]);
        
        $newCustomer = Customer::firstOrCreate([
            'id' => ucwords('Amazon'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Amazon'),
            'name' => ucwords('Amazon'),
            'display_name' => ucwords('Amazon')
        ]);
        
        $newCustomer = Customer::firstOrCreate([
            'id' => ucwords('Calvin Klein'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Calvin Klein'),
            'name' => ucwords('Calvin Klein'),
            'display_name' => ucwords('Calvin Klein')
        ]);
        
        $newCustomer = Customer::firstOrCreate([
            'id' => ucwords('Caterines'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Catherines'),
            'name' => ucwords('Catherines'),
            'display_name' => ucwords('Catherines')
        ]);
        
        $newCustomer = Customer::firstOrCreate([
            'id' => ucwords('Jockey'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Jockey'),
            'name' => ucwords('Jockey'),
            'display_name' => ucwords('Jockey')
        ]);
        
        $newCustomer = Customer::firstOrCreate([
            'id' => ucwords('Lane Brayant'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Lane Brayant'),
            'name' => ucwords('Lane Brayant'),
            'display_name' => ucwords('Lane Brayant')
        ]);
        
        $newCustomer = Customer::firstOrCreate([
            'id' => ucwords('Lidl'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Lidl'),
            'name' => ucwords('Lidl'),
            'display_name' => ucwords('Lidl')
        ]);
        
        $newCustomer = Customer::firstOrCreate([
            'id' => ucwords('Loungerie'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Loungerie'),
            'name' => ucwords('Loungerie'),
            'display_name' => ucwords('Loungerie')
        ]);
        
        $newCustomer = Customer::firstOrCreate([
            'id' => ucwords('Marks & Spencer'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Marks & Spencer'),
            'name' => ucwords('Marks & Spencer'),
            'display_name' => ucwords('Marks & Spencer')
        ]);
        
        $newCustomer = Customer::firstOrCreate([
            'id' => ucwords('Nayomi'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Nayomi'),
            'name' => ucwords('Nayomi'),
            'display_name' => ucwords('Nayomi')
        ]);
        
        $newCustomer = Customer::firstOrCreate([
            'id' => ucwords('Olga'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Olga'),
            'name' => ucwords('Olga'),
            'display_name' => ucwords('Olga')
        ]);
        
        $newCustomer = Customer::firstOrCreate([
            'id' => ucwords('TRUE & CO'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('TRUE & CO.'),
            'name' => ucwords('TRUE & CO.'),
            'display_name' => ucwords('TRUE & CO.')
        ]);
        
        $newCustomer = Customer::firstOrCreate([
            'id' => ucwords('Warners'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Warners'),
            'name' => ucwords('Warners'),
            'display_name' => ucwords('Warners')
        ]);
        
        $newCustomer = Customer::firstOrCreate([
            'id' => ucwords('Kohl\'s'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Kohl\'s'),
            'name' => ucwords('Kohl\'s'),
            'display_name' => ucwords('Kohl\'s')
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        Customer::create([
            'name' => 'John Doe',
            'address' => '123 Main St',
            'phone' => '555-1234',
            'license_number' => 'D12345678'
        ]);

        Customer::create([
            'name' => 'Jane Doe',
            'address' => '456 Elm St',
            'phone' => '555-5678',
            'license_number' => 'E87654321'
        ]);

        Customer::create([
            'name' => 'Jim Beam',
            'address' => '789 Pine St',
            'phone' => '555-9012',
            'license_number' => 'F11223344'
        ]);

        Customer::create([
            'name' => 'Jack Daniels',
            'address' => '101 Maple Ave',
            'phone' => '555-3456',
            'license_number' => 'G55667788'
        ]);

        Customer::create([
            'name' => 'Josie Wales',
            'address' => '202 Oak Ln',
            'phone' => '555-7890',
            'license_number' => 'H99887766'
        ]);
    }
}
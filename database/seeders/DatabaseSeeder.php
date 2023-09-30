<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ClientsTableSeeder::class,
            WorkersTableSeeder::class,
            SalesTableSeeder::class,
            PurchaseDetailsTableSeeder::class,
            SaleDetailsTableSeeder::class,
            ArticlesTableSeeder::class,

        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class BillingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Billing::class,3)->create();
    }
}

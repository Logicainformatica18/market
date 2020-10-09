<?php

use Illuminate\Database\Seeder;
use App\Provider;
class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provider::create(['name' => 'Proveedor 1','description' =>'','cellphone' =>'94851627']);
    }
}

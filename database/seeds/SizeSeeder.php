<?php

use Illuminate\Database\Seeder;
use App\Size;
class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Size::create(['description' => 'Enano','detail' =>'']);
        Size::create(['description' => 'Chico','detail' =>'']);
        Size::create(['description' => 'Mediano','detail' =>'']);
        Size::create(['description' => 'Grande','detail' =>'']);
        Size::create(['description' => 'Extragrande','detail' =>'']);
        Size::create(['description' => 'XS','detail' =>'']);
        Size::create(['description' => 'S','detail' =>'']);
        Size::create(['description' => 'M','detail' =>'']);
        Size::create(['description' => 'L','detail' =>'']);
        Size::create(['description' => 'XL','detail' =>'']);
    }
}

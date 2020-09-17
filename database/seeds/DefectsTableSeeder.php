<?php

use App\Defect;
use Illuminate\Database\Seeder;

class DefectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Defect::class, 50) -> create();
    }
}

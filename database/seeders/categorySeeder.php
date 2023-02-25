<?php

namespace Database\Seeders;

use App\Models\category;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        category::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['name'=>'Crunchy'],
            ['name'=>'Puffs'],
            ['name'=>'Popcorn'],
            ['name'=>'MacN Cheese'],
            ['name'=>'Flamin Hot'],
            ['name'=>'Fantastix'],
            ['name'=>'Simply'],
            ['name'=>'Baked'],
            ['name'=>'Variety Packs'],
        ];

        foreach ($data as $item){
            category::insert([
                'name' => $item['name'],
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now()
            ]);
        }
    }
}

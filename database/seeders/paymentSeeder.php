<?php

namespace Database\Seeders;

use App\Models\payment;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class paymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        payment::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['name'=>'Bank transfer'],
            ['name'=>' E-wallet'],
            ['name'=>'Credit card'],
            ['name'=>'PayPal'],
            ['name'=>'Direct Debit'],
            ['name'=>'QR Code'],
            ['name'=>'Mobile Banking'],
        ];

        foreach ($data as $item){
            payment::insert([
                'name' => $item['name'],
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now()
            ]);
        }
    }
}

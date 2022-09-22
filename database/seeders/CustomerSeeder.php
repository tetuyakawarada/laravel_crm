<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            [
                'name' => 'あああいいい',
                'email' => 'aaaaaa@bbbb',
                'postcode' => '0201234',
                'address' => '岩手県盛岡市緑が丘3-45-78',
                'phone' => '09011112222',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'deleted_at' => date('Y-m-d H:i:s'),
            ]
        ];
        DB::table('customers')->insert($param);
    }
}

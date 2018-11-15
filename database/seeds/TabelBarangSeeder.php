<?php

use Illuminate\Database\Seeder;

class TabelBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); //import library faker

        $limit = 10; //limit berapa banyak data

        for($i = 1; $i < $limit; $i++){
        	DB::table('tabel_barang')->insert([//mengisi data di database
        		'nama_barang' => "barang ".$i,
        		'stok' => $faker->numberBetween(1,100), //email unique sehingga tidak ada yg sama
        		'harga' => $faker->numberBetween(100,1000),
        		'expired_date' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+5 years', $timezone = null),
        		'tanggal_produksi' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null),
        		]);
        }
    }
}

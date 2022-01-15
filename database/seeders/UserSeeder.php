<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id'=> 1,
            'judul_buku' => 'Laskar Pelangi',
            'tahun_terbit'=> 2005,
            'genre'=> 'Roman',
            'image'=>'laskarpelangi.jpg',
            'email'=>'yafi@gmail.com',
            'password'=> bcrypt('123123'),
            'range_harga' =>'60.000 -100.000'
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Cama;
use Illuminate\Database\Seeder;

class CamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Cama2 = New cama();

        $Cama2->name = 'cama de piedra';
        $Cama2->email = 'camadepiedra@camas.pe';
        $Cama2->password = '123456';
        $Cama2->categoria = 'buena';
        $Cama2-> save();

        $Cama3 = New cama();

        $Cama3->name = 'cama de carton';
        $Cama3->email = 'camadecarton@camas.pe';
        $Cama3->password = '123456';
        $Cama3->categoria = 'buena';
        $Cama3-> save();

        $Cama4 = New cama();

        $Cama4->name = 'cama de marmol';
        $Cama4->email = 'camademarmol@camas.pe';
        $Cama4->password = '123456';
        $Cama4->categoria = 'buena';
        $Cama4-> save();
    }
}

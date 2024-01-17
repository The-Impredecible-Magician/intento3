<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $User = New user();

        $User->name = 'cristian';
        $User->email = 'cristian@lalala.pe';
        $User->password = '123456';
        $User->avatar = 'perro';
        $User-> save();

        $User2 = New user();

        $User2->name = 'jhordan';
        $User2->email = 'jhordan@lalala.pe';
        $User2->password = '123456';
        $User2->avatar = 'gato';
        $User2-> save();
    }
}

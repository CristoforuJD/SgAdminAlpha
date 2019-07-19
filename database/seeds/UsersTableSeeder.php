<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'usu_nome_completo' => 'Joao Dutra Crisforu',
            'usu_email' => 'joao@safegold.com',
            'usu_usuario' => 'dutra2',
            'usu_senha' => Hash::make('admin'),
        ]);
    }
}

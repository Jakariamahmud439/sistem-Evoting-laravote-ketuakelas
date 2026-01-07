<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        User::updateOrCreate(
            ['nik' => '6402052908960001'], // ✅ kunci unik sebenarnya
            [
                'name'     => 'JAKARIA MAHMUD',
                'email'    => 'jakaria@gmail.com',
                'password' => Hash::make('admin'),
                'address'  => 'JL Bambu buaran, Tangerang',
                'phone'    => '085817645467',
                'roles'    => json_encode(['ADMIN']),
                'status'   => 'SUDAH',
            ]
        );

        $this->command->info('User Admin berhasil diinsert / diupdate');
    }
}

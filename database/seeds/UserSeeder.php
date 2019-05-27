<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Lê Thị Mỹ Hoàn';
        $user->email = 'manhsanhcong.08@gmail.com';
        $user->password = Hash::make('Anhlevbhp');
        $user->phone = '0869791862';
        $user->address = 'Hải Phòng';
        $user->birth_day = '2000-09-08';
        $user->save();
    }
}

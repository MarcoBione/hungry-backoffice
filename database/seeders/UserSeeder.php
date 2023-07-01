<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $users = config("dataseeder.users");
        foreach($users as $data){
            $user = new User();
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->is_admin = $data['is_admin'];
            $user->vat_number = $data['vat_number'];
            $user->password = md5($data['password']);
            $user->save();
        }
    }
}

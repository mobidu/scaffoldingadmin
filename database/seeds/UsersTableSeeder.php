<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Models\User::class, 10)->create();
        $user = new User();
        $user->name = 'Admin Aplikasi';
        $user->email = 'admin@mail.com';
        $user->password = bcrypt('admin');
        $user->group_id = 1;
        $user->token = str_random(10);
        $user->save();
    }
}

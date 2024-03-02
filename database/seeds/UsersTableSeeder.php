<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name'      => 'Admin',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('asdasd'),
            'type'      => User::TYPES['admin'],
        ]);

        factory(User::class)->create([
            'name'      => 'User',
            'type'      => User::TYPES['user'],
            'email'     => 'user@user',
            'password'  => bcrypt('asdasd'),
        ]);

        for ($i = 0; $i < 3; $i++) {
            $user = factory(User::class)->create([
                'type'  => User::TYPES['business'],
            ]);
            factory(\App\Business::class)->create([
                'user_id'       => $user->id,
            ]);
        }

        $business = factory(User::class)->create([
            'name'      => 'Business',
            'type'      => User::TYPES['business'],
            'email'     => 'business@business',
            'password'  => bcrypt('asdasd'),
        ]);

        factory(\App\Business::class)->create([
            'user_id'       => $business->id,
        ]);


    }
}

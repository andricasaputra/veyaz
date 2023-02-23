<?php

namespace Database\Seeders;

<<<<<<< HEAD
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
=======
use Illuminate\Database\Seeder;
use Laravolt\Indonesia\Seeds\CitiesSeeder;
use Laravolt\Indonesia\Seeds\DistrictsSeeder;
use Laravolt\Indonesia\Seeds\ProvincesSeeder;
use Laravolt\Indonesia\Seeds\VillagesSeeder;
>>>>>>> 02b12afbcfc48a7aa01129d319afbe25f6726349

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        // \App\Models\User::factory(10)->create();

        $this->call([
            UserTableSeeder::class,
            RoleTableSeeder::class,
            UserRoleTableSeeder::class
=======
        $this->call([
            User::class,
            ProvincesSeeder::class,
            CitiesSeeder::class,
            DistrictsSeeder::class,
            VillagesSeeder::class,
            ActivityType::class,
            ActivityList::class,
            Settings::class,
>>>>>>> 02b12afbcfc48a7aa01129d319afbe25f6726349
        ]);
    }
}

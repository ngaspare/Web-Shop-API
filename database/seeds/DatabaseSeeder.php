<?php

use Illuminate\Database\Seeder;
use App\Kategorija;
use App\Proizvod;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        factory(App\Kategorija::class, 10)->create();
        factory(App\Proizvod::class, 50)->create();

        foreach(Proizvod::all() as $proizvod)
        {
            $proizvod->kategorije()->sync(kategorija::pluck('id')->random(rand(1,5)));
            $proizvod->save();
        }
    }
}

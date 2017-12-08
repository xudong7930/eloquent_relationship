<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // php artisan migrate:refresh --seed
        factory(App\User::class, 10)->create()->each(function($user){
            $user->profile()->save(factory(App\Profile::class)->make());
        });

        factory(App\Website::class, 10)->create();
        factory(App\Article::class, 100)->create()->each(function($article){
            $flag = random_int(0, 1);
            $ids = range(1, 10);

            shuffle($ids);

            if ($flag) {
                $sliced = array_slice($ids, 0, 2);
                $article->website()->attach($sliced);
            } else {
                $article->website()->attach(array_rand($ids, 1));
            }
            
        });

    }
}

<?php

use Illuminate\Database\Seeder;

use App\Joke;

class JokesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jokes = ['foo', 'bar', 'baz'];

        foreach ($jokes as $joke) {
            Joke::create(['joke' => $joke]);
        }
    }
}

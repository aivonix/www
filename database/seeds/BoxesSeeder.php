<?php

use Illuminate\Database\Seeder;

class BoxesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('boxes')->insert(['title' => Str::random(10), 'link' => 'www.'.Str::random(10).'.com', 'colour' => 'red', ]);
        DB::table('boxes')->insert(['title' => Str::random(10), 'link' => 'www.'.Str::random(10).'.com', 'colour' => 'blue', ]);
        DB::table('boxes')->insert(['title' => Str::random(10), 'link' => 'www.'.Str::random(10).'.com', 'colour' => 'green', ]);
        DB::table('boxes')->insert(['title' => Str::random(10), 'link' => 'www.'.Str::random(10).'.com', 'colour' => 'cyan', ]);
        DB::table('boxes')->insert(['title' => Str::random(10), 'link' => 'www.'.Str::random(10).'.com', 'colour' => 'magenta', ]);
        DB::table('boxes')->insert(['title' => Str::random(10), 'link' => 'www.'.Str::random(10).'.com', 'colour' => 'yellow', ]);
        DB::table('boxes')->insert(['title' => Str::random(10), 'link' => 'www.'.Str::random(10).'.com', 'colour' => 'black', ]);
        DB::table('boxes')->insert(['title' => Str::random(10), 'link' => 'www.'.Str::random(10).'.com', 'colour' => 'red', ]);
        DB::table('boxes')->insert(['title' => Str::random(10), 'link' => 'www.'.Str::random(10).'.com', 'colour' => 'blue', ]);
    }
}

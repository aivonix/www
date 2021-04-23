<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BoxesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('boxes')->insert(['title' => '', 'link' => '', 'colour' => 'red' ]);
        DB::table('boxes')->insert(['title' => '', 'link' => '', 'colour' => null ]);
        DB::table('boxes')->insert(['title' => '', 'link' => '', 'colour' => null ]);
        DB::table('boxes')->insert(['title' => '', 'link' => '', 'colour' => null ]);
        DB::table('boxes')->insert(['title' => '', 'link' => '', 'colour' => null ]);
        DB::table('boxes')->insert(['title' => '', 'link' => '', 'colour' => null ]);
        DB::table('boxes')->insert(['title' => '', 'link' => '', 'colour' => null ]);
        DB::table('boxes')->insert(['title' => '', 'link' => '', 'colour' => null ]);
        DB::table('boxes')->insert(['title' => '', 'link' => '', 'colour' => null ]);
    }
}
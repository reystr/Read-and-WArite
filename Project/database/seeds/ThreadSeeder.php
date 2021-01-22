<?php

use Illuminate\Database\Seeder;

class ThreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('threads')->insert([
            'userId' => 1,
            'title' => 'Thread 1',
            'content' => 'Content dari Thread 1',
        ]);
        DB::table('threads')->insert([
            'userId' => 1,
            'title' => 'Thread 2',
            'content' => 'Content dari Thread 2',
        ]);
        DB::table('threads')->insert([
            'userId' => 1,
            'title' => 'Thread 3',
            'content' => 'Content dari Thread 3',
        ]);
        DB::table('threads')->insert([
            'userId' => 1,
            'title' => 'Thread 4',
            'content' => 'Content dari Thread 4',
        ]);
    }
}

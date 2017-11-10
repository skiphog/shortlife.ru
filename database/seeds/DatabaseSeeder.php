<?php

use App\Answer;
use App\Member;
use App\Attempt;
use App\Question;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Question::truncate();
        Member::truncate();
        Attempt::truncate();
        Answer::truncate();

        $data = \DB::connection('sqlite')
            ->table('questions')
            ->select(['title', 'content', 'answer'])
            ->orderBy('sort')
            ->get()
            ->map(function ($value) {
                return (array)$value;
            })
            ->toArray();

        DB::table('questions')->insert($data);
    }
}

<?php

use App\Attempt;
use App\Member;
use App\Question;
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Question::truncate();
        Member::truncate();
        Attempt::truncate();

        DB::table('questions')->insert([
            [
                'title'   => 'Вопрос №1: Вид свинга',
                'content' => '<p>Без обмена партнерами &mdash; Мягкий свинг</p><p>Совместный (классический) &mdash; Открытый свинг</p><p>В разных комнатах &mdash; Закрытый свинг</p><p>Обмен на длительное время &mdash; ...</p>',
                'answer'  => 'хардсвинг'
            ],
            [
                'title'   => 'Вопрос №2: Абра-кадабра',
                'content' => '<p>текст 2</p>',
                'answer'  => 'свингзнакомстванасвингкиске10летобъединяемсвингеров'
            ],
            [
                'title'   => 'Вопрос №3: Возбудитель',
                'content' => '<p>текст 3</p>',
                'answer'  => 'макатука'
            ],
            [
                'title'   => 'Вопрос №4: цифры',
                'content' => '<p>текст 4</p>',
                'answer'  => 'великорецкое'
            ],
        ]);
    }
}

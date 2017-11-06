<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Attempt
 *
 * @property int            $id
 * @property int            $member_id
 * @property int            $question_id
 * @property string         $post
 * @property boolean        $answer
 * @property \Carbon\Carbon $created_at
 *
 * @mixin \Eloquent
 */
class Attempt extends Model
{
    protected $fillable = [
        'member_id',
        'question_id',
        'post',
        'answer'
    ];

    protected $casts = [
        'answer' => 'boolean',
    ];

    protected $dates = [
        'created_at',
    ];

    public $timestamps = false;
}

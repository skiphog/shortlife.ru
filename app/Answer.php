<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Answer
 *
 * @property int            $id
 * @property int            $member_id
 * @property int            $question_id
 * @property \Carbon\Carbon $created_at
 *
 * @mixin \Eloquent
 */
class Answer extends Model
{
    protected $fillable = [
        'member_id',
        'question_id',
    ];

    protected $dates = [
        'created_at',
    ];

    public $timestamps = false;
}

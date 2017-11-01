<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Member
 *
 * @property int $id
 * @property string $token
 * @property int $question_id
 *
 * @mixin \Eloquent
 */
class Member extends Model
{
    protected $fillable = [
        'token',
        'question_id',
    ];

    public $timestamps = false;
}

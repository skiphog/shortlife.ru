<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Member
 *
 * @property int                 $id
 * @property string              $token
 * @property string|null         $login
 * @property \Carbon\Carbon      $created_at
 * @property \Carbon\Carbon|null $finished_at
 *
 * @mixin \Eloquent
 */
class Member extends Model
{
    protected $fillable = [
        'token',
        'login',
        'finished_at'
    ];

    protected $dates = [
        'created_at',
        'finished_at'
    ];

    public $timestamps = false;
}

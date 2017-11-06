<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Member
 *
 * @property int    $id
 * @property string $token
 *
 * @mixin \Eloquent
 */
class Member extends Model
{
    protected $fillable = [
        'token'
    ];

    protected $dates = [
        'created_at',
    ];

    public $timestamps = false;
}

<?php

namespace App\Services;

use App\Attempt;
use Illuminate\Http\Request;

class AttemptService
{

    public function saveAttempt(Request $request, int $id): void
    {
        $request->request->set('member_id', $id);

        Attempt::create($request->all());
    }
}

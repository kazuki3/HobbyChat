<?php

namespace App\Http\Controllers;

use App\Contribution;
use Illuminate\Http\Request;
use App\Http\Requests\ContributionRequest;
use Illuminate\Support\Facades\Auth;

class ContributionController extends Controller
{
    public function create(ContributionRequest $request, $id) {
        $contribution = new Contribution();
        $contribution->contribution = $request->contribution;
        $contribution->user_id = Auth::user()->id;
        $contribution->room_id = $id;
        $contribution->save();
        return redirect(route('contribution.create', ['id' => $id]));
    }
}

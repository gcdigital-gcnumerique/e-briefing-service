<?php

namespace App\Http\Controllers;

use App\Trip;
use App\User;
use Illuminate\Http\Request;

class TripCollaboratorsController extends Controller
{
    public function index(Trip $trip)
    {
        $collaborator_ids = $trip->collaborators->pluck('id');
        $collaborator_ids->push($trip->created_by_id);

        $users = User::whereNotIn('id', $collaborator_ids)->get();

        return view('trips.collaborators.index', [
            'trip' => $trip,
            'users' => $users,
            'collaborators' => $trip->collaborators
        ]);
    }

    public function add(Trip $trip)
    {
        $trip->collaborators()->attach(request()->user_id);

        return redirect()->back()->with('success', 'Collaborator added!');
    }
}

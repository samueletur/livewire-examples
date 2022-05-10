<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user)
    {

        $users = User::query()
            ->select(['id', 'name', 'email'])
            ->oldest('name')
            ->get();

        // $index = $users->search(fn ($user) => $user->name == $user->name);
        $index = $users->search(function ($item, $key) use ($user) {
            if ($item->name == $user->name)
                return $key;
        });

        /* Retrieve Previous and Next Post */
        $prevUser = ($theIndex = ($index - 1)) >= 0 ? $users[$theIndex] : null;

        $nextUser = ($theIndex = ($index + 1)) < count($users) ? $users[$theIndex] : null;

        return view('prev-next', compact('user', 'prevUser', 'nextUser'));
    }
}

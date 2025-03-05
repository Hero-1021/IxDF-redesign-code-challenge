<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

final readonly class DashboardController
{
    public function __invoke(): View
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        return view('dashboard', [
            'myEnrollments' => $user->load('courseEnrollments.course')->courseEnrollments,
        ]);
    }
}

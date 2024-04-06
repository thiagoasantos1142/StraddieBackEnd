<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $users = User::all();
        $totalUsersThisMonth = User::whereMonth('created_at', now()->month)->count();
        $totalUsersLastMonth = User::whereMonth('created_at', now()->subMonth()->month)->count();
       
         // Calcula a diferença entre o número de usuários do mês atual e do mês anterior
        $usersDifference = $totalUsersThisMonth - $totalUsersLastMonth;

        // Calcula o percentual de crescimento
        if ($usersDifference > 0) {
            $percentageGrowthUsers = ($usersDifference / $totalUsersLastMonth) * 100;
        } else {
            $percentageGrowthUsers = 0;
        }
        
        
        
        return view('pages.index', ['user' => $user, 'totalUsers' => $users->count(), 'percentageGrowthUsers' => $percentageGrowthUsers]);

    }

}

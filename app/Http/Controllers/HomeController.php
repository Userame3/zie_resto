<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import Auth facade
use App\Models\User;
use App\Models\Menu;
use App\Models\Jenis;
use App\Models\Member;

class HomeController extends Controller
{
    public function Home()
    {
        // Mendapatkan user yang sedang login
        $user = Auth::user();

        // Mendefinisikan peta nilai untuk level pengguna
        $levelLabels = [
            1 => 'Admin',
            2 => 'Kasir',
            3 => 'Owner'
        ];

        // Mengambil nama dan level user
        $name = $user->name;
        $level = $user->level;

        // Menentukan label berdasarkan level pengguna
        $userLevel = $levelLabels[$level] ?? 'Unknown';

        // Mengembalikan tampilan dengan data user
        return view('template.layout', [
            'title' => 'Home',
            'name' => $name,
            'level' => $userLevel,
            'jumlahMenu' => Menu::count(),
            'jumlahJenis' => Jenis::count(),
            'jumlahMember' => Member::count(),
        ]);
    }
}

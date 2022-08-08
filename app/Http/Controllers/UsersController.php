<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class UsersController extends Controller
{
    public function getAllUsers() {

        $api = 'https://test.conectadosweb.com.co/';
        $token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9eyJ0ZXN0IjozMjE0MTIsInVzZXIiOiJmM3IyIn0NcPLPRLSvfszQwtxZLyypsm3Y56ELRdppqYXDv2Hagk/';

        $response = Http::get($api . 'users/' . $token);

        $users = $response->json();

        $sortedArr = collect($users)->sortByDesc('created_at');

        return view('users', compact('sortedArr'));
    }

    public function getUserTransactionById($id) {

        $api = 'https://test.conectadosweb.com.co/';
        $token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9eyJ0ZXN0IjozMjE0MTIsInVzZXIiOiJmM3IyIn0NcPLPRLSvfszQwtxZLyypsm3Y56ELRdppqYXDv2Hagk/';

        $response = Http::get($api . 'users/' . $token . 'transaction/' . $id);

        $transaction = $response->json();

        $sortedArr = collect($transaction)->sortByDesc('created_at');

        return view('transaction', compact('sortedArr'));
    }
}

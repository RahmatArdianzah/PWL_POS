<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $data = [
            'level_id' => 2,
            'username' => 'manager_tiga',
            'nama' => 'manager 3',
            'password' => Hash::make('12345')
        ];
        UserModel::create($data);
        /*$data =
        [
            'nama' => 'Pelanggan pertama',
        ];
        UserModel::where('username', 'customer-1')->update($data);
        /*$data = 
        [
            'username' => 'Customer',
            'nama' => 'Pelanggan',
            'password' => Hash::make('12345'),
            'level_id' => 4

        ];
        UserModel::insert($data);*/


        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }
}
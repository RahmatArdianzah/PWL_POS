<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        
        /*$data = [
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


        /*$user = UserModel::all();
        return view('user', ['data' => $user]);*/
        //$user = UserModel::find(1);
        //return view('user', ['data' => $user]);
        //$user = UserModel::find(2);
        //return view('user', ['data' => $user]);
        //$user = UserModel::where('level_id', 1)->first();
        //return view('user', ['data' => $user]);
        //$user = UserModel::firstWhere('level_id', 1);
        //return view('user', ['data' => $user]);
        //$user = UserModel::findOr(1, ['username', 'nama'], function (){abort(404);});
        //return view('user', ['data' => $user]);
        //$user = UserModel::findOr(20, ['username', 'nama'], function (){abort(404);});
        //return view('user', ['data' => $user]);
        //$user = UserModel::findOrFail(1);
        //return view('user', ['data' => $user]); 
        //$user = UserModel::where('username', 'manager9')->firstOrFail();
        //return view('user', ['data' => $user]);
        //$count = UserModel::where('active', 1)->count();
        //$max = UserModel::where('active', 1)->max(); 
        //$user = UserModel::where('level_id')->count();
        //dd($user);
        //return view('user', ['data' => $user]);

        //$user = UserModel::firstOrCreate(
            //[
                //'username' => 'manager',
                //'nama' => 'Manager',
            //],
            //);
            //return view('user', ['data' => $user]);

        //$user = UserModel::firstOrCreate(
        //    [
        //        'username' => 'manager22',
        //        'nama' => 'Manager dua dua',
        //        'password' => Hash::make('12345'),
        //        'level_id' => 2
        //    ]
        //);
        //return view('user', ['data' => $user]);

        //$user = UserModel::firstorNew(
        //    [
        //        'username' => 'manager',
        //        'nama' => 'Manager',
        //    ]
        //);
        //    return view('user', ['data' => $user]);

        $user = UserModel::firstOrCreate(
            [
                'username' => 'manager33',
                'nama' => 'Manager tiga tiga',
                'password' => Hash::make('12345'),
                'level_id' => 2
            ]
        );
        //$user->save();
        return view('user', ['data' => $user]);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index(){
        $session = session()->all();//getting all the sessions
        // $session = session()->except(['name']);//getting the sessions except sessions we want
        // $session = session()->only(['name']);//getting the sessions we want


        //    // $value = session('name');
        //    // $value = session('name','subhan');//if we want to select any default value then we will add column and we will add something
        // echo $value;
        
        //    // echo $session;//sessions are in array form so echo will not print, thats why using pre tag to view sessions in array format


        echo "<pre> " ; 
            print_r($session);//sessions are in array form thats why we are using print_r to convert arry to string
        
        
         echo "</pre>";

        // if(session()->has('name')){//has method ignore null values and prints nothing but exists prints null value 
        //     $name = session()->get('name');
        //     echo $name;
        // }else{
        //     echo "such key dosen't exist";
        // }

    }

    public function storeSession(){
    session([
        'name'=>'ahmed',
        'email'=>'ahmed@gmail.com',
        'password'=>'1234',

    ]);//creating session

    // session()->increment('count');//increment default value is 1
    //now every time a session will be created the count will be increased by 1
    // session()->increment('count',$incrementBy = 2);//now the session count will be increased by 2
    // session()->decrement('count', $decrementBy = 2);//now the session count will be decreased by 2

    // session()->regenerate();//now this will also chnage the token which will make difficult for hackers to hack our token
        session()->flash('status','session saved successfully');
         return redirect('welcome';

    // return redirect()->route('viewSession');

    }

    public function deleteSession(){
        // session()->forget('name');//deleting session of what ever keys we want but if we want to delete all the session then we will use flush method

        session()->flush();
        // session()->invalidate();//changes token value when ever this route will be searched

    return redirect()->route('viewSession');

    }
}

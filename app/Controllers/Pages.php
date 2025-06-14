<?php

namespace App\Controllers;

use App\Models\UserModel;



class Pages extends BaseController
{
    public function index()
    {
        if (session()->get('logged_in_admin')) {
            return redirect()->back();
        }
        $userId = session()->get('user_id');
        $data = [
            'title' => 'Home | Spin Cycle',
            'tel' => '+62 812-3626-2924',
            'phone' => '6281236262924',
            'count' => model('OrderModel')->where('user_id', $userId)->countAllResults()

        ];
        return view('pages/home', $data);
    }
    public function about()
    {
        if (session()->get('logged_in_admin')) {
            return redirect()->back();
        }
        $userId = session()->get('user_id');
        $data = [
            'title' => 'About | Spin Cycle',
            'tel' => '+62 812-3626-2924',
            'test' => ['Alfa', 'Emen', 'Abe'],
            'phone' => '6281236262924',
            'count' => model('OrderModel')->where('user_id', $userId)->countAllResults()
        ];
        return view('pages/about', $data);
    }
    public function services()
    {
        if (session()->get('logged_in_admin')) {
            return redirect()->back();
        }
        $userId = session()->get('user_id');
        $data = [
            'title' => 'Services | Spin Cycle',
            'tel' => '+62 812-3626-2924',
            'phone' => '6281236262924',
            'count' => model('OrderModel')->where('user_id', $userId)->countAllResults()

        ];
        return view('pages/services', $data);
    }
    public function contact()
    {
        if (session()->get('logged_in_admin')) {
            return redirect()->back();
        }
        $userId = session()->get('user_id');
        $data = [
            'title' => 'Contact | Spin Cycle',
            'tel' => '+62 812-3626-2924',
            'phone' => '6281236262924',
            'count' => model('OrderModel')->where('user_id', $userId)->countAllResults()

        ];
        return view('pages/contact', $data);
    }
}

<?php

namespace App\Controllers;
use App\Models\UserModel;

class Home extends BaseController
{
/*     public function __construct() {
        parent::__construct();
        $this->load->model('UserModel');
    } */

    public function index(): string
    {
        // $sessionData = session()->get();

        // Check if the user is logged in
        $isLoggedIn = session()->get('isLoggedIn');

        // If the user is logged in, fetch the user's name from the database
        $userName = '';
        if ($isLoggedIn) {
            // Replace 'users' with your actual table name
            $userName = session()->get('name');
        }


        $data['userName'] = $userName;

        // Load the view
        return view('index', $data);
    }

    public function products(): string 
    {
        // Check if the user is logged in
        $isLoggedIn = session()->get('isLoggedIn');

        // If the user is logged in, fetch the user's name from the database
        $userName = '';
        if ($isLoggedIn) {
            // Replace 'users' with your actual table name
            $userName = session()->get('name');
        }


        $data['userName'] = $userName;
 
        return view('products', $data);
    }

    public function contact(): string 
    {
         // Check if the user is logged in
         $isLoggedIn = session()->get('isLoggedIn');

         // If the user is logged in, fetch the user's name from the database
         $userName = '';
         if ($isLoggedIn) {
             // Replace 'users' with your actual table name
             $userName = session()->get('name');
         }
 
 
         $data['userName'] = $userName;
 
        return view('contact', $data);
    }

    public function checkout(): string 
    {
         // Check if the user is logged in
         $isLoggedIn = session()->get('isLoggedIn');

         // If the user is logged in, fetch the user's name from the database
         $userName = '';
         if ($isLoggedIn) {
             // Replace 'users' with your actual table name
             $userName = session()->get('name');
         }
 
 
         $data['userName'] = $userName;
 
        return view('checkout', $data);
    }

    public function productDetails(): string 
    {
         // Check if the user is logged in
         $isLoggedIn = session()->get('isLoggedIn');

         // If the user is logged in, fetch the user's name from the database
         $userName = '';
         if ($isLoggedIn) {
             // Replace 'users' with your actual table name
             $userName = session()->get('name');
         }
 
 
         $data['userName'] = $userName;
 
        return view('product-details', $data);
    }

    public function aboutUs(): string 
    {
         // Check if the user is logged in
         $isLoggedIn = session()->get('isLoggedIn');

         // If the user is logged in, fetch the user's name from the database
         $userName = '';
         if ($isLoggedIn) {
             // Replace 'users' with your actual table name
             $userName = session()->get('name');
         }
 
 
         $data['userName'] = $userName;
 
        return view('about-us', $data);
    }

    public function blog(): string 
    {
         // Check if the user is logged in
         $isLoggedIn = session()->get('isLoggedIn');

         // If the user is logged in, fetch the user's name from the database
         $userName = '';
         if ($isLoggedIn) {
             // Replace 'users' with your actual table name
             $userName = session()->get('name');
         }
 
 
         $data['userName'] = $userName;
 
        return view('blog', $data);
    }

    public function testimonials(): string 
    {
         // Check if the user is logged in
         $isLoggedIn = session()->get('isLoggedIn');

         // If the user is logged in, fetch the user's name from the database
         $userName = '';
         if ($isLoggedIn) {
             // Replace 'users' with your actual table name
             $userName = session()->get('name');
         }
 
 
         $data['userName'] = $userName;
 
        return view('testimonials', $data);
    }

    public function terms(): string 
    {
         // Check if the user is logged in
         $isLoggedIn = session()->get('isLoggedIn');

         // If the user is logged in, fetch the user's name from the database
         $userName = '';
         if ($isLoggedIn) {
             // Replace 'users' with your actual table name
             $userName = session()->get('name');
         }
 
 
         $data['userName'] = $userName;
 
        return view('terms', $data);
    }
    
    /* public function signinController(): string
    {
        helper(['form']);
        echo view('signin');
        redirect('SigninController/loginAuth');
    }
    
    public function signupController(): string
    {
        helper(['form']);
        $data = [];
        echo view('signup', $data);
        redirect('SignupController/store');
    } */
    
    

 
    
}

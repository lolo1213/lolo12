<?php

namespace App\Controllers;

class DestroyController extends BaseController
{
    public function logout()
    {
        
        $session = session();
        $session->destroy();

        // Optionally, you can redirect the user to a different page after logout
        return redirect()->to('/');
    }
    

}
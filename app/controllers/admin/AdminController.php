<?php
class AdminController
{
    public function dashboard()
    {
        $data =[];
        return Helper::view('admin/dashboard', $data);
    }

    
}
<?php
class GlobalController
{

    public function landing()
    {
        return Helper::view('index');
    }

    public function login()
    {
        return Helper::redirect('login');
    }

    public function addMahasiswa()
    {
        return Helper::view('admin/master/add/addMahasiswa');   
    }
   
}

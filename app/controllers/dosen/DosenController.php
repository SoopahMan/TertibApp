<?php
class DosenController{
   
    public function dashboard(){
        return Helper:: view('dosen/dashboard_dosen');
    }

    public function input(){
        return Helper:: view('dosen/input_pelanggaran');
    }

    public function rekap(){
        return Helper:: view('dosen/rekap');
    }

    public function kelas(){
        return Helper:: view('dosen/kelas');
    }

}
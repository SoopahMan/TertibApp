<?php
class MahasiswaController
{
    public function addUserPage()
    {
        $data = [
            'addUserProses' => App::get('root_uri') . '/admin/user/addUser',
        ];

        return Helper::view("/admin/master/add/addMahasiswa", $data);
    }

    public function addUser()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (
                isset($_POST['nim'], 
                $_POST['nama_mhs'],
                $_POST['alamat_mhs'], 
                $_POST['jenis_kelamin']) &&
                $_POST['nim'] != '' &&
                $_POST['nama_mhs'] != '' &&
                $_POST['alamat_mhs'] != '' &&
                $_FILES['foto_user']!= '' &&
                $_POST['alamat'] != '' &&
                $_POST['no_tlp'] != '' &&
                $_POST['jenis_kelamin'] != '' &&
                $_POST['role'] != ''
            ) {

                $userService = MahasiswaServices::getInstance();

                $username = $_POST['username'];
                $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                $nama = $_POST['nama'];
                $id_user = $_POST['id_user'];
                $alamat = $_POST['alamat'];
                $no_tlp = $_POST['no_tlp'];
                $jenis_kelamin = $_POST['jenis_kelamin'];
                $role = $_POST['role'];

            
            } else {
                echo 'Semua field harus diisi.';
            }
        } else {
            echo 'Metode request tidak valid.';
        }
    }
}
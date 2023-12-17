<?php
    class AuthsController {

        public function loginForm() {

            if (Session::getInstance()->has('auth')) {
                return Helper::redirect('/');
            }

            return Helper::view('login');
        } 

        public function loginPage()
        {
    
            $data = [
                'loginEndpoint' => App::get('root_uri') . '/auth/login',
            ];
    
            return Helper::view("login", $data);
        }

        public function login() {

            if (
                isset($_POST['username']) && $_POST['username'] != '' && isset($_POST['password']) && $_POST['password'] != ''
            ){
                $username = $_POST['username'];
                $password = $_POST['password'];

                $userService = UserService::getInstance();

                 /**
                * @var UserModel $user
                 */

                $user = $userService->getSingleUserByUsername($username);

                if ($user) {
                    if (password_verify($password, $user->getPassword())) {
                        $_SESSION['id_user'] = $user->getIdUser();
                        // $_SESSION['role'] = $user->getRole();
                        // $_SESSION['nama'] = $user->getNama();
                        $_SESSION['username'] = $user->getUsername();
                        $_SESSION['password'] = $user->getPassword();
                        // $_SESSION['foto_user'] = $user->getFotoUser();
                        // $_SESSION['alamat'] = $user->getAlamat();
                        // $_SESSION['no_tlp'] = $user->getNoTlp();
                        // $_SESSION['jenis_kelamin'] = $user->getJenisKelamin();
    
                        if ($user->getLevel() == 'admin') {
                            echo "admin logged";
                            return Helper::redirect("/admin/dashboard");
                        } else if ($user->getLevel() == 'dosen') {
                            echo "Dosen logged";
                            return Helper::redirect('/dashboard/dosen');
                        } 
                        // else if ($user->getLevel() == 'mahasiswa') {
                        //     echo "Mahasiswa logged";
                        //     return Helper::redirect('mahasiswa/dashboard');
                        // }
                        
                        else {
                            echo "Fiqlal logged";
                        }
                    } else {
                        return Helper::redirect("/auth/login");
                    }
                } else {
                    return Helper::redirect("/auth/login");
                }
            }
        }
        function logout()
        {
            session_destroy();
            return Helper::redirect("/");
    
        }
    }


<?php
Helper::importView("admin/partials/nav.view.php"); 
?>
<html>
    <body>
        <div class="conatiner mt-3">
            <a href="nil" class="btn btn-primary mb-3"> Tambah user</a>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Kelas</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                /**
                 * @var MahasiswaModel[] $mahasiswa
                 */

                 for ($i = 0; $i < count($mahasiswa); $i++):$user = $mahasiswa[$i];
                 ?>
                <tr>
                    <td scope="row">
                        <?= $i +1; ?>
                    </td>
                    <td scope="row">
                        <?= $user->getNim(); ?>
                    </td>
                    <td scope="row">
                        <?= $user->getNamaMhs(); ?>
                    </td>
                    <td scope="row">
                        <?= $user->getAlamat(); ?>
                    </td>
                    <td scope="row">
                        <?= $user->getIdKelas(); ?>
                    </td>
                </tr>
                <?php endfor; ?>
                </tbody>
            </table>
        </div>

    </body>
</html>
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
                        <th scope="col">NIP</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Nomor Hp</th>
                        <th scope="col">Jenis Kelamin</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                /**
                 * @var DosenModel[] $dosen
                 */

                 for ($i = 0; $i < count($dosen); $i++):$user = $dosen[$i];
                 ?>
                <tr>
                    <td scope="row">
                        <?= $i +1; ?>
                    </td>
                    <td scope="row">
                        <?= $user->getNip(); ?>
                    </td>
                    <td scope="row">
                        <?= $user->getNamaDosen(); ?>
                    </td>
                    <td scope="row">
                        <?= $user->getAlamat(); ?>
                    </td>
                    <td scope="row">
                        <?= $user->getNoHp(); ?>
                    </td>
                    <td scope="row">
                        <?= $user->getJenisKelamin(); ?>
                    </td>
                </tr>
                <?php endfor; ?>
                </tbody>
            </table>
        </div>

    </body>
</html>
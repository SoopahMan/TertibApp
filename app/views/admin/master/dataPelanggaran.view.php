<?php
Helper::importView("admin/partials/nav.view.php"); 
?>
<html>
    <body>
        <div class="conatiner mt-3">
            <a href="nil" class="btn btn-primary mb-3"> Tambah Pelanggaran</a>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pelanggaran</th>
                        <th scope="col">Level</th>
                        <th scope="col">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                /**
                 * @var PelanggaranModel[] $pelanggaran
                 */

                 for ($i = 0; $i < count($pelanggaran); $i++):$user = $pelanggaran[$i];
                 ?>
                <tr>
                    <td scope="row">
                        <?= $i +1; ?>
                    </td>
                    <td scope="row">
                        <?= $user->getNamaPelanggaran(); ?>
                    </td>
                    <td scope="row">
                        <?= $user->getLevel(); ?>
                    </td>
                    <td scope="row">
                        <?= $user->getKeterangan(); ?>
                    </td>
                </tr>
                <?php endfor; ?>
                </tbody>
            </table>
        </div>

    </body>
</html>
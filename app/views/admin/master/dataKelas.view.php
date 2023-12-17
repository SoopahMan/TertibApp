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
                        <th scope="col">Nama Kelas</th>
                        <th scope="col">DPA</th>
                        <th scope="col">Prodi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                /**
                 * @var KelasModel[] $kelas
                 * @var KelasService $dpa
                 */

                 for ($i = 0; $i < count($kelas); $i++):$user = $kelas[$i];
                 ?>
                <tr>
                    <td scope="row">
                        <?= $i +1; ?>
                    </td>
                    <td scope="row">
                        <?= $user->getNamaKelas(); ?>
                    </td>
                    <td scope="row">
                        <?= $user->getNip();
                        ?>
                    </td>
                    <td scope="row">
                        <?= $user->getProdi(); ?>
                    </td>
                </tr>
                <?php endfor; ?>
                </tbody>
            </table>
        </div>

    </body>
</html>
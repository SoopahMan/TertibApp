<div class="container mt-5">
    <h2>Tambah Mahasiswa</h2>
    <form action="<?php $addUserProses ?>" method="post" enctype="multipart/form-data">
        <!-- nim -->
        <div class="mb-3">
            <label for="nim" class="form-label">Tambah NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" maxlength="10" required>
        </div>

        <!-- nama -->
        <div class="mb-3">
            <label for="nama_mhs" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama_mhs" name="nama_mhs" required>
        </div>


        <!-- foto_user -->
        <!-- <div class="mb-3">
            <label for="foto_user" class="form-label">Foto User</label>
            <input type="file" class="form-control" id="foto_user" name="foto_user" accept="image/*">
        </div> -->

        <!-- alamat -->
        <div class="mb-3">
            <label for="alamat_mhs" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat_mhs" name="alamat_mhs" rows="3" required></textarea>
        </div>

        <!-- No Telp -->
        <div class="mb-3">
            <label for="no_tlp" class="form-label">Nomor Telepon</label>
            <input type="tel" class="form-control" id="no_tlp" name="no_tlp" required>
        </div>

        <div class="mb-3">
            <label for="no_tlp" class="form-label">Nomor Telepon</label>
            <input type="tel" class="form-control" id="no_tlp" name="no_tlp" required>
        </div>
        
        <!-- jenis_kelamin -->
        <!-- <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div> -->


        <button type="submit" class="btn btn-primary">Tambah User</button>
    </form>
</div>
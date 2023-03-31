<h5>Halaman Data Siswa</h5>
<a href="?url=tambah-siswa" class="btn btn-primary">Tambah Siswa</a>
<hr>
<table class="table table-stripped table-bordered">
    <thead>
        <tr class="fw-bold">
            <td>No</td>
            <td>NISN</td>
            <td>NIS</td>
            <td>Nama</td>
            <td>Kelas</td>
            <td>Alamat</td>
            <td>Nomor Telepon</td>
            <td>SPP</td>
            <td>Edit</td>
            <td>Hapus</td>
        </tr>
    </thead>
    <tbody>
        <?php
        include '../koneksi.php';
        $no = 1;
        $sql = "SELECT * FROM siswa, spp, kelas WHERE siswa.id_kelas = kelas.id_kelas AND siswa.id_spp = spp.id_spp ORDER BY nama ASC";
        $query = mysqli_query($koneksi, $sql);
        foreach ($query as $data) { ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data['nisn'] ?></td>
                <td><?= $data['nis'] ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['nama_kelas'] ?></td>
                <td><?= $data['alamat'] ?></td>
                <td><?= $data['no_telp'] ?></td>
                <td><?= $data['tahun'] ?> - <?= number_format($data['nominal'], 2, ',', '.'); ?> </td>
                <td>
                    <a href="?url=edit-siswa&nisn=<?= $data['nisn'] ?>" class="btn btn-warning">Edit</a>
                </td>
                <td>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapus<?= $data['nisn'] ?>">Hapus</button>
                </td>
            </tr>
            <!-- Modal -->
            <div class="modal fade" id="modalHapus<?= $data['nisn'] ?>" tabindex="-1" aria-labelledby="modalHapusLabel<?= $data['nisn'] ?>" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalHapusLabel<?= $data['nisn'] ?>">Konfirmasi Hapus Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Apakah Anda yakin ingin menghapus data ini?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <a href="?url=hapus-siswa&nisn=<?= $data['nisn'] ?>" class="btn btn-danger">Hapus</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </tbody>
</table>
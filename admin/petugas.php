<h5> Halaman Data Petugas </h5>
<a href="?url=tambah-petugas" class="btn btn-primary"> Tambah Petugas </a>
<hr>
<table class="table table-stripped table-bordered">
    <tr class="fw-bold">
        <td> No </td>
        <td> Username </td>
        <td> Password </td>
        <td> Nama Petugas </td>
        <td> Level </td>
        <td> Edit </td>
        <td> Hapus </td>
    </tr>
    <?php
    include '../koneksi.php';
    $no = 1;
    $sql = "SELECT*FROM petugas ORDER BY id_petugas DESC";
    $query = mysqli_query($koneksi, $sql);
    foreach ($query as $data) { ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['username'] ?></td>
            <td><?= $data['password'] ?></td>
            <td><?= $data['nama_petugas'] ?></td>
            <td><?= $data['level'] ?></td>
            <td>
                <a href="?url=edit-petugas&id_petugas=<?= $data['id_petugas'] ?>" class='btn btn-warning'>EDIT</a>
            </td>
            <td>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapus<?= $data['id_petugas'] ?>">HAPUS</button>
            </td>
        </tr>
        <!-- Modal -->
        <div class="modal fade" id="modalHapus<?= $data['id_petugas'] ?>" tabindex="-1" aria-labelledby="modalHapusLabel<?= $data['id_petugas'] ?>" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalHapusLabel<?= $data['id_petugas'] ?>">Konfirmasi Hapus Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda yakin ingin menghapus data ini?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <a href="?url=hapus-petugas&id_petugas=<?= $data['id_petugas'] ?>" class="btn btn-danger">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

</table>
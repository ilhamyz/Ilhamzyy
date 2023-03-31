<h5> Halaman Data Kelas </h5>
<a href="?url=tambah-kelas" class="btn btn-primary"> Tambah Kelas </a>
<hr>
<table class="table table-stripped table-bordered">
    <tr class="fw-bold">
        <td> No </td>
        <td> Nama Kelas </td>
        <td> Kompetensi Keahlian </td>
        <td> Edit </td>
        <td> Hapus </td>
    </tr>
    <?php
    include '../koneksi.php';
    $no = 1;
    $sql = "SELECT*FROM kelas ORDER BY id_kelas DESC";
    $query = mysqli_query($koneksi, $sql);
    foreach ($query as $data) { ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['nama_kelas'] ?></td>
            <td><?= $data['kompetensi_keahlian'] ?></td>
            <td>
                <a href="?url=edit-kelas&id_kelas=<?= $data['id_kelas'] ?>" class='btn btn-warning'>EDIT</a>
            </td>
            <td>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapus<?= $data['id_kelas'] ?>">HAPUS</button>
            </td>
        </tr>
        <!-- Modal -->
        <div class="modal fade" id="modalHapus<?= $data['id_kelas'] ?>" tabindex="-1" aria-labelledby="modalHapusLabel<?= $data['id_kelas'] ?>" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalHapusLabel<?= $data['id_kelas'] ?>">Konfirmasi Hapus Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda yakin ingin menghapus data ini?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <a href="?url=hapus-kelas&id_kelas=<?= $data['id_kelas'] ?>" class="btn btn-danger">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

</table>
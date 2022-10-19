<?php include('../layout/header.php')?>
<?php
    $sql = 'SELECT * FROM tb_buku JOIN tb_pengarang ON tb_buku.id_pengarang = tb_pengarang.id_pengarang 
    JOIN tb_penerbit ON tb_penerbit.id_penerbit = tb_buku.id_penerbit 
    JOIN tb_kategori ON tb_kategori.id_kategori = tb_buku.id_kategori';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $buku = $stmt->fetchAll();

?>
<?php include('../layout/sidebar.php')?>
<section>
    <a href="add.php"><button class="button-add">Tambah</button></a>
    <h1 class="title">Buku</h1>
    </form>
    <table class="content-table">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Nama Buku</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Kategori</th>
                <th>Jumlah Buku</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ; foreach($buku as $dt): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $dt->nama_buku ?></td>
                <td><?= $dt->nama_pengarang ?></td>
                <td><?= $dt->nama_penerbit ?></td>
                <td><?= $dt->nama_kategori ?></td>
                <td><?= $dt->jumlah_buku ?></td>
                <td>
                    <a href="#"><button>delete</button></a>
                    <a href="#"><button>Edit</button></a>
                </td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
</section>
<?php include('../layout/footer.php')?>
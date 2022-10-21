<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
if (!empty($_POST)) {
    
    $NIM = isset($_POST['NIM']) && !empty($_POST['NIM']) && $_POST['NIM'] != 'auto' ? $_POST['NIM'] : NULL;
    $Nama = isset($_POST['Nama']) ? $_POST['Nama'] : '';
    $Email = isset($_POST['Email']) ? $_POST['Email'] : '';
    $Jurusan = isset($_POST['Jurusan']) ? $_POST['Jurusan'] : '';
    $Fakultas = isset($_POST['Fakultas']) ? $_POST['Fakultas'] : '';
    $Gambar = isset($_POST['Gambar']) ? $_POST['Gambar'] : '';
    $stmt = $pdo->prepare('INSERT INTO mahasiswa VALUES (?, ?, ?, ?, ?, ?)');
    $stmt->execute([$NIM, $Nama, $Email, $Jurusan, $Fakultas, $Gambar]);
    $msg = 'Created Successfully!';
}

?>

<?=template_header('Create')?>

<div class="content update">
	<h2>Create Contact</h2>
    <form action="create.php" method="post">
        <label for="NIM">NIM</label>
        <label for="Nama">Nama</label>
        <input type="text" name="NIM" value="" NIM="NIM">
        <input type="text" name="Nama" NIM="Nama">
        <label for="Email">Email</label>
        <label for="Jurusan">Jurusan</label>
        <input type="text" name="Email" NIM="Email">
        <input type="text" name="Jurusan" NIM="Jurusan">
        <label for="Fakultas">Fakultas</label>
        <label for="Gambar">Gambar</label>
        <input type="text" name="Fakultas" NIM="Fakultas">
        <input type="text" name="Gambar" NIM="Gambar">
        <input type="submit" value="Create">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>
<?php

include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
if (isset($_GET['NIM'])) {
    if (!empty($_POST)) {
        $nim = isset($_POST['NIM']) ? $_POST['NIM'] : NULL;
        $nama = isset($_POST['Nama']) ? $_POST['Nama'] : '';
        $email = isset($_POST['Email']) ? $_POST['Email'] : '';
        $jurusan = isset($_POST['Jurusan']) ? $_POST['Jurusan'] : '';
        $fakultas = isset($_POST['Fakultas']) ? $_POST['Fakultas'] : '';
        $gambar = isset($_POST['Gambar']) ? $_POST['Gambar'] : '';
        
        // Update the record
        $stmt = $pdo->prepare('UPDATE mahasiswa SET NIM = ?, Nama = ?, Email = ?, Jurusan = ?, Fakultas = ?, Gambar = ? WHERE NIM = ?');
        $stmt->execute([$nim, $nama, $email, $jurusan, $fakultas, $gambar, $_GET['NIM']]);
        $msg = 'Updated Successfully!';
    }
    // Get the contact from the contacts table
    $stmt = $pdo->prepare('SELECT * FROM mahasiswa WHERE NIM = ?');
    $stmt->execute([$_GET['NIM']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('Contact doesn\'t exist with that NIM!');
    }
} else {
    exit('No NIM specified!');
}
?>

<?=template_header('Read')?>

<div class="content update">
	<h2>Update Contact #<?=$contact['NIM']?></h2>
    <form action="update.php?NIM=<?=$contact['NIM']?>" method="post">
        <label for="NIM">NIM</label>
        <label for="Nama">Nama</label>
        <input type="text" name="NIM" value="<?=$contact['NIM']?>" nim="NIM">
        <input type="text" name="Nama" value="<?=$contact['Nama']?>" nim="Nama">
        <label for="Email">Email</label>
        <label for="Jurusan">Jurusan</label>
        <input type="text" name="Email" value="<?=$contact['Email']?>" nim="Email">
        <input type="text" name="Jurusan" value="<?=$contact['Jurusan']?>" nim="Jurusan">
        <label for="Fakultas">Fakultas</label>
        <input type="text" name="Fakultas" value="<?=$contact['Fakultas']?>" nim="title">
        <label for="Gambar">Gambar</label>
        <input type="text" name="Gambar" value="<?=$contact['Gambar']?>" nim="title">
        <input type="submit" value="Update">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>
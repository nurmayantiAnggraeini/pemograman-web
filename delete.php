<?php

include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';

if (isset($_GET['NIM'])) {
    // Pilih yang akan dihapus
    $stmt = $pdo->prepare('SELECT * FROM mahasiswa WHERE NIM = ?');
    $stmt->execute([$_GET['NIM']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('Contact doesn\'t exist with that NIM!');
    }
    
    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            
            $stmt = $pdo->prepare('DELETE FROM mahasiswa WHERE NIM = ?');
            $stmt->execute([$_GET['NIM']]);
            $msg = 'You have deleted the contact!';
        } else {
            
            header('Location: read.php');
            exit;
        }
    }
} else {
    exit('No NIM specified!');
}
?>

<?=template_header('Delete')?>

<div class="content delete">
	<h2>Delete Contact #<?=$contact['NIM']?></h2>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php else: ?>
	<p>Are you sure you want to delete contact #<?=$contact['NIM']?>?</p>
    <div class="yesno">
        <a href="delete.php?NIM=<?=$contact['NIM']?>&confirm=yes">Yes</a>
        <a href="delete.php?NIM=<?=$contact['NIM']?>&confirm=no">No</a>
    </div>
    <?php endif; ?>
</div>

<?=template_footer()?>
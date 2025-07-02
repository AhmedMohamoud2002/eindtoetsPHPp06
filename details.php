

<?php
include 'data.php';
global $db;
$id=$_GET['id'];
$query = $db->prepare("SELECT * FROM laptops WHERE id=:id");
$query -> bindParam(":id", $id);
$query->execute();
$result = $query->fetchAll( PDO::FETCH_ASSOC);
?>
<?php foreach ($result as $data):?>
    <div class="card " style="width: 25rem;">
        <h3>Artikelnummer: <?=$data ['id'] ?></h3>
        <h2>Category: <?=$data ['category'] ?></h2>
        <h3>Merk:</h3>
        <p class="mb-2"><?=$data ['merk'] ?></p>
        <h3>Type:</h3>
        <p class="mb-2"><?=$data ['type'] ?></p>
        <h3>Memory:</h3>
        <p class="mb-2"><?=$data ['memory'] ?></p>
        <h3>HD:</h3>
        <p class="mb-2"><?=$data ['hd'] ?></p>
        <h3>Prijs:</h3>
        <p class="mb-2"><?=$data ['prijs'] ?></p>
    </div>
<?php endforeach; ?>
<br>
<a href="read.php">Terug naar home pagina</a>
<?php
$naam = $_POST['naam'];
$email = $_POST['email'];
?>
<!doctype html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LevelUp Hardware - Nieuwsbrief</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;500;600;700&family=Orbitron:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'includes/header.php'; ?>

<main>
  <section class="hero">
    <h1>Bedankt!</h1>
    <p class="subtitle"><?php echo htmlspecialchars($naam); ?>, je bent ingeschreven voor de nieuwsbrief.</p>
  </section>

  <p>We sturen het laatste nieuws naar <?php echo htmlspecialchars($email); ?>.</p>
</main>

<?php include 'includes/footer.php'; ?>

</body>
</html>
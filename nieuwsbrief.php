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
<style>
  .site-header {
    padding: 22px 64px;
  }
  .logo { font-size: 26px; }

  .main-nav ul { gap: 56px; }
  .main-nav a { font-size: 19px; }

  main {
    max-width: 1100px;
    margin: 0 auto;
    padding: 70px 64px 90px;
  }

  .hero h1 { font-size: 64px; }
  .hero .subtitle { font-size: 34px; margin-top: 6px; }

  @media (max-width: 700px) {
    .site-header { padding: 16px 20px; flex-wrap: wrap; }
    .logo { font-size: 17px; }
    .main-nav { flex-basis: 100%; }
    .main-nav ul { flex-direction: column; gap: 2px; }
    .main-nav a { display: block; font-size: 17px; padding: 10px 0; }

    main { padding: 44px 22px 60px; }
    .hero h1 { font-size: 34px; }
    .hero .subtitle { font-size: 20px; }
  }
</style>
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
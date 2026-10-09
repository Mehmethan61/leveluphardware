<!doctype html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LevelUp Hardware - Producten</title>
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

  .hero { margin-bottom: 44px; }
  .hero h1 { font-size: 64px; }
  .hero .subtitle { font-size: 34px; margin-top: 6px; }

  .intro-row {
    gap: 60px;
    margin-bottom: 48px;
  }
  .intro-text { flex: 1 1 50%; }
  .intro-text p { font-size: 17px; margin: 0 0 22px; }
  .intro-text h3 { font-size: 19px; margin: 30px 0 0; }

  .intro-image { flex: 1 1 46%; display: flex; align-items: flex-start; justify-content: center; padding-top: 6px; }
  .intro-image img { width: 100%; max-width: 420px; }

  .features-row {
    gap: 60px;
    align-items: flex-start;
  }
  .shop-image { flex: 1 1 50%; }
  .shop-image img { width: 100%; }

  .features-list { flex: 1 1 46%; }
  .features-list li { font-size: 17px; margin-bottom: 20px; padding-left: 1.3em; }

  .newsletter { margin: 60px 0; }
  .products { margin-bottom: 60px; }
.product-card img { width: 220px; flex-shrink: 0; }

  @media (max-width: 700px) {
    .site-header { padding: 16px 20px; flex-wrap: wrap; }
    .logo { font-size: 17px; }
    .main-nav { flex-basis: 100%; }
    .main-nav ul { flex-direction: column; gap: 2px; }
    .main-nav a { display: block; font-size: 17px; padding: 10px 0; }

    main { padding: 44px 22px 60px; }
    .hero h1 { font-size: 34px; }
    .hero .subtitle { font-size: 20px; }

    .product-card { flex-direction: column; text-align: center; }
    .product-card img { width: 100%; max-width: 260px; }
  }
</style>
</head>
<body>

<header class="site-header">
  <div class="logo">
    <span class="line1">LEVELUP</span>
    <span class="line2">HARDWARE</span>
  </div>
  <nav class="main-nav">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="over-ons.php">Over ons</a></li>
      <li><a href="producten.php">Producten</a></li>
    </ul>
  </nav>
</header>

<main>
  <section class="hero">
    <h1>Producten</h1>
    <p class="subtitle">Voor de Serieuze Gamer</p>
  </section>

  <section class="products">
    <div class="product-card">
      <img src="assets/laptop.webp" alt="Gaming Laptop X1">
      <div>
        <h3>Gaming Laptop X1</h3>
        <p class="price">€1499</p>
        <p>Krachtige laptop met de nieuwste GPU voor ultieme gaming prestaties.</p>
      </div>
    </div>

    <div class="product-card">
      <img src="assets/pc.png" alt="Custom Gaming PC">
      <div>
        <h3>Custom Gaming PC</h3>
        <p class="price">€1999</p>
        <p>Op maat gemaakte desktop met topkwaliteit componenten voor maximale snelheid.</p>
      </div>
    </div>

    <div class="product-card">
      <img src="assets/headset.webp" alt="Pro Gaming Headset">
      <div>
        <h3>Pro Gaming Headset</h3>
        <p class="price">€199</p>
        <p>Comfortabele headset met surround sound voor een meeslepende game-ervaring.</p>
      </div>
    </div>
  </section>

  <section class="newsletter">
    <a href="#" class="btn-newsletter">Schrijf je in voor de nieuwsbrief</a>
  </section>

  <section class="location">
    <h3>Waar vind je ons?</h3>
    <p>Terheijdenseweg 350, Breda</p>
    <iframe src="https://maps.google.com/maps?q=Terheijdenseweg%20350%20Breda&output=embed" loading="lazy" title="Locatie LevelUp Hardware"></iframe>
  </section>
</main>

</body>
</html>

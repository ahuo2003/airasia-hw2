<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="AirAsia rewards gift card management prototype">
  <title>Gift cards | AirAsia Rewards</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<header class="site-header"><div class="header-inner">
      <a class="brand" href="card-list.php"><span class="brand-mark" aria-hidden="true">✦</span><span>AirAsia <small>Rewards Studio</small></span></a>
      <nav class="site-nav" aria-label="Main navigation">
        <a href="card-list.php" aria-current="page">Gift cards</a>
        <a href="card-add.php" >Add gift card</a>
        <a href="login.php" >Log in</a>
      </nav></div></header>
<main class="container page">
 <div class="page-heading"><div><span class="eyebrow">Rewards catalog</span><h1>Gift cards</h1>
 <p class="lead">Browse the rewards available to your customers and manage the catalog.</p></div>
 <div class="actions"><a class="btn btn-secondary" href="#customer-note">Add customer</a><a class="btn btn-primary" href="card-add.php">+ Add gift card</a></div></div>
 <section class="cards-grid" aria-label="Available gift cards"><article class="panel product"><div class="product-art"><img class="card-image" src="images/gold-card.jpg" alt="Gold gift card"></div>
      <div class="product-body"><h2><a href="card-details.php">Gold Card</a></h2>
      <p>Transferable gift card</p><div class="product-footer"><span class="tag">Gift card</span><span class="points">10,000 pts</span></div></div></article>
<article class="panel product"><div class="product-art"><img class="card-image" src="images/gold-card.jpg" alt="Gold gift card"></div>
      <div class="product-body"><h2><a href="card-details.php">Travel Card</a></h2>
      <p>Airline travel gift card</p><div class="product-footer"><span class="tag">Gift card</span><span class="points">3,500 pts</span></div></div></article>
<article class="panel product"><div class="product-art"><img class="card-image" src="images/gold-card.jpg" alt="Gold gift card"></div>
      <div class="product-body"><h2><a href="card-details.php">Premium Card</a></h2>
      <p>Flexible rewards gift card</p><div class="product-footer"><span class="tag">Gift card</span><span class="points">7,000 pts</span></div></div></article>
</section>
 <p class="notice" id="customer-note">The customer-add page is outside this five-page prototype. Its link is reserved for future development.</p>
 </main>
<footer class="footer">AirAsia Rewards · Front-end demonstration only</footer>
</body>
</html>

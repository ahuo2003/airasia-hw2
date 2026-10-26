<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="AirAsia rewards gift card management prototype">
  <title>Gold Card details | AirAsia Rewards</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<header class="site-header"><div class="header-inner">
      <a class="brand" href="card-list.php"><span class="brand-mark" aria-hidden="true">✦</span><span>AirAsia <small>Rewards Studio</small></span></a>
      <nav class="site-nav" aria-label="Main navigation">
        <a href="card-list.php" >Gift cards</a>
        <a href="card-add.php" >Add gift card</a>
        <a href="login.php" >Log in</a>
      </nav></div></header>
<main class="container page">
  <nav class="breadcrumbs" aria-label="Breadcrumb"><a href="card-list.php">Gift cards</a><span>/</span><span>Gold Card</span></nav>
  <div class="detail-layout"><div class="panel detail-art"><img class="card-image" src="images/gold-card.jpg" alt="Gold gift card"></div>
  <section class="panel detail-info"><span class="eyebrow">Gift card details</span><h1>Gold Card</h1>
    <p class="lead">A transferable gift card for customers redeeming their rewards points.</p>
    <dl><div class="stat"><dt>Card type</dt><dd>Transferable Gift Card</dd></div>
    <div class="stat"><dt>Card value</dt><dd>$300.00</dd></div>
    <div class="stat"><dt>Points required</dt><dd>10,000 points</dd></div></dl>
    <div class="actions detail-actions"><a class="btn btn-primary" href="card-update.php">Edit gift card</a>
    <a class="btn btn-danger" href="#delete-note">Delete gift card</a></div>
    <p class="notice" id="delete-note">Deleting a card will require a separate confirmation page or backend action, not included in this prototype.</p>
  </section></div>
</main>
<footer class="footer">AirAsia Rewards · Front-end demonstration only</footer>
</body>
</html>

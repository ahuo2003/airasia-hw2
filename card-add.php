<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="AirAsia rewards gift card management prototype">
  <title>Add gift card | AirAsia Rewards</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<header class="site-header"><div class="header-inner">
      <a class="brand" href="card-list.php"><span class="brand-mark" aria-hidden="true">✦</span><span>AirAsia <small>Rewards Studio</small></span></a>
      <nav class="site-nav" aria-label="Main navigation">
        <a href="card-list.php" >Gift cards</a>
        <a href="card-add.php" aria-current="page">Add gift card</a>
        <a href="login.php" >Log in</a>
      </nav></div></header>
<main class="container page">
      <nav class="breadcrumbs" aria-label="Breadcrumb"><a href="card-list.php">Gift cards</a><span>/</span><span>Add a gift card</span></nav>
      <div class="page-heading"><div><span class="eyebrow">Catalog management</span><h1>Add a gift card</h1><p class="lead">Enter the details for a new reward.</p></div></div>
      <div class="editor-layout">
        <aside class="panel editor-art"><img class="card-image" src="images/gold-card.jpg" alt="Gold gift card">
          <p>Gift card image placeholder. Image uploads can be connected when backend functionality is added.</p></aside>
        <section class="panel editor-fields"><h2>Card information</h2>
          <!-- Form submission is navigation only; no records are saved. -->
          <form action="card-list.php" method="get">
            <div class="field"><label for="card-name">Card name</label><input id="card-name" name="card_name" type="text" placeholder="e.g. Gold Card" required></div>
            <div class="field"><label for="card-type">Card type</label><input id="card-type" name="card_type" type="text" placeholder="e.g. Transferable Gift Card" required></div>
            <div class="field"><label for="card-value">Card value (USD)</label><input id="card-value" name="card_value" type="number" min="0" step="0.01" placeholder="300.00" required></div>
            <div class="field"><label for="points">Points required</label><input id="points" name="points" type="number" min="0" step="1" placeholder="10000" required></div>
            <div class="actions"><button class="btn btn-primary" type="submit">Add card</button><a class="btn btn-secondary" href="card-list.php">Cancel</a></div>
          </form>
          <p class="form-help" style="margin:22px 0 0">Demonstration form: submitting returns to the gift card list without saving data.</p>
        </section>
      </div></main>
<footer class="footer">AirAsia Rewards · Front-end demonstration only</footer>
</body>
</html>

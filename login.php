<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="AirAsia rewards gift card management prototype">
  <title>Log in | AirAsia Rewards</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<header class="site-header"><div class="header-inner">
      <a class="brand" href="card-list.php"><span class="brand-mark" aria-hidden="true">✦</span><span>AirAsia <small>Rewards Studio</small></span></a>
      <nav class="site-nav" aria-label="Main navigation">
        <a href="card-list.php" >Gift cards</a>
        <a href="card-add.php" >Add gift card</a>
        <a href="login.php" aria-current="page">Log in</a>
      </nav></div></header>
<main class="login-shell"><section class="panel login-panel" aria-labelledby="login-title">
  <span class="eyebrow">Welcome aboard</span>
  <h1 id="login-title">Your rewards, your way.</h1>
  <p class="lead">Sign in to explore and manage your gift card collection.</p>
  <!-- Prototype navigation only: no authentication occurs. -->
  <form action="card-list.php" method="get">
    <div class="field"><label for="username">Username</label><input id="username" name="username" type="text" autocomplete="username" placeholder="Enter your username" required></div>
    <div class="field"><label for="password">Password</label><input id="password" type="password" autocomplete="current-password" placeholder="Enter your password" required></div>
    <button class="btn btn-primary full-width" type="submit">Log in</button>
  </form>
  <p class="form-help" style="margin:20px 0 0">Prototype only — this form does not verify credentials.</p>
</section></main>
<footer class="footer">AirAsia Rewards · Front-end demonstration only</footer>
</body>
</html>

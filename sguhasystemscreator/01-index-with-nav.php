<?php
// 01: Simple homepage with nav and minimal router
$page = $_GET['page'] ?? 'home';
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>PHP Mini Site</title>
<style>
  :root{--ink:#111827;--muted:#6b7280;--bg:#f8fafc;--card:#ffffff;--border:#e5e7eb;--brand:#2563eb}
  *{box-sizing:border-box}
  body{margin:0;font-family:system-ui,Arial,sans-serif;background:var(--bg);color:var(--ink)}
  header{padding:14px 20px;background:#fff;border-bottom:1px solid var(--border);display:flex;justify-content:space-between;align-items:center}
  nav a{margin:0 8px;text-decoration:none;color:#374151}
  .active{color:var(--brand);font-weight:600}
  .wrap{max-width:900px;margin:0 auto;padding:20px}
  .card{background:var(--card);border:1px solid var(--border);border-radius:12px;padding:16px}
  footer{padding:20px;text-align:center;color:var(--muted)}
</style>
</head>
<body>
  <header>
    <strong>Mini PHP</strong>
    <nav>
      <a href="?page=home" class="<?php echo $page==='home'?'active':''; ?>">Home</a>
      <a href="?page=about" class="<?php echo $page==='about'?'active':''; ?>">About</a>
      <a href="?page=contact" class="<?php echo $page==='contact'?'active':''; ?>">Contact</a>
    </nav>
  </header>
  <main class="wrap">
    <div class="card">
      <?php if($page==='home'): ?>
        <h1>Welcome</h1>
        <p>This is a tiny PHP router demo with simple styling.</p>
      <?php elseif($page==='about'): ?>
        <h1>About</h1>
        <p>Built with plain PHP, minimal CSS, and no frameworks.</p>
      <?php elseif($page==='contact'): ?>
        <h1>Contact</h1>
        <p>Email us at <a href="mailto:hello@example.com">hello@example.com</a>.</p>
      <?php else: ?>
        <h1>Not Found</h1>
        <p>That page does not exist.</p>
      <?php endif; ?>
    </div>
  </main>
  <footer>© <?php echo date('Y'); ?> Mini PHP</footer>
</body>
</html>

<?php
// 09: Portfolio tiles from array
$projects = ['Project A','Project B','Project C','Project D'];
?>
<!doctype html>
<html lang="en"><head>
<meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Portfolio</title>
<style>
  body{margin:0;font-family:system-ui,Arial,sans-serif;background:#0f172a;color:#e2e8f0}
  header{padding:18px 24px;border-bottom:1px solid #1e293b}
  .grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(220px,1fr));gap:14px;padding:18px}
  .tile{background:#1f2937;border-radius:12px;height:140px;display:grid;place-items:center;font-size:13px;color:#9ca3af}
  h1{margin:0}
</style>
</head>
<body>
  <header><h1>My Work</h1></header>
  <main class="grid">
    <?php foreach($projects as $p): ?>
      <div class="tile"><?php echo htmlspecialchars($p); ?></div>
    <?php endforeach; ?>
  </main>
</body></html>

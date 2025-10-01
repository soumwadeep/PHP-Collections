<?php
// 07: Blog post template; uses query param ?title=...&author=...
$title = $_GET['title'] ?? 'Designing for Simplicity';
$author = $_GET['author'] ?? 'Jane Doe';
$date = date('M j, Y');
?>
<!doctype html>
<html lang="en"><head>
<meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php echo htmlspecialchars($title); ?></title>
<style>
  body{margin:0;font-family:Georgia,serif;background:#fff;color:#111827}
  .wrap{max-width:760px;margin:0 auto;padding:28px}
  h1{font-size:36px;margin:0 0 6px}
  .meta{color:#6b7280;margin-bottom:20px;font-size:14px}
  p{line-height:1.7;color:#1f2937}
  blockquote{margin:16px 0;padding:12px 16px;background:#f9fafb;border-left:4px solid #e5e7eb;border-radius:8px;color:#374151}
</style>
</head>
<body>
  <article class="wrap">
    <h1><?php echo htmlspecialchars($title); ?></h1>
    <div class="meta">By <?php echo htmlspecialchars($author); ?> · <?php echo $date; ?></div>
    <p>Keep your content focused, your spacing generous, and your styles minimal.</p>
    <blockquote>“Simplicity is the soul of efficiency.”</blockquote>
    <p>Use readable fonts, logical hierarchy, and accessible color contrast.</p>
  </article>
</body></html>

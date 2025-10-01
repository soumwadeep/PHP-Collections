<!doctype html>
<html lang="en"><head>
<meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1" />
<title>FAQ</title>
<style>
  body{margin:0;font-family:system-ui,Arial,sans-serif;background:#f9fafb;color:#111827}
  .wrap{max-width:800px;margin:0 auto;padding:28px}
  h1{margin-top:0}
  details{background:#fff;border:1px solid #e5e7eb;border-radius:10px;padding:12px;margin:10px 0}
  summary{cursor:pointer;font-weight:600}
  p{margin:8px 0 0;color:#374151}
</style>
</head>
<body>
  <div class="wrap">
    <h1>Frequently Asked Questions</h1>
    <?php
      $faqs = [
        ['q'=>'How do I install this?','a'=>'Upload the PHP files to your server.'],
        ['q'=>'Can I customize the styles?','a'=>'Yes, edit the <style> block.'],
        ['q'=>'Is a database required?','a'=>'No, these demos use arrays/sessions.'],
      ];
      foreach($faqs as $f):
    ?>
      <details>
        <summary><?php echo htmlspecialchars($f['q']); ?></summary>
        <p><?php echo htmlspecialchars($f['a']); ?></p>
      </details>
    <?php endforeach; ?>
  </div>
</body></html>

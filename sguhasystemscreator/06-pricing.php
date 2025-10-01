<!doctype html>
<html lang="en"><head>
<meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Pricing</title>
<style>
  body{margin:0;font-family:system-ui,Arial,sans-serif;background:#f8fafc}
  .wrap{max-width:960px;margin:0 auto;padding:36px}
  h1{text-align:center;margin:0 0 20px}
  .grid{display:grid;gap:16px;grid-template-columns:repeat(auto-fit,minmax(240px,1fr))}
  .plan{background:#fff;border:1px solid #e2e8f0;border-radius:12px;padding:18px}
  .price{font-size:28px;margin:8px 0}
  ul{padding-left:18px;margin:0 0 10px;color:#374151}
  .btn{width:100%;padding:10px;border:none;border-radius:8px;background:#0ea5e9;color:#fff;cursor:pointer}
  .badge{display:inline-block;background:#e0f2fe;color:#0369a1;border-radius:999px;padding:4px 8px;font-size:12px}
</style>
</head>
<body>
  <div class="wrap">
    <h1>Simple Pricing</h1>
    <div class="grid">
      <?php
      $plans = [
        ['name'=>'Starter','price'=>0,'features'=>['1 project','Community support']],
        ['name'=>'Pro','price'=>12,'features'=>['Unlimited projects','Email support']],
        ['name'=>'Business','price'=>29,'features'=>['Team members','Priority support']],
      ];
      foreach($plans as $pl): ?>
        <div class="plan">
          <span class="badge"><?php echo htmlspecialchars($pl['name']); ?></span>
          <div class="price">$<?php echo number_format($pl['price']); ?></div>
          <ul>
            <?php foreach($pl['features'] as $f): ?><li><?php echo htmlspecialchars($f); ?></li><?php endforeach; ?>
          </ul>
          <button class="btn">Choose</button>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</body></html>

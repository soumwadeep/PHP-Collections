<?php
// 05: Products grid from array
$products = [
  ['name'=>'Minimal Chair','price'=>49],
  ['name'=>'Wooden Lamp','price'=>39],
  ['name'=>'Desk Plant','price'=>19],
  ['name'=>'Soft Pillow','price'=>29],
];
?>
<!doctype html>
<html lang="en"><head>
<meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Products</title>
<style>
  body{margin:0;font-family:system-ui,Arial,sans-serif;background:#fafafa}
  header{padding:18px 24px;background:#fff;border-bottom:1px solid #eee;display:flex;justify-content:space-between;align-items:center}
  .grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(220px,1fr));gap:16px;padding:24px}
  .card{background:#fff;border:1px solid #e5e7eb;border-radius:12px;overflow:hidden}
  .img{height:140px;background:#e5e7eb;display:grid;place-items:center;font-size:12px;color:#6b7280}
  .pad{padding:12px}
  h3{margin:0 0 6px;font-size:16px}
  .price{color:#16a34a;font-weight:600}
  .btn{width:100%;margin-top:8px;padding:10px;border:none;border-radius:8px;background:#111827;color:#fff;cursor:pointer}
</style>
</head>
<body>
  <header><strong>Shop</strong><input style="padding:8px;border:1px solid #ddd;border-radius:8px" placeholder="Search products" /></header>
  <main class="grid">
    <?php foreach($products as $p): ?>
      <div class="card">
        <div class="img">Image</div>
        <div class="pad">
          <h3><?php echo htmlspecialchars($p['name']); ?></h3>
          <div class="price">$<?php echo number_format($p['price'],2); ?></div>
          <button class="btn">Add to cart</button>
        </div>
      </div>
    <?php endforeach; ?>
  </main>
</body></html>

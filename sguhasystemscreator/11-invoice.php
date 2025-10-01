<?php
// 11: Invoice sample (static data)
$items = [
  ['name'=>'Product A','qty'=>2,'rate'=>500],
  ['name'=>'Product B','qty'=>1,'rate'=>300],
];
$subtotal = 0; foreach($items as $i){ $subtotal += $i['qty']*$i['rate']; }
$gst = round($subtotal*0.18,2);
$total = $subtotal + $gst;
?>
<!doctype html>
<html lang="en"><head>
<meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Invoice</title>
<style>
  body{margin:0;background:#f8fafc;font-family:system-ui,Arial,sans-serif;color:#111827}
  .sheet{max-width:800px;margin:24px auto;background:#fff;border:1px solid #e5e7eb;border-radius:12px;padding:24px}
  header{display:flex;justify-content:space-between;align-items:center;margin-bottom:12px}
  h1{font-size:22px;margin:0}
  table{width:100%;border-collapse:collapse;margin-top:10px}
  th,td{border:1px solid #e5e7eb;padding:8px;text-align:left;font-size:14px}
  tfoot td{font-weight:700}
  .muted{color:#6b7280;font-size:13px}
</style>
</head>
<body>
  <div class="sheet">
    <header>
      <h1>Invoice #GCDQ/2025-2026/001</h1>
      <div class="muted">Date: <?php echo date('d M Y'); ?></div>
    </header>
    <section class="muted">
      <div><strong>From:</strong> Acme Inc.</div>
      <div><strong>To:</strong> Customer Name</div>
    </section>
    <table>
      <thead><tr><th>Item</th><th>Qty</th><th>Rate</th><th>Amount</th></tr></thead>
      <tbody>
        <?php foreach($items as $it): ?>
          <tr>
            <td><?php echo htmlspecialchars($it['name']); ?></td>
            <td><?php echo (int)$it['qty']; ?></td>
            <td><?php echo number_format($it['rate'],2); ?></td>
            <td><?php echo number_format($it['qty']*$it['rate'],2); ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
      <tfoot>
        <tr><td colspan="3">Subtotal</td><td><?php echo number_format($subtotal,2); ?></td></tr>
        <tr><td colspan="3">GST (18%)</td><td><?php echo number_format($gst,2); ?></td></tr>
        <tr><td colspan="3">Total</td><td><?php echo number_format($total,2); ?></td></tr>
      </tfoot>
    </table>
    <p class="muted">Thank you for your business.</p>
  </div>
</body></html>

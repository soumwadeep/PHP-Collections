<?php
// 12: Newsletter subscribe (session "storage")
session_start();
$msg = '';
if($_SERVER['REQUEST_METHOD']==='POST'){
  $email = trim($_POST['email'] ?? '');
  if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    $_SESSION['subscribers'][] = $email;
    $msg = 'Subscribed: ' . $email;
  } else {
    $msg = 'Enter a valid email';
  }
}
?>
<!doctype html>
<html lang="en"><head>
<meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Subscribe</title>
<style>
  body{margin:0;font-family:system-ui,Arial,sans-serif;background:linear-gradient(120deg,#f0f9ff,#fefce8)}
  .wrap{min-height:100vh;display:grid;place-items:center;padding:24px}
  .card{background:#fff;border:1px solid #e5e7eb;border-radius:16px;padding:24px;max-width:420px;width:100%;text-align:center}
  h1{margin-top:0}
  input{width:100%;padding:12px;border:1px solid #d1d5db;border-radius:10px;margin:8px 0}
  button{width:100%;padding:12px;border:none;border-radius:10px;background:#f59e0b;color:#fff;cursor:pointer}
  .muted{color:#6b7280;font-size:13px}
  .msg{margin-bottom:10px;color:#065f46;background:#dcfce7;padding:8px;border-radius:8px}
</style>
</head>
<body>
  <div class="wrap">
    <div class="card">
      <h1>Join our newsletter</h1>
      <?php if($msg): ?><div class="msg"><?php echo htmlspecialchars($msg); ?></div><?php endif; ?>
      <p class="muted">Short, occasional updates—no spam.</p>
      <form method="post">
        <input type="email" name="email" placeholder="you@example.com" required />
        <button>Subscribe</button>
      </form>
    </div>
  </div>
</body></html>

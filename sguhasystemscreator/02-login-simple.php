<?php
// 02: Simple login (demo only; not secure for production)
session_start();
$msg = '';
if($_SERVER['REQUEST_METHOD']==='POST'){
  $email = trim($_POST['email'] ?? '');
  $pass  = trim($_POST['password'] ?? '');
  if($email==='admin@example.com' && $pass==='admin123'){
    $_SESSION['user'] = 'Admin';
    header('Location: 02-login-simple.php');
    exit;
  } else {
    $msg = 'Invalid credentials';
  }
}
$loggedIn = isset($_SESSION['user']);
if(isset($_GET['logout'])){
  session_destroy();
  header('Location: 02-login-simple.php');
  exit;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Login</title>
<style>
  body{margin:0;font-family:system-ui,Arial,sans-serif;background:#f3f4f6;display:grid;min-height:100vh;place-items:center}
  .card{width:100%;max-width:360px;background:#fff;border:1px solid #e5e7eb;border-radius:12px;padding:24px}
  h1{margin:0 0 10px}
  label{display:block;margin:10px 0 6px}
  input{width:100%;padding:10px;border:1px solid #d1d5db;border-radius:8px}
  .btn{width:100%;margin-top:12px;padding:10px;border:none;border-radius:8px;background:#2563eb;color:#fff;cursor:pointer}
  .alert{padding:10px;border-radius:8px;background:#fee2e2;color:#991b1b;margin-bottom:10px}
  .muted{color:#6b7280;font-size:13px;text-align:center;margin-top:10px}
</style>
</head>
<body>
  <div class="card">
    <?php if($loggedIn): ?>
      <h1>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?></h1>
      <p class="muted">You are logged in.</p>
      <a class="btn" href="?logout=1" style="display:inline-block;text-align:center;text-decoration:none">Log out</a>
    <?php else: ?>
      <h1>Sign in</h1>
      <?php if($msg): ?><div class="alert"><?php echo htmlspecialchars($msg); ?></div><?php endif; ?>
      <form method="post">
        <label>Email</label>
        <input type="email" name="email" placeholder="admin@example.com" required />
        <label>Password</label>
        <input type="password" name="password" placeholder="admin123" required />
        <button class="btn">Sign in</button>
      </form>
      <p class="muted">Demo credentials above.</p>
    <?php endif; ?>
  </div>
</body>
</html>

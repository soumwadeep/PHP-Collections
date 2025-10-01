<?php
// 03: Simple register page (demo only; stores in session)
session_start();
$errors = [];
$ok = false;
if($_SERVER['REQUEST_METHOD']==='POST'){
  $name = trim($_POST['name'] ?? '');
  $email = trim($_POST['email'] ?? '');
  $pass = trim($_POST['password'] ?? '');
  if($name==='') $errors[] = 'Name required';
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid email required';
  if(strlen($pass) < 6) $errors[] = 'Password 6+ chars';
  if(!$errors){
    $_SESSION['registered'][] = ['name'=>$name,'email'=>$email];
    $ok = true;
  }
}
?>
<!doctype html>
<html><head>
<meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Register</title>
<style>
  body{margin:0;font-family:system-ui,Arial,sans-serif;background:#eef2ff;display:grid;min-height:100vh;place-items:center}
  .card{width:100%;max-width:420px;background:#fff;border:1px solid #e5e7eb;border-radius:12px;padding:24px}
  h1{margin:0 0 10px}
  label{display:block;margin:10px 0 6px}
  input{width:100%;padding:10px;border:1px solid #d1d5db;border-radius:8px}
  .btn{width:100%;margin-top:12px;padding:10px;border:none;border-radius:8px;background:#4f46e5;color:#fff;cursor:pointer}
  .ok{padding:10px;border-radius:8px;background:#dcfce7;color:#065f46;margin-bottom:10px}
  .err{padding:10px;border-radius:8px;background:#fee2e2;color:#991b1b;margin-bottom:10px}
  ul{margin:6px 0 0}
</style>
</head>
<body>
  <div class="card">
    <h1>Create account</h1>
    <?php if($ok): ?><div class="ok">Registered! (Session only)</div><?php endif; ?>
    <?php foreach($errors as $e): ?><div class="err"><?php echo htmlspecialchars($e); ?></div><?php endforeach; ?>
    <form method="post">
      <label>Name</label><input name="name" required />
      <label>Email</label><input type="email" name="email" required />
      <label>Password</label><input type="password" name="password" required />
      <button class="btn">Create account</button>
    </form>
  </div>
</body></html>

<?php
// 04: Contact form self-post (no email sending; shows summary)
$sent = false; $data = ['name'=>'','email'=>'','message'=>''];
if($_SERVER['REQUEST_METHOD']==='POST'){
  $data['name'] = trim($_POST['name'] ?? '');
  $data['email'] = trim($_POST['email'] ?? '');
  $data['message'] = trim($_POST['message'] ?? '');
  $sent = $data['name'] && filter_var($data['email'], FILTER_VALIDATE_EMAIL) && $data['message'];
}
?>
<!doctype html>
<html lang="en"><head>
<meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Contact Form</title>
<style>
  body{margin:0;font-family:system-ui,Arial,sans-serif;background:#eef2f7}
  .wrap{max-width:720px;margin:0 auto;padding:28px}
  .card{background:#fff;border:1px solid #e5e7eb;border-radius:12px;padding:18px}
  label{display:block;margin:10px 0 6px;color:#374151}
  input, textarea{width:100%;padding:10px;border:1px solid #d1d5db;border-radius:8px}
  textarea{min-height:120px}
  .row{display:grid;grid-template-columns:1fr 1fr;gap:12px}
  button{margin-top:12px;padding:10px 14px;border:none;border-radius:8px;background:#10b981;color:#fff;cursor:pointer}
  .ok{padding:10px;border-radius:8px;background:#dcfce7;color:#065f46;margin-bottom:10px}
</style>
</head>
<body>
  <div class="wrap">
    <h1>Contact Us</h1>
    <div class="card">
      <?php if($sent): ?>
        <div class="ok">Thanks! We got your message.</div>
        <pre><?php echo htmlspecialchars(print_r($data, true)); ?></pre>
      <?php endif; ?>
      <form method="post">
        <div class="row">
          <div>
            <label>Name</label><input name="name" value="<?php echo htmlspecialchars($data['name']); ?>" required />
          </div>
          <div>
            <label>Email</label><input type="email" name="email" value="<?php echo htmlspecialchars($data['email']); ?>" required />
          </div>
        </div>
        <label>Message</label>
        <textarea name="message" required><?php echo htmlspecialchars($data['message']); ?></textarea>
        <button>Send message</button>
      </form>
    </div>
  </div>
</body></html>

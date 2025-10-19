<?php
// Simple uploader to /media (create if missing). Protect with auth!
$dir = __DIR__ . '/../media/';
if (!is_dir($dir)) @mkdir($dir, 0775, true);
$url = '';
$msg = '';
if ($_SERVER['REQUEST_METHOD']==='POST' && !empty($_FILES['file']['tmp_name'])) {
    $fn = basename($_FILES['file']['name']);
    $dest = $dir . $fn;
    if (move_uploaded_file($_FILES['file']['tmp_name'], $dest)) {
        $url = '/media/' . $fn;
        $msg = 'Uploaded: ' . htmlspecialchars($url);
    } else {
        $msg = 'Upload failed.';
    }
}
?>
<h2>Upload Media</h2>
<?php if ($msg): ?><div style="padding:8px;background:#eef;border:1px solid #99f"><?php echo $msg; ?></div><?php endif; ?>
<form method="post" enctype="multipart/form-data">
  <input type="file" name="file" required>
  <button>Upload</button>
</form>
<?php if ($url): ?>
<p>Use this URL in channels HTML: <code><?php echo htmlspecialchars($url); ?></code></p>
<?php endif; ?>
<p><a href="index.php">&larr; Admin Home</a></p>

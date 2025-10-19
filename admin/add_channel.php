<?php
// Minimal, file-based channel manager. Protect with auth!
$file = __DIR__ . '/../channels.json';
$channels = [];
if (file_exists($file)) {
    $channels = json_decode(file_get_contents($file), true) ?: [];
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $html = $_POST['html'] ?? '';
    if ($name && $html) {
        $next = (string)((int)max(array_keys($channels) ?: [0]) + 1);
        $channels[$next] = ['name'=>$name, 'html'=>$html];
        file_put_contents($file, json_encode($channels, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES));
        header('Location: add_channel.php?ok=1'); exit;
    }
}
?>
<h2>Add Channel</h2>
<?php if (!empty($_GET['ok'])): ?>
  <div style="padding:8px;background:#dfd;border:1px solid #9c9">Saved!</div>
<?php endif; ?>
<form method="post">
  <label>Name<br><input name="name" required style="width:320px"></label><br><br>
  <label>HTML embed (iframe/video/img)<br>
    <textarea name="html" rows="8" cols="80" required placeholder="<video src='/media/foo.mp4' autoplay loop muted></video>"></textarea>
  </label><br><br>
  <button type="submit">Add channel</button>
</form>
<hr>
<h3>Current channels</h3>
<pre><?php echo htmlspecialchars(json_encode($channels, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES)); ?></pre>
<p><a href="index.php">&larr; Admin Home</a></p>

    <?php
    // Run via cron every minute. Europe/Rome by default.
    date_default_timezone_set('Europe/Rome');
    $playlist = json_decode(@file_get_contents(__DIR__.'/../playlist.json'), true) ?: [];
    $now = date('H:i');
    foreach ($playlist as $slot) {
        if (!empty($slot['at']) && !empty($slot['synk']) && $slot['at'] === $now) {
            $state = [['synk'=>$slot['synk'], 'screen'=>'main', 'switch'=>'2', 'version'=>time()]];
            file_put_contents(__DIR__ . '/../synk.json', json_encode($state));
            echo "Switched to synk={$slot['synk']} at $now
";
            break;
        }
    }

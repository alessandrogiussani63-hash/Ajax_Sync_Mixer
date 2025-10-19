#!/usr/bin/env bash
set -euo pipefail

mkdir -p js vendor/jquery-ui vendor/socket.io vendor/webrtc

echo "[1/5] Downloading jQuery 3.7.1 ..."
curl -fL https://code.jquery.com/jquery-3.7.1.min.js -o js/jquery-3.7.1.min.js

echo "[2/5] Downloading jQuery UI 1.14.1 JS ..."
curl -fL https://code.jquery.com/ui/1.14.1/jquery-ui.min.js -o vendor/jquery-ui/jquery-ui.min.js

echo "[3/5] Downloading jQuery UI 1.14.1 CSS (base theme) ..."
curl -fL https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.min.css -o vendor/jquery-ui/jquery-ui.min.css

echo "[4/5] Downloading Socket.IO client 4.7.5 ..."
curl -fL https://cdn.socket.io/4.7.5/socket.io.min.js -o vendor/socket.io/socket.io.min.js

echo "[5/5] Downloading DataChannel.js ..."
curl -fL https://www.webrtc-experiment.com/DataChannel.js -o vendor/webrtc/DataChannel.js

echo "Done. Verifying files..."
ls -lh js/jquery-3.7.1.min.js vendor/jquery-ui/jquery-ui.min.js vendor/jquery-ui/jquery-ui.min.css vendor/socket.io/socket.io.min.js vendor/webrtc/DataChannel.js
echo "All vendor files downloaded successfully."

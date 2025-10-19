# StreamFast Console Control — Devel V

This "Devel V" study build adds:
- **Channel library** (`channels.json`) to avoid hardcoded `Links_1...` variables.
- **Admin tools** (`/admin`) to upload media and add channels from a web UI (file-based).
- **Playlist scheduling** (`playlist.json` + `cron/scheduler.php`) to time-based switch channels.
- **Compatibility layer** (`js/channels_loader.js`) that populates legacy `Links_N` globals so the old `appendDIV()` keeps working unchanged.

## Try it
```bash
./vendor_fetch.sh
php -S 127.0.0.1:8080
# open http://127.0.0.1:8080/admin/  (protect with auth in production)
```

## Cron example
See `cron/README.txt` for a basic crontab line.

## Security
Protect `/admin/*` and `write_synk.php` with HTTP auth or reverse-proxy rules.

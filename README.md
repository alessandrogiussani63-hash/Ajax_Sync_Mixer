# 🎬 StreamFast Console Control (Universal Edition)

### Overview
**StreamFast Console Control** is a lightweight, universal web system built with **PHP + JavaScript (jQuery)** that lets you **control what thousands of users are watching in real time** — directly from a central **web console**.

It provides a simple yet powerful way to **synchronize multiple clients** (e.g., screens, web players, digital signage terminals) without any complex backend or platform dependency.

The system’s core is a shared JSON file (`synk.json`) continuously updated by the console.  
Whenever the operator changes a channel or screen, **all connected clients** instantly reflect the update.

---

### 🧩 Architecture

| File | Purpose |
|------|----------|
| `index.php` | Main client interface – displays the current channel. |
| `consol.php` | Control console – sends commands to all connected clients. |
| `functions.js` | Handles AJAX synchronization and UI logic on client side. |
| `js/function.js` | Main control logic and animations (appendDIV, Send, ReSynk…). |
| `js/get_switch.js` | Reads and increments the `switch` value from `get_synk.php`. |
| `js/ajax_synk.js` | Dynamically updates HTML tables and client info. |
| `get_synk.php` | Returns current system state (`synk.json`) in JSON format. |
| `write_synk.php` | Receives POST updates from the console and updates `synk.json`. |
| `synk.json` | Shared state object containing `synk`, `screen`, and `switch`. |
| `vendor_fetch.sh` | Downloads official vendor libraries (jQuery/UI/Socket.IO/DataChannel). |
| `run_local.sh` | Launches a local PHP server for testing. |
| `smoke_test.html` | Verifies that all libraries load correctly. |

---

### ⚙️ How It Works

1. The **console (`consol.php`)** sends commands via `write_synk.php`, updating `synk.json`.
2. Each **client (`index.php`)** periodically polls `get_synk.php` to check for changes.
3. When a difference is detected, the client updates its content accordingly.
4. The result: all users stay synchronized, without WebSocket or server-side frameworks.

---

### 🚀 Quick Start (Local Environment)

```bash
./vendor_fetch.sh
./run_local.sh
# Then open in your browser:
#  - http://127.0.0.1:8080/smoke_test.html  → check all libraries
#  - http://127.0.0.1:8080/index.php        → client interface
#  - http://127.0.0.1:8080/consol.php       → control console
```

> **Requirements:** PHP 7.4+ and `curl` installed.

---

### 🔒 Security Recommendations
- `write_synk.php` modifies local files — **never expose it publicly** without authentication.  
- Use HTTP Basic Auth or token-based protection for the console.  
- Always validate inputs (`synk`, `screen`, `switch`) on the backend.

---

### 🧠 Project Philosophy
> “A universal remote control — readable by anyone, working everywhere.”

- Zero complex backend setup  
- Fully portable across Hestia, Apache, Nginx, Windows, macOS, and Linux  
- Ideal for synchronized streaming, classrooms, live events, or digital signage networks  

---

### 💡 Future Enhancements
- Real-time updates using **WebSocket / Socket.IO**  
- **Redis / PostgreSQL** integration for scaling and redundancy  
- Real-time dashboard for monitoring connected clients and latency  

---

### 👨‍💻 Author
**Alex Giussani**  
Built with creative and technical collaboration from *ChatGPT (the “little brother”)*  
© 2025 StreamFast Project – All rights reserved.

---

### 🧾 License
MIT License – free to use and modify with attribution.

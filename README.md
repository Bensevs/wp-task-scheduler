#  WP Task Scheduler

A professional **WordPress plugin** built with **MVC architecture** that allows administrators to:

✅ Schedule and run custom tasks (using WP Cron)  
✅ View logs of executed tasks  
✅ Access logs via **REST API**  
✅ Manage plugin settings  
✅ Display everything inside a modern **Admin Dashboard**

---

## 📂 Folder Structure

wp-task-scheduler/
├── includes/
│ ├── controllers/
│ └── core/
├── logs/
├── public/
│ ├── css/
│ └── js/
├── tests/
└── wp-task-scheduler.php

yaml
Copy
Edit

---

## ✨ Features

- 🔗 **Cron Jobs:** Automate scheduled tasks easily
- 🔗 **Logging System:** Keep records of executed jobs
- 🔗 **REST API:** Access logs externally via `/wp-json/myplugin/v1/logs`
- 🔗 **Admin Dashboard:** Simple UI built with jQuery & Tailwind-ready styles
- 🔗 **Plugin Settings:** Manage plugin options via WordPress Settings API
- 🔗 **Autoloading:** PSR-like autoloader for better architecture
- 🔗 **Testing:** Includes PHPUnit tests for Cron and Logging

---

## 🛠 Installation

1. Download or clone this repository inside your WordPress `/wp-content/plugins/` folder.
2. Activate the plugin via **WordPress Admin → Plugins**.
3. Access the dashboard via **Admin → Task Scheduler**.

---

## 📡 REST API

| Endpoint | Description |
|----------|-------------|
| `/wp-json/myplugin/v1/logs` | Returns logs in JSON |

---

## ⚙️ Settings

Go to **Admin → Settings → Task Scheduler** to manage plugin options.

---

## 💻 Development & Testing

Install PHPUnit (locally):

```bash
composer install
Tests are located inside /tests/ directory.

Author
Himan 
Instagram : @Hemincodes

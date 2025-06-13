# 🛡️ User Auth System (PHP)

A secure, modular **User Authentication System** built in PHP. Ideal for learning, extending, or integrating basic auth flows into your applications.

---

## 📋 Table of Contents

1. [Overview](#overview)
2. [Features](#features)
3. [Tech Stack](#tech-stack)
4. [Architecture & Folder Structure](#architecture--folder-structure)
5. [Installation & Setup](#installation--setup)
6. [Usage](#usage)
7. [Security Notes](#security-notes)
8. [Contributing](#contributing)
9. [License](#license)

---

## 💡 Overview

This project demonstrates a clean **PHP‑based authentication flow** with session management. Great for anyone learning PHP OOP or building foundational auth features before adopting full-stack frameworks. It's a work‑in‑progress that’s evolving with deeper OOP practices, PSR‑compliance, and enhanced security practices.

---

## ✅ Features

* User **Registration**, **Login**, and **Logout**
* Persistent **session management** (via `$_SESSION`)
* **Password hashing** using PHP’s `password_hash()` and `password_verify()`
* **Input validation** & graceful error / field validation handling
* Structured for **OOP refactoring**, extensibility & reuse

---

## 🧠 Tech Stack

* **PHP** (native, no framework)
* **MySQL** (or compatible RDBMS via PDO)
* Composer-ready structure (autoload ready)
* Optional front-end enhancements (e.g., Bootstrap, client-side validation)

---

## 🗂️ Architecture & Folder Structure

```
/ (root)
├── src/                 # Core PHP classes (e.g. User, Auth, DB)
├── public/              # Entry points: index.php, login.php, register.php, logout.php
├── config/              # database.php, config.php for environment vars
├── templates/           # Shared header/footer or email templates
├── assets/              # JS / CSS / images
├── vendor/              # Composer dependencies (optional)
└── README.md
```

* Classes live under `src/`, following PSR‑4 standards.
* Public MVC-like controllers (`public/*.php`) handle form data, instantiate Auth logic, and render templates.
* `config/` centralizes DB and session settings.

---

## ⚙️ Installation & Setup

### Requirements

* PHP 7.4+ with PDO (MySQL or MariaDB)
* MySQL 5.7+
* Composer (optional, if using autoloading)

### Steps

1. **Clone the repo**

   ```bash
   git clone https://github.com/MisaghMomeniB/User-Auth-System-PHP.git
   ```
2. **Import DB schema** (`schema.sql`) into your database.
3. **Configure DB connection** (`config/config.php`):

   ```php
   define('DB_HOST', 'localhost');
   define('DB_NAME', 'your_db');
   define('DB_USER', 'db_user');
   define('DB_PASS', 'secret');
   ```
4. **(Optional)** Install dependencies & autoload:

   ```bash
   composer install
   ```
5. **Serve the project**:

   * For built-in PHP server:

     ```bash
     php -S localhost:8000 -t public/
     ```
   * Or configure with Apache/Nginx.

---

## 🚀 Usage

* **Register**: Open `/register.php`, fill the form to create an account
* **Login**: Via `/login.php`, then access protected areas
* **Logout**: Via `/logout.php`, cleans session & redirects
* **Session Check**: Ensure protection using middleware pattern in your secured pages

---

## 🔒 Security Notes

* Uses `password_hash()` / `password_verify()` for password safety
* Uses **prepared statements** via PDO to prevent SQL injection
* Session‑based authentication with regeneration of session IDs after login
* Next steps: CSRF tokens, login throttling, email verification, 2FA — upcoming in this repo!

---

## 🤝 Contributing

Contributions welcome!

1. Fork the repo
2. Create a feature branch (`feature/…`)
3. Commit your changes with clear messages
4. Open a **Pull Request** and describe your changes

---

## 📝 License

This project is licensed under the **MIT License**. Feel free to use, modify, and distribute it.

---

**Let me know if you'd like**:

* Example `.env` / config templates
* Basic CSRF / 2FA implementation
* Commented code blocks or diagrams

# User Authentication System 🛡️🔐

A modern, secure, and responsive **User Authentication System** built with **PHP**, **MySQL**, and **Bootstrap**. This project provides user registration, login, session management, and a clean dashboard, with a focus on security and user experience. 🚀

---

## Table of Contents 📑
- [Features](#features-✨)
- [Technologies](#technologies-🛠️)
- [Project Structure](#project-structure-📂)
- [Setup Instructions](#setup-instructions-⚙️)
- [Usage](#usage-📖)
- [Security](#security-🔒)
- [Screenshots](#screenshots-📸)
- [Future Improvements](#future-improvements-🌟)
- [Contributing](#contributing-🤝)
- [License](#license-📜)

---

## Features ✨
- **User Registration** 📝: Create an account with username, email, and password.
- **User Login** 🔑: Securely log in with username and password.
- **Session Management** 🔗: Maintain user sessions with PHP sessions.
- **Dashboard** 🖥️: Personalized dashboard for logged-in users.
- **Responsive Design** 📱: Built with Bootstrap for a mobile-friendly UI.
- **Secure Password Storage** 🔐: Passwords are hashed using `password_hash()`.
- **Input Validation** ✅: Client- and server-side validation for all inputs.
- **Error Handling** ⚠️: User-friendly error and success messages.
- **Logout Functionality** 🚪: Safely log out and destroy sessions.

---

## Technologies 🛠️
- **PHP 7.4+** 🐘: Backend logic and session management.
- **MySQL** 🗄️: Database for storing user data.
- **Bootstrap 5** 🎨: Responsive and modern front-end styling.
- **HTML5/CSS3** 🌐: Structure and custom styles.
- **PDO** 🔗: Secure database connections with prepared statements.

---

## Project Structure 📂
```
user-auth-system/
├── css/                    # Custom styles
│   └── style.css
├── includes/               # Reusable PHP files
│   ├── db.php             # Database connection
│   ├── header.php         # Navbar and HTML head
│   └── footer.php         # HTML footer and scripts
├── register.php            # Registration page
├── login.php               # Login page
├── dashboard.php           # User dashboard
├── logout.php              # Logout script
└── index.php               # Home page
```

---

## Setup Instructions ⚙️

### Prerequisites
- **Web Server** (e.g., Apache via XAMPP) 🖥️
- **PHP 7.4+** 🐘
- **MySQL** 🗄️
- **Browser** (e.g., Chrome, Firefox) 🌐

### Steps
1. **Clone the Repository** 📥
   ```bash
   git clone https://github.com/your-username/user-auth-system.git
   ```

2. **Set Up the Database** 🗄️
   - Create a MySQL database named `user_auth`.
   - Run the following SQL to create the `users` table:
     ```sql
     CREATE DATABASE user_auth;
     USE user_auth;

     CREATE TABLE users (
         id INT AUTO_INCREMENT PRIMARY KEY,
         username VARCHAR(50) NOT NULL UNIQUE,
         email VARCHAR(100) NOT NULL UNIQUE,
         password VARCHAR(255) NOT NULL,
         created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
     );
     ```

3. **Configure Database Connection** 🔗
   - Open `includes/db.php`.
   - Update the database credentials:
     ```php
     $host = 'localhost';
     $dbname = 'user_auth';
     $username = 'your_mysql_username'; // e.g., 'root'
     $password = 'your_mysql_password'; // e.g., ''
     ```

4. **Host the Project** 🌐
   - Move the project folder to your web server's root (e.g., `htdocs` for XAMPP).
   - Start your web server and MySQL.

5. **Access the Application** 🚀
   - Open `http://localhost/user-auth-system/` in your browser.

---

## Usage 📖
1. **Home Page** 🏠
   - Visit the home page (`index.php`) to see links for login or registration.
2. **Register** 📝
   - Go to `register.php`, enter a username, email, and password, and submit.
   - Passwords must be at least 6 characters, and usernames/emails must be unique.
3. **Login** 🔑
   - Go to `login.php`, enter your username and password, and log in.
   - On success, you'll be redirected to the dashboard.
4. **Dashboard** 🖥️
   - View your personalized dashboard (`dashboard.php`) with a welcome message.
5. **Logout** 🚪
   - Click "Logout" to end your session and return to the login page.

---

## Security 🔒
- **Password Hashing** 🔐: Passwords are securely hashed using `password_hash()`.
- **SQL Injection Prevention** 🛡️: Uses PDO prepared statements.
- **XSS Protection** 🚫: User inputs are escaped with `htmlspecialchars()`.
- **Session Security** 🔗: Sessions are managed with `session_start()` and `session_destroy()`.

---

## Screenshots 📸
*(Add screenshots here if hosting on GitHub. For now, placeholders.)*
- **Registration Page** 📝: Clean form with validation.
- **Login Page** 🔑: Simple and secure login interface.
- **Dashboard** 🖥️: Personalized user dashboard.

---

## Future Improvements 🌟
- **Password Recovery** 📧: Add email-based password reset.
- **CAPTCHA** 🤖: Prevent automated registrations.
- **User Profiles** 👤: Allow users to edit their profiles.
- **Two-Factor Authentication** 🔐: Enhance security with 2FA.
- **Dark Mode** 🌙: Add a toggle for dark theme.

---

## Contributing 🤝
Contributions are welcome! 🙌 To contribute:
1. Fork the repository 🍴.
2. Create a new branch (`git checkout -b feature/your-feature`) 🌿.
3. Commit your changes (`git commit -m "Add your feature"`) 💾.
4. Push to the branch (`git push origin feature/your-feature`) 🚀.
5. Open a Pull Request 📬.

---

## License 📜
This project is licensed under the **MIT License**. See the [LICENSE](LICENSE) file for details.

---

💡 **Built with ❤️ by Misagh**  
📬 Feel free to open an issue or contact me for questions!  

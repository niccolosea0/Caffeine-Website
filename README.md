# ☕ Caffeine — Coffee Shop Website

**Caffeine** is a 5+ page responsive coffee shop website created as a final project for the **Web Programming** course at university. It combines front-end technologies with core PHP to simulate a simple but functional user experience, including registration, login, browsing coffee items, and more.

---

## 🎯 Project Objective

This project fulfills the following **front-end requirements** as defined by the university course:

### ✅ Layout & Structure

- Developed using **HTML5** with **semantic markup**.
- **Responsive design** using **CSS3 media queries**.
- **No table-based layout**, follows W3C markup standards.
- Styles are separated into external CSS (`css/style.css`).
- At least **5 pages**: `index.php`, `about.php`, `menu.php`, `facilities.php`, `sign-up.php`.

### ✅ CSS3 Features

- Used modern **CSS3 features**:
  - `background`, `box-shadow`, `linear-gradient`
  - `transition`, `transform`, and custom animations (e.g., button hover, image scaling)
- Colors:
  - Carefully chosen using the **color wheel**
  - Includes color formats: `HEX`, `RGBA`, and `HSL`

### ✅ Form & Interactivity

- Sign-up and Sign-in **forms** with proper `required`, `type`, and other attributes
- JavaScript validation added for both forms (length, email check)
- One fragment of **JavaScript** (carousel, mobile menu toggle)
- All visual and layout decisions align with **modern design principles**

---

## 💻 Technologies Used

### Front-End

- HTML5
- CSS3 (Media Queries, Flexbox, Gradients, Transforms, Transitions, Animations)
- JavaScript (Vanilla JS for interactivity)
- Responsive design optimized for mobile/tablet/desktop

### Back-End

- PHP (Core)
- File system for user registration and login
- Sessions and cookies
- File uploads with logging

---

## ⚙️ Features Overview

### ✍️ Form Handling

- Fully working **Sign-Up** and **Sign-In** forms
- **Client-side validation** (JavaScript)
- **Server-side validation** (PHP)

### 🔐 User Authentication

- Passwords are **hashed**
- Session and cookie logic implemented
- Logout clears session and redirects

### 📁 File & Data Handling

- Registered users stored as `.txt` files
- Logs uploads to `upload-log.txt`
- Automatically creates user directories if not present

### 📦 File Upload

- File upload form included with basic logging and security
- Upload saved in `uploads/` directory

---

## 📱 Responsive Design

Website layout adapts across:

- Mobile devices
- Tablets
- Desktop screens

Tested using browser dev tools for mobile responsiveness.

---

## 🔧 How to Run

1. Install **WAMP** or **XAMPP**
2. Place project folder in `www` or `htdocs` directory
3. Navigate to `http://localhost/Caffeine/index.php`
4. Ensure `users/` and `uploads/` folders are **writable**

---

## 🧑‍🎓 Author

**Niccolosea**  
2nd Year Computer Science Student  
Project for _Web Programming Course_ – 2025

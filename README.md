# PHP MySQL Login & Registration System

A simple Login and Registration system built using PHP and MySQL. The project allows users to create an account, log in using their credentials, access a protected dashboard, and sign out securely.

## Features

* User Registration
* User Login
* MySQL Database Integration
* Session-Based Authentication
* Protected Dashboard
* Logout / Sign Out
* Form Handling using PHP
* Responsive and Simple UI

## Technologies Used

* HTML5
* CSS3
* PHP
* MySQL
* XAMPP
* phpMyAdmin

## Project Flow

```text
Register
   ↓
MySQL Database
   ↓
Login
   ↓
Session
   ↓
Dashboard
   ↓
Logout
```

## Database

The project uses MySQL to store registered user information.

Example database structure:

```text
Database: company

Table: users

- id
- name
- email
- password
```

## How to Run

1. Install XAMPP.
2. Start Apache and MySQL from XAMPP.
3. Place the project folder inside:

```text
C:\xampp\htdocs\
```

4. Open phpMyAdmin.
5. Create the required database and users table.
6. Open the project in your browser:

```text
http://localhost/project-folder/
```

## Authentication

The login system uses PHP sessions to keep the user logged in and provide access to the dashboard.

## Author

Kashan

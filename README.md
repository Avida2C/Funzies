
# Funzies Collection
<div><img src="https://img.shields.io/badge/HTML-eb5a00?style=flat" alt="HTML" /> <img src="https://img.shields.io/badge/CSS-006aff?style=flat" alt="CSS" /> <img src="https://img.shields.io/badge/Bootstrap-b319ff?style=flat" alt="Bootstrap" /> <img src="https://img.shields.io/badge/JavaScript-ffdd00?style=flat" alt="JavaScript" /> <img src="https://img.shields.io/badge/PHP-8fceff?style=flat" alt="PHP" /></div>

Funzies is a robust e-commerce platform offering a wide array of collectibles for enthusiasts of all ages, making it the perfect destination for unique items like detailed car models and Funko Pop figurines. It's a prime choice for collectors seeking distinctive gifts and is designed for a seamless and comprehensive shopping experience.

The platform empowers users with user-friendly navigation, detailed product insights, and efficient order processing, while also offering an extensive backend for administrative management.
## Current Features
### Main Features
    Cross platform
    User-Friendly Design
    Search and Filter Options
    Shopping Cart
    Customer Accounts
    Wish Lists
    Social Media Integration

### Admin Features
    User Management
    Role Management
    Brand Management
    Category Management
    Product Managment
    Order Management
    

## Installation and Setup
Download and Install XAMP
```bash
  https://www.apachefriends.org/
```
1. Launch XAMP / MAMP
- Windows: Navigate to the Start Menu and search for XAMP Control Panel.
- macOS: Navigate to the XAMP Folder and run 'manager-osx'.

2. Once the program is open, click on Start.
- Windows: Click start for both Apache and SQL. 
- macOS: Click the start button at the upper-right side corner.

### Testing Connection
Test Appache: Open your web browser and visit:
```bash
http://localhost/
```
Access phpMyAdmin: You can manage your MySQL databases by visiting:
```bash
http://localhost/phpmyadmin/
``` 

## Deployment

1. Unzip the downloaded folder and place the unzipped folder in: 
```bash
  C:\XAMPP\htdocs
```
2. Navigate into the unzipped folder and locate 'funzies.sql':
```bash
  C:\XAMPP\htdocs\Funzies\sql file
```
3. Copy the SQL file and paste it in a more accessible location.

4. Go to:
```bash
  http://localhost/phpmyadmin/
```
5. In the top menu find and click on SQL

6. Drag and drop 'funzies.sql' in the textbox. 

7. Scroll down and find the button 'Go'. 

8. Once the 'Go' button is clicked, a new database including its content is created.

#### Accessing the website from windows OS should cause no issues once the sql file has been imported successfully. 

### Additional steps for macOS users only:
1. Find the connection.php file.
```bash
  C:\XAMPP\htdocs\Funzies\connection.php
```
2. Open the connection.php file through either Visual studio code or note/note++

3. Change the dbPassword to root.
```bash
  $dbPassword = "root"; 
```

## Running Tests

To run tests:
```bash
  vendor\bin\phpunit tests\testing.php
```

<img style="width:50%;" src="img/logo.png" alt="Website Logo">


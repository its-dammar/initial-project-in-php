Complete PHP File Architecture

main                     # Main directory
│
├── admin                # Admin section
│   ├── assets           # Admin assets directory
│   │   ├── css          # CSS files for admin panel
│   │   │   └── style.css
│   │   ├── js           # JavaScript files for admin panel
│   │   │   └── main.js
│   │   ├── uploads      # Directory for uploaded files in the admin panel
│   │   └── fonts        # Fonts directory for admin panel
│   ├── layouts          # Admin layout templates
│   │   ├── header.php
│   │   ├── navbar.php
│   │   ├── sidebar.php
│   │   └── footer.php
│   ├── auth             # Authentication files for admin
│   │   ├── login.php
│   │   ├── register.php
│   │   └── logout.php
│   ├── middleware       # Middleware scripts for admin
│   │   └── secure.php
│   ├── config           # Database connection configuration
│   │   └── config.php
│   ├── database         # Database related files
│   │   └── database.sql
│   ├── index.php        # Admin index file (login form)
│   ├── dashboard.php    # Admin dashboard file
│   └── tasks            # Admin tasks directory
│       ├── create.php
│       ├── edit.php
│       ├── index.php
│       └── show.php
│
├── assets               # Shared assets directory
│   ├── css              # Shared CSS files
│   │   └── style.css
│   ├── js               # Shared JavaScript files
│   │   └── main.js
│   ├── uploads          # Shared image files
│   └── fonts            # Shared font files
│
├── includes             # Common includes directory
│   ├── header.php
│   ├── navbar.php
│   └── footer.php
│
├── pages                # Directory for other pages
│   ├── about.php        # About page
│   ├── products.php     # Products page
│   ├── services.php     # Services page
│   └── contact.php      # Contact page
│
├── index.php            # Main index file
└── README.md            # Main Readme file



Data types:
INT
VARCHAR (255)
Text
longtext
date
timesatamp

Queries:
INSERT INTO table_name (fiend1, fiend2) VALUES ('$value1', '$value2');

UPDATE table_name SET fiendname='$varialbe', iendname='$varialbe' Condition;
UPDATE table_name SET fiendname='$varialbe', iendname='$varialbe' WHERE id= $id;

SELECT * FROM Table_name;
SELECT name, email FROM Table_name;

DLELETE FROM Table_name condition;
DLELETE FROM Table_name WHERE id= $id;

DROP TABLE Table_name
DROP DATABASE Table_name



Functions:
mysql();  database connection
mysqli_query();  :connect database and query
mysqli_fetch_array();  : fetch all data from database
mysqli_fetch_assoc();  : fetch single row data from database
destroy(); 


Global variables:
$_POST[''];  : INSERT data
$_GET[''];  : Fetch data
$_SESSION[''];  
$_SERVER


Clause:
WHERE
ORDER BY
LIMIT
DESC
ASCE






Create Database:
Database_Name: php_tms
http://localhost/phpmyadmin

tables:

tasks
id | title | description | status | created_at | updated_at


Assignment:

services
id | title | subtitle| icon| description | status | created_at | updated_at

INT AI | VARCHAR | VARCHAR | VARCHAR/TEXT | INT (AS Define:Default=1) | TIMESTAMP (Default: CURRENT_TIMESTAMP)


students
id | name | phone| email| password | status | created_at | updated_at

INT AI | VARCHAR | VARCHAR | VARCHAR/TEXT | INT (AS Define:Default=1) | TIMESTAMP (Default: CURRENT_TIMESTAMP)


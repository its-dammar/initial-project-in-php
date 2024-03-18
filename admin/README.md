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

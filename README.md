Vue + PHP Mailer Application

This project is a simple application built with a **Vue.js frontend** and a **PHP backend** to send emails.  
The goal is to allow users to fill out and submit a form through Vue, and then process the email on the backend using PHP.


1# Start the Vue.js frontend

npm run serve


2# Start the PHP backend

php -S localhost:8000 sendMail.php



├── backend/          # PHP backend (contains sendMail.php)
├── node_modules/     # Installed dependencies
├── public/           # Static files
├── src/              # Vue.js source code
│   ├── assets/       # Images, styles, etc.
│   ├── components/   # Vue components
│   ├── App.vue       # Root Vue component
│   └── main.js       # Vue entry point
├── .gitignore
├── babel.config.js
├── jsconfig.json
├── package-lock.json
├── package.json
├── README.md
└── vue.config.js

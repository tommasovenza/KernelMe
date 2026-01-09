# KernelMe

Personal portfolio and blog built with Laravel.  
It includes a landing page, a small blog, a contact form and a Last.fm-powered “My listens” section.

---

## Tech stack

-   **Backend**

    -   PHP
    -   Laravel

-   **Frontend**

    -   Blade templates
    -   JavaScript (custom scripts)
    -   Sass (SCSS) compiled with Vite
    -   Utility classes (Tailwind-style)
    -   Alpine.js (via CDN)
    -   Font Awesome (via CDN)

-   **Other**
    -   MySQL / MariaDB as database
    -   Last.fm API for the "My listens" page
    -   Vite for bundling and building assets

---

## How to run the app locally

### 1. Clone the repository

```bash
git clone https://github.com/tommasovenza/KernelMe.git
cd KernelMe
```

### 2. Install PHP and JS dependencies

composer install
npm install

### 3. Configure the environment

Copy the .env.example file to .env:

cp .env.example .env

Then open .env and set at least:
APP_NAME="KernelMe"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost

# Database

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=kernelme
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password

# Mail (for the contact form)

MAIL_MAILER=smtp
MAIL_HOST=your_smtp_host
MAIL_PORT=your_smtp_port
MAIL_USERNAME=your_smtp_user
MAIL_PASSWORD=your_smtp_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="noreply@your-domain.com"
MAIL_FROM_NAME="${APP_NAME}"

# Last.fm (for the "My listens" page)

LASTFM_API_KEY=your_lastfm_api_key
LASTFM_USERNAME=your_lastfm_username

### 4. Generate the app key

php artisan key:generate

### 5. Run the migrations

php artisan migrate

### 6. Start Vite (JS + Sass)

For development:

npm run dev

For a production build:

npm run build

### 7. Start the Laravel server

php artisan serve

The app is now available at:
http://localhost:8000

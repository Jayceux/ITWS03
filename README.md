# WorkIT (WS03)

A compact PHP MVC-style job board used as an educational case study and starter template for listing and managing job opportunities.

## Features
- Simple MVC structure with PSR-4 autoloading (see `composer.json`).
- User authentication (register/login) and listing CRUD (create/read/update/delete).
- Keyword and location search with basic filtering.
- Responsive frontend styled with Tailwind CSS.

## Tech stack
- PHP (plain PHP, no framework) with PSR-4 autoloading
- PDO / MySQL (DB config: `config/db.php`)
- Custom `Framework/` utilities: `Router`, `Database`, `Session`, `Validation`, and `Authorization`.

## Accessing the site
- Home: `/` (entrypoint: `public/index.php`, routes: `routes.php`).
- Listings: `/listings` and related CRUD routes (see `App/Controllers/ListingController.php`).
- Auth: login/register handled by `App/Controllers/UserController.php`.

## Screenshots
Include images from `screenshots/` to showcase the UI:

- Home / Listings: `screenshots/` 

- Myblog screenshots is for other Case Study

## Important files
- Entrypoint: `public/index.php`
- Routes: `routes.php`
- DB config: `config/db.php`
- Controllers: `App/Controllers/`
  - `HomeController.php`, `ListingController.php`, `UserController.php`, `ErrorController.php`
- Views: `App/views/` and partials in `App/views/partials/`
- Framework utilities: `Framework/` and `Framework/Middleware/Authorize.php`
- Helpers: `helpers.php`

## Installation (local)
1. Clone the repo:

```bash
git clone <your-repo-url> WS03
cd WS03
composer install
```

2. Configure the database in `config/db.php`.

3. Create a MySQL database (example name `workit`):

```sql
CREATE DATABASE workit CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

4. (Optional) Create the minimal tables (users, listings) — see Minimal DB schema below.

5. Serve the app locally (development):

```bash
php -S localhost:8000 -t public
# Open http://localhost:8000/
```

If using Laragon or a local stack, point the web root to the `public/` folder.

## Minimal DB schema snippets
```sql
-- users
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(191) NOT NULL,
  email VARCHAR(191) NOT NULL UNIQUE,
  city VARCHAR(100),
  state VARCHAR(100),
  password VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- listings
CREATE TABLE listings (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT NOT NULL,
  title VARCHAR(255) NOT NULL,
  description TEXT,
  company VARCHAR(191),
  city VARCHAR(100),
  state VARCHAR(100),
  salary VARCHAR(100),
  tags VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);
```

## Development notes
- Helpers in `helpers.php` provide `view()` and `redirect()` utilities used across controllers and views.
- Autoloading is configured in `composer.json` (PSR-4 mapping for `App\` and `Framework\`).
- This project is intended for learning and demonstration; not production ready.

## License / Disclaimer
This project is provided for educational purposes. Use and modify at your own risk.

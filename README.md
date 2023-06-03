# TiketHub

## Description

TiketHub is a web-based application developed for framework-based programming class quiz using the Code Igniter 4 framework for the backend and tailwind CSS (with the daisyUI component) for the frontend. It allows users to conveniently book tickets for various modes of transportation.

## Team Members

- [Arief Badrus Sholeh - 5025201228](https://github.com/ariefbadrussholeh)

## How to Run

Follow the instructions below to set up and run TiketHub on your local machine:

### Prerequisites

- PHP
- Composer
- Node.js/NPM
- MySQL or any other supported database

### Installation

- Install dependencies.

```bash
composer install
npm install
```

- Create a database named `tikethub`.
- Rename the `env` file to `.env` and configure the file with the necessary database credentials if needed.
- Run the database migration

```bash
php spark migrate --all
```

- Run the seeder

```bash
php spark db:seed RunSeeders
```

- `[Optional]` If you want to reset the database, execute the code below, and then proceed with running the database migration and seeder again.

```bash
php spark migrate:rollback
```

- `[Optional]` If you want to make changes to the styles, run the following command to enable automatic recompilation for Tailwind CSS.

```bash
npm run dev

#or

npx tailwindcss -i ./public/css/input.css -o ./public/dist/output.css --watch
```

- Start the server

```bash
php spark serve
```

- To access the admin site, please use the following credentials:

```
Username: admin
Password: katasandi123
```

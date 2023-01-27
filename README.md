## Installation

To clone this project

```bash
  git clone
  cd my-project
```

## Run Locally

```bash
  cp .env.example .env
```

and make sure to modify database connection in .env file

Install dependencies

```bash
  composer install

  npm install
```

Create project tables

```bash
   php artisan migrate --seed
```

Make Storage Shortcuts in public folder

```bash
   php artisan storage:like
```

Build the project

```bash
  npm run build
```

Start the project

```bash
  php artisan serve
```

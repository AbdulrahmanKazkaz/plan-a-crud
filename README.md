## Installation

To clone this project

```bash
  git clone https://github.com/AbdulrahmanKazkaz/plan-a-crud.git
  cd plan-a-crud
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
   php artisan storage:link
```

Build the project

```bash
  npm run build
```

Start the project

```bash
  php artisan serve
```

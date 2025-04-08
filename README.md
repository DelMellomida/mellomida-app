## 1. Clone the repository
git clone https://github.com/DelMellomida/mellomida-app.git

## 2. Navigate into the project folder
cd mellomida-app

## 3. Install PHP dependencies
composer install | composer update

## 4. Install Node.js dependencies
npm install

## 5. Build frontend assets (you can also use `npm run dev` for development)
npm run build

## 6. Create a new .env file and copy content from .env.example
cp .env.example .env

## 7. Generate application key
php artisan key:generate

## 8. Run database migrations
php artisan migrate

## 9. (Optional) If you're working in development and want live updates:
composer run dev

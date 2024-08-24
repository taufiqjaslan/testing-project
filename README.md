# Coddin Challenge (Quotes)

## Setup Instructions

1. Clone the repository:
   ```bash
   git clone <repository-url>
   cd kanye-quotes
   ```

2. Install dependencies:
   ```bash
   composer install
   npm install
   npm run dev
   ```

3. Set up the environment:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Configure your database in the `.env` file and run migrations:
   ```bash
   php artisan migrate --seed
   ```

5. Serve the application:
   ```bash
   php artisan serve
   ```

6. Access the web page at `http://localhost:8000/quotes` and log in with:
   - Email: `test@example.com`
   - Password: `password`

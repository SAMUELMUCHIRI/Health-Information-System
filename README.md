# Health Information System

A Laravel-based health information system that allows doctors to manage clients and enroll them in various health programs such as TB, HIV, and Malaria. Built with clean code, API-first design, and extendability in mind.

---

##  Features

- Doctor authentication
- Create and manage health programs
- Register clients
- Enroll clients into one or more programs
- Search and view detailed client profiles
- Expose client profiles via a clean JSON API
- Secure and scalable foundation

---

##  Built With

- [Laravel 11](https://laravel.com/)
-  [SQLite](https://www.sqlite.org/index.html)
- [Sanctum](https://laravel.com/docs/sanctum) (for API authentication)
- [Blade + Livewire](https://livewire.laravel.com/) ( interactive UI )

---

##  Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/SAMUELMUCHIRI/Health-Information-System.git
   cd Health-Information-System
   composer install
   npm install 
   
2. Make Sqlite Database in the /Database  folder
3. Create an Enviroment file .env
4. Create a key
   ```bash
   php artisan key:generate
5. php artisan Serve 

6. You should see 
<img src="/resources/images/login.png">

7. Go to Login 
<img src="/resources/images/register.png">

8. After assigning a few clients it should look like this

<img src="/resources/images/homepage.png">
   

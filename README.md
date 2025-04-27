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

9. Register your first clients

   <img src="/resources/images/client.png">
   - Here you can searc for clients using their first names 
   - Register a new client
   - The clients registered are clickable .
   - On clicking on Mercy we see.
      <img src="/resources/images/clientdetails.png>
      - Here you can edit the client details 
      - Add programs 
      - View available programs 
10. Register your first program 

   <img src="/resources/images/programs.png>

11. For interfacing with othe applications for client details 
   - API login
   <img src="/resources/images/apilogin.png">
   - Accessing Clienet details
   <img src="/resources/images/apiclientdetails.png">



## Database Design and Relationships

This section explains the structure and relationships between models in the application. The key models involved are `Client`, `User`, `Program`, `ClientProgram`, and their respective relationships.

### 1. **Client Model**
```php
public function user()
{
    return $this->belongsTo(User::class);
}
```
- **Relationship**: A `Client` **belongs to** a `User`.
- **Explanation**: Each client is associated with one user. A user can have multiple clients, but each client belongs to a single user.

```php
public function clientProgram()
{
    return $this->belongsToMany(ClientProgram::class);
}
```
- **Relationship**: A `Client` **belongs to many** `ClientProgram` entries.
- **Explanation**: A client can be associated with multiple programs, and each program can have multiple clients. The relationship is managed through a pivot table called `client_programs`.

### 2. **User Model**
```php
public function client()
{
    return $this->hasMany(Client::class);
}
```
- **Relationship**: A `User` **has many** `Client` entries.
- **Explanation**: A user can have multiple clients, but each client is associated with one user.

```php
public function program()
{
    return $this->hasMany(Program::class);
}
```
- **Relationship**: A `User` **has many** `Program` entries.
- **Explanation**: A user can have multiple programs, but each program is associated with a single user.

### 3. **Program Model**
```php
public function clients()
{
    return $this->belongsToMany(Client::class, 'client_programs');
}
```
- **Relationship**: A `Program` **belongs to many** `Client` entries through the `client_programs` pivot table.
- **Explanation**: A program can involve multiple clients, and a client can be enrolled in multiple programs. The `client_programs` pivot table facilitates this many-to-many relationship.

### 4. **ClientProgram Pivot Table**
```php
public function program()
{
    return $this->belongsTo(Program::class, 'program_id');
}
```
- **Relationship**: The `ClientProgram` pivot model **belongs to** a `Program`.
- **Explanation**: The `client_programs` table links clients to programs and includes foreign keys (`client_id`, `program_id`). Each record in the pivot table points to one client and one program.

### 5. **DoctorProgram Pivot Table**
```php
public function user()
{
    return $this->belongsTo(User::class);
}
```
- **Relationship**: The `DoctorProgram` pivot model **belongs to** a `User`.
- **Explanation**: Each record in the `doctor_program` table associates a user (e.g., doctor) with a program.

---

### Summary of Relationships:
- **Client** has a **many-to-one** relationship with `User` (a client belongs to a user).
- **User** has a **one-to-many** relationship with `Client` (a user can have many clients).
- **Client** has a **many-to-many** relationship with `ClientProgram` (a client can belong to many programs).
- **Program** has a **many-to-many** relationship with `Client` (a program can involve many clients, and a client can participate in many programs).
- **ClientProgram** is a **pivot table** linking `Client` and `Program`, managing the relationships with both `Program` and `Client`.

### Usage
These relationships allow you to perform various operations, such as:
- Retrieving all clients for a specific user.
- Retrieving all programs a client is associated with.
- Retrieving all clients involved in a specific program.

Example:
- Fetching all programs a specific client is enrolled in:
```php
$client = Client::find(1);
$programs = $client->clientProgram;
```
- Fetching all clients associated with a specific program:
```php
$program = Program::find(1);
$clients = $program->clients;
```

---

This design provides a flexible and scalable structure for handling relationships between clients, users, and programs, making it easier to manage complex data interactions in the system.


Certainly! Here's an explanation of the API development in your project, formatted for a `README.md` file:

---

## API Development

This section provides an overview of the API that has been developed for the Health Information System project. The API includes endpoints for managing clients and their details, with functionality for authentication and program associations.

### Authentication

The system uses **Laravel Sanctum** for API authentication. Sanctum provides a simple token-based authentication system that is easy to use for SPAs (Single Page Applications), mobile applications, and simple APIs.

#### Endpoints for Authentication:
- **POST /api/login**: Allows users to log in by providing their credentials (username/password). After a successful login, a token is generated, which can be used for subsequent API requests.

### Client Management

The API provides endpoints to manage client data, allowing users to view, create, and update client details. The `Client` model is associated with a `User` model, and each client can be associated with one or more programs.

#### 1. **Get Client Details**
**Endpoint:** `GET /api/client/details`

**Description**: Fetches the details of the authenticated user's client, including information such as first name, last name, date of birth, gender, national ID, and contact information.

##### Example Request:
```http
GET /api/client/details
Authorization: Bearer <access_token>
```

##### Response:
```json
{
  "firstname": "John",
  "secondname": "Doe",
  "date_of_birth": "1980-01-01",
  "gender": "Male",
  "national_id": "1234567890",
  "contact_info": "john.doe@example.com"
}
```

##### Explanation:
- **Authorization**: The `Authorization` header must include a valid Bearer token, which is obtained after login.
- The system retrieves the client details that belong to the logged-in user.

#### 2. **Error Handling for Client Not Found**
If the client does not exist for the logged-in user, the API will return an error message with a `404` status.

##### Example Response:
```json
{
  "message": "Client not found"
}
```

### Relationships and Models

The API endpoints use the following models to structure the database:

- **User Model**: Each user can have multiple clients.
- **Client Model**: Each client belongs to a user and can be associated with multiple programs.
- **Program Model**: A program can have multiple clients, and each client can be involved in multiple programs.
- **ClientProgram Pivot Table**: This table associates clients with programs and handles the relationship between them.

---

### Example Workflow

### Login:
1. The user logs in with their credentials using the `POST /api/login` endpoint.
2. Upon successful login, the user receives an authentication token.
3. The token is used to authenticate further requests.

#### Fetch Client Details:
1. The authenticated user can request their client details using the `GET /api/client/details` endpoint.
2. If the client exists, the user receives the client details in the response.
3. If the client doesn't exist, the user receives a `404` error message.


---


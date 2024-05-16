# ASD Management

This project is a small educational project designed to help learn and understand the Symfony framework. 

It includes basic CRUD operations for Athlete and Trainer entities and is configured to run with a PostgreSQL database.

<br>

## Getting Started

### Prerequisites
Before you begin, ensure you have the following installed:
- PHP 8.1 or higher
- Composer
- Docker
- Symfony CLI (optional, but recommended for running Symfony applications)

### Installation

#### 1. Clone the Repository
To get started, clone this repository to your local machine:
```
git clone https://github.com/aleattene/asd-management-symfony.git
```

#### 2. Install Dependencies
After cloning the repository, move into the newly created directory and install the required PHP dependencies with Composer:

```bash
cd asd-management-symfony
composer install
```

#### 3. Configure Environment Variables
Create the .env file and set the **DATABASE_URL** to point to your PostgreSQL database:
```
DATABASE_URL=postgresql://username:password@127.0.0.1:5432/asd_management_db?serverVersion=16&charset=utf8
```

#### 4. Set Up the Database with Docker
Create a Docker container for PostgreSQL and run:
```
docker run --name asd-management-db -e POSTGRES_DB=asd_management_db -e POSTGRES_USER=myusername -e POSTGRES_PASSWORD=mypassword -p 5432:5432 -d postgres
```

#### 5. Run Migrations
Execute the following command to create the database schema:
```
bin/console doctrine:migrations:migrate
```

#### 6. Start the Local Server
Launch the Symfony web server:
```
symfony server:start
```

After starting the server, the application should be accessible at:

- Homepage: ```http://127.0.0.1:8000/```
  
- Admin Panel: ```http://127.0.0.1:8000/admin```

_In the admin panel, you will be able to perform CRUD operations on Athlete and Trainer entities._

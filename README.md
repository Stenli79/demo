# Shkolo Demo Dashboard

## Project Description

The project is a demo dashboard system built with [Laravel 7](https://laravel.com). 
The features of this project include
1. Registration and Authentication of users.
2. Manage dashboard grid links
3. Manage links with CRUD.
4. Email notification after registration - This features is disabled for fastest registration.

## Project Setup(Web Portal)

### Cloning the GitHub Repository.

Clone the repository to your local machine by running the terminal command below.

```bash
git clone https://github.com/Stenli79/demo.git
```

### Setup Database

Create your a MySQL database and note down the required connection parameters. (DB Host, Username, Password, Name)

### Create a copy of your .env file

Run the following command

```bash
cp .env.example .env
```

### Set APP_URL

> If your project url looks like: example.com/sub-folder 
Then go to `my-project/.env`
And modify this line:

* APP_URL = 

To make it look like this:

* APP_URL = http://example.com

This should create an exact copy of the .env.example file. Name the newly created file .env and update it with your local environment variables (database connection info and others).

### Install Composer Dependencies

Navigate to the project root directory via terminal and run the following command.

```bash
composer install
```

### Install NPM Dependencies

While still in the project root directory via terminal, run the following command.

```bash
npm install
```
### Generate mixing
```bash
npm run dev
```

### Generate an app encryption key

```bash
php artisan key:generate
```

### Migrate the database

```bash
php artisan migrate
```
or run database migration and seed

```bash
php artisan migrate:refresh --seed
```

## Usage
		
Open your browser with address: [http://example.com](http://example.com)  
Click "Login" on sidebar menu and log in with credentials:

* E-mail: _demo@demo.com_
* Password: _password_
		
## Demo
Open your browser with address: [http://demo.stenli.net](http://demo.stenli.net/) 
		
* E-mail: _demo@demo.com_
* Password: _password_

## License

[MIT](https://choosealicense.com/licenses/mit/)

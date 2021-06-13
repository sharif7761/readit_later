
## Clone the project

Open your terminal and run 

``` git clone https://github.com/sharif7761/readit_later.git ```

## Make .env file

copy .env.example file and make .env file. Update the .env file with database name, username and password.

## Install dependencies

Run ``` composer install ``` in your terminal to install necessary dependencies 

### Generate Key

Run ``` php artisan key:generate ``` to generate a unique key.

## Migration and Seed

Run ``` php artisan migrate ``` to generate tables in the database.

Run ``` php artisan db:seed ``` to generate demo data in the database tables.

## Run the project

Run ``` php artisan serve ``` to start the server and run the project.

## Run queue before adding a content in the pocket

Run ``` php artisan queue:work ``` to listen to the queue and perform necessary jobs after Adding a content in the Pocket. So it will automatically store page content in the pocket_data table.

## Api test
I used postman to test my api.

- to create a pocket
POST api/v1/pockets
with post request body {"title": "Pocket 1"}
- to store a content in the pocket
POST api/v1/pockets/{id}/contents
with post request body {"url": "valid-url-only"}
- to view all content in one pocket
GET api/v1/pockets/{id}/contents
- to delete one stored content url
DELETE api/v1/contents/{id}

## View Pockets and contents
After running php artisan serve
visit: http://localhost:8000/pockets (8000 is default port for laravel, if you have different port, use that instead of 8000) in your browser to see the pockets and contents

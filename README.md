# Personal Log - What I've learned

## Episodes 1 & 2 - Intro

What is Laravel, how to install it, how to create a new Laravel project.

## Episode 3 - Routing

Basic routing is handled in the _router/web_ file.
Blade files (html templates) are stored in the _resources/views_ folder.

## Episode 4 - Blade

Use of Blade layout files with _yield_, _extends_, _section_.
Added a bunch of VSCode extensions for Laravel.

## Episode 5 - Sending Data to the Views

Send data to the view as argument of the _return view_ in the router.
Also, the _return view('index')->withFoo('\$foobar');_

## Episode 6 - Controllers 101

Call the controller methods from the router with _Controller@method_.
Then return the View from that controller.

## Episode 7 - Databases and Migrations

Use .env to configure database connection.
Use of _php artisan migrate_ with the options _rollback_ and _fresh_
Creation of a new table in the _migrations_ folder, using _php artisan make:migration_ and completing the Schema.

## Episode 8 - Eloquent, Namespacing and MVC

Use the Eloquent syntax to create new entries of a table, using a Model.
Query from the Database in the controller (with Eloquent).

## Episode 9 - Directory Structure

-   .env : Store and import configuration, never commited
-   .env.example : Example config, commited file
-   vendor/ : Composer dependencies (like node_modules)
-   tests/ : Test files
-   storage/ : Storage files and compiled Vue dir
-   routes/web : Classic web routes
-   routes/console : Artisan commands
-   routes/channels : Broadcasting channels (to communicate between server and front without reload?)
-   routes/api : Self explanatory
-   ressources/ : Front-end stuff
-   public/ : Compiled files and images
-   database/ : Storage migrations, seeds and factories(place to generate data from a model)
-   config/ : Config files stored. Those are set from the _.env_ file.
-   bootstrap/ : Behind the Scenes stuff from Laravel.
-   app/ : Where we store Controllers, Models

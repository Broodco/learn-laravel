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

## Episode 10 - Form Handling and CSRF Protection

Created a simple HTML form and created a POST request. Called a new Controller and stored the POST request content into the database using the Eloquent syntax, then redirected.
Learned a bit about CSRF protection (create a csrf field in the form i.o. to allow our form to pass the VerifyCsrfToken middleware).

## Episode 11 - Routing Conventions

Action on the resources :

-   GET /projects (index)
-   GET /projects/create (create)
-   GET /projects/id (show)
-   POST /project (store)
-   GET /projects/id/edit (edit)
-   PATCH /projects/id (update)
-   DELETE /projects/id (destroy)

Learned about Resource Controller and automatic resource routing. (it's magic) + automatic REST controller linked to a resource (and model)

## Episode 12 - Patch requests

Created an _edit_ form.
Learned about the _@method('PATCH')_ inserted at the start of the form to inform the controller that this is a PATCH request.

## Episode 13 - Delete requests

Creation of a _delete_ form and call of _Project::find(\$id)->delete();_ method.
Also, learned about _findOrFail_ method.

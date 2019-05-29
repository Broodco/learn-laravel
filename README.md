# Personal Log - What I've learned

## Lessons 1 & 2 - Intro

What is Laravel, how to install it, how to create a new Laravel project.

## Lesson 3 - Routing

Basic routing is handled in the _router/web_ file.

Blade files (html templates) are stored in the _resources/views_ folder.

## Lesson 4 - Blade

Use of Blade layout files with _yield_, _extends_, _section_.

Added a bunch of VSCode extensions for Laravel.

## Lesson 5 - Sending Data to the Views

Send data to the view as argument of the _return view_ in the router.

Also, the

    return view('index')->withFoo('\$foobar');

## Lesson 6 - Controllers 101

Call the controller methods from the router with _Controller@method_.
Then return the View from that controller.

Also, create a new controller with the command

> \> php artisan make:controller _ControllerName_

## Lesson 7 - Databases and Migrations

Use .env to configure database connection.

Use of

> \> php artisan migrate

with the options _rollback_ and _fresh_.

Creation of a new table in the **migrations** folder, using

> \> php artisan make:migration

and completing the Schema.

## Lesson 8 - Eloquent, Namespacing and MVC

Use the Eloquent syntax to create new entries of a table, using a Model.

Query from the Database in the controller (with Eloquent).

## Lesson 9 - Directory Structure

| Folder\/ \| File | Use                                                                             |
| :--------------- | :------------------------------------------------------------------------------ |
| .env             | Store and import configuration, never commited                                  |
| .env.example     | Example config, commited file                                                   |
| vendor/          | Composer dependencies (like node\*modules)                                      |
| tests/           | Test files                                                                      |
| storage/         | Storage files and compiled Vue dir                                              |
| routes/web/      | Classic web routes                                                              |
| routes/console/  | Artisan commands                                                                |
| routes/channels/ | Broadcasting channels (to communicate between server and front without reload?) |
| routes/api/      | Self explanatory                                                                |
| ressources/      | Frontend stuff                                                                  |
| public/          | Compiled files and images                                                       |
| database/        | Storage migrations, seeds and factories(place to generate data from a model)    |
| config/          | Config files stored. Those are set from the _.env_ file.                        |
| bootstrap/       | Behind the Scenes stuff from Laravel.                                           |
| app/             | Where we store Controllers, Models                                              |

## Lesson 10 - Form Handling and CSRF Protection

Created a simple HTML form and created a POST request.

Called a new Controller and stored the POST request content into the database using the Eloquent syntax, then redirected.

Learned a bit about **CSRF protection** (create a csrf field in the form i.o. to allow our form to pass the VerifyCsrfToken middleware).

## Lesson 11 - Routing Conventions

Action on the resources :

-   GET /projects (index)
-   GET /projects/create (create)
-   GET /projects/id (show)
-   POST /project (store)
-   GET /projects/id/edit (edit)
-   PATCH /projects/id (update)
-   DELETE /projects/id (destroy)

Learned about Resource Controller and automatic resource routing. (it's magic) + automatic REST controller linked to a resource (and model)

## Lesson 12 - Patch requests

Created an _edit_ form.

Learned about the **@method('PATCH')** inserted at the start of the form to inform the controller that this is a PATCH request.

## Lesson 13 - Delete requests

Creation of a _delete_ form and call of **Project::find(\$id)->delete();** method.

Also, learned about _findOrFail_ method.

## Lesson 14 - Cleaner Controllers and Mass Assignment Concerns

To get the element _\$project_ in our Controller methods, instead of fetching with _Project::find(\$id)_ we can get it through the method params :

    public function method(Project \$project)

Learned about Mass Assignment and the addition of fillable or guarded fields in the model. Security first !

Also, mass assignment is a shorter way to do controller methods :

    $project->create(request(['title','description']));

replaces a 5 lines function.

## Lesson 15 - Two layers of validation

1.  Client-side validation. --> The usual nonsecure way, just for UX.
2.  Server-side validation, using the validation rules in the validate function.
    Example :

        $validated = request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'description' => 'required'
        ]);

## Lesson 16 - Eloquent Relationships

Added Eloquent relationships to the models.

For example, a _Project_ **hasMany** _Tasks_, and a _Task_ **belongsTo** a _Project_.

The way to implement that is to define a function in the model, for example :

    class Task extends Model
    {
        public function project()
        {
            return $this->belongsTo(Project::class);
        }
    }

## Lesson 17 - Form Action Considerations

Basically did a todolist. With conditional classes and such.

## Lesson 18 - Create new Project Tasks

Created a method adding a _Task_ in the _Project_ model and called that method from the _ProjectTasksController_.

    // ProjectTasksController
    public function store(Request $request, Project $project)
    {
        $project->addTask($request->description, $request->project_id);

        return back();
    }

    // Project model
    public function addTask($description, $project_id)
    {
        return Task::create([
            'project_id' => $project_id,
            'description' => $description
        ]);
    }

Also, created an **errors** _php component_ which is included in the forms. It contains a condition, showing error messages if needed.

## Lesson 19 - Encapsulation

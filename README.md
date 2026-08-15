
# Laravel MVC Company Profile Website Documentation

## 2. Introduction

### What is a Company Profile Website?

A company profile website is a website that presents important information about a business, such as its history, mission, vision, services, contact information, and team. It provides customers and visitors with an online overview of the company.

### Why Businesses Need One

Businesses need a company profile website to establish an online presence, provide important information to customers, and build credibility. A professional website also makes it easier for potential customers to learn about the company's products or services.

### Purpose of the Project

The purpose of this project is to develop a company profile website for Pryci.co using Laravel, Blade, and Tailwind CSS. The website provides pages for the company's home, about, services, and contact information.

---

## 3. Objectives

The following objectives were accomplished:

- Develop a company profile website using Laravel.
- Apply the Model-View-Controller (MVC) architecture.
- Create multiple pages using Laravel Blade.
- Implement named routes for website navigation.
- Create a reusable navigation bar and footer.
- Use Blade layouts and components to avoid duplicated code.
- Style the website using Tailwind CSS.
- Create responsive pages for different screen sizes.
- Provide company information, services, and contact details.

---

## 4. MVC Architecture

### What is MVC?

MVC stands for **Model-View-Controller**. It is a software architecture pattern that separates an application into three main parts:

- **Model** - Handles data and business logic.
- **View** - Handles what the user sees.
- **Controller** - Handles requests and connects the Model with the View.

In this project, the Blade files are the Views, while `CompanyController.php` handles the requests and determines which page should be displayed.

### Why Laravel Uses MVC

Laravel uses MVC because it provides a structured way to organize web applications. Developers can separate application logic from the user interface, making the project easier to understand and maintain.

### Advantages of MVC

Some advantages of MVC include:

- Separation of concerns.
- Easier code maintenance.
- Better organization of files.
- Reusable components.
- Easier testing and debugging.
- Multiple developers can work on different parts of the application.

---

## 5. Laravel Routing

### What is Routing?

Routing determines how Laravel responds when a user visits a particular URL. A route connects a URL and HTTP request method to a controller method or another action.

For example:

```php
Route::get('/about', [CompanyController::class, 'about'])
    ->name('about');
````

When a user visits `/about`, Laravel calls the `about()` method in `CompanyController`.

### Named Routes

Named routes give routes a specific name that can be used throughout the application.

Example:

```php
->name('about');
```

The named route can then be used in Blade:

```blade
<a href="{{ route('about') }}">About</a>
```

This is useful because URLs do not have to be manually written throughout the application.

### GET Requests

The GET method is commonly used to retrieve and display information from a server.

Example:

```php
Route::get('/services', [CompanyController::class, 'services']);
```

This route responds when a user sends a GET request to `/services`.

### Route Definitions

The project's main routes are defined in:

```text
routes/web.php
```

Example:

<img width="715" height="189" alt="image" src="https://github.com/user-attachments/assets/57802b62-d8ce-4925-85a4-27e969e6c5a7" />

---

## 6. Controllers

### Purpose of Controllers

Controllers handle incoming requests and determine what response should be returned. They act as an intermediary between the routes and views.

For this project, `CompanyController` is responsible for displaying the different company profile pages.

### Benefits of Controllers

Controllers provide several benefits:

* Keep routing files organized.
* Separate application logic from views.
* Allow related functionality to be grouped together.
* Make applications easier to maintain.
* Improve the organization of MVC applications.

### Controller Methods

Each page has its own controller method.

Example:

### CompanyController.php

<img width="850" height="521" alt="image" src="https://github.com/user-attachments/assets/ae09fb48-6930-4d1b-8f97-3b910c907c7d" />

---

## 7. Blade Templating Engine

Blade is Laravel's templating engine. It allows developers to create dynamic HTML views while providing features for layouts, components, variables, conditions, and loops.

### Blade Layouts

A Blade layout provides a common structure that can be shared by multiple pages.

The project uses:

```text
resources/views/layouts/app.blade.php
```

The layout contains common elements such as the HTML structure, navigation bar, and footer.

Example:

```blade
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>

<body>

    @include('components.navbar')

    @yield('content')

    @include('components.footer')

</body>
</html>
```

### Blade Components

Reusable parts of the website are placed in:

```text
resources/views/components/
```

This project contains:

```text
components/
├── navbar.blade.php
└── footer.blade.php
```

They can be included using:

```blade
@include('components.navbar')
```

and:

```blade
@include('components.footer')
```

### @extends

`@extends` allows a page to inherit a Blade layout.

Example:

```blade
@extends('layouts.app')
```

The page then uses the structure defined in `app.blade.php`.

### @section

`@section` defines content that will be inserted into a corresponding `@yield`.

Example:

```blade
@section('title', 'About Us')
```

For larger content:

```blade
@section('content')

<h1>About Pryci.co</h1>

@endsection
```

### @yield

`@yield` defines a location in the layout where page-specific content will be displayed.

Example:

```blade
@yield('content')
```

If `about.blade.php` contains:

```blade
@section('content')
    <h1>About Pryci.co</h1>
@endsection
```

the content will appear where `@yield('content')` is located.

### @include

`@include` inserts another Blade view into the current view.

Example:

```blade
@include('components.navbar')
```

This allows the navbar and footer to be reused on multiple pages.

### Sample Blade Structure

The project follows this structure:

```text
resources/views/
├── layouts/
│   └── app.blade.php
│
├── pages/
│   ├── home.blade.php
│   ├── about.blade.php
│   ├── services.blade.php
│   └── contact.blade.php
│
└── components/
    ├── navbar.blade.php
    └── footer.blade.php
```

<img width="709" height="608" alt="image" src="https://github.com/user-attachments/assets/97943a10-87a0-4fde-a484-75578b85037e" />
<img width="1339" height="658" alt="image" src="https://github.com/user-attachments/assets/bdeffe90-1c5b-4b9b-ac43-95d2973e4703" />
<img width="1342" height="667" alt="image" src="https://github.com/user-attachments/assets/5696b257-ea1e-4b59-b510-3091056e7d3b" />

---

## 8. Laravel Folder Structure

### app/

The `app/` directory contains the main application code. Controllers, models, middleware, and other application-related classes are stored here.

For this project, the controller is located at:

```text
app/Http/Controllers/CompanyController.php
```

### routes/

The `routes/` directory contains the application's route definitions.

The project's web routes are located in:

```text
routes/web.php
```

### resources/

The `resources/` directory contains frontend resources such as Blade views, CSS, and JavaScript.

The project's Blade files are located in:

```text
resources/views/
```

### public/

The `public/` directory contains files that are publicly accessible by the web server. It also contains the application's entry point, `index.php`, and built frontend assets.

### bootstrap/

The `bootstrap/` directory contains files used to initialize the Laravel framework and application.

It also contains cached framework files generated by Laravel.

### config/

The `config/` directory contains configuration files for different parts of the Laravel application, such as the database, application settings, mail, and filesystem.

---

## 10. Problems Encountered

### 1. Route Not Found

A `RouteNotFoundException` occurred when the Blade navigation attempted to use:

```blade
{{ route('services') }}
```

The `/services` route existed, but it did not have the route name `services`.

### 2. Vite Manifest Not Found

Laravel displayed a `ViteManifestNotFoundException` because the Vite frontend dependencies had not yet been installed and the Vite development/build process had not generated the required assets.

### 3. View and Controller Organization

During development, the project had to be organized so that the controller methods correctly pointed to the Blade views inside the `resources/views/pages/` directory.

---

## 11. Solutions

### Solution 1: Route Not Found

The route was given a name using `->name()`:

```php
Route::get('/services', [CompanyController::class, 'services'])
    ->name('services');
```

The same approach was applied to the other routes.

The routes became:

```php
Route::get('/', [CompanyController::class, 'home'])
    ->name('home');

Route::get('/about', [CompanyController::class, 'about'])
    ->name('about');

Route::get('/services', [CompanyController::class, 'services'])
    ->name('services');

Route::get('/contact', [CompanyController::class, 'contact'])
    ->name('contact');
```

### Solution 2: Vite Manifest Not Found

The frontend dependencies were installed using pnpm:

```bash
pnpm install
```

The Vite development server was then started using:

```bash
pnpm dev
```

For a production build, the assets can be generated using:

```bash
pnpm build
```

### Solution 3: View and Controller Organization

The controller methods were configured to return the correct Blade views:

```php
public function home()
{
    return view('pages.home');
}

public function about()
{
    return view('pages.about');
}

public function services()
{
    return view('pages.services');
}

public function contact()
{
    return view('pages.contact');
}
```

This ensured that the controller, route, and Blade view were properly connected.

---

## 12. Reflection

Developing the Pryci.co company profile website helped me understand how the Model-View-Controller (MVC) architecture organizes a web application. Before working with Laravel MVC, it was easy to think of a website as simply a collection of HTML pages. Through this project, I learned that a larger application benefits from separating different responsibilities into specific parts.

MVC separates an application into the Model, View, and Controller. The View is responsible for the user interface, while the Controller handles incoming requests and determines which response should be returned. The Model is responsible for data and business logic. Although this project mainly focused on static company information and did not require extensive database operations, understanding the Model's role provides a foundation for developing more complex applications.

One of the most important concepts I learned is separation of concerns. Instead of placing all the HTML, routing logic, and application logic in one file, Laravel allows each responsibility to be organized separately. For example, the routes are stored in `routes/web.php`, the controller is stored in `app/Http/Controllers/`, and the Blade views are stored in `resources/views/`. This organization makes the application easier to understand, debug, and maintain.

I also learned how routes, controllers, and views work together. When a user visits a URL such as `/services`, Laravel first identifies the matching route. The route then calls the appropriate method in `CompanyController`. The controller returns the `services.blade.php` view, which is then rendered and displayed to the user. Named routes also make navigation easier because Blade templates can reference route names instead of hardcoding URLs.

Blade was another important part of the project. Using `@extends`, `@section`, `@yield`, and `@include` allowed me to create a reusable layout. Instead of duplicating the navbar and footer on every page, they were created as reusable components. This reduces duplicate code and makes future changes easier.

The MVC architecture can also be applied to larger enterprise systems. A complex application can contain many controllers, models, services, database relationships, authentication systems, and frontend views while maintaining a clear separation between responsibilities. This makes it easier for development teams to work on different parts of the system simultaneously. Overall, this project gave me a practical understanding of how Laravel MVC can be used to create organized, maintainable, and scalable web applications.

---

## 13. References

Laravel. (n.d.). *Laravel documentation*.
[https://laravel.com/docs](https://laravel.com/docs)

MDN Web Docs. (n.d.). *MDN Web Docs*.
[https://developer.mozilla.org/](https://developer.mozilla.org/)

PHP Documentation Group. (n.d.). *PHP manual*.
[https://www.php.net/docs.php](https://www.php.net/docs.php)

Tailwind Labs. (n.d.). *Tailwind CSS documentation*.
[https://tailwindcss.com/docs](https://tailwindcss.com/docs)

```
```

# IxDF Full-Stack Code Challenge

Welcome to the IxDF Full-Stack Code Challenge!

The main goal of this challenge is to see the way you tackle the problem, 
your experience level in the Laravel framework and Tailwind; and your coding style (in a broad sense).

The code challenge does not involve any exotic or bleeding edge technologies, tools, etc., 
and this was intentional. We'd like to focus on your coding style and not get distracted.

On that note, we're also not looking for "rights and wrongs" and there are no "trick parts" in this challenge.
We would merely like to get a more profound impression of how you write code.

That also will allow us to have a more fruitful and constructive discussion during the technical interview.
We're not fans of whiteboard interviews, so we'd much rather have some concrete code to talk about.
We think that makes the conversation much more enjoyable and productive.


## The challenge

Imagine you're our new full-stack developer 🦄, 
and you've just got the following feature request from your team lead:

> Hey!
>
> Your task is to start the Tailwind migration process for this project,
> namely migrate the /courses page.
> So far we only have almost plain HTML and CSS, so you need to decompose this page into
> a proper reusable layout, Blade components, and partials.
> Tailwind config is not ready also, this is also a part of your task to create it.
>
> The final result should look as close as possible to the existing implementation (incl. responsiveness),
> but under the hood we expect to have a great DX as we are going to reuse some parts of this
> /courses page on other pages. Namely:
>  - course card
>  - masterclass card
>  - upcoming masterclass section
>  - FAQ accordion
>  - footer
>
> Ideally, we should avoid using additional plugins (Tailwind, Vite, etc.),
> to make the environment more predictable for other developers.
>
> In case of any questions, please contact to me.
> Good luck! 🍀


## What we will evaluate

 - Your ability to decompose existing HTML markup into reusable parts
 - Your ability to write readable, maintainable, scalable, and reusable code.
 - Your Tailwind skills

You are, of course, more than welcome to ask questions in case you're in doubt about something or need more background information!


## Technical notes

We will be glad if you follow our [PHP](https://handbook.interaction-design.org/library/backend/conventions--php.html)
and [Laravel](https://handbook.interaction-design.org/library/backend/conventions--laravel.html) conventions,
but it's just a recommendation because we value your time ❤️

### How to setup a working environment

This project is a simple Laravel 11 application, powered by Laravel Sail.
For UI it uses the default Bootstrap UI installed by `php artisan ui bootstrap --auth`.

To help you with the initial setup, we've already added some basic code:
 - Routes, controllers and views
 - Migrations to create all required tables
 - Factories to create all Models
 - Database Seeders to have enough information to render /courses page (`CoursesPageSeeder`)

#### Docker

We prepared a sample `.env.example` with essential environment variables, 
a basic `Dockerfile` to create our app image, and a `docker-compose.yml` file with required services. 
Feel free to edit these if needed.

Here are the steps you need to run the project.
Note that you need Docker and Docker Compose installed in order for these commands to work.

```sh
# Copy the example .env file
cp .env.example .env

# Install composer dependencies
composer install --ignore-platform-reqs
# or if you don't have composer or the latest PHP installed locally
docker run --rm -v $(pwd):/app composer install --ignore-platform-reqs

# Start Docker containers
./vendor/bin/sail up -d

# Generate application key
docker compose exec app php artisan key:generate

# Run all migrations and seed the DB
docker compose exec app php artisan migrate:fresh --seed --seeder=CoursesPageSeeder

# Install front end dependencies
docker compose exec app npm install --no-update-notifier --no-fund

# Run Vite server (CSS, JS)
docker compose exec app npm run dev
```

If everything works well, the project should be accessible on [http://localhost:8080](http://localhost:8080).

Running the tests:
```bash
vendor/bin/sail test
```

Got problems? Ping us or help us improve the docs 🙂

## How to submit your solution

Once your solution is ready, please
 1. create a PR with `main` as the base branch and your solution as the compare branch
 2. write a great PR description, explain your solution and possible further improvements
 3. request `ixdf-bot` to review it (“Reviewers” section)
 4. assign yourself (“Assigners” section)
 5. email us (in case if the bot will lose the package 🤖)

We ❤️ atomic commits.

There is no strict deadline, but if the challenge takes more than a week, please let us know that you are still “in the game”.

PS: We also welcome any feedback on how to improve this code challenge. 🙂

🦄

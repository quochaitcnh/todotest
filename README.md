# todotest

# Getting started

## Installation

Clone the repository

    git clone https://github.com/quochaitcnh/todotest.git

Switch to the repo folder

    cd todotest

Install all the dependencies using composer

    composer install

Import todolist.sql file to your database server.

(**Set the database connection in config.php**)

Start the local development server (I used virtual hostname)

    http://todotest.dev

# Format Git:

1. Commit message:
    - Fix: ...
    - Feature: ...
    - Refactor: ....
    - Docs: ...
    - Style: ...
    - Perf: ....
    - Vendor: (add/remove package)
    - Chore: (change text, ...)


2. Branch name:
    - Feature: feature/{feature name}
    - Hotfix: hotfix/{error name}
    - Fix: fix/{bug name}
    - ...
## UnitTest
 Run command
    ./vendor/bin/phpunit tests

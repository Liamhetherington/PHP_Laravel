### TEST FINISHED

# BCCH Digital Full-Stack Coding Exercise

## Instructions:

-   To initiate the exercise, fork this repository as private, and invite <nigel.stewart@bcchdigital.ca>, <malinda.kulasekare@bcchdigital.ca>, and <rachel.teo@bcchdigital.ca> with read-only access. Starting with this bootstrapped Laravel project, provide a solution to the project requirements stated below.

-   Project dependencies can be installed via `composer install` command within the root directory.

```php
/**
* Note: You will need to run this command from within a PHP enviroment.
* If you need a dev environment to get started, Laravel offers a pre-built
* Vagrant box called Homestead. https://laravel.com/docs/5.8/homestead
*/
```

-   The exercise has a max time limit of 48 hours.

-   To complete the exercise, commit your code and modify the README.md with 'Test finished'.

## Requirements:

-   Implement basic user authentication.
-   Design a REST API that will allow a user to have a collection of posts which will contain at the very least a title and content. Posts will be treated as a resource, and thus should have all associated CRUD functionality.
-   All posts will be aggregated into one main front-page view _(Think along the lines of a message board or news feed à la Hacker News, Reddit, etc.)_.
-   Use PHPUnit to write tests that cover functionality of each of the post resources endpoints and any additional utility functions you may have created.
-   Create seeders to generate some users and posts.

## Bonus points:

-   Add a **listener** and **event** that will fire whenever a post is viewed, to notify the owner of the post.
-   Create a notification counter UI element that will inform the user how many times their posts have been viewed since last visit.
-   Posts to be sorted in order of highest view count, then date.

## Evaluation marks:

75% of the evaluation will be marked on the number of requirements completed.

25% of the evaluation will be marked on design style, and code quality.

---

### The following links are general guides for code design style:

https://medium.com/mindorks/how-to-write-clean-code-lessons-learnt-from-the-clean-code-robert-c-martin-9ffc7aef870c

https://gist.github.com/wojteklu/73c6914cc446146b8b533c0988cf8d29

### Other tips:

Laravel comes out of the box with everything you should need to complete the exercise so you shouldn't require any additional packages.

Any questions regarding the requirements can be directed to <nigel.stewart@bcchdigital.ca>.

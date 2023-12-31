# API REST Dev Laravel

## Course Overview

In this course, I learn how to build a RESTful API using Laravel. I'm also learning how to implement an authentication system using tokens, make API calls using postman to interact with the data, desing an graphic interface using Tailwind to visualize the actions of my API, and create and modify diferent versions of the API

## Course Contents

1. Class 2: What It's and API
    * RESTful API definition

2. Class 3, 4: Setting the project structure
    * Laravel installation and project setup
    * Creating a web interface to access the project

3. Class 5: Adding some style 
    * Using tailwindcss to add some style to the web interface

4. Class 7: API V1 setup
    * php artisan make:controller {API's name and folder ubication} --api --model={ existing API's model}
    * then go to Routes and create the route

5. Class 8: Resources 
    * Setting structure to the API's response
    * php artisan make:resource {API's name and folder}
    * return new {resource name}

6. Class 9: Collection 
    * Creating a API's response for posts collections

7. Class 11, 12, 13: API V2 
    * API's V2 setup
    * creating response for asking a sigle post
    * creating response for post collection

8. Class 14: Private API
    * Protecting access to API (Using Laravel sanctum)
    * ->Midleware('auth:sanctum')

9. Class 15, 16: Authentication 
    * seting up the login
    * php artisan make:controller Api\LoginController
    * finishing the auth generating tokens for the user

11. Class 17: Postman 
    * basic ussage of postman
    * set on headers: key->Accept, Value->application/json (to work on API)

## Conclusion

In this course, I learned how to build a RESTful API and how to use Sanctum to protect its access. I also gained an understanding of what an endpoint is and how to use Postman to test my API.
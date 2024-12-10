# JOB SEARCH APP LARAVEL

>[!IMPORTANT]
>To learn how to install and also to know how I did this project, it's very important that you read every part of this readme. Thank you for your patience and have a good read.
***

## :bulb: Project description

***

## Requirements to achieve in this project:

- We must display on the screen all our applied offers with their status (Blade).
  
- There must be a status position that is "In Progress" or "Completed".

- We must view all our offers applied by Endpoints.

- We must be able to delete, insert, modify and view all the entrys through Endpoints.

- We have to be able to watch the show on Endpoints.

- We have to be able to see the show (Blade).

- Date management 1 creation, 2 last modification.

- 70% minimum test coverage.
***

## :eye_speech_bubble: Project overview

Take a look at how my project turned out.

***
![imagen_2024-12-10_110414217](https://github.com/user-attachments/assets/0ea17740-c8ce-44f8-8993-084e31b605c3)

***

## Project Diagrams (BBDD)


The diagram I did for my database in **DrawSQL**
***

## Installation requirements

Before you start to read how to install the project you'll need these requirements:
>[!NOTE]
>If you can't install xampp, look for any other local server that supports **MySQL** and **PHP**
***

1. XAMPP

2. Install Composer

3. Install NPM in Node.js

4. Xdebug (for the tests coverage)

5. Postman
***

## :scroll: Installation

1. Clone this repository:
```
https://github.com/Matias-Stadler/SearchJob.git
```

2. Install **Composer** and **NPM**
```
composer install
```
```
npm install
```

3. Create a .env file copying everything inside the existing file .env.example and modify the following lines:
* DB_CONNECTION=mysql
* DB_DATABASE=jobSearch

4. Create a database in **MySQL**

5. Now go to the VSC terminal and put the following command
```
php artisan migrate:fresh --seed
```
This command will generate all the tables.

6. Open another terminal in **VSC** and put the following command
```
npm run dev
```

7. Open another terminal and run the server with this command
```
php artisan serve
```
You'll see an url that is going to take you to a website.

>[!IMPORTANT]
>Be sure that your running npm and the server in **DIFFERENT** terminals, **DON'T** close these two terminals and **DON'T** use other commands in these two terminals. 
***

## Project documentation

<p align="center">My endpoints</p>

```
api/offers/{id}/follows  (post new follow)
```
```
api/offers  (view all de offers)
```
```
api/offers  (post new offer)
```
```
api/offers/{id}  (edit a current offer)
```
```
api/offers/{id}  (delete a current offer)
```
***

## :white_check_mark: Tests

> [!IMPORTANT]
> It's important to test the project so we can check if it works correctly and to do that use this command in the **VSC** terminal:

```php
 $ php artisan test
 ```
(screenshot here)

This is what you should see after doing the tests.
***

## Contact and information

>[!NOTE]
>Please understand that i'm still learning, not everything will look or be perfect. Thank you for the attention.

If you want to contact me here's my gmail: koutarcj@gmail.com
***

## Thanks for reading!

Thanks for reading this readme!

Have a good day! :3
***
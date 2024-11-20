# CSRF Demonstration Example

## Overview

This example demonstrates a CSRF attack using PHP, SQLite, and HTML. The scenario involves a vulnerable website where users can change their password, and a malicious website that attempts to exploit the CSRF vulnerability to change the user's password.

## Directory Structure
```
.
├── db/
│   └── database.sqlite
├── change_password.php
├── index.php
├── setup.php
├── csrf.html
├── malicious.html
└── ReadMe.md
```
## How to setup and run the Example

### Prerequisites

- **PHP** you will need it installed on your system.
- **SQLite** you will need it installed on your system.
- A local web server (e.g., Apache).

### Steps

1. **Clone or Download the Repository:**

   Navigate to your desired directory and clone the example.

   ```bash
   git clone <repository_url> CSRF_attack_demo
    ```
2. **Terminal 1**
    ```bash
    cd [the path to where you cloned/ downloaded the project]
    php -S localhost:8000
	```
3. **Terminal 2**
    ```bash
	cd [the path to where you cloned/ downloaded the project]
	php -S localhost:8001
	```
4. **Finish the DB Setup**

	Open your browser and navigate to http://localhost:8000/setup.php. This page fin ishes the db setup and only has to be done once before starting the experiment.

5. **Access vulnerable website**

	Open your browser and navigate to http://localhost:8000/index.php. On this page you will find a form that allows you to change the password and once you submit it, it gives you a prompt with the new password.

6. **Access malicious website**

In a new tab, navigate to http://localhost:8001/csrf.html. when you open this page it will load an iframe (malicious.html) that submits a POST request to the main site to change the user's password without them knowing.

6. ** Check the attack **

Go to the back end and look at the database. The user password has now changed to attackerpassword123.

## Important Note
This code was developed with the end goal of being submitted as coursework to demonstrate knowledge about csrf attacks, please do not deploy or test these vulnerabilities on production systems or without authorization.
Cyber attacks can be considered a crime and are not something that should be played with.

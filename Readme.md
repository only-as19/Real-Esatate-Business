
# Real Estate Business Website

## Overview

The Real Estate Business Website is a platform designed for showcasing properties available for sale or rent. It features a dynamic and user-friendly interface with property listings, detailed property pages, and a contact form for inquiries. Additionally, it incorporates user authentication, allowing users to sign up, log in, and manage their property listings. The website is built using PHP for backend functionality, HTML for structure, CSS for styling, and JavaScript for interactivity.

## Features

- **Property Listings**: Displays a list of available properties with essential details such as price, description, and images.
- **Property Detail Pages**: Users can click on individual properties to view more detailed information, including photos, descriptions, and key features.
- **Contact Form**: A contact page where visitors can inquire about properties or request more information.
- **User Authentication**: Users can sign up, log in, and manage their accounts. The authentication process includes:
  - **Sign-Up**: Users can create a new account by providing their username, email address, and password.
  - **Login**: Registered users can log in to access their accounts and manage property listings or inquiries.
  - **Data Storage**: User information is securely stored in a database and is used for login authentication and account management.

## Project Structure

The project directory contains the following files and folders:

- **index.php**: The homepage displaying available property listings.
- **about.html**: A static page that provides information about the business.
- **contact.html**: A contact page with a form for users to submit inquiries.
- **contact-form.php**: Backend script to process contact form submissions.
- **select-property.php**: Displays detailed information about individual properties.
- **propertybase.sql**: SQL file containing the database schema used to store property and user information.
- **JS/**: JavaScript files that enhance front-end interactivity.
- **Css/**: CSS files responsible for the website’s design and layout.
- **Img/**: Images used throughout the website, including property images and logos.
- **php files/**: Additional PHP files for handling backend logic such as user authentication.
- **Sign/**: Contains files for user authentication, including sign-up, login, and user session management.

## Installation

Follow these steps to set up the website locally:

1. **Clone the Repository**:
   Clone the repository to your local machine.
   ```bash
   git clone https://github.com/your-username/your-repository.git
   ```

2. **Navigate to the Project Directory**:
   Go to the project folder.
   ```bash
   cd your-repository
   ```

3. **Set up Local Development Environment**:
   Install a LAMP/WAMP stack (Apache, MySQL, PHP) or use any other PHP-compatible server.

4. **Import the Database**:
   - Open the `propertybase.sql` file in a MySQL database manager (e.g., phpMyAdmin).
   - Import the schema to create the necessary tables for property and user data storage.

5. **Configure PHP Files**:
   - Modify the PHP files to configure your database connection. Update the credentials in files like `contact-form.php` and `Sign` to match your local database setup.

6. **Open the Website**:
   Once everything is set up, open `index.php` in your browser to start interacting with the website.

## User Authentication

### Sign-Up
Users can create an account by filling in the sign-up form with their:
- Username
- Email
- Password

This data is securely stored in the database, allowing users to log in to their account later.

### Login
Registered users can log in using their credentials (username/email and password). Upon successful authentication, users gain access to their account, where they can:
- Manage property listings.
- View or edit their account information.

### Session Management
Once logged in, users' sessions are maintained using PHP sessions. This allows users to stay logged in while navigating the website without re-entering their credentials on each page.

### Password Storage
Passwords are securely hashed and stored in the database using PHP's `password_hash()` and `password_verify()` functions to ensure user data privacy.

## Technologies Used

- **PHP**: Used for server-side scripting and handling user authentication, property data management, and form submissions.
- **HTML**: Provides the structure of the website.
- **CSS**: Responsible for styling and ensuring the website is visually appealing and responsive.
- **JavaScript**: Adds interactivity to the website, enhancing the user experience.
- **MySQL**: Used to store property and user data, including authentication credentials and listings.
- **Git**: Version control to manage and track changes in the project.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.


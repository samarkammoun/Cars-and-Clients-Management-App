# Clients and Cars Management Application

A web application for managing clients and cars, built using **Laragon** (web server), **PHP** (programming language), **MySQL Workbench** (database server), and **Bootstrap** (CSS framework). This application allows users to perform **CRUD operations** (Create, Read, Update, Delete) on clients and cars.

---

## Features

### Client Management
- Add new clients (name, address, phone, email, etc.).
- View a list of all clients.
- Update client information.
- Delete clients.

### Car Management
- Add new cars (license plate, brand, model, engine size, purchase date, etc.).
- View a list of all cars.
- Update car information.
- Delete cars.

### User Interface
- Responsive and modern design using **Bootstrap**.
- Easy-to-use forms for adding and updating data.
- Tables to display lists of clients and cars.

### Database
- **MySQL** database to store client and car data.
- Two tables: `clients` and `voitures`.

---

## Technologies Used

### Frontend
- **HTML5** for structure.
- **Bootstrap** for styling and responsive design.
- **JavaScript** (optional) for interactivity (e.g., form validation).

### Backend
- **PHP** for server-side logic (e.g., processing forms, interacting with the database).
- **MySQL** for storing and managing data.

### Tools
- **Laragon**: Local web server for development.
- **MySQL Workbench**: For designing and managing the database.
- **Visual Studio Code** (or any code editor): For writing PHP, HTML, and CSS.

---

## Database Schema

### Table: `clients`
- `IdClient` (Primary Key, Auto Increment)
- `Nom` (Last Name)
- `Prenom` (First Name)
- `CodePostal` (Postal Code)
- `Localite` (City)
- `Telephone` (Phone Number)
- `Email` (Email Address)

### Table: `voitures`
- `immatriculation` (Primary Key, License Plate)
- `marque` (Brand)
- `Modele` (Model)
- `Cylindre` (Engine Size)
- `dateAchat` (Purchase Date)

---

## Requirements

To run this application locally, you need the following:

1. **Laragon**:
   - Download and install [Laragon](https://laragon.org/download/).
   - Laragon provides a local development environment with PHP, MySQL, and Apache.

2. **MySQL Workbench**:
   - Download and install [MySQL Workbench](https://dev.mysql.com/downloads/workbench/).
   - Used to design and manage the MySQL database.

3. **PHP**:
   - PHP is included in Laragon. Ensure PHP is enabled in Laragon settings.

4. **Web Browser**:
   - Any modern web browser (e.g., Chrome, Firefox, Edge).

5. **Code Editor**:
   - A code editor like [Visual Studio Code](https://code.visualstudio.com/) or any other editor of your choice.

---

## How to Run the Application

### Step 1: Clone the Repository
```bash
git clone https://github.com/your-username/clients-cars-management.git


Step 3: Configure the Application
Open the project folder in your code editor.

Create a .env file in the root directory and add your database credentials:

DB_HOST=localhost
DB_NAME=car_management
DB_USER=root
DB_PASSWORD=your_password

Update the database connection settings in the PHP files (e.g., db.php)

Step 4: Create your data base using the files in the folder db.

Step 5: Start Laragon
Open Laragon and start the server.

Move the project folder to Laragon's www directory.

Step 6: Access the Application
Open your web browser and navigate to:

http://localhost/clients-cars-management/



# 🧭 HRMS — Human Resource Management System  

![GitHub repo size](https://img.shields.io/github/repo-size/mehtabali05/HRMS?color=blue)
![GitHub stars](https://img.shields.io/github/stars/mehtabali05/HRMS?style=social)
![GitHub forks](https://img.shields.io/github/forks/mehtabali05/HRMS?style=social)
![License](https://img.shields.io/badge/license-MIT-green)
![Status](https://img.shields.io/badge/status-active-success)

---

## 📖 About  

**HRMS (Human Resource Management System)** is a simple, practical, and beginner-friendly full-stack project designed to help organizations manage employee-related data efficiently.  
It provides modules for managing employees, departments, jobs, job histories, regions, countries, and locations.  

This project was created for **learning, academic, and demonstration purposes**, especially for those interested in **PHP-based HR management systems** and **database-driven web development**.

---

## 🚀 Features  

✅ Manage Employees (Add, View, Edit, Delete)  
✅ Manage Jobs and Job Histories  
✅ Manage Departments and Locations  
✅ Manage Countries and Regions  
✅ Modular folder structure (MVC style)  
✅ Easy configuration and database connection setup  
✅ Extendable for authentication, reporting, or role-based access  

---

## 🧩 Technologies Used  

| Layer | Technologies |
|--------|---------------|
| **Frontend** | HTML, CSS, JavaScript |
| **Backend** | PHP / Hack |
| **Database** | MySQL |
| **Server** | Apache or PHP Built-in Server |
| **Architecture** | MVC-style structure |

---

## 📂 Repository Structure  

```

HRMS/
├── Config/          → configuration files (DB, constants)
├── Countries/       → manage country entities
├── Departments/     → department management
├── Employees/       → employee CRUD operations
├── JobHistories/    → employee job transitions
├── Jobs/            → job roles management
├── Locations/       → location data
├── Public/          → static assets (CSS, JS, images)
├── Regions/         → regional information
├── Templates/       → reusable HTML templates
└── Views/           → views for each module

```

---

## 🗄️ Database Schema Overview  

Below is a simplified representation of the HRMS database structure:

```

Regions (Region_ID, Region_Name)
│
└── Countries (Country_ID, Country_Name, Region_ID)
│
└── Locations (Location_ID, Street_Address, Postal_Code, City, Country_ID)
│
└── Departments (Department_ID, Department_Name, Manager_ID, Location_ID)
│
└── Employees (Employee_ID, First_Name, Last_Name, Email, Phone, Hire_Date, Job_ID, Salary, Manager_ID, Department_ID)
│
└── JobHistories (Employee_ID, Start_Date, End_Date, Job_ID, Department_ID)
Jobs (Job_ID, Job_Title, Min_Salary, Max_Salary)

````

🧠 *All tables are linked using foreign keys to maintain referential integrity.*

---

## ⚙️ Getting Started  

Follow these steps to set up and run the project locally 👇

### 1. Clone the repository  
```bash
git clone https://github.com/mehtabali05/HRMS.git
cd HRMS
````

### 2. Configure your environment

* Make sure **PHP ≥ 7.4** and **MySQL** are installed.
* Open `Config/config.php` (or equivalent) and update your **database credentials**:

```php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'hrms_db';
```

### 3. Set up the database

* Create a new database named `hrms_db`.
* Import the SQL schema (if available) or manually create tables following the schema above.

### 4. Run the application

You can start the app in one of two ways:

**Option 1 — PHP built-in server:**

```bash
php -S localhost:8000 -t Public/
```

**Option 2 — Apache/Nginx:**

* Set your web root to the `Public/` directory.
* Access the app via `http://localhost/hrms` or your configured domain.

---

## 💡 Usage

Once the application is running:

* Access the dashboard or homepage from your browser.
* Use navigation to manage:

  * Employees
  * Jobs & Job Histories
  * Departments
  * Locations
  * Countries & Regions
* Perform CRUD operations for each entity.
* Extend the system to include:

  * Authentication (admin login)
  * Payroll management
  * Attendance system
  * Reports & analytics

---

## 🌐 Deployment

You can easily deploy this project on:

* **XAMPP / WAMP / LAMP** for local use
* **000WebHost** or **InfinityFree** for free hosting
* **cPanel-based hosting** for production environments

**Steps:**

1. Upload project files to your hosting account (usually under `public_html/`).
2. Import your MySQL database via phpMyAdmin.
3. Update the database configuration file with your hosting credentials.
4. Access your HRMS app using your domain or hosting URL.

---

## 🧠 Future Improvements

🚧 Planned features:

* Authentication & Role-based Access Control
* Leave & Payroll Management
* Attendance Tracking
* Admin Dashboard with Analytics
* REST API integration

---

## 🤝 Contributing

Contributions are welcome! Follow these steps to contribute:

1. Fork the repository
2. Create a new branch:

   ```bash
   git checkout -b feature/YourFeature
   ```
3. Commit your changes:

   ```bash
   git commit -m "Add new feature"
   ```
4. Push to your fork and open a Pull Request

Please ensure your code follows consistent formatting and includes comments.

---

## 🧾 License

This project is open source and available under the **MIT License**.
See the [LICENSE](LICENSE) file for details.

---

## 🌟 Live Demo

🚀 You can host your live demo here once deployed!
👉 *Example:* [https://mehtabali05.github.io/HRMS](https://mehtabali05.github.io/HRMS)
*(Replace with your actual hosted link)*

---

## 👤 Author

**👨‍💻 Mehtab Ali**
📧 Email: [mehtabali4505@gmail.com](mailto:mehtabali4505@gmail.com)
🌐 GitHub: [mehtabali05](https://github.com/mehtabali05)
💼 LinkedIn: *(Add your LinkedIn link here)*

---

## 💬 Acknowledgements

Special thanks to:

* PHP open-source community
* My university mentors at **Sindh Madressatul Islam University**
* Everyone contributing to this learning journey 🙏

---

### ⭐ Don’t forget to star the repository if you found it useful!

```

---

Would you like me to create a **database schema diagram (image)** to include in your README under the “Database Schema Overview” section? It would visually represent all table relationships.
```

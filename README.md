# high_shchool_management_system
This is a professional, fully responsive **Student Results Management System** featuring a responsive school website and integrated student portal with role-based access control, a fictional educational institution. The website is built for educational and demonstration purposes only.

# Solid State High School Portal

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![PHP Version](https://img.shields.io/badge/PHP-7.0%2B-blue.svg)](https://www.php.net/)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3.2-purple.svg)](https://getbootstrap.com/)
[![Status](https://img.shields.io/badge/Status-Active-brightgreen.svg)](#)

## 🎓 Features

- **Public Website** - Professional school website with admission application and student, Teacher, Accademic staff, admin logins portal
- **Student Portal** - View grades, results, and other academic information
- **Teacher Dashboard** - Manage classes and input grades
- **Academic Staff Panel** - Manage academic operations and results
- **Admin Dashboard** - Full system administration
- **Responsive Design** - Mobile-first approach
- **PDF & Excel Export** - Generate reports and documents
- **Email Integration** - Automated notifications

## 📝 Public Pages

- **Home** - Hero section, statistics, programs, news
- **About** - School information and history
- **Academics** - Program details and curriculum
- **Admissions** - Application requirements
- **Facilities** - Campus infrastructure
- **News & Events** - Latest updates
- **Contact** - Support and inquiry form
- **Staff Login** - For admin, academic staff and teacher login

## Role-specific Features

### Admin (Administrator)
- Full system administration dashboard and user management
- Create, update, delete classes and class groups
- Add / edit / remove subjects and subject combinations
- Register, import (bulk) and manage student records
- Manage staff/teacher accounts and permissions
- Configure school settings, terms, sessions, and grading schemes
- Declare, edit, and publish student results for any term
- Generate, export and print reports (PDF/Excel) for students, classes and terms
- Manage notices, announcements and homepage content
- Configure email/SMTP, system preferences and backups
- View audit logs, session activity and system alerts

### Academic Staff
- Manage academic operations and results approval workflow
- Create and maintain class assignments, subject allocations and combinations
- Upload, edit and verify student results; approve results for publication
- Manage terms, divisions and grading scales
- Produce class-level reports and statistics; download PDFs
- Promote students between classes/terms based on configured promotion rules
- View and respond to academic inquiries and notices

### Teacher
- Access assigned classes and student rosters
- Enter and update continuous assessment and exam scores
- Generate individual and class reports; print or export results
- View assigned subject combinations and timetables
- Communicate with students via notices or messages
- View profile, change password and manage personal settings

### Student
- Search and view results using roll number or student ID
- View current subjects, grades, and term/annual results
- Download or print result PDFs and reports
- View notices, announcements and academic calendars
- Change password and update basic profile settings
- Access academic history and transcript downloads (if enabled)

## 🚀 Quick Start

### Prerequisites
- PHP 7.0+
- MySQL 5.7+ / MariaDB
- Apache/Nginx
- Git

## 📁 Project Structure

```
├── index.html                    # Home page
├── about.html                    # About school
├── academics.html                # Academic programs
├── admissions.html               # Admission info and application
├── facilities.html               # Campus facilities
├── news.html                     # News & events
├── contact.html                  # Contact form
├── script/
│   ├── student/                  # Student portal
│   ├── teacher/                  # Teacher dashboard
│   ├── academic/                 # Academic staff panel
│   ├── admin/                    # Admin dashboard
│   ├── core/                     # Authentication
│   ├── css/                      # Stylesheets
│   ├── js/                       # JavaScript
│   ├── db/                       # Database config
│   └── const/                    # Constants & utilities
├── css/                          # Public site styles
├── js/                           # Public site scripts
├── images/                       # Images and media
├── db/                           # SQL schemas
└── README.md
```

## 👥 User Acccess Roles

| Role | Access | Functions |
|------|--------|-----------|
| **Student** | `script/index-stud.php` | View results, grades, subjects |
| **Teacher** | `script/index-teach.php` | Manage classes, input grades |
| **Academic Staff** | `script/index-acad-staff.php` | Manage academic calendar, approve results |
| **Administrator** | `script/index-admini.php` | Full system administration |

## 🛠️ Technology Stack

**Frontend**
- HTML5, CSS3, JavaScript
- Bootstrap 5.3.2
- jQuery 3.7.0
- Font Awesome 6.4.0
- SweetAlert2, Select2, Summernote

**Backend**
- PHP 7.0+
- MySQL / MariaDB
- PDO for database abstraction

**Libraries**
- PHPMailer (Email)
- TCPDF (PDF Generation)
- PHPExcel (Spreadsheet)

## 🎨 Branding

| Element | Color | Value |
|---------|-------|-------|
| Primary | Purple | `#722992` |
| Secondary | Blue | `#1e2180` |
| Text | Dark | `#2c3e50` |
| Background | White | `#ffffff` |

### Installation

1. **Clone the repository**
```bash
git clone https://github.com/ngonye72/high_school_management_system.git
cd Solid-State-High-School
```

2. **Configure database**
Edit `script/db/config.php`:
```php
DEFINE('DBHost','localhost');
DEFINE('DBUser', 'root');
DEFINE('DBPass','your_password');
DEFINE('DBName','sshs_db');
```

3. **Import database schema**
```bash
mysql -u root -p sshs_db < db/sshs_db
```

4. **Access the management system**
- Website: `http://localhost/Solid-State-High-School/`
- Logins : `http://localhost/Solid-State-High-School/(select admin, academic staff, teacher or student login)`


## 📚 Database

The system uses a normalized MySQL schema with the following key tables:
- `tbl_students` - Student records
- `tbl_staff` - Faculty and staff
- `tbl_classes` - Academic divisions
- `tbl_subjects` - Course offerings
- `tbl_results` - Grade records
- `tbl_terms` - Academic periods

See `db/sshs_db` for complete schema.

## 🔐 Security

- Password hashing with PHP's `password_hash()`
- Session-based authentication
- Role-based access control (RBAC)
- IP address logging
- CSRF token protection
- SQL injection prevention via PDO prepared statements

## 📄 Sample Credentials

Demo credentials are available in `login_credentials.txt` (for testing purposes).

## 🌐 Browser Support

- Chrome 90+
- Firefox 88+
- Safari 14+
- Edge 90+
- Mobile browsers

## 📖 Documentation

- See `README.md` for detailed technical documentation
- Database schema in `db/sshs_db`
- Sample data included in database dump

## 🚀 Futures Roadmap

- [ ] REST API
- [ ] Mobile app
- [ ] Real-time notifications
- [ ] Two-factor authentication
- [ ] Parent portal
- [ ] Advanced analytics

## 📝 License

This project is licensed under the MIT License - see LICENSE file for details.

## ⚠️ Disclaimer

This is an educational project for demonstration purposes. It does not represent or simulate any real educational institution. All names, characters, and scenarios are fictional.

## 🤝 Contributing

Contributions are welcome! Please:
1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit changes (`git commit -m 'Add amazing feature'`)
4. Push to branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📞 Support

For issues, questions, or suggestions, please open an issue on GitHub.

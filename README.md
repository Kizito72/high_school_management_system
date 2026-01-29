# high_shchool_management_system
This is a professional, fully responsive website and school management system for Solid State High School, a fictional educational institution located. The website is built for educational and demonstration purposes only.


# Solid State High School Portal

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![PHP Version](https://img.shields.io/badge/PHP-7.0%2B-blue.svg)](https://www.php.net/)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3.2-purple.svg)](https://getbootstrap.com/)
[![Status](https://img.shields.io/badge/Status-Active-brightgreen.svg)](#)

A comprehensive **Student Results Management System** featuring a responsive school website and integrated student portal with role-based access control.

## 🎓 Features

- **Public Website** - Professional school information portal
- **Student Portal** - View grades, results, and academic information
- **Teacher Dashboard** - Manage classes and input grades
- **Academic Staff Panel** - Manage academic operations and results
- **Admin Dashboard** - Full system administration
- **Responsive Design** - Mobile-first approach
- **PDF & Excel Export** - Generate reports and documents
- **Email Integration** - Automated notifications

## 🚀 Quick Start

### Prerequisites
- PHP 7.0+
- MySQL 5.7+ / MariaDB
- Apache/Nginx
- Git

### Installation

1. **Clone the repository**
```bash
git clone https://github.com/yourusername/solid-state-high-school.git
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
mysql -u root -p sshs_db < database/srms_expert.sql
```

4. **Access the application**
- Website: `http://localhost/Solid-State-High-School/`
- Student Login: `http://localhost/Solid-State-High-School/script/index-stud.php`
- Admin Login: `http://localhost/Solid-State-High-School/script/index-admini.php`

## 📁 Project Structure

```
├── index.html                    # Home page
├── about.html                    # About school
├── academics.html                # Academic programs
├── admissions.html               # Admission info
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
├── database/                     # SQL schemas
└── README.md
```

## 👥 User Roles

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

## 📝 Public Pages

- **Home** - Hero section, statistics, programs, news
- **About** - School information and history
- **Academics** - Program details and curriculum
- **Admissions** - Application requirements
- **Facilities** - Campus infrastructure
- **News & Events** - Latest updates
- **Contact** - Support and inquiry form

## 📚 Database

The system uses a normalized MySQL schema with the following key tables:
- `tbl_students` - Student records
- `tbl_staff` - Faculty and staff
- `tbl_classes` - Academic divisions
- `tbl_subjects` - Course offerings
- `tbl_results` - Grade records
- `tbl_terms` - Academic periods

See `database/srms_expert.sql` for complete schema.

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
- Database schema in `database/srms_expert.sql`
- Sample data included in database dump

## 🚀 Features Roadmap

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

---

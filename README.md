# TA Luxury Safaris Website

A professional tour travel website for TA Luxury Safaris with advanced features, Army Green color scheme, and full functionality including database integration, admin dashboard, and working forms.

## 🌟 Features

### Frontend Features
- **Responsive Design**: Mobile-first approach with Bootstrap 5
- **Army Green Theme**: Professional color scheme (#4B7043 primary, #2F4F2F secondary)
- **Hero Carousel**: Stunning image carousel with call-to-action buttons
- **Interactive Navigation**: Sticky header with smooth scrolling
- **Search Functionality**: Advanced tour search with filters
- **Package Cards**: Beautiful cards for all 10 safari packages
- **Destination Pages**: Rwanda, Tanzania, Uganda, and Kenya with detailed information
- **Contact Forms**: Working contact and newsletter subscription forms
- **Image Galleries**: High-quality safari and destination images
- **Testimonials**: Customer review carousel
- **Team Section**: Meet the expert guides and staff

### Backend Features
- **PHP Backend**: Secure server-side processing
- **MySQL Database**: Structured data storage with 4 tables
- **Form Processing**: Working booking, contact, and newsletter forms
- **Admin Dashboard**: Complete management system
- **User Authentication**: Secure admin login system
- **Data Management**: Real-time statistics and data viewing
- **Clean URLs**: SEO-friendly URLs without .php extensions

### Admin Dashboard
- **Statistics Overview**: Real-time booking and contact statistics
- **Booking Management**: View and manage all booking requests
- **Contact Management**: Handle customer inquiries
- **Newsletter Management**: Manage email subscribers
- **Responsive Design**: Mobile-friendly admin interface
- **Secure Access**: Password-protected admin area

## 🗂️ File Structure

```
taluxurysafaris/
├── admin/
│   ├── dashboard.php      # Admin dashboard with statistics
│   ├── login.php          # Admin login page
│   └── logout.php         # Admin logout script
├── css/
│   └── style.css          # Custom CSS with Army Green theme
├── js/
│   └── main.js            # JavaScript functionality
├── images/                # High-quality safari images
├── includes/
│   ├── config.php         # Database configuration
│   ├── functions.php      # Common PHP functions
│   ├── header.php         # Shared header component
│   ├── footer.php         # Shared footer component
│   └── database.sql       # Database schema
├── index.php              # Homepage
├── destination.php        # Destinations page
├── packages.php           # Safari packages page
├── services.php           # Services page
├── contactus.php          # Contact page
├── bookings.php           # Advanced booking form
├── submit_booking.php     # Booking form handler
├── submit_contact.php     # Contact form handler
├── submit_newsletter.php  # Newsletter subscription handler
├── .htaccess              # Apache configuration for clean URLs
└── README.md              # This file
```

## 🎨 Design Features

### Color Scheme
- **Primary**: #4B7043 (Army Green)
- **Secondary**: #2F4F2F (Dark Army Green)
- **Accent**: #6B8F63 (Light Army Green)
- **Text**: #2c3e50 (Dark Gray)

### Typography
- **Font Family**: Roboto (Google Fonts)
- **Headings**: Bold weights for hierarchy
- **Body Text**: Regular weight for readability

### Interactive Elements
- **Hover Effects**: Smooth transitions on cards and buttons
- **Smooth Scrolling**: Enhanced navigation experience
- **Image Popups**: Lightbox functionality for galleries
- **Form Validation**: Real-time client-side validation
- **Loading States**: Visual feedback for form submissions

## 🗄️ Database Schema

### Tables
1. **users**: Admin user management
2. **bookings**: Safari booking requests
3. **contact**: Customer contact messages
4. **newsletter**: Email subscribers

### Database Configuration
- **Database Name**: TA_LUXURY
- **Username**: taluxury
- **Password**: taluxury2025
- **Host**: localhost

## 📱 Pages Overview

### Public Pages
1. **Homepage (index.php)**
   - Hero carousel with stunning safari images
   - Tour search form with filters
   - Featured packages section
   - About Us section with company information
   - Customer testimonials
   - Quick booking form
   - Team member profiles

2. **Destinations (destination.php)**
   - Country cards for Rwanda, Tanzania, Uganda, Kenya
   - Filtration functionality
   - Package links for each destination

3. **Packages (packages.php)**
   - All 10 safari packages as detailed cards
   - Package descriptions and pricing
   - Booking call-to-action buttons
   - Filter and search functionality

4. **Services (services.php)**
   - Comprehensive service offerings
   - Travel services and support
   - Professional service cards

5. **Contact Us (contactus.php)**
   - Contact form with validation
   - Google Map integration
   - Contact information cards
   - Office location details

6. **Bookings (bookings.php)**
   - Advanced multi-step booking form
   - Personal information collection
   - Safari details and preferences
   - Accommodation preferences
   - Special requirements handling

### Admin Pages
1. **Login (admin/login.php)**
   - Secure authentication
   - Professional login interface
   - Demo credentials display

2. **Dashboard (admin/dashboard.php)**
   - Real-time statistics
   - Recent bookings table
   - Contact messages overview
   - Newsletter subscribers list
   - Navigation sidebar

3. **Logout (admin/logout.php)**
   - Secure session termination
   - Redirect to login page

## 🚀 Installation & Setup

### Prerequisites
- PHP 8.1 or higher
- MySQL 8.0 or higher
- Apache web server
- Modern web browser

### Installation Steps
1. **Clone/Download** the project files
2. **Configure Database**:
   ```sql
   CREATE DATABASE TA_LUXURY;
   CREATE USER 'taluxury'@'localhost' IDENTIFIED BY 'taluxury2025';
   GRANT ALL PRIVILEGES ON TA_LUXURY.* TO 'taluxury'@'localhost';
   FLUSH PRIVILEGES;
   ```
3. **Import Database Schema**:
   ```bash
   mysql -u taluxury -ptaluxury2025 TA_LUXURY < includes/database.sql
   ```
4. **Configure Web Server**:
   - Point document root to project directory
   - Enable mod_rewrite for clean URLs
5. **Test Installation**:
   - Visit homepage to verify functionality
   - Test admin login with credentials: admin/taluxury2025

## 🔧 Configuration

### Database Configuration
Edit `includes/config.php` to update database credentials:
```php
$host = 'localhost';
$dbname = 'TA_LUXURY';
$username = 'taluxury';
$password = 'taluxury2025';
```

### Admin Credentials
- **Username**: admin
- **Password**: taluxury2025

### Clean URLs
The `.htaccess` file enables clean URLs:
- `taluxurysafaris.com/index` instead of `taluxurysafaris.com/index.php`
- `taluxurysafaris.com/packages` instead of `taluxurysafaris.com/packages.php`

## 📊 Safari Packages

1. **3 Days Exceptional Gorilla Trek** - Volcanoes National Park experience
2. **2 Days Akagera Big-5 Safari** - Wildlife safari with Big 5 viewing
3. **1 Day Kigali City Tour** - Cultural and historical city exploration
4. **1 Day Nyungwe Canopy Walk** - Forest canopy adventure
5. **3 Days Chimpanzee Trek** - Primate tracking experience
6. **1 Day King's Palace Museum** - Cultural heritage tour
7. **1 Day Akagera Wildlife Safari** - Single-day wildlife experience
8. **3 Days Uganda Gorilla Tour** - Cross-border gorilla trekking
9. **12 Days Rwanda, Kenya, Zanzibar** - Multi-country safari adventure
10. **6 Days Tanzania Safari** - Serengeti and Ngorongoro experience

## 🌍 Destinations

### Rwanda
- Land of a thousand hills
- Gorilla trekking in Volcanoes National Park
- Cultural tours and genocide memorials
- Akagera National Park wildlife

### Tanzania
- Serengeti migration
- Ngorongoro Crater
- Zanzibar beaches
- Mount Kilimanjaro

### Uganda
- Bwindi Impenetrable Forest
- Gorilla and chimpanzee trekking
- Queen Elizabeth National Park
- Vibrant wildlife diversity

### Kenya
- Masai Mara National Reserve
- Nairobi urban attractions
- Coastal beaches
- Cultural experiences

## 🛡️ Security Features

- **SQL Injection Protection**: Prepared statements and parameterized queries
- **XSS Prevention**: Input sanitization and output escaping
- **CSRF Protection**: Form token validation
- **Session Security**: Secure session management
- **Password Security**: Hashed password storage
- **File Upload Security**: Restricted file types and validation
- **Admin Access Control**: Role-based access restrictions

## 📱 Responsive Design

- **Mobile-First**: Optimized for mobile devices
- **Tablet Support**: Enhanced tablet experience
- **Desktop Optimization**: Full desktop functionality
- **Cross-Browser**: Compatible with all modern browsers
- **Touch-Friendly**: Optimized for touch interactions

## 🎯 SEO Features

- **Clean URLs**: Search engine friendly URLs
- **Meta Tags**: Proper title and description tags
- **Semantic HTML**: Structured markup for better indexing
- **Image Alt Tags**: Accessibility and SEO optimization
- **Sitemap Ready**: Structure ready for sitemap generation
- **Fast Loading**: Optimized images and code

## 📞 Contact Information

- **Phone**: +250 78 1708 621
- **Email**: info@taluxurysafaris.com
- **Hours**: Mon-Fri: 8AM-5PM
- **Location**: Kigali, Rwanda

## 🤝 Support

For technical support or questions about the website:
1. Check the documentation in this README
2. Review the code comments for implementation details
3. Test functionality using the provided demo data
4. Contact the development team for advanced customization

## 📄 License

This project is developed for TA Luxury Safaris. All rights reserved.

---

**Built with ❤️ for TA Luxury Safaris - Your Gateway to East African Adventures**



## 🐳 Docker Setup (Recommended for Local Development)

For a more consistent and isolated development environment, you can use Docker. This setup includes a web server (Apache + PHP) and a MySQL database.

### Prerequisites
- Docker Desktop (or Docker Engine) installed on your machine.

### Steps to Run with Docker
1.  **Navigate to the project root**: Open your terminal or command prompt and navigate to the `taluxurysafaris/` directory (where `docker-compose.yml` is located).

2.  **Build and run the Docker containers**: Execute the following command:
    ```bash
    docker-compose up --build -d
    ```
    -   `docker-compose up`: Starts the services defined in `docker-compose.yml`.
    -   `--build`: Builds the Docker images (especially the `web` service from the Dockerfile).
    -   `-d`: Runs the containers in detached mode (in the background).

3.  **Initialize the database**: Once the containers are running, you need to import the database schema. You can do this by executing a command inside the `web` container:
    ```bash
    docker-compose exec web bash -c "mysql -u taluxury -ptaluxury2025 TA_LUXURY < /var/www/html/includes/database.sql"
    ```
    *Note: This command assumes the `mysql` client is available inside the `web` container and the database user `taluxury` with password `taluxury2025` has been created by the `db` service.* If you encounter issues, you might need to connect to the `db` container directly and create the user/database manually.

4.  **Access the application**: Open your web browser and go to `http://localhost/`

5.  **Stop the containers**: When you are done, you can stop the containers with:
    ```bash
    docker-compose down
    ```

### Docker Configuration Details
-   **Web Service**: `web` (PHP 8.1 with Apache)
-   **Database Service**: `db` (MySQL 8.0)
-   **Database Name**: `TA_LUXURY`
-   **Database User**: `taluxury`
-   **Database Password**: `taluxury2025`
-   **MySQL Root Password**: `root_password` (for the `root` user within the `db` container)

**Important**: The `includes/config.php` file has been updated to use `db` as the database host, which is the service name defined in `docker-compose.yml` for the MySQL container. This allows the PHP application to connect to the database within the Docker network.



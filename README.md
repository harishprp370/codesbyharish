# CodesByHarish - Portfolio Website

A modern, responsive portfolio website showcasing web development, cybersecurity, and IT consultation services.

## 🚀 Features

- **Modern Design**: Clean, professional UI with dark/light theme support
- **Responsive Layout**: Optimized for desktop, tablet, and mobile devices
- **Contact System**: Functional contact form with database storage
- **Admin Portal**: Secure login system for content management
- **Visitor Analytics**: Built-in visitor tracking and analytics
- **Security Features**: Account lockout, login attempts tracking, remember me functionality
- **Animation Effects**: Smooth animations using AOS (Animate On Scroll)
- **SEO Optimized**: Meta tags, semantic HTML structure

## 🛠️ Tech Stack

- **Frontend**: HTML5, CSS3, JavaScript (ES6+)
- **Backend**: PHP 8.0+
- **Database**: MySQL 8.0+
- **Libraries**: 
  - Font Awesome 6.0 (Icons)
  - Google Fonts (Typography)
  - AOS (Animations)
- **Server**: Apache/Nginx with PHP support

## 📋 Prerequisites

- PHP 8.0 or higher
- MySQL 8.0 or higher
- Apache/Nginx web server
- PDO MySQL extension enabled

## ⚡ Quick Setup

1. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/codesbyharish.git
   cd codesbyharish
   ```

2. **Database Configuration**
   - Create a MySQL database named `codesbyharish`
   - Update database credentials in `/includes/config.php`

3. **Configure Database Connection**
   ```php
   $dbHost = 'localhost';
   $dbName = 'codesbyharish';
   $dbUser = 'your_username';
   $dbPass = 'your_password';
   ```

4. **Set Permissions** (Linux/Mac)
   ```bash
   chmod 755 /path/to/codesbyharish
   chmod 644 *.php
   ```

5. **Access the Website**
   - Main site: `http://your-domain.com`
   - Admin login: `http://your-domain.com/login.php`

## 🔐 Admin Access

**Default Credentials:**
- Username: `admin`
- Password: `admin123`

⚠️ **Important**: Change default credentials after first login for security.

## 📁 Project Structure

```
codesbyharish/
├── includes/
│   ├── config.php          # Database configuration
│   ├── header.php          # Site header
│   └── footer.php          # Site footer
├── admin/
│   └── dashboard.php       # Admin dashboard (to be implemented)
├── assets/
│   ├── css/               # Stylesheets
│   ├── js/                # JavaScript files
│   └── images/            # Image assets
├── contact.php            # Contact page with form
├── login.php              # Admin login page
├── index.php              # Homepage
└── README.md              # This file
```

## 🗄️ Database Tables

The system automatically creates the following tables:

- **`admin_users`** - Admin user accounts
- **`contact_messages`** - Contact form submissions
- **`login_logs`** - Login attempt tracking
- **`remember_tokens`** - Remember me functionality
- **`visitor_logs`** - Website analytics

## 🎨 Customization

### Theme Colors
Edit CSS variables in the main stylesheet:
```css
:root {
    --primary-color: #2563eb;
    --secondary-color: #1e40af;
    --text-primary: #1f2937;
    --text-secondary: #6b7280;
}
```

### Contact Information
Update contact details in `contact.php`:
- Email address
- Phone number
- Location
- Social media links

## 🔒 Security Features

- **Password Hashing**: Secure password storage using PHP's password_hash()
- **Account Lockout**: Automatic lockout after 5 failed login attempts
- **Session Security**: Secure session management
- **SQL Injection Protection**: Prepared statements for all database queries
- **XSS Protection**: HTML entity encoding for user inputs
- **CSRF Protection**: Form token validation (recommended to implement)

## 📊 Analytics

Built-in visitor tracking captures:
- Visit timestamps
- IP addresses
- User agents
- Referrer URLs
- Visited pages

Access analytics data through the admin dashboard.

## 🚦 Status Codes & Error Handling

- **200**: Successful operations
- **400**: Bad request/validation errors
- **401**: Unauthorized access
- **403**: Forbidden/account locked
- **500**: Server errors

## 📱 Browser Support

- Chrome 90+
- Firefox 88+
- Safari 14+
- Edge 90+
- Mobile browsers (iOS Safari, Chrome Mobile)

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit changes (`git commit -m 'Add amazing feature'`)
4. Push to branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 📞 Support

For support and questions:
- **Email**: hello@codebyharish.com
- **Phone**: +91 90199 40788
- **Website**: [codebyharish.com](https://codebyharish.com)

## 🏗️ Roadmap

- [ ] Admin dashboard implementation
- [ ] Content management system
- [ ] Blog functionality
- [ ] Portfolio gallery
- [ ] Client testimonials
- [ ] Service booking system
- [ ] API integration
- [ ] Multi-language support

## 📈 Performance

- Optimized images and assets
- Minified CSS/JS (production)
- Lazy loading for images
- Efficient database queries
- Caching mechanisms

## 🔧 Development

### Local Development Setup
```bash
# Install dependencies (if using Composer)
composer install

# Start local development server
php -S localhost:8000
```

### Production Deployment
1. Upload files to web server
2. Configure database connection
3. Set appropriate file permissions
4. Configure SSL certificate
5. Set up regular backups

---

**Built with ❤️ by Harish N** | Full Stack Developer & Cybersecurity Specialist

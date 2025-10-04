# 5ThAD - Complete Website

A modern, responsive website built with PHP, HTML5, CSS3, jQuery, Bootstrap, and FontAwesome. This project includes a complete freelance platform with user dashboards, responsive design, and professional styling.

## 🚀 Features

### Header Components
- **Top Bar**: Location and call information
- **Menu Bar**: Logo, navigation with dropdowns, and account icons
- **Responsive**: Mobile-friendly navigation with collapsible menu

### Hero Section
- **Rotating Background**: 3 images that automatically change every 3 seconds
- **Blurry Overlay**: Professional overlay effect for text visibility
- **Call-to-Action**: Two main buttons for Advertiser and Publisher paths

### Main Content
- **Features Section**: Why choose FreelanceHub with 6 feature cards
- **How It Works**: 3-step process explanation
- **Statistics**: Impressive numbers and achievements
- **Professional Design**: Inspired by freelancer.com style

### Footer
- **4 Columns**: Logo with social media, Quick Links sections
- **Social Icons**: Facebook, Twitter, LinkedIn, Instagram, YouTube
- **Responsive**: Adapts to all screen sizes

### User Dashboards
- **General Dashboard**: Overview with stats, projects, and messages
- **Advertiser Dashboard**: Campaign management and freelancer discovery
- **Publisher Dashboard**: Job search and project management
- **Sidebar Navigation**: Easy access to all sections
- **Responsive Design**: Works on all devices

## 🎨 Design System

### Color Scheme
- **Primary**: #e0a800 (Golden yellow)
- **Secondary**: #2c3e50 (Dark blue-gray)
- **Accent**: #3498db (Blue)
- **Text**: #2c3e50 (Dark), #7f8c8d (Light)
- **Background**: #f8f9fa (Light), #ffffff (White)

### CSS Variables
All colors are defined as CSS variables for easy theme customization:
```css
:root {
    --primary-color: #e0a800;
    --secondary-color: #2c3e50;
    --accent-color: #3498db;
    /* ... more variables */
}
```

## 📁 File Structure

```
FreelanceHub/
├── index.php                 # Main homepage
├── user-dashboard.php        # General user dashboard
├── advertiser-dashboard.php   # Advertiser dashboard
├── publisher-dashboard.php   # Publisher dashboard
├── login.php                # Login page
├── includes/
│   ├── header-topbar.php    # Top bar component
│   ├── header-menu.php      # Navigation menu
│   └── footer.php           # Footer component
├── assets/
│   ├── css/
│   │   ├── style.css        # Main stylesheet
│   │   └── dashboard.css     # Dashboard-specific styles
│   └── js/
│       ├── main.js          # Main JavaScript
│       └── dashboard.js     # Dashboard JavaScript
└── README.md                # This file
```

## 🛠️ Technologies Used

- **PHP**: Server-side scripting
- **HTML5**: Semantic markup
- **CSS3**: Modern styling with variables and flexbox/grid
- **jQuery**: JavaScript functionality
- **Bootstrap 5**: Responsive framework
- **FontAwesome 6**: Icons
- **Unsplash**: High-quality images

## 📱 Responsive Design

The website is fully responsive and includes:
- Mobile-first approach
- Flexible grid layouts
- Responsive navigation
- Touch-friendly interactions
- Optimized for all screen sizes

## 🎯 Key Features

### Hero Section
- Automatic image rotation (3-second intervals)
- Smooth transitions
- Professional overlay effects
- Clear call-to-action buttons

### Navigation
- Hover dropdowns for desktop
- Mobile hamburger menu
- Smooth animations
- Accessible design

### Dashboards
- Interactive sidebar navigation
- Real-time statistics
- Project management
- Message system
- Earnings tracking

### Performance
- Optimized images
- Minified CSS/JS
- Fast loading times
- Smooth animations

## 🚀 Getting Started

1. **Setup**: Place all files in your web server directory
2. **Requirements**: PHP-enabled web server (XAMPP, WAMP, etc.)
3. **Access**: Open `index.php` in your browser
4. **Customization**: Modify CSS variables to change colors

## 📋 Pages Included

- **Homepage** (`index.php`): Main landing page
- **User Dashboard** (`user-dashboard.php`): General user dashboard
- **Advertiser Dashboard** (`advertiser-dashboard.php`): For businesses hiring freelancers
- **Publisher Dashboard** (`publisher-dashboard.php`): For freelancers finding work
- **Login** (`login.php`): User authentication page

## 🎨 Customization

### Changing Colors
Edit the CSS variables in `assets/css/style.css`:
```css
:root {
    --primary-color: #your-color;
    --secondary-color: #your-color;
    /* Update other variables as needed */
}
```

### Adding New Pages
1. Create new PHP file
2. Include header components: `<?php include 'includes/header-topbar.php'; ?>`
3. Add your content
4. Include footer: `<?php include 'includes/footer.php'; ?>`

## 📱 Mobile Optimization

- Responsive breakpoints at 768px and 480px
- Touch-friendly buttons and navigation
- Optimized images for mobile
- Fast loading on mobile networks

## 🔧 Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers

## 📄 License

This project is open source and available under the MIT License.

## 🤝 Contributing

Feel free to contribute to this project by:
- Reporting bugs
- Suggesting new features
- Submitting pull requests
- Improving documentation

## 📞 Support

For support or questions, please contact the development team.

---

**Built with ❤️ using modern web technologies**

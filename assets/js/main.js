// Main JavaScript functionality
$(document).ready(function() {
    
    // Hero Background Image Rotation
    const heroImages = [
        'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80',
        'https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80',
        'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80'
    ];
    
    let currentImageIndex = 0;
    const heroBackground = $('#heroBackground');
    
    // Set initial background
    heroBackground.css('background-image', `url('${heroImages[0]}')`);
    
    // Rotate images every 3 seconds
    setInterval(function() {
        currentImageIndex = (currentImageIndex + 1) % heroImages.length;
        heroBackground.css('background-image', `url('${heroImages[currentImageIndex]}')`);
    }, 3000);
    
    // Mobile Menu Toggle
    $('#mobileMenuToggle').click(function() {
        $('#navMenu').toggleClass('active');
        $(this).find('i').toggleClass('fa-bars fa-times');
    });
    
    // Close mobile menu when clicking outside
    $(document).click(function(e) {
        if (!$(e.target).closest('.header-menu').length) {
            $('#navMenu').removeClass('active');
            $('#mobileMenuToggle i').removeClass('fa-times').addClass('fa-bars');
        }
    });
    
    // Smooth scrolling for anchor links
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if (target.length) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 80
            }, 1000);
        }
    });
    
    // Add animation to feature cards on scroll
    $(window).scroll(function() {
        $('.feature-card').each(function() {
            var elementTop = $(this).offset().top;
            var elementBottom = elementTop + $(this).outerHeight();
            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();
            
            if (elementBottom > viewportTop && elementTop < viewportBottom) {
                $(this).addClass('animate-in');
            }
        });
    });
    
    // Dropdown functionality for desktop
    $('.nav-menu li').hover(
        function() {
            $(this).find('.dropdown').stop(true, true).fadeIn(300);
        },
        function() {
            $(this).find('.dropdown').stop(true, true).fadeOut(300);
        }
    );
    
    // Add loading animation
    $(window).on('load', function() {
        $('body').addClass('loaded');
    });
    
    // Form validation (if forms exist)
    $('form').on('submit', function(e) {
        var isValid = true;
        $(this).find('input[required], textarea[required]').each(function() {
            if ($(this).val().trim() === '') {
                $(this).addClass('error');
                isValid = false;
            } else {
                $(this).removeClass('error');
            }
        });
        
        if (!isValid) {
            e.preventDefault();
            alert('Please fill in all required fields.');
        }
    });
    
    // Back to top button
    var backToTop = $('<button id="backToTop" style="position: fixed; bottom: 20px; right: 20px; background: var(--primary-color); color: white; border: none; border-radius: 50%; width: 50px; height: 50px; cursor: pointer; display: none; z-index: 1000;"><i class="fas fa-arrow-up"></i></button>');
    $('body').append(backToTop);
    
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            backToTop.fadeIn();
        } else {
            backToTop.fadeOut();
        }
    });
    
    backToTop.click(function() {
        $('html, body').animate({scrollTop: 0}, 800);
    });
});

// Additional CSS for animations
const style = document.createElement('style');
style.textContent = `
    .feature-card {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.6s ease;
    }
    
    .feature-card.animate-in {
        opacity: 1;
        transform: translateY(0);
    }
    
    .loaded {
        animation: fadeIn 0.5s ease-in;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    
    .error {
        border-color: #e74c3c !important;
        box-shadow: 0 0 5px rgba(231, 76, 60, 0.3) !important;
    }
`;
document.head.appendChild(style);

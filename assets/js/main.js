// Main JavaScript functionality
$(document).ready(function() {
    
    const heroImages = [
        'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80',
        'https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80',
        'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80'
    ];

    let currentImageIndex = 0;
    let isTransitioning = false;

    // Create multiple background layers for smooth transitions
    function createBackgroundLayers() {
        const heroSection = $('.hero-section');
        
        // Remove existing background layers
        heroSection.find('.hero-background').remove();
        
        // Create two background layers
        for (let i = 0; i < 2; i++) {
            const backgroundLayer = $('<div class="hero-background"></div>');
            if (i === 0) {
                backgroundLayer.addClass('active');
            }
            heroSection.append(backgroundLayer);
        }
    }

    // Initialize background layers
    createBackgroundLayers();

    // Set initial image
    $('.hero-background.active').css('background-image', `url('${heroImages[0]}')`);

    // Smooth fade transition function
    function transitionToNextImage() {
        if (isTransitioning) return;
        
        isTransitioning = true;
        currentImageIndex = (currentImageIndex + 1) % heroImages.length;
        const nextImage = heroImages[currentImageIndex];
        
        const activeLayer = $('.hero-background.active');
        const inactiveLayer = $('.hero-background').not('.active');
        
        // Set the new image to the inactive layer
        inactiveLayer.css('background-image', `url('${nextImage}')`);
        
        // Fade out active layer and fade in inactive layer
        activeLayer.addClass('fade-out');
        inactiveLayer.addClass('fade-in');
        
        // After transition completes, swap the layers
        setTimeout(() => {
            activeLayer.removeClass('active fade-out');
            inactiveLayer.removeClass('fade-in').addClass('active');
            isTransitioning = false;
        }, 1500); // Match CSS transition duration
    }

    // Start the image rotation
    setInterval(transitionToNextImage, 4000); // Change every 4 seconds
    
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
            $(this).find('.dropdown').stop(true, true).fadeIn(200);
        },
        function() {
            $(this).find('.dropdown').stop(true, true).fadeOut(100);
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

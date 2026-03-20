// Search functionality
document.addEventListener('DOMContentLoaded', function() {
    const searchBox = document.querySelector('.search-box input');
    const searchButton = document.querySelector('.search-box button');

    if (searchBox && searchButton) {
        searchButton.addEventListener('click', performSearch);
        searchBox.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                performSearch();
            }
        });
    }

    // Smooth scroll for navigation links (desktop only)
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            // On mobile, use default behavior to prevent auto-scroll issues
            if (window.innerWidth <= 992) {
                return; // Let browser handle it naturally
            }
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // FAQ Toggle functionality
    const faqItems = document.querySelectorAll('.faq-item');
    
    // Set first FAQ item as active by default
    if (faqItems.length > 0) {
        faqItems[0].classList.add('active');
    }
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            
            // Close all FAQ items
            faqItems.forEach(faqItem => {
                faqItem.classList.remove('active');
            });
            
            // If the clicked item wasn't active, open it
            if (!isActive) {
                item.classList.add('active');
            } else {
                // If the first item was clicked and was active, keep it active
                if (item === faqItems[0]) {
                    item.classList.add('active');
                }
            }
        });
    });

    // Testimonials Carousel
    const track = document.querySelector('.testimonials-track');
    const cards = document.querySelectorAll('.testimonial-card');
    const prevButton = document.querySelector('.carousel-arrow.prev');
    const nextButton = document.querySelector('.carousel-arrow.next');
    
    if (!track || !cards.length || !prevButton || !nextButton) return;

    let currentIndex = 0;
    let cardWidth;
    let maxIndex;
    let isTransitioning = false;

    // Clone first and last cards for infinite loop
    const firstCardClone = cards[0].cloneNode(true);
    const lastCardClone = cards[cards.length - 1].cloneNode(true);
    track.appendChild(firstCardClone);
    track.insertBefore(lastCardClone, cards[0]);

    function calculateDimensions() {
        const gap = 30;
        const cardStyle = window.getComputedStyle(cards[0]);
        cardWidth = cards[0].offsetWidth + gap;
        
        // Calculate how many cards to show based on viewport width
        const viewportWidth = window.innerWidth;
        const cardsToShow = viewportWidth >= 1200 ? 3 : viewportWidth >= 768 ? 2 : 1;
        maxIndex = cards.length;

        // Set initial position
        track.style.transform = `translateX(-${cardWidth}px)`;
        
        // Ensure smooth transition
        track.style.transition = 'none';
        requestAnimationFrame(() => {
            track.style.transition = 'transform 0.5s ease-in-out';
        });
    }

    function updateCarousel(transition = true) {
        if (!cardWidth) calculateDimensions();
        
        if (transition) {
            track.style.transition = 'transform 0.5s ease-in-out';
        } else {
            track.style.transition = 'none';
        }
        
        const translateX = -(currentIndex + 1) * cardWidth;
        track.style.transform = `translateX(${translateX}px)`;
    }

    function handleTransitionEnd() {
        if (isTransitioning) {
            isTransitioning = false;
            
            // If we're at the clone of the last slide, jump to the real last slide
            if (currentIndex === -1) {
                currentIndex = cards.length - 1;
                requestAnimationFrame(() => {
                    updateCarousel(false);
                });
            }
            // If we're at the clone of the first slide, jump to the real first slide
            else if (currentIndex === cards.length) {
                currentIndex = 0;
                requestAnimationFrame(() => {
                    updateCarousel(false);
                });
            }
        }
    }

    prevButton.addEventListener('click', () => {
        if (isTransitioning) return;
        isTransitioning = true;
        currentIndex--;
        updateCarousel();
    });

    nextButton.addEventListener('click', () => {
        if (isTransitioning) return;
        isTransitioning = true;
        currentIndex++;
        updateCarousel();
    });

    track.addEventListener('transitionend', handleTransitionEnd);

    // Handle window resize
    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            calculateDimensions();
            updateCarousel(false);
        }, 250);
    });

    // Initialize carousel
    calculateDimensions();

    // Optional: Add touch support for mobile with infinite loop
    let touchStartX = 0;
    let touchEndX = 0;

    track.addEventListener('touchstart', e => {
        if (isTransitioning) return;
        touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    track.addEventListener('touchend', e => {
        if (isTransitioning) return;
        touchEndX = e.changedTouches[0].screenX;
        const diff = touchStartX - touchEndX;

        if (Math.abs(diff) > 50) { // Minimum swipe distance
            isTransitioning = true;
            if (diff > 0) {
                // Swipe left
                currentIndex++;
            } else {
                // Swipe right
                currentIndex--;
            }
            updateCarousel();
        }
    }, { passive: true });

    // Course Category Filter functionality
    const categoryList = document.querySelectorAll('.courses-section .category-list li');
    const courseCardLinks = document.querySelectorAll('.course-card-link');
    const coursesGrid = document.querySelector('.courses-grid');
    const maxVisibleCards = 15;

    categoryList.forEach(category => {
        category.addEventListener('click', function() {
            const selectedCategory = this.textContent.trim();
            
            // Remove active class from all categories
            categoryList.forEach(cat => cat.classList.remove('active'));
            // Add active class to selected category
            this.classList.add('active');
            
            // Filter cards based on category
            let visibleCount = 0;
            courseCardLinks.forEach(link => {
                const card = link.querySelector('.course-card');
                if (!card) return;
                
                const cardCategory = card.getAttribute('data-category');
                if (selectedCategory === 'All' || cardCategory === selectedCategory) {
                    if (visibleCount < maxVisibleCards) {
                        link.classList.remove('hidden');
                        card.classList.remove('hidden');
                        visibleCount++;
                    } else {
                        link.classList.add('hidden');
                        card.classList.add('hidden');
                    }
                } else {
                    link.classList.add('hidden');
                    card.classList.add('hidden');
                }
            });

            // If no cards are visible, show a message
            if (visibleCount === 0) {
                const existingNoResults = coursesGrid.querySelector('.no-results');
                if (!existingNoResults) {
                const noResults = document.createElement('div');
                noResults.className = 'no-results';
                noResults.textContent = 'No exams found for this category.';
                coursesGrid.appendChild(noResults);
                }
            } else {
                // Remove any existing no-results message
                const existingNoResults = coursesGrid.querySelector('.no-results');
                if (existingNoResults) {
                    existingNoResults.remove();
                }
            }
        });
    });

    // Exam Category Filter functionality
    const examCategoryList = document.querySelectorAll('.exams-listing-section .category-list li');
    const examCards = document.querySelectorAll('.exams-listing-section .exam-card');
    const examsGrid = document.querySelector('.exams-listing-section .exams-grid');

    // Add click event listeners to category items
    examCategoryList.forEach(category => {
        category.addEventListener('click', () => {
            const selectedCategory = category.querySelector('span').textContent.trim();
            
            // Remove active class from all categories
            examCategoryList.forEach(cat => cat.classList.remove('active'));
            // Add active class to selected category
            category.classList.add('active');
            
            // Filter exam cards - use existing data-category attribute
            examCards.forEach(card => {
                const cardCategory = card.getAttribute('data-category');
                if (selectedCategory === 'All' || cardCategory === selectedCategory) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });
        });
    });

    // Mobile Menu Toggle
    var menuToggle = document.querySelector('.menu-toggle');
    var navbar = document.querySelector('.navbar');
    var navLinks = document.querySelectorAll('.nav-links a');
    
    if (menuToggle && navbar) {
        function toggleMenu() {
            navbar.classList.toggle('active');
            
            // Toggle icons
            var barsIcon = menuToggle.querySelector('.fa-bars');
            var closeIcon = menuToggle.querySelector('.fa-times');
            var isActive = navbar.classList.contains('active');
            
            if (barsIcon) barsIcon.style.display = isActive ? 'none' : 'block';
            if (closeIcon) closeIcon.style.display = isActive ? 'block' : 'none';
            
            // Prevent body scroll when menu is open
            if (isActive && window.innerWidth <= 992) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        }
        
        // Toggle menu on button click
        menuToggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            toggleMenu();
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (navbar.classList.contains('active') && 
                !navbar.contains(e.target) && 
                !menuToggle.contains(e.target) &&
                window.innerWidth <= 992) {
                toggleMenu();
            }
        });
        
        // Close menu when clicking nav links
        navLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                if (window.innerWidth <= 992 && navbar.classList.contains('active')) {
                    toggleMenu();
                }
            });
        });
    }

    // Hero Slider with Fade Transition
    const heroSlides = document.querySelectorAll('.hero-slide');
    let currentSlide = 0;
    
    if (heroSlides.length > 0) {
        function showSlide(index) {
            // Remove active class from all slides
            heroSlides.forEach(slide => {
                slide.classList.remove('active');
            });
        
            // Add active class to current slide
            if (heroSlides[index]) {
                heroSlides[index].classList.add('active');
            }
        }
        
        function nextSlide() {
            currentSlide = (currentSlide + 1) % heroSlides.length;
            showSlide(currentSlide);
            }
        
        // Auto-advance slides every 4 seconds
        setInterval(nextSlide, 4000);
        
        // Initialize first slide
        showSlide(0);
    }

    // Stats Countdown Animation
    const statNumbers = document.querySelectorAll('.stat-box h2');
    
    function animateValue(element, start, end, duration) {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            const currentValue = Math.floor(progress * (end - start) + start);
            element.textContent = currentValue + '%';
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    }

    // Intersection Observer for stats animation
    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const statBox = entry.target;
                const statNumber = statBox.querySelector('h2');
                const targetValue = parseInt(statNumber.textContent);
                animateValue(statNumber, 0, targetValue, 2000);
                statsObserver.unobserve(statBox);
            }
        });
    }, { threshold: 0.5 });

    // Observe all stat boxes
    document.querySelectorAll('.stat-box').forEach(statBox => {
        statsObserver.observe(statBox);
    });

});

function performSearch() {
    const searchTerm = document.querySelector('.search-box input').value.trim();
    if (searchTerm) {
        // Redirect to search page with query
        window.location.href = `search.php?q=${encodeURIComponent(searchTerm)}`;
    }
}

// Add sticky navigation on scroll
let navbar = document.querySelector('.navbar');
let topBanner = document.querySelector('.top-banner');
let lastScrollTop = 0;

// Only run sticky nav logic if elements exist
if (navbar && topBanner) {
    window.addEventListener('scroll', function() {
        // FIX: Do NOT run this logic on mobile/tablet (<= 992px)
        // Your CSS already handles the fixed header for mobile (style.css line 111-135)
        if (window.innerWidth <= 992) {
            return; 
        }
        
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > lastScrollTop && scrollTop > (topBanner.offsetHeight || 50)) {
            // Make both navbar and top banner fixed
            if (topBanner) {
                topBanner.style.position = 'fixed';
                topBanner.style.top = '0';
                topBanner.style.width = '100%';
                topBanner.style.zIndex = '1001';
            }
            
            if (navbar) {
                navbar.style.position = 'fixed';
                navbar.style.top = (topBanner ? topBanner.offsetHeight : 0) + 'px';
                navbar.style.width = '100%';
                navbar.style.maxWidth = '100%';
                navbar.style.zIndex = '1000';
            }
            
            // Use requestAnimationFrame to prevent layout shift
            requestAnimationFrame(function() {
                const navHeight = navbar ? navbar.offsetHeight : 0;
                const bannerHeight = topBanner ? topBanner.offsetHeight : 0;
                document.body.style.paddingTop = (navHeight + bannerHeight) + 'px';
            });
        } else if (scrollTop <= (topBanner ? topBanner.offsetHeight : 50)) {
            // Reset both navbar and top banner
            if (topBanner) {
                topBanner.style.position = 'static';
            }
            if (navbar) {
                navbar.style.position = 'static';
                navbar.style.width = '';
                navbar.style.maxWidth = '';
            }
            
            // Use requestAnimationFrame to prevent layout shift
            requestAnimationFrame(function() {
                document.body.style.paddingTop = '0';
            });
        }
        
        lastScrollTop = scrollTop;
    }, { passive: true });
}
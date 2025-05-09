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

    // Smooth scroll for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
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
        const cardMargin = parseFloat(cardStyle.marginLeft) + parseFloat(cardStyle.marginRight);
        cardWidth = cards[0].offsetWidth + gap + cardMargin;
        
        // Calculate how many cards to show based on viewport width
        const viewportWidth = window.innerWidth;
        const cardsToShow = viewportWidth >= 1200 ? 3 : viewportWidth >= 768 ? 2 : 1;
        maxIndex = cards.length;

        // Initial position to show first real slide
        track.style.transform = `translateX(-${cardWidth}px)`;
    }

    function updateCarousel(transition = true) {
        if (!cardWidth) calculateDimensions();
        
        track.style.transition = transition ? 'transform 0.3s ease-in-out' : 'none';
        const translateX = -(currentIndex + 1) * cardWidth; // +1 for the cloned slide
        track.style.transform = `translateX(${translateX}px)`;
    }

    function handleTransitionEnd() {
        if (isTransitioning) {
            isTransitioning = false;
            track.style.transition = 'none';
            
            // If we're at the clone of the last slide, jump to the real last slide
            if (currentIndex === -1) {
                currentIndex = cards.length - 1;
                updateCarousel(false);
            }
            // If we're at the clone of the first slide, jump to the real first slide
            else if (currentIndex === cards.length) {
                currentIndex = 0;
                updateCarousel(false);
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
    const categoryList = document.querySelectorAll('.category-list li');
    const courseCards = document.querySelectorAll('.course-card');

    // Add data-category attribute to course cards based on their content
    courseCards.forEach(card => {
        const courseTitle = card.querySelector('h4').textContent;
        if (courseTitle.includes('AWS')) {
            card.setAttribute('data-category', 'AWS');
        } else if (courseTitle.includes('Cisco') ) {
            card.setAttribute('data-category', 'Cisco');
        } else if (courseTitle.includes('Microsoft')) {
            card.setAttribute('data-category', 'Microsoft');
        } else if (courseTitle.includes('CompTIA')) {
            card.setAttribute('data-category', 'CompTIA');
        } else if (courseTitle.includes('ISACA')) {
            card.setAttribute('data-category', 'ISACA');
        } else if (courseTitle.includes('Google')) {
            card.setAttribute('data-category', 'Google');
        } else if (courseTitle.includes('Salesforce')) {
            card.setAttribute('data-category', 'Salesforce');
        } else if (courseTitle.includes('ECCouncil')) {
            card.setAttribute('data-category', 'ECCouncil');
        } else if (courseTitle.includes('Palo Alto')) {
            card.setAttribute('data-category', 'Palo Alto');
        } else {
            card.setAttribute('data-category', 'AWS'); // Default category
        }
    });

    // Add click event listeners to category items
    categoryList.forEach(category => {
        category.addEventListener('click', () => {
            const selectedCategory = category.textContent.trim();
            
            // Remove active class from all categories
            categoryList.forEach(cat => cat.classList.remove('active'));
            // Add active class to selected category
            category.classList.add('active');
            
            // Filter course cards
            courseCards.forEach(card => {
                const cardCategory = card.getAttribute('data-category');
                if (selectedCategory === 'All' || cardCategory === selectedCategory) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    // Exam Category Filter functionality
    console.log('Categories:', document.querySelectorAll('.exams-listing-section .category-list li').length);
    console.log('Exam cards:', document.querySelectorAll('.exams-listing-section .exam-card').length);
    
    const examCategoryList = document.querySelectorAll('.exams-listing-section .category-list li');
    const examCards = document.querySelectorAll('.exams-listing-section .exam-card');
    
    console.log('Category items found:', examCategoryList.length);
    console.log('Exam cards found:', examCards.length);

    // Add data-category attribute to exam cards based on their content
    examCards.forEach(card => {
        const examTitle = card.querySelector('.exam-content h3').textContent;
        console.log('Exam title:', examTitle);
        
        if (examTitle.includes('Computer') || examTitle.includes('Software') || examTitle.includes('Architecture')) {
            card.setAttribute('data-category', 'Computer Science');
        } else if (examTitle.includes('Economics') || examTitle.includes('Accounting') || examTitle.includes('Management')) {
            card.setAttribute('data-category', 'Business');
        } else if (examTitle.includes('Human Resource')) {
            card.setAttribute('data-category', 'Social Science');
        } else if (examTitle.includes('Data-Driven')) {
            card.setAttribute('data-category', 'Business');
        } else {
            card.setAttribute('data-category', 'Business'); // Default category
        }
        console.log('Category assigned:', card.getAttribute('data-category'));
    });

    // Add click event listeners to category items
    examCategoryList.forEach(category => {
        category.addEventListener('click', () => {
            console.log('Category clicked');
            const selectedCategory = category.querySelector('span').textContent.trim();
            console.log('Selected category:', selectedCategory);
            
            // Remove active class from all categories
            examCategoryList.forEach(cat => cat.classList.remove('active'));
            // Add active class to selected category
            category.classList.add('active');
            
            // Filter exam cards
            examCards.forEach(card => {
                const cardCategory = card.getAttribute('data-category');
                console.log('Card category:', cardCategory);
                if (selectedCategory === 'All' || cardCategory === selectedCategory) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    var menuToggle = document.querySelector('.menu-toggle');
    var navbar = document.querySelector('.navbar');
    if (menuToggle && navbar) {
        menuToggle.addEventListener('click', function() {
            navbar.classList.toggle('active');
            // Toggle between bars and close icons
            const barsIcon = menuToggle.querySelector('.fa-bars');
            const closeIcon = menuToggle.querySelector('.fa-times');
            const isActive = navbar.classList.contains('active');
            barsIcon.style.display = isActive ? 'none' : 'block';
            closeIcon.style.display = isActive ? 'block' : 'none';
        });
    }

    // Hero Carousel
    const heroSlides = document.querySelectorAll('.hero-slide');
    const heroPrevButton = document.querySelector('.hero-arrow.prev');
    const heroNextButton = document.querySelector('.hero-arrow.next');
    let currentHeroSlide = 0;
    let heroInterval;

    function showHeroSlide(index) {
        heroSlides.forEach(slide => slide.classList.remove('active'));
        heroSlides[index].classList.add('active');
    }

    function nextHeroSlide() {
        currentHeroSlide = (currentHeroSlide + 1) % heroSlides.length;
        showHeroSlide(currentHeroSlide);
    }

    function prevHeroSlide() {
        currentHeroSlide = (currentHeroSlide - 1 + heroSlides.length) % heroSlides.length;
        showHeroSlide(currentHeroSlide);
    }

    // Set up automatic sliding
    function startHeroInterval() {
        heroInterval = setInterval(nextHeroSlide, 3000);
    }

    // Add click event listeners for manual navigation
    if (heroPrevButton && heroNextButton) {
        heroPrevButton.addEventListener('click', () => {
            clearInterval(heroInterval);
            prevHeroSlide();
            startHeroInterval();
        });

        heroNextButton.addEventListener('click', () => {
            clearInterval(heroInterval);
            nextHeroSlide();
            startHeroInterval();
        });
    }

    // Initialize the first slide and start automatic sliding
    if (heroSlides.length > 0) {
        showHeroSlide(0);
        startHeroInterval();
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

window.addEventListener('scroll', function() {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    
    if (scrollTop > lastScrollTop && scrollTop > topBanner.offsetHeight) {
        navbar.style.position = 'fixed';
        navbar.style.top = '0';
        navbar.style.width = '100%';
        navbar.style.zIndex = '1000';
        document.body.style.paddingTop = navbar.offsetHeight + 'px';
    } else if (scrollTop < lastScrollTop && scrollTop <= topBanner.offsetHeight) {
        navbar.style.position = 'static';
        document.body.style.paddingTop = '0';
    }
    
    lastScrollTop = scrollTop;
}); 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Exam Support - Pass Your AI Certification Exams</title>
    <script>
        // Prevent automatic scroll restoration on mobile
        if ('scrollRestoration' in history) {
            history.scrollRestoration = 'manual';
        }
        
        // Prevent scroll bounce on mobile
        (function() {
            if (window.innerWidth <= 992) {
                let lastKnownScrollPosition = 0;
                let ticking = false;
                
                // Track scroll position
                function updateScrollPosition() {
                    lastKnownScrollPosition = window.pageYOffset || document.documentElement.scrollTop;
                    ticking = false;
                }
                
                window.addEventListener('scroll', function() {
                    if (!ticking) {
                        window.requestAnimationFrame(updateScrollPosition);
                        ticking = true;
                    }
                }, { passive: true });
                
                // Prevent bounce-back by restoring position if it changes after scroll stops
                let scrollEndTimeout;
                window.addEventListener('scroll', function() {
                    clearTimeout(scrollEndTimeout);
                    scrollEndTimeout = setTimeout(function() {
                        const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
                        // If position bounced back, restore it
                        if (currentScroll !== lastKnownScrollPosition && Math.abs(currentScroll - lastKnownScrollPosition) < 20) {
                            window.scrollTo({
                                top: lastKnownScrollPosition,
                                behavior: 'auto'
                            });
                        }
                    }, 200);
                }, { passive: true });
            }
        })();
    </script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" type="image/png" href="/images/fav.png">

    <style>
        .top-banner .container-fluid{
            animation: slideDown 0.8s ease-out forwards;
            transform: translateY(-100%);
            opacity: 0;
        }

        @keyframes slideDown {
            0% {
                transform: translateY(-100%);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <!-- Top Banner -->
    <div class="top-banner">
        <div class="container-fluid">
            <i class="fas fa-graduation-cap"></i>
            Pass Any AI Certification Exam Now & Pay After You Pass.  &nbsp<a href="contact" class="btn-important" style="text-decoration:none; padding: 3px 6px; border-radius:5px;">Contact Us!</a>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="logo">
                <a href="index">
                    <img src="images/Logo.png" alt="OA Exams Logo">
                </a>
            </div>
            <button type="button" class="menu-toggle" aria-label="Open navigation menu">
                <i class="fas fa-bars"></i>
                <i class="fas fa-times" style="display: none;"></i>
            </button>
            <div class="nav-links">
                <a href="index">Home</a>
                <a href="about">About Us</a>
                <a href="exams">View all Exams</a>
                <a href="coming-soon">Video Lessons</a>
                <div class="mobile-only">
                    <div class="social-links">
                        <a href="https://api.whatsapp.com/send/?phone=18077700499" target="_blank" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
                        <a href="https://telegram.me/collegeexceed" target="_blank" class="telegram"><i class="fab fa-telegram"></i></a>
                        <a href="coming-soon" class="facebook"><i class="fab fa-facebook"></i></a>
                        <a href="coming-soon" class="instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://signal.me/#eu/xUyrqfkB2Nn5zJupx2mft_zQnVdZtCBY3e-HSO7MG5ZyFCcqzMFEHaa6Fug1oysp" target="_blank" class="signal"><img src="images/favicon_io/signal.ico" alt="Signal" style="width: 25px; height: 25px;"></a>
                    </div>
                    <a href="contact" class="contact-btn">Contact us <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="social-links">
                <a href="https://api.whatsapp.com/send/?phone=18077700499" target="_blank" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
                <a href="https://telegram.me/collegeexceed" target="_blank" class="telegram"><i class="fab fa-telegram"></i></a>
                <a href="coming-soon" class="facebook"><i class="fab fa-facebook"></i></a>
                <a href="coming-soon" class="instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://signal.me/#eu/xUyrqfkB2Nn5zJupx2mft_zQnVdZtCBY3e-HSO7MG5ZyFCcqzMFEHaa6Fug1oysp" target="_blank" class="signal"><img src="images/favicon_io/signal.ico" alt="Signal" style="width: 20px; height: 20px;"></a>
                <a href="contact" class="contact-btn">Contact us <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </nav>
    <script src="js/main.js"></script>
    <script src="js/particles.js"></script>
</body>
</html>
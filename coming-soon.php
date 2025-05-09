<?php include 'includes/header.php'; ?>

<!-- Coming Soon Hero Section -->
<section class="coming-soon-hero">
    <div class="container">
        <div class="coming-soon-content">
            <h1>Coming Soon</h1>
            <div class="coming-soon-badge">
                <i class="fas fa-rocket"></i>
                <span>We're Working on Something Amazing</span>
            </div>
            <p class="coming-soon-description">
                We're working hard to bring you an enhanced platform for IT certification success. 
                Get ready for a revolutionary way to prepare for your IT certifications.
            </p>
            
        

            <!-- Newsletter Signup -->
            <div class="newsletter-signup">
                <h3>Get Notified When We Launch</h3>
                <form id="notifyForm" class="notify-form">
                    <input type="email" placeholder="Enter your email address" required>
                    <button type="submit" class="btn btn-primary">Notify Me</button>
                </form>
            </div>

            <!-- Quick Connect -->
            <div class="quick-connect">
                <p>Need immediate assistance?</p>
                <div class="connect-buttons">
                    <a href="https://api.whatsapp.com/send/?phone=16464800499" class="btn btn-whatsapp">
                        <i class="fab fa-whatsapp"></i> WhatsApp
                    </a>
                    <a href="https://telegram.me/collegeexceed" class="btn btn-telegram">
                        <i class="fab fa-telegram-plane"></i> Telegram
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.coming-soon-hero {
    padding: 100px 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    text-align: center;
}

.coming-soon-content {
    max-width: 800px;
    margin: 0 auto;
}

.coming-soon-content h1 {
    font-size: 3.5rem;
    color: #2c3e50;
    margin-bottom: 20px;
}

.coming-soon-badge {
    display: inline-flex;
    align-items: center;
    background: #052d72;
    color: white;
    padding: 10px 20px;
    border-radius: 30px;
    margin-bottom: 30px;
}

.coming-soon-badge i {
    margin-right: 10px;
}

.coming-soon-description {
    font-size: 1.2rem;
    color: #6c757d;
    margin-bottom: 40px;
}


.newsletter-signup {
    margin: 50px 0;
}

.newsletter-signup h3 {
    color: #2c3e50;
    margin-bottom: 20px;
}

.notify-form {
    display: flex;
    gap: 10px;
    max-width: 500px;
    margin: 0 auto;
}

.notify-form input {
    flex: 1;
    padding: 12px 20px;
    border: 1px solid #dee2e6;
    border-radius: 5px;
    font-size: 1rem;
}

.quick-connect {
    margin-top: 50px;
}

.quick-connect p {
    color: #6c757d;
    margin-bottom: 15px;
}

.connect-buttons {
    display: flex;
    gap: 15px;
    justify-content: center;
}

.btn-whatsapp {
    background: #25D366;
    color: white;
}

.btn-telegram {
    background: #0088cc;
    color: white;
}

.btn-whatsapp:hover, .btn-telegram:hover {
    opacity: 0.9;
    color: white;
}

@media (max-width: 768px) {
    .coming-soon-content h1 {
        font-size: 2.5rem;
    }

    .countdown-timer {
        flex-wrap: wrap;
    }

    .timer-item {
        min-width: 80px;
    }

    .notify-form {
        flex-direction: column;
    }

    .connect-buttons {
        flex-direction: column;
    }
}

/* Add these styles to your existing CSS */
.alert {
    padding: 15px;
    margin: 15px 0;
    border-radius: 5px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.alert-success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

.alert-danger {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}

.alert i {
    font-size: 1.2rem;
}

.notify-form button:disabled {
    opacity: 0.7;
    cursor: not-allowed;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.fa-spinner {
    animation: spin 1s linear infinite;
}
</style>

<script>
// Set the launch date (adjust as needed)
const launchDate = new Date('2024-12-31T00:00:00').getTime();

// Update the countdown every second
const countdown = setInterval(function() {
    const now = new Date().getTime();
    const distance = launchDate - now;

    // Calculate time units
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Update the countdown display
    document.getElementById('days').textContent = String(days).padStart(2, '0');
    document.getElementById('hours').textContent = String(hours).padStart(2, '0');
    document.getElementById('minutes').textContent = String(minutes).padStart(2, '0');
    document.getElementById('seconds').textContent = String(seconds).padStart(2, '0');

    // If the countdown is finished
    if (distance < 0) {
        clearInterval(countdown);
        document.querySelector('.countdown-timer').innerHTML = "We're Live!";
    }
}, 1000);

// Handle newsletter signup
document.getElementById('notifyForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Get the email input
    const emailInput = this.querySelector('input[type="email"]');
    const email = emailInput.value;
    
    // Disable the form while submitting
    const submitButton = this.querySelector('button[type="submit"]');
    submitButton.disabled = true;
    submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Subscribing...';
    
    // Send the AJAX request
    fetch('newsletter_signup.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'email=' + encodeURIComponent(email)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Show success message
            const successMessage = document.createElement('div');
            successMessage.className = 'alert alert-success';
            successMessage.innerHTML = `
                <i class="fas fa-check-circle"></i>
                ${data.message}
            `;
            
            // Insert success message after the form
            this.parentNode.insertBefore(successMessage, this.nextSibling);
            
            // Reset the form
            this.reset();
            
            // Remove success message after 5 seconds
            setTimeout(() => {
                successMessage.remove();
            }, 5000);
        } else {
            // Show error message
            const errorMessage = document.createElement('div');
            errorMessage.className = 'alert alert-danger';
            errorMessage.innerHTML = `
                <i class="fas fa-exclamation-circle"></i>
                ${data.message}
            `;
            
            // Insert error message after the form
            this.parentNode.insertBefore(errorMessage, this.nextSibling);
            
            // Remove error message after 5 seconds
            setTimeout(() => {
                errorMessage.remove();
            }, 5000);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        // Show error message
        const errorMessage = document.createElement('div');
        errorMessage.className = 'alert alert-danger';
        errorMessage.innerHTML = `
            <i class="fas fa-exclamation-circle"></i>
            There was an error processing your request. Please try again.
        `;
        
        // Insert error message after the form
        this.parentNode.insertBefore(errorMessage, this.nextSibling);
        
        // Remove error message after 5 seconds
        setTimeout(() => {
            errorMessage.remove();
        }, 5000);
    })
    .finally(() => {
        // Re-enable the form
        submitButton.disabled = false;
        submitButton.innerHTML = 'Notify Me';
    });
});
</script>

<?php include 'includes/footer.php'; ?> 
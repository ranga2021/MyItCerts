<?php include 'includes/header.php'; ?>

<!-- Coming Soon Hero Banner Section -->
<section class="contact-hero-banner">
    <div class="container-fluid">
        <h1 class="contact-hero-title">Coming Soon<span class="highlight"><br>We're Working on Something Amazing!</span></h1>
        <p class="contact-hero-subtitle">We're working hard to bring you an enhanced platform for AI certification exam success.</p>
        <div class="contact-hero-badges">
            <span class="hero-badge success"><i class="fas fa-rocket"></i> New Features</span>
            <span class="hero-badge support"><i class="fas fa-clock"></i> Coming Soon</span>
            <span class="hero-badge pay"><i class="fas fa-sparkles"></i> Stay Tuned</span>
        </div>
    </div>
</section>

<!-- Quick Connect for Instant Support Section -->
<section class="quick-connect-section">
    <div class="container-fluid">
        <h2 class="quick-connect-title">Get in Touch</h2>
        <p class="quick-connect-subtitle">Need immediate assistance with your AI certification? Contact us through your preferred platform</p>
        <div class="quick-connect-grid">
            <!-- Signal Card -->
            <div class="quick-connect-card signal">
                <div class="quick-connect-icon">
                    <img src="images/signal.png" alt="Signal" style="width: 65px; height: auto; border-radius: 50%;">
                </div>
                <h3>Signal</h3>
                <p>Get instant exam support</p>
                <a href="https://signal.me/#eu/xUyrqfkB2Nn5zJupx2mft_zQnVdZtCBY3e-HSO7MG5ZyFCcqzMFEHaa6Fug1oysp" target="_blank" class="connect-link">Connect Now <i class="fas fa-arrow-right"></i></a>
            </div>
            
            <!-- Telegram Card -->
            <div class="quick-connect-card telegram">
                <div class="quick-connect-icon">
                    <i class="fab fa-telegram-plane"></i>
                </div>
                <h3>Telegram</h3>
                <p>Chat with our exam support team</p>
                <a href="https://telegram.me/collegeexceed" target="_blank" class="connect-link">Connect Now <i class="fas fa-arrow-right"></i></a>
            </div>
            
            <!-- WhatsApp Card -->
            <div class="quick-connect-card whatsapp">
                <div class="quick-connect-icon">
                    <i class="fab fa-whatsapp"></i>
                </div>
                <h3>WhatsApp</h3>
                <p>Get instant exam support</p>
                <a href="https://api.whatsapp.com/send/?phone=18077700499" target="_blank" class="connect-link">Connect Now <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="contact-form-section">
    <div class="container-fluid">
        <div class="contact-form">
            <h2>Send us a Message</h2>
            <p>For <b>non-urgent inquiries,</b> you can reach us using the contact form below. However, for faster exam support, we recommend using WhatsApp or Telegram above.</p>
            <form id="contactForm" action="send_mail.php" method="POST">
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="exam_vendor">Exam Vendor</label>
                        <select id="exam_vendor" name="exam_vendor" required>
                            <option value="">Select your Exam Vendor</option>
                            <option value="Microsoft AI">Microsoft AI</option>
                            <option value="AWS AI">AWS AI</option>
                            <option value="Google AI">Google AI</option>
                            <option value="ISACA AI">ISACA AI</option>
                            <option value="NVIDIA AI">NVIDIA AI</option>
                            <option value="ISTQB AI Testing">ISTQB AI Testing</option>
                            <option value="PMI AI">PMI AI</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exam_name">Exam Name</label>
                        <input type="text" id="exam_name" name="exam_name" required placeholder="e.g. AI-900: Microsoft Azure AI Fundamentals, etc.">
                    </div>
                </div>
                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <center><button type="submit" class="btn btn-primary">Send Message</button></center>
            </form>
            <!-- Success Message Box -->
            <div id="successMessage" class="success-message" style="display: none;">
                <div class="message-content">
                    <i class="fas fa-check-circle"></i>
                    <h3>Thanks for contacting us!</h3>
                    <p>We are receiving a lot of emails every day, so we apologize for the possible delay. For better and fast reply please send us a <a href="https://api.whatsapp.com/send/?phone=18077700499" target="_blank" class="whatsapp-link">WhatsApp message</a>.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.success-message {
    margin-top: 20px;
    padding: 20px;
    background-color: #f8f9fa;
    border-radius: 8px;
    text-align: center;
}

.success-message .message-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 15px;
}

.success-message .message-content i {
    font-size: 3rem;
    color: #28a745;
}

.success-message .message-content h3 {
    color: #28a745;
    margin: 0;
}

.success-message .message-content p {
    color: #666;
    margin: 0;
}

.success-message .whatsapp-link {
    color: #25D366;
    text-decoration: none;
    font-weight: 600;
}

.success-message .whatsapp-link:hover {
    text-decoration: underline;
}
</style>

<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const submitButton = this.querySelector('button[type="submit"]');
    const originalText = submitButton.textContent;
    
    submitButton.disabled = true;
    submitButton.textContent = 'Sending...';
    
    fetch('send_mail.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            document.getElementById('successMessage').style.display = 'block';
            this.reset();
            window.scrollTo({ top: document.getElementById('successMessage').offsetTop - 100, behavior: 'smooth' });
        } else {
            alert(data.message || 'There was an error sending your message. Please try again.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('There was an error sending your message. Please try again.');
    })
    .finally(() => {
        submitButton.disabled = false;
        submitButton.textContent = originalText;
    });
});
</script>

<?php include 'includes/footer.php'; ?>

<?php include 'includes/header.php'; ?>

<!-- Contact Hero Banner Section -->
<section class="contact-hero-banner">
    <div class="container-fluid">
        <h1 class="contact-hero-title">Pass Your IT Certification Exam Today – <span class="highlight"><br>Guaranteed!</span></h1>
        <p class="contact-hero-subtitle">Join thousands of successful students who trusted our exam support service. Pay only after you pass!</p>
        <div class="contact-hero-badges">
            <span class="hero-badge success"><i class="fas fa-check"></i> 100% Success Rate</span>
            <span class="hero-badge support"><i class="fas fa-clock"></i> 24/7 Support</span>
            <span class="hero-badge pay"><i class="fas fa-wallet"></i> Pay After Pass</span>
        </div>
    </div>
</section>

<!-- Quick Connect for Instant Support Section -->
<section class="quick-connect-section">
    <div class="container-fluid">
        <h2 class="quick-connect-title">Quick Connect for Instant Support</h2>
        <p class="quick-connect-subtitle">Choose your preferred messaging platform for immediate assistance</p>
        <div class="quick-connect-grid">
            <!-- WhatsApp Card -->
            <div class="quick-connect-card whatsapp">
                <div class="quick-connect-icon">
                    <i class="fab fa-whatsapp"></i>
                </div>
                <h3>WhatsApp</h3>
                <p>Get instant exam support</p>
                <a href="https://api.whatsapp.com/send/?phone=16464800499" target="_blank" class="connect-link">Connect Now <i class="fas fa-arrow-right"></i></a>
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
        </div>
    </div>
</section>

<!-- Why Students Trust Us Section -->
<section class="trust-section">
    <div class="container-fluid">
        <h2 class="trust-title">Why Students Trust Us</h2>
        <div class="trust-cards">
            <div class="trust-card">
                <div class="trust-icon trust-icon-success"><i class="fas fa-check-circle"></i></div>
                <h3>Guaranteed Pass</h3>
                <p>100% success rate on first attempt</p>
            </div>
            <div class="trust-card">
                <div class="trust-icon trust-icon-time"><i class="fas fa-clock"></i></div>
                <h3>Time Efficient</h3>
                <p>Skip the studying, get immediate results</p>
            </div>
            <div class="trust-card">
                <div class="trust-icon trust-icon-risk"><i class="fas fa-wallet"></i></div>
                <h3>Risk Free</h3>
                <p>Only pay after you successfully pass your OA</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="contact-form-section">
    <div class="container-fluid">
            <!-- Contact Form -->
            <div class="contact-form">
                <h2>Send us a Message</h2>
                <p>For <b>non-urgent inquiries,</b> you can reach us using the contact form below. However, for faster exam support, we recommend using WhatsApp or Telegram above.
                <form id="contactForm" action="send_mail.php" method="POST">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="exam">Exam Vendor</label>
                            <select id="Exam" name="Exam" required>
                                <option value="">Select your Exam Vendor</option>
                                <option value="AWS">AWS</option>
                                <option value="Cisco">Cisco</option>
                                <option value="Microsoft">Microsoft</option>
                                <option value="CompTIA">CompTIA</option>
                                <option value="ISACA">ISACA</option>
                                <option value="Google">Google</option>
                                <option value="Salesforce">Salesforce</option>
                                <option value="ECCouncil">ECCouncil</option>
                                <option value="Palo_Alto">Palo Alto</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exam_name">Exam Name</label>
                            <input type="text" id="exam_name" name="exam_name" required placeholder="e.g. CompTIA A+, AI-900: Microsoft Azure AI Fundamentals, etc.">
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
                        <p>We are receiving a lot of emails every day, so we apologize for the possible delay. For better and fast reply please send us a <a href="https://api.whatsapp.com/send/?phone=16464800499" target="_blank" class="whatsapp-link">WhatsApp message</a>.</p>
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
    max-width: 600px;
    margin: 0 auto;
}

.success-message i {
    color: #28a745;
    font-size: 48px;
    margin-bottom: 15px;
}

.success-message h3 {
    color: #28a745;
    margin-bottom: 10px;
}

.success-message p {
    color: #6c757d;
    margin-bottom: 15px;
}

.success-message .whatsapp-link {
    color: #25D366;
    text-decoration: none;
    font-weight: bold;
}

.success-message .whatsapp-link:hover {
    text-decoration: underline;
}
</style>

<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Get form data
    const formData = new FormData(this);
    
    // Send AJAX request
    fetch('send_mail.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Show success message
            document.getElementById('successMessage').style.display = 'block';
            
            // Scroll to the success message
            document.getElementById('successMessage').scrollIntoView({ behavior: 'smooth' });
            
            // Reset the form
            this.reset();
        } else {
            // Show error message
            alert(data.message || 'There was an error sending your message. Please try again.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('There was an error sending your message. Please try again.');
    });
});
</script>

<!-- FAQ Section -->
<section class="faq-section">
        <div class="container">
            <h2 class="section-title text-center">Get Every Single Answer Here</h2>
            <p class="section-description text-center">
            Find quick answers to all your common questions about our IT certification exams, study materials, and support services. Everything you need to know is right here!
            </p>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is My IT Certs and how does it work?</h3>
                        <span class="toggle-icon">^</span>
                    </div>
                    <div class="faq-answer">
                        <p>My IT Certs, in partnership with <strong>College Exceed,</strong> is your trusted support system for passing IT certification exams. We specialize in helping candidates succeed in certifications like CompTIA, Cisco, AWS, Microsoft, and more. Our experts provide focused, result-driven prep to ensure you pass your certification exams on the first attempt or you don't pay us a dime. You only pay once you successfully pass, making your success risk-free and guaranteed.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What are the benefits of getting our premium IT certification exam support?</h3>
                        <span class="toggle-icon">^</span>
                    </div>
                    <div class="faq-answer">                    
                        <ul>
                            <li>Guaranteed Exam Pass: Pass your IT certification exam on the first try with proven strategies and expert guidance.</li>
                            <li>Pay After You Pass: You owe us nothing until you successfully pass your exam. </li>
                            <li>Expert Coaching & Materials: Receive targeted support from IT-certified professionals.</li>
                            <li>Accelerated Career Progress: Achieve your certification faster and start advancing your IT career sooner. </li>
                        </ul>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What guarantees do you offer for your work?</h3>
                        <span class="toggle-icon">^</span>
                    </div>
                    <div class="faq-answer">
                        <p><strong>We offer a 100% pass guarantee.</strong> We also guarantee that all support and materials are original, customized to your certification exam, and completely free from plagiarism. Your privacy and confidentiality are our top priorities—we never share your personal information or exam support with third parties.
                        </p>                      
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How much does it cost to get your exam support?</h3>
                        <span class="toggle-icon">^</span>
                    </div>
                    <div class="faq-answer">
                        <p>Our pricing varies based on the certification exam and the level of support you need. Once you reach out to us, we'll assess your goals and give you a personalized quote. <strong>You only pay after you pass your exam,</strong> so there's zero financial risk involved in getting started with us.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>


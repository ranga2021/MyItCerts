<?php include 'includes/header.php'; ?>

<!-- Contact Hero Banner Section -->
<section class="contact-hero-banner">
    <div class="container-fluid">
        <h1 class="contact-hero-title">Pass Your WGU OA Today – <span class="highlight"><br>Guaranteed!</span></h1>
        <p class="contact-hero-subtitle">Join thousands of successful WGU students who trusted our exam support service. Pay only after you pass!</p>
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
                <p>For non-urgent inquiries, you can reach us using the contact form below. However, for faster exam support, we recommend using WhatsApp or Telegram above.
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
                            <label for="subject">Program</label>
                            <select id="subject" name="subject" required>
                                <option value="">Select your Program</option>
                                <option value="business">Business</option>
                                <option value="IT">IT</option>
                                <option value="Humanities">Humanities</option>
                                <option value="Science">Science</option>
                                <option value="Social_Science">Social Science</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="class_code">Class Code</label>
                            <input type="text" id="class_code" name="class_code" required placeholder="e.g. C952, C963, etc.">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>

                    <center><button type="submit" class="btn btn-primary">Send Message</button></center>
                </form>
            </div>
    </div>
</section>


<!-- FAQ Section -->
<section class="faq-section" id="home-faq">
        <div class="container">
            <h2 class="section-title text-center">Get Every Single Answer Here</h2>
            <p class="section-description text-center">
                Get answers fast. From 'How does your guarantee work?' to 'Can I really graduate in 6 months?'—we crush doubts so you can focus on crushing exams. 🚀
            </p>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is OA Exams and how does it work?</h3>
                        <span class="toggle-icon">^</span>
                    </div>
                    <div class="faq-answer">
                        <p>We partner with <strong>College Exceed</strong> to help you achieve success in your WGU courses. College Exceed is a leading provider of exam support for online degree programs and IT certification programs. We help you pass your exams and assignments on the first attempt, guaranteed. You only pay us once you successfully pass your exam, ensuring your complete satisfaction and confidence.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What are the benefits of getting our premium exam support?</h3>
                        <span class="toggle-icon">^</span>
                    </div>
                    <div class="faq-answer">                    
                        <ul>
                            <li>Guaranteed Exam Pass: Pass WGU exams on the first try with streamlined prep.</li>
                            <li>Pay Upon Success: Only pay after you pass.</li>
                            <li>Performance Assessment Help: Get expert support for WGU assessments.</li>
                            <li>Fast Degree Completion: Finish your degree in one 6-month term. </li>
                        </ul>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What guarantees do you offer for your work?</h3>
                        <span class="toggle-icon">^</span>
                    </div>
                    <div class="faq-answer">
                        <p><strong>We offer a 100% pass guarantee for our work.</strong> We also guarantee that our work is original, plagiarism-free and meets the standards of the OA exam. We respect your privacy and confidentiality, and we will never share your information or work with anyone else.</p>                      
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How much does it cost to get your exam support?</h3>
                        <span class="toggle-icon">^</span>
                    </div>
                    <div class="faq-answer">
                        <p>The cost of getting our exam support depends on the program you choose and the level of assistance you need. Once you contact us, we will give you a quote based on your situation. Remember, <strong>you only pay us once you successfully pass your exam,</strong> so there is no risk involved in partnering with us.</p>
                    </div>
                </div>
            </div>

        
        </div>
    </section>

<?php include 'includes/footer.php'; ?>


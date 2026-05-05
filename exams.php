<?php include 'includes/header.php'; ?>

    <!-- Exams Search Section -->
    <section class="exams-search-section">
        <div class="container-fluid">
            <div class="exams-search-content text-center">
                <div class="graduation-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h1>Available AI Certifications</h1>
                <p>Find comprehensive study guides and resources for your<br>AI certification preparation</p>
                
                <div class="search-container">
                    <div class="search-box">
                        <input type="text" placeholder="Search for your exam (ex. Microsoft, AWS, Google, ISACA, NVIDIA, ISTQB, etc.)">
                        <button type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>

                <div class="disclaimer">
                    * AI Exam Support is not affiliated with any certification providers.
                </div>
            </div>
        </div>
    </section>

    <!-- Exams Listing Section -->
    <section class="exams-listing-section">
        <div class="container-fluid">
            <div class="showing-count">Showing 12 AI certification exams</div>
            
            <div class="exams-content">
                <!-- Categories Sidebar -->
                <div class="categories-sidebar">
                    <h3>Categories</h3>
                    <ul class="category-list">
                        <li class="active">
                            <i class="fas fa-th-large"></i>
                            <span>All</span>
                        </li>
                        <li>
                            <i class="fas fa-book"></i>
                            <span>Microsoft AI</span>
                        </li>
                        <li>
                            <i class="fas fa-server"></i>
                            <span>AWS AI</span>
                        </li>
                        <li>
                            <i class="fas fa-calculator"></i>
                            <span>Google AI</span>
                        </li>
                        <li>
                            <i class="fas fa-database"></i>
                            <span>ISACA AI</span>
                        </li>
                        <li>
                            <i class="fas fa-microchip"></i>
                            <span>NVIDIA AI</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>ISTQB AI Testing</span>
                        </li>
                        <li>
                            <i class="fas fa-briefcase"></i>
                            <span>PMI AI</span>
                        </li>
                    </ul>

                    <div class="help-box">
                        <h3>Need Help?</h3>
                        <p>Our study experts are ready to assist you</p>
                        <a href="/contact" class="btn btn-primary btn-shine">Contact support</a>
                    </div>
                </div>

                <!-- Exams Grid -->
                <div class="exams-grid">

                <!-- ISACA AI Certifications -->
                <div class="exam-card" data-category="ISACA AI">
                        <div class="exam-image">
                            <img src="images/blogs/AAIA.png" alt="ISACA Advanced in AI Audit">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>ISACA Advanced in AI Audit (AAIA)</h3>
                            <p>Master AI auditing and control with our study materials. Prepare for your ISACA AI certification with confidence.</p>
                            <a href="/AAIA" class="view-guide">View Exam <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- Microsoft AI Certifications -->
                    <div class="exam-card" data-category="Microsoft AI">
                        <div class="exam-image">
                            <img src="images/blogs/AI900.png" alt="Microsoft Azure AI Fundamentals">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>Microsoft Certified: Azure AI Fundamentals</h3>
                            <p>Learn AI fundamentals with our Azure AI study materials. Start your AI journey with Microsoft certification.</p>
                            <a href="/AI900" class="view-guide">View Exam <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card" data-category="Microsoft AI">
                        <div class="exam-image">
                            <img src="images/blogs/AI102.png" alt="Microsoft Azure AI Engineer">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>Microsoft Certified: Azure AI Engineer Associate</h3>
                            <p>Master Azure AI services and solutions. Prepare for your Microsoft Azure AI certification with our expert study materials.</p>
                            <a href="/AI102" class="view-guide">View Exam <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <!-- AWS AI Certifications -->
                    <div class="exam-card" data-category="AWS AI">
                        <div class="exam-image">
                            <img src="images/blogs/AIF-C01.png" alt="AWS AI Practitioner">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>AWS Certified AI Practitioner (AIF-C01)</h3>
                            <p>Demonstrate foundational knowledge of AI/ML concepts and AWS AI services for business solutions.</p>
                            <a href="/AIF-C01" class="view-guide">View Exam <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card" data-category="AWS AI">
                        <div class="exam-image">
                            <img src="images/blogs/GDP-C01.png" alt="AWS Generative AI Developer">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>AWS Certified Generative AI Developer - Professional (GDP-C01)</h3>
                            <p>Build production-ready generative AI applications on AWS. Master advanced generative AI development, model fine-tuning, and deployment strategies.</p>
                            <a href="/GDP-C01" class="view-guide">View Exam <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <!-- Google AI Certification -->
                    <div class="exam-card" data-category="Google AI">
                        <div class="exam-image">
                            <img src="images/exams/google.png" alt="Google Generative AI Leader">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>Generative AI Leader</h3>
                            <p>Master Google Cloud Platform with our study materials. Prepare for your Google AI certification.</p>
                            <a href="/coming-soon" class="view-guide">View Exam <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    
                    <div class="exam-card" data-category="ISACA AI">
                        <div class="exam-image">
                            <img src="images/blogs/AAISM.png" alt="ISACA Advanced in AI Security Management">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>ISACA Advanced in AI Security Management (AAISM)</h3>
                            <p>Master information security management for AI systems. Prepare for your ISACA AI certification.</p>
                            <a href="/AAISM" class="view-guide">View Exam <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <!-- NVIDIA AI Certifications -->
                    <div class="exam-card" data-category="NVIDIA AI">
                        <div class="exam-image">
                            <img src="images/blogs/AI-LLMS.png" alt="NVIDIA Generative AI LLMs">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>NVIDIA-Certified Associate: Generative AI LLMs (NCA-GENL)</h3>
                            <p>Master large language models and generative AI pipelines with NVIDIA. Build, deploy, and optimize LLM applications using NVIDIA's AI platform.</p>
                            <a href="/AI-LLMS" class="view-guide">View Exam <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card" data-category="NVIDIA AI">
                        <div class="exam-image">
                            <img src="images/blogs/NCA-AIIO.png" alt="NVIDIA NCA-AIIO AI Infrastructure and Operations">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>NCA-AIIO - NVIDIA-Certified Associate: AI Infrastructure and Operations</h3>
                            <p>Validate your expertise in AI infrastructure and operations. Master GPU-accelerated infrastructure, data center management, and NVIDIA AI solutions.</p>
                            <a href="/NCA-AIIO" class="view-guide">View Exam <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card" data-category="NVIDIA AI">
                        <div class="exam-image">
                            <img src="images/exams/logo4.png" alt="NVIDIA Multimodal Generative AI">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>NVIDIA-Certified Associate: Multimodal Generative AI</h3>
                            <p>Master multimodal generative AI with NVIDIA. Prepare for your NVIDIA certification.</p>
                            <a href="/coming-soon" class="view-guide">View Exam <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <!-- ISTQB AI Testing -->
                    <div class="exam-card" data-category="ISTQB AI Testing">
                        <div class="exam-image">
                            <img src="images/blogs/CT-AI.png" alt="ISTQB CT-AI Certified Tester AI Testing">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>ISTQB CT-AI - Certified Tester AI Testing</h3>
                            <p>Validate your expertise in testing AI-based systems. Master AI testing methodologies and prepare for your ISTQB CT-AI certification.</p>
                            <a href="/CT-AI" class="view-guide">View Exam <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <!-- PMI AI Certification -->
                    <div class="exam-card" data-category="PMI AI">
                        <div class="exam-image">
                            <img src="images/blogs/PMI-CPMAI.png" alt="PMI Certified Professional in Managing AI">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>PMI-CPMAI - PMI Certified Professional in Managing AI</h3>
                            <p>Lead AI programs and projects with the CPMAI methodology. Master AI project management from business understanding through operationalization.</p>
                            <a href="/PMI-CPMAI" class="view-guide">View Exam <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- Load More Button removed - only showing 12 AI certifications -->
                    <div></div>
                    <div></div>
                    <div class="load-more-container text-center" style="display: none;">
                        <button id="loadMoreBtn" class="btn btn-primary load-more-btn">
                            Load More Exams <i class="fas fa-arrow-down"></i>
                        </button>
                    </div>
                    <div></div>

                </div>

                
            </div>
            <div class="help-box-mobile">
                <h4>Need Help?</h4>
                <p>Our study experts are ready to assist you</p>
                <a href="/contact" class="contact-support-btn">Contact Support</a>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Load More functionality
            const loadMoreBtn = document.getElementById('loadMoreBtn');
            const examCards = document.querySelectorAll('.exam-card');
            const cardsPerLoad = 9;
            let visibleCards = 15; // Initial number of visible cards

            // Hide all cards beyond the initial visible count
            examCards.forEach((card, index) => {
                if (index >= visibleCards) {
                    card.classList.add('hidden');
                }
            });

            // Update showing count
            function updateShowingCount() {
                const showingCount = document.querySelector('.showing-count');
                const totalCards = examCards.length;
                showingCount.textContent = `Showing ${visibleCards} of ${totalCards} exam guides`;
            }

            // Load More button click handler
            loadMoreBtn.addEventListener('click', () => {
                const hiddenCards = document.querySelectorAll('.exam-card.hidden');
                const cardsToShow = Math.min(cardsPerLoad, hiddenCards.length);

                for (let i = 0; i < cardsToShow; i++) {
                    if (hiddenCards[i]) {
                        hiddenCards[i].classList.remove('hidden');
                    }
                }

                visibleCards += cardsToShow;
                updateShowingCount();

                // Hide load more button if all cards are shown
                if (visibleCards >= examCards.length) {
                    loadMoreBtn.style.display = 'none';
                }
            });

            // Initial showing count update
            updateShowingCount();

            // Category filtering functionality
            const examCategoryList = document.querySelectorAll('.exams-listing-section .category-list li');
            
            examCategoryList.forEach(category => {
                category.addEventListener('click', () => {
                    const selectedCategory = category.querySelector('span').textContent.trim();
                    
                    // Remove active class from all categories
                    examCategoryList.forEach(cat => cat.classList.remove('active'));
                    // Add active class to selected category
                    category.classList.add('active');
                    
                    // Filter exam cards
                    if (selectedCategory === 'All') {
                        visibleCards = 15;
                        examCards.forEach((card, index) => {
                            card.style.display = '';
                            if (index >= visibleCards) {
                                card.classList.add('hidden');
                            } else {
                                card.classList.remove('hidden');
                            }
                        });
                        loadMoreBtn.style.display = 'block';
                        updateShowingCount();
                    } else {
                        examCards.forEach(card => {
                            const cardCategory = card.getAttribute('data-category');
                            if (cardCategory === selectedCategory) {
                                card.style.display = '';
                                card.classList.remove('hidden');
                            } else {
                                card.classList.add('hidden');
                            }
                        });
                        loadMoreBtn.style.display = 'none';
                        // Update showing count for filtered category
                        const showingCount = document.querySelector('.showing-count');
                        const totalVisible = Array.from(examCards).filter(card => !card.classList.contains('hidden')).length;
                        showingCount.textContent = `Showing ${totalVisible} ${selectedCategory} exam guides`;
                    }
                });
            });
        });
    </script>

<?php include 'includes/footer.php'; ?> 
<?php include 'includes/header.php'; ?>

    <!-- Exams Search Section -->
    <section class="exams-search-section">
        <div class="container-fluid">
            <div class="exams-search-content text-center">
                <div class="graduation-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h1>Most Popular IT Certification Exams</h1>
                <p>Find comprehensive study guides and resources for your<br>IT certification preparation</p>
                
                <div class="search-container">
                    <div class="search-box">
                        <input type="text" placeholder="Search for your exam (ex. Comptia+, PMP, etc.)">
                        <button type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>

                <div class="disclaimer">
                    * My IT Certs is not affiliated with any certification providers.
                </div>
            </div>
        </div>
    </section>

    <!-- Exams Listing Section -->
    <section class="exams-listing-section">
        <div class="container-fluid">
            <div class="showing-count">Showing 15 of 200+ exam guides</div>
            
            <div class="exams-content">
                <!-- Categories Sidebar -->
                <div class="categories-sidebar">
                    <h3>Categories</h3>
                    <ul class="category-list">
                        <li>
                            <i class="fas fa-desktop"></i>
                            <span>CompTIA</span>
                        </li>
                        <li>
                            <i class="fas fa-server"></i>
                            <span>AWS</span>
                        </li>
                        <li>
                            <i class="fas fa-laptop-code"></i>
                            <span>Cisco</span>
                        </li>
                        <li>
                            <i class="fas fa-book"></i>
                            <span>Microsoft</span>
                        </li>
                        <li>
                            <i class="fas fa-database"></i>
                            <span>ISACA</span>
                        </li>
                        <li>
                            <i class="fas fa-calculator"></i>
                            <span>Google</span>
                        </li>
                        <li>
                            <i class="fas fa-briefcase"></i>
                            <span>Salesforce</span>
                        </li>
                        <li>
                            <i class="fas fa-book-open"></i>
                            <span>ECCouncil</span>
                        </li>
                        <li>
                            <i class="fas fa-file"></i>
                            <span>Palo Alto</span>
                        </li>
                    </ul>

                    <div class="help-box">
                        <h3>Need Help?</h3>
                        <p>Our study experts are ready to assist you</p>
                        <a href="contact.php" class="btn btn-primary">Contact support</a>
                    </div>
                </div>

                <!-- Exams Grid -->
                <div class="exams-grid">
                    <!-- First 15 exam cards will be visible by default -->
                    <div class="exam-card" data-category="CompTIA">
                        <div class="exam-image">
                            <img src="images/exams/comptia.png" alt="CompTIA A+">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>CompTIA A+ Certification Exam: Core 1 (220-1101)</h3>
                            <p>Start your IT career with our A+ study materials. Learn essential IT skills and prepare for your certification.</p>
                            <a href="https://comptia.myitcerts.com/" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="exam-card" data-category="AWS">
                        <div class="exam-image">
                            <img src="images/exams/aws.png" alt="AWS Solutions Architect">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>AWS Certified Solutions Architect – Associate (SAA-C03)</h3>
                            <p>Master cloud architecture and design with our comprehensive study materials. Pass your AWS Solutions Architect Associate exam with confidence.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- Exam Card 2 -->
                    <div class="exam-card" data-category="Cisco">
                        <div class="exam-image">
                            <img src="images/exams/cisco.png" alt="Cisco CCNA">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>Cisco Certified Network Associate (CCNA) – 200-301</h3>
                            <p>Build your networking foundation with our CCNA study materials. Learn networking fundamentals and prepare for your certification.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- Exam Card 3 -->
                    <div class="exam-card" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="Microsoft Azure AI">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>AI-102: Designing and Implementing a Microsoft Azure AI Solution</h3>
                            <p>Master Azure AI services and solutions. Prepare for your Microsoft Azure AI certification with our expert study materials.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="exam-card" data-category="CompTIA">
                        <div class="exam-image">
                            <img src="images/exams/comptia.png" alt="CompTIA Security+">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>CompTIA Security+ (SY0-701)</h3>
                            <p>Build your cybersecurity foundation with our Security+ study materials. Learn essential security concepts and prepare for certification.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="exam-card" data-category="ISACA">
                        <div class="exam-image">
                            <img src="images/exams/isaca.png" alt="ISACA CISA">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>Certified Information Systems Auditor (CISA) - ISACA</h3>
                            <p>Master IT auditing and control with our CISA study materials. Prepare for your ISACA certification with confidence.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="exam-card hidden" data-category="ISACA">
                        <div class="exam-image">
                            <img src="images/exams/isaca.png" alt="Certified in Risk and Information Systems Control (CRISC)">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>Certified in Risk and Information Systems Control (CRISC)</h3>
                            <p>Validate your expertise in identifying and managing enterprise IT risk and implementing information systems controls with the CRISC certification.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="exam-card" data-category="AWS">
                        <div class="exam-image">
                            <img src="images/exams/aws.png" alt="AWS Cloud Practitioner">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>AWS Certified Cloud Practitioner (CLF-C02)</h3>
                            <p>Start your cloud journey with our Cloud Practitioner study materials. Learn AWS fundamentals and prepare for certification.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="exam-card" data-category="Cisco">
                        <div class="exam-image">
                            <img src="images/exams/cisco.png" alt="Cisco CCNP">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>Cisco Certified Network Professional Enterprise (CCNP Enterprise) – 350-401 ENCOR</h3>
                            <p>Advance your networking career with our CCNP study materials. Master enterprise networking concepts and prepare for certification.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="exam-card" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="Microsoft Azure AI Fundamentals">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>AI-900: Microsoft Azure AI Fundamentals</h3>
                            <p>Learn AI fundamentals with our Azure AI study materials. Start your AI journey with Microsoft certification.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>                

                    <div class="exam-card" data-category="ISACA">
                        <div class="exam-image">
                            <img src="images/exams/isaca.png" alt="ISACA CISM">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>Certified Information Security Manager (CISM) - ISACA</h3>
                            <p>Master information security management with our CISM study materials. Prepare for your ISACA certification.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="exam-card" data-category="Google">
                        <div class="exam-image">
                            <img src="images/exams/google.png" alt="Google Cloud">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>Associate Cloud Engineer - Google</h3>
                            <p>Master Google Cloud Platform with our study materials. Prepare for your Google Cloud certification.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="exam-card" data-category="Salesforce">
                        <div class="exam-image">
                            <img src="images/exams/salesforce.png" alt="Salesforce AI">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>Certified AI Associate - Salesforce</h3>
                            <p>Learn AI implementation with Salesforce. Prepare for your Salesforce AI certification with our study materials.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="exam-card" data-category="ECCouncil">
                        <div class="exam-image">
                            <img src="images/exams/eccouncil.png" alt="ECCouncil CEH">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>312-50v12: Certified Ethical Hacker v12 Exam - ECCouncil</h3>
                            <p>Master ethical hacking with our CEH study materials. Learn security testing and prepare for your certification.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="exam-card" data-category="Palo Alto">
                        <div class="exam-image">
                            <img src="images/exams/paloalto.png" alt="Palo Alto Networks">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>PCNSA: Palo Alto Networks Certified Network Security Administrator</h3>
                            <p>Master network security with Palo Alto Networks. Prepare for your PCNSA certification with our study materials.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    

                    <!-- hidden exam cards -->

                    <div class="exam-card" data-category="AWS">
                        <div class="exam-image">
                            <img src="images/exams/aws.png" alt="AWS Developer">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>AWS Certified Developer – Associate (DVA-C02)</h3>
                            <p>Master AWS development with our study materials. Learn cloud development and prepare for your certification.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="AWS">
                        <div class="exam-image">
                            <img src="images/exams/aws.png" alt="AWS Solutions Architect Professional">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>AWS Certified Solutions Architect – Professional (SAP-C02)</h3>
                            <p>Validate your advanced technical skills and experience in designing distributed applications and systems on the AWS platform.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="AWS">
                        <div class="exam-image">
                            <img src="images/exams/aws.png" alt="AWS DevOps Engineer Professional">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>AWS Certified DevOps Engineer – Professional (DOP-C02)</h3>
                            <p>Demonstrate your expertise in provisioning, operating, and managing distributed application systems on the AWS platform.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="AWS">
                        <div class="exam-image">
                            <img src="images/exams/aws.png" alt="AWS Security Specialty">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>AWS Certified Security – Specialty (SCS-C02)</h3>
                            <p>Show your ability to secure the AWS platform and manage security operations and compliance.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="AWS">
                        <div class="exam-image">
                            <img src="images/exams/aws.png" alt="AWS Advanced Networking Specialty">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>AWS Certified Advanced Networking – Specialty (ANS-C01)</h3>
                            <p>Demonstrate your skills in complex networking tasks and hybrid IT network architecture on AWS.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="AWS">
                        <div class="exam-image">
                            <img src="images/exams/aws.png" alt="AWS Machine Learning Specialty">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>AWS Certified Machine Learning – Specialty (MLS-C01)</h3>
                            <p>Validate your expertise in building, training, tuning, and deploying machine learning models on AWS.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="AWS">
                        <div class="exam-image">
                            <img src="images/exams/aws.png" alt="AWS Data Engineer Associate">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>AWS Certified Data Engineer – Associate (DEA-C01)</h3>
                            <p>Show your ability to design, build, secure, and maintain analytics solutions on AWS that are efficient, cost-effective, and secure.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="AWS">
                        <div class="exam-image">
                            <img src="images/exams/aws.png" alt="AWS AI Practitioner">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>AWS Certified AI Practitioner (AIF-C01)</h3>
                            <p>Demonstrate foundational knowledge of AI/ML concepts and AWS AI services for business solutions.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="AWS">
                        <div class="exam-image">
                            <img src="images/exams/aws.png" alt="AWS SysOps Administrator Associate">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>AWS Certified SysOps Administrator – Associate (SOA-C02)</h3>
                            <p>Demonstrate your expertise in deploying, managing, and operating workloads on AWS with the SysOps Administrator Associate certification.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- Cisco Exams -->
                    <div class="exam-card hidden" data-category="Cisco">
                        <div class="exam-image">
                            <img src="images/exams/cisco.png" alt="Cisco CBROPS">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>Understanding Cisco Cybersecurity Operations Fundamentals (CBROPS) – 200-201</h3>
                            <p>Build your cybersecurity operations knowledge and prepare for the Cisco CBROPS certification.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Cisco">
                        <div class="exam-image">
                            <img src="images/exams/cisco.png" alt="Cisco DevNet Associate">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>CiscoDevNet Associate (DEVASC) – 200-901</h3>
                            <p>Validate your skills in software development and automation for Cisco platforms.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Cisco">
                        <div class="exam-image">
                            <img src="images/exams/cisco.png" alt="Cisco ENARSI">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>Implementing Cisco Enterprise Advanced Routing and Services (ENARSI) – 300-410</h3>
                            <p>Master advanced routing and services for enterprise networks with Cisco ENARSI.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Cisco">
                        <div class="exam-image">
                            <img src="images/exams/cisco.png" alt="Cisco ENSLD">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>Designing Cisco Enterprise Networks (ENSLD) – 300-420</h3>
                            <p>Learn to design enterprise networks and prepare for the Cisco ENSLD certification.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Cisco">
                        <div class="exam-image">
                            <img src="images/exams/cisco.png" alt="Cisco ENSDWI">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>Implementing Cisco SD-WAN Solutions (ENSDWI) – 300-415</h3>
                            <p>Gain expertise in SD-WAN solutions and prepare for the Cisco ENSDWI certification.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Cisco">
                        <div class="exam-image">
                            <img src="images/exams/cisco.png" alt="Cisco ENWLSD">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>Designing Cisco Enterprise Wireless Networks (ENWLSD) – 300-425</h3>
                            <p>Design enterprise wireless networks and prepare for the Cisco ENWLSD certification.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Cisco">
                        <div class="exam-image">
                            <img src="images/exams/cisco.png" alt="Cisco ENWLSI">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>Implementing Cisco Enterprise Wireless Networks (ENWLSI) – 300-430</h3>
                            <p>Implement enterprise wireless networks and prepare for the Cisco ENWLSI certification.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Cisco">
                        <div class="exam-image">
                            <img src="images/exams/cisco.png" alt="Cisco DCACI">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>Implementing Cisco Application Centric Infrastructure (DCACI) – 300-620</h3>
                            <p>Master Cisco ACI solutions and prepare for the DCACI certification.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Cisco">
                        <div class="exam-image">
                            <img src="images/exams/cisco.png" alt="Cisco SNCF">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>Securing Networks with Cisco Firepower (SNCF) – 300-710</h3>
                            <p>Learn to secure networks with Cisco Firepower and prepare for the SNCF certification.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Cisco">
                        <div class="exam-image">
                            <img src="images/exams/cisco.png" alt="Cisco SISE">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>Implementing and Configuring Cisco Identity Services Engine (SISE) – 300-715</h3>
                            <p>Implement and configure Cisco ISE and prepare for the SISE certification.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Cisco">
                        <div class="exam-image">
                            <img src="images/exams/cisco.png" alt="Cisco ENCOR">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>Implementing Cisco Enterprise Network Core Technologies (ENCOR) – 350-401</h3>
                            <p>Master core enterprise networking technologies and prepare for the Cisco ENCOR certification.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Cisco">
                        <div class="exam-image">
                            <img src="images/exams/cisco.png" alt="Cisco SPCOR">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>Implementing and Operating Cisco Service Provider Network Core Technologies (SPCOR) – 350-501</h3>
                            <p>Implement and operate service provider core networks and prepare for the SPCOR certification.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Cisco">
                        <div class="exam-image">
                            <img src="images/exams/cisco.png" alt="Cisco DCCOR">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>Implementing and Operating Cisco Data Center Core Technologies (DCCOR) – 350-601</h3>
                            <p>Implement and operate data center core technologies and prepare for the DCCOR certification.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Cisco">
                        <div class="exam-image">
                            <img src="images/exams/cisco.png" alt="Cisco CLCOR">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>Implementing Cisco Collaboration Core Technologies (CLCOR) – 350-801</h3>
                            <p>Implement collaboration core technologies and prepare for the CLCOR certification.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Cisco">
                        <div class="exam-image">
                            <img src="images/exams/cisco.png" alt="Cisco DEVCORE">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>Developing Applications using Cisco Core Platforms and APIs (DEVCORE) – 350-901</h3>
                            <p>Develop applications using Cisco platforms and APIs and prepare for the DEVCORE certification.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Cisco">
                        <div class="exam-image">
                            <img src="images/exams/cisco.png" alt="Cisco CCDE">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>Cisco Certified Design Expert (CCDE) v3.0 – 400-007</h3>
                            <p>Demonstrate expert-level skills in network design with the Cisco CCDE certification.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- Microsoft Exams -->
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="AZ-104: Microsoft Azure Administrator">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>AZ-104: Microsoft Azure Administrator</h3>
                            <p>Manage Azure subscriptions, resources, and services as a certified Azure Administrator.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="AZ-140: Configuring and Operating Windows Virtual Desktop on Microsoft Azure">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>AZ-140: Configuring and Operating Windows Virtual Desktop on Microsoft Azure</h3>
                            <p>Configure and manage Windows Virtual Desktop environments on Azure.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="AZ-204: Developing Solutions for Microsoft Azure">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>AZ-204: Developing Solutions for Microsoft Azure</h3>
                            <p>Develop cloud-based solutions and services for Microsoft Azure.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="AZ-305: Designing Microsoft Azure Infrastructure Solutions">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>AZ-305: Designing Microsoft Azure Infrastructure Solutions</h3>
                            <p>Design secure, scalable, and reliable Azure infrastructure solutions.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="AZ-400: Microsoft Azure DevOps Solutions">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>AZ-400: Microsoft Azure DevOps Solutions</h3>
                            <p>Implement DevOps practices and solutions on Microsoft Azure.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="AZ-500: Microsoft Azure Security Technologies">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>AZ-500: Microsoft Azure Security Technologies</h3>
                            <p>Implement security controls and threat protection on Azure.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="AZ-700: Designing and Implementing Microsoft Azure Networking Solutions">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>AZ-700: Designing and Implementing Microsoft Azure Networking Solutions</h3>
                            <p>Design and implement networking solutions on Microsoft Azure.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="AZ-800: Administering Windows Server Hybrid Core Infrastructure">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>AZ-800: Administering Windows Server Hybrid Core Infrastructure</h3>
                            <p>Administer hybrid core infrastructure with Windows Server on Azure and on-premises.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="AZ-801: Configuring Windows Server Hybrid Advanced Services">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>AZ-801: Configuring Windows Server Hybrid Advanced Services</h3>
                            <p>Configure advanced hybrid services with Windows Server on Azure and on-premises.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="AZ-900: Microsoft Azure Fundamentals">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>AZ-900: Microsoft Azure Fundamentals</h3>
                            <p>Learn the basics of Azure cloud services and prepare for the fundamentals certification.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="DP-100: Designing and Implementing a Data Science Solution on Azure">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>DP-100: Designing and Implementing a Data Science Solution on Azure</h3>
                            <p>Design and implement data science solutions using Azure Machine Learning.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="DP-203: Data Engineering on Microsoft Azure">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>DP-203: Data Engineering on Microsoft Azure</h3>
                            <p>Design and implement data engineering solutions on Azure.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="DP-300: Administering Relational Databases on Microsoft Azure">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>DP-300: Administering Relational Databases on Microsoft Azure</h3>
                            <p>Administer and manage relational databases on Azure.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="DP-600: Implementing Analytics Solutions Using Microsoft Fabric">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>DP-600: Implementing Analytics Solutions Using Microsoft Fabric</h3>
                            <p>Implement analytics solutions using Microsoft Fabric.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="DP-700: Implementing Data Engineering Solutions Using Microsoft Fabric">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>DP-700: Implementing Data Engineering Solutions Using Microsoft Fabric</h3>
                            <p>Implement data engineering solutions using Microsoft Fabric.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="MB-230: Microsoft Dynamics 365 Customer Service Functional Consultant">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>MB-230: Microsoft Dynamics 365 Customer Service Functional Consultant</h3>
                            <p>Implement and manage customer service solutions in Dynamics 365.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="MB-310: Microsoft Dynamics 365 Finance Functional Consultant">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>MB-310: Microsoft Dynamics 365 Finance Functional Consultant</h3>
                            <p>Implement and manage finance solutions in Dynamics 365.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="MB-330: Microsoft Dynamics 365 Supply Chain Management">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>MB-330: Microsoft Dynamics 365 Supply Chain Management</h3>
                            <p>Implement and manage supply chain solutions in Dynamics 365.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="MB-500: Microsoft Dynamics 365: Finance and Operations Apps Developer">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>MB-500: Microsoft Dynamics 365: Finance and Operations Apps Developer</h3>
                            <p>Develop finance and operations apps for Dynamics 365.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="MB-700: Microsoft Dynamics 365: Finance and Operations Apps Solution Architect">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>MB-700: Microsoft Dynamics 365: Finance and Operations Apps Solution Architect</h3>
                            <p>Design solutions as a solution architect for Dynamics 365 finance and operations apps.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="MB-800: Microsoft Dynamics 365 Business Central Functional Consultant">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>MB-800: Microsoft Dynamics 365 Business Central Functional Consultant</h3>
                            <p>Implement and manage Business Central solutions in Dynamics 365.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="MB-820: Microsoft Dynamics 365 Business Central Developer">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>MB-820: Microsoft Dynamics 365 Business Central Developer</h3>
                            <p>Develop solutions for Business Central in Dynamics 365.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="MB-910: Microsoft Dynamics 365 Fundamentals Customer Engagement Apps (CRM)">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>MB-910: Microsoft Dynamics 365 Fundamentals Customer Engagement Apps (CRM)</h3>
                            <p>Learn the fundamentals of customer engagement apps in Dynamics 365.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="MD-102: Endpoint Administrator">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>MD-102: Endpoint Administrator</h3>
                            <p>Deploy, configure, secure, manage, and monitor devices and client applications in an enterprise environment.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="MS-102: Microsoft 365 Administrator">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>MS-102: Microsoft 365 Administrator</h3>
                            <p>Manage Microsoft 365 tenant and security, user identity, and compliance.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="MS-700: Managing Microsoft Teams">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>MS-700: Managing Microsoft Teams</h3>
                            <p>Configure, deploy, and manage Microsoft Teams for collaboration and communication.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="MS-900: Microsoft 365 Fundamentals">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>MS-900: Microsoft 365 Fundamentals</h3>
                            <p>Learn the basics of Microsoft 365 services and prepare for the fundamentals certification.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="PL-200: Microsoft Power Platform Functional Consultant">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>PL-200: Microsoft Power Platform Functional Consultant</h3>
                            <p>Configure Power Platform solutions and drive business value as a functional consultant.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="PL-300: Microsoft Power BI Data Analyst">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>PL-300: Microsoft Power BI Data Analyst</h3>
                            <p>Analyze data and deliver actionable insights using Power BI.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="PL-400: Microsoft Power Platform Developer">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>PL-400: Microsoft Power Platform Developer</h3>
                            <p>Develop solutions using Power Platform services, including Power Apps, Power Automate, and Power Virtual Agents.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="PL-500: Microsoft Power Automate RPA Developer">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>PL-500: Microsoft Power Automate RPA Developer</h3>
                            <p>Design, develop, and deploy RPA solutions using Power Automate.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="PL-600: Microsoft Power Platform Solution Architect">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>PL-600: Microsoft Power Platform Solution Architect</h3>
                            <p>Design and architect Power Platform solutions for business needs.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="PL-900: Microsoft Power Platform Fundamentals">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>PL-900: Microsoft Power Platform Fundamentals</h3>
                            <p>Learn the basics of Power Platform and its business value.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="SC-100: Microsoft Cybersecurity Architect">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>SC-100: Microsoft Cybersecurity Architect</h3>
                            <p>Design and evolve cybersecurity strategy for Microsoft solutions.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="SC-200: Microsoft Security Operations Analyst">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>SC-200: Microsoft Security Operations Analyst</h3>
                            <p>Monitor, detect, and respond to security threats using Microsoft solutions.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="SC-300: Microsoft Identity and Access Administrator">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>SC-300: Microsoft Identity and Access Administrator</h3>
                            <p>Design, implement, and operate identity and access management systems using Microsoft solutions.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="SC-400: Microsoft Information Protection Administrator">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>SC-400: Microsoft Information Protection Administrator</h3>
                            <p>Implement information protection solutions for Microsoft environments.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Microsoft">
                        <div class="exam-image">
                            <img src="images/exams/microsoft.png" alt="SC-900: Microsoft Security and Identity Fundamentals">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>SC-900: Microsoft Security and Identity Fundamentals</h3>
                            <p>Learn the basics of security, compliance, and identity in Microsoft environments.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- CompTIA Exams -->
                    <div class="exam-card hidden" data-category="CompTIA">
                        <div class="exam-image">
                            <img src="images/exams/comptia.png" alt="CompTIA A+ Certification Exam: Core 2 (220-1102)">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>CompTIA A+ Certification Exam: Core 2 (220-1102)</h3>
                            <p>Validate your skills in IT support, troubleshooting, and technical support with the CompTIA A+ Core 2 certification.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="CompTIA">
                        <div class="exam-image">
                            <img src="images/exams/comptia.png" alt="CompTIA Network+ (N10-008)">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>CompTIA Network+ (N10-008)</h3>
                            <p>Demonstrate your knowledge of networking concepts, infrastructure, and troubleshooting with the CompTIA Network+ certification.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="CompTIA">
                        <div class="exam-image">
                            <img src="images/exams/comptia.png" alt="CompTIA Network+ (N10-009)">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>CompTIA Network+ (N10-009)</h3>
                            <p>Show your expertise in networking technologies and security with the latest CompTIA Network+ exam.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="CompTIA">
                        <div class="exam-image">
                            <img src="images/exams/comptia.png" alt="CompTIA CySA+ (CS0-003)">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>CompTIA CySA+ (CS0-003)</h3>
                            <p>Validate your skills in cybersecurity analytics, threat detection, and response with the CompTIA CySA+ certification.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="CompTIA">
                        <div class="exam-image">
                            <img src="images/exams/comptia.png" alt="CompTIA Cloud+ (CV0-003)">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>CompTIA Cloud+ (CV0-003)</h3>
                            <p>Demonstrate your expertise in cloud infrastructure, deployment, and security with the CompTIA Cloud+ certification.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="CompTIA">
                        <div class="exam-image">
                            <img src="images/exams/comptia.png" alt="CompTIA PenTest+ Certification Exam (PT0-002)">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>CompTIA PenTest+ Certification Exam (PT0-002)</h3>
                            <p>Show your skills in penetration testing and vulnerability assessment with the CompTIA PenTest+ certification.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="CompTIA">
                        <div class="exam-image">
                            <img src="images/exams/comptia.png" alt="CompTIA Linux+ (XK0-005)">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>CompTIA Linux+ (XK0-005)</h3>
                            <p>Validate your skills in Linux system administration and troubleshooting with the CompTIA Linux+ certification.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="CompTIA">
                        <div class="exam-image">
                            <img src="images/exams/comptia.png" alt="CompTIA Advanced Security Practitioner (CASP+) (CAS-004)">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>CompTIA Advanced Security Practitioner (CASP+) (CAS-004)</h3>
                            <p>Demonstrate advanced skills in enterprise security, risk management, and architecture with the CASP+ certification.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="CompTIA">
                        <div class="exam-image">
                            <img src="images/exams/comptia.png" alt="CompTIA Project+ (PK0-005)">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>CompTIA Project+ (PK0-005)</h3>
                            <p>Show your project management skills and knowledge with the CompTIA Project+ certification.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- Google Cloud Exams -->
                    <div class="exam-card hidden" data-category="Google">
                        <div class="exam-image">
                            <img src="images/exams/google.png" alt="Professional Data Engineer - Google">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3> Google Professional Data Engineer</h3>
                            <p>Design, build, operationalize, secure, and monitor data processing systems with Google Cloud.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Google">
                        <div class="exam-image">
                            <img src="images/exams/google.png" alt="Professional Cloud Developer - Google">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3> Google Professional Cloud Developer</h3>
                            <p>Build scalable and highly available applications using Google Cloud services and best practices.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Google">
                        <div class="exam-image">
                            <img src="images/exams/google.png" alt="Professional Cloud DevOps Engineer - Google">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3> Google Professional Cloud DevOps Engineer</h3>
                            <p>Implement site reliability engineering principles and manage service performance on Google Cloud.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Google">
                        <div class="exam-image">
                            <img src="images/exams/google.png" alt="Professional Cloud Security Engineer - Google">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3> Google Professional Cloud Security Engineer</h3>
                            <p>Design and implement secure infrastructure on Google Cloud and ensure compliance.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Google">
                        <div class="exam-image">
                            <img src="images/exams/google.png" alt="Professional Cloud Network Engineer - Google">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3> Google Professional Cloud Network Engineer</h3>
                            <p>Design, implement, and manage network architectures on Google Cloud.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Google">
                        <div class="exam-image">
                            <img src="images/exams/google.png" alt="Professional Machine Learning Engineer - Google">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3> Google Professional Machine Learning Engineer</h3>
                            <p>Design, build, and productionize ML models to solve business challenges using Google Cloud.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Google">
                        <div class="exam-image">
                            <img src="images/exams/google.png" alt="Cloud Digital Leader - Google">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3> Google Cloud Digital Leader</h3>
                            <p>Demonstrate knowledge of Google Cloud services and digital transformation principles.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Google">
                        <div class="exam-image">
                            <img src="images/exams/google.png" alt="Professional Cloud Database Engineer - Google">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3> Google Professional Cloud Database Engineer</h3>
                            <p>Design, manage, and secure scalable database solutions on Google Cloud.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Google">
                        <div class="exam-image">
                            <img src="images/exams/google.png" alt="Professional Google Workspace Administrator - Google">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3> Google Professional Google Workspace Administrator</h3>
                            <p>Manage Google Workspace core services and users for organizational productivity and security.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- Salesforce Exams -->
                    <div class="exam-card hidden" data-category="Salesforce">
                        <div class="exam-image">
                            <img src="images/exams/salesforce.png" alt="Salesforce Certified Data Cloud Consultant">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>Salesforce Certified Data Cloud Consultant</h3>
                            <p>Demonstrate your expertise in implementing and managing Salesforce Data Cloud solutions for organizations.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="exam-card hidden" data-category="Salesforce">
                        <div class="exam-image">
                            <img src="images/exams/salesforce.png" alt="Salesforce Certified AI Specialist">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>Salesforce Certified AI Specialist</h3>
                            <p>Show your skills in designing, implementing, and managing AI solutions within the Salesforce ecosystem.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- ECCouncil Exams -->
                    <div class="exam-card hidden" data-category="ECCouncil">
                        <div class="exam-image">
                            <img src="images/exams/eccouncil.png" alt="ECCouncil 312-50v13: Certified Ethical Hacker v13">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>ECCouncil 312-50v13: Certified Ethical Hacker v13</h3>
                            <p>Demonstrate your skills in ethical hacking, penetration testing, and cybersecurity with the latest CEH v13 certification from ECCouncil.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- Palo Alto Networks Exams -->
                    <div class="exam-card hidden" data-category="Palo Alto">
                        <div class="exam-image">
                            <img src="images/exams/paloalto.png" alt="PCNSE: Palo Alto Networks Certified Network Security Engineer">
                            <div class="exam-label">Certification</div>
                        </div>
                        <div class="exam-content">
                            <h3>PCNSE: Palo Alto Networks Certified Network Security Engineer</h3>
                            <p>Validate your knowledge and skills in designing, deploying, configuring, maintaining, and troubleshooting Palo Alto Networks security platforms.</p>
                            <a href="coming-soon.php" class="view-guide">View Exam Guide <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- ------------
                     ----------------
                     Load More Button 
                     -----------------
                     ------------------->
                    <div></div>
                    <div></div>
                    <div class="load-more-container text-center">
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
                <a href="contact.php" class="contact-support-btn">Contact Support</a>
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
                            card.style.display = 'block';
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
                                card.style.display = 'block';
                                card.classList.remove('hidden');
                            } else {
                                card.style.display = 'none';
                            }
                        });
                        loadMoreBtn.style.display = 'none';
                        // Update showing count for filtered category
                        const showingCount = document.querySelector('.showing-count');
                        const totalVisible = Array.from(examCards).filter(card => card.style.display === 'block').length;
                        showingCount.textContent = `Showing ${totalVisible} ${selectedCategory} exam guides`;
                    }
                });
            });
        });
    </script>

<?php include 'includes/footer.php'; ?> 
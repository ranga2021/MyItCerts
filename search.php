<?php
// Initialize the session if needed
session_start();

// Get the search query
$searchQuery = isset($_GET['q']) ? htmlspecialchars($_GET['q']) : '';

// Placeholder for search results
$search_results = [];

// If there's a search query, perform the search
if (!empty($searchQuery)) {
    // For now, we'll just use placeholder data
    $search_results = [
        [
            'exam_name' => 'Sample Exam 1',
            'class_code' => 'C715',
            'description' => 'This is a sample exam description'
        ],
        [
            'exam_name' => 'Sample Exam 2',
            'class_code' => 'D076',
            'description' => 'Another sample exam description'
        ]
    ];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results - <?php echo $searchQuery; ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <!-- Search Results Section -->
    <section class="exams-listing-section">
        <div class="container-fluid">
            <div class="showing-count">Search Results for "<?php echo $searchQuery; ?>"</div>
            
            <div class="exams-content">
                <!-- Categories Sidebar -->
                <div class="categories-sidebar">
                    

                    <div class="help-box">
                        <h3>Need Help?</h3>
                        <p>Our study experts are ready to assist you</p>
                        <a href="contact" class="btn btn-primary">Contact support</a>
                    </div>
                </div>

                <!-- Search Results Grid -->
                <div id="searchResults" class="exams-grid">
                    <!-- Results will be loaded here -->
                </div>
            </div>

            <div class="help-box-mobile">
                <h4>Need Help?</h4>
                <p>Our study experts are ready to assist you</p>
                <a href="contact" class="contact-support-btn">Contact Support</a>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchQuery = new URLSearchParams(window.location.search).get('q');
            const resultsContainer = document.getElementById('searchResults');

            if (!searchQuery) {
                resultsContainer.innerHTML = '<div class="no-results">Please enter a search term</div>';
                return;
            }

            // Show loading state
            resultsContainer.innerHTML = '<div class="loading">Loading results...</div>';

            // Fetch search results
            fetch(`api/search.php?q=${encodeURIComponent(searchQuery)}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.error) {
                        throw new Error(data.message);
                    }

                    const results = data.results;
                    
                    if (results.length === 0) {
                        resultsContainer.innerHTML = `
                            <div class="no-results">
                                <h2>No results found</h2>
                                <p>Try different keywords or check your spelling</p>
                            </div>`;
                        return;
                    }

                    // Display results
                    resultsContainer.innerHTML = results.map(exam => `
                        <div class="exam-card">
                            <div class="exam-image">
                                <img src="${exam.image || 'images/default-exam.jpg'}" alt="${exam.title}">
                                <div class="exam-label">Certification</div>
                            </div>
                            <div class="exam-content">
                                <h3>${exam.title}</h3>
                                ${exam.price ? `
                                    <div class="exam-info-row">
                                        <span class="exam-code">Price</span>
                                        <span class="exam-price">${exam.price}</span>
                                    </div>` : ''}
                                <p>${exam.description}</p>
                                <div class="exam-meta">
                                    <span class="category">${exam.category}</span>
                                </div>
                                <a href="${exam.link}" class="view-guide" target="_blank">View Exam <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    `).join('');

                    // Add category filtering functionality
                    const examCards = document.querySelectorAll('.exam-card');
                    const categoryList = document.querySelectorAll('.category-list li');

                    // Add data-category attribute to exam cards
                    examCards.forEach(card => {
                        const category = card.querySelector('.category').textContent;
                        card.setAttribute('data-category', category);
                    });

                    // Add click event listeners to category items
                    categoryList.forEach(category => {
                        category.addEventListener('click', () => {
                            const selectedCategory = category.querySelector('span').textContent.trim();
                            
                            // Remove active class from all categories
                            categoryList.forEach(cat => cat.classList.remove('active'));
                            // Add active class to selected category
                            category.classList.add('active');
                            
                            // Filter exam cards
                            examCards.forEach(card => {
                                const cardCategory = card.getAttribute('data-category');
                                if (selectedCategory === 'All' || cardCategory === selectedCategory) {
                                    card.style.display = 'block';
                                } else {
                                    card.style.display = 'none';
                                }
                            });
                        });
                    });
                })
                .catch(error => {
                    console.error('Error:', error);
                    resultsContainer.innerHTML = `
                        <div class="error-message">
                            <h2>Error loading search results</h2>
                            <p>${error.message}</p>
                        </div>`;
                });
        });
    </script>
</body>
</html> 
<?php
// Initialize the session if needed
session_start();

// Get the search query
$search_query = isset($_GET['q']) ? htmlspecialchars($_GET['q']) : '';

// You would typically connect to your database here
// For example:
/*
$db_host = 'localhost';
$db_user = 'your_username';
$db_pass = 'your_password';
$db_name = 'your_database';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
*/

// Placeholder for search results
$search_results = [];

// If there's a search query, perform the search
if (!empty($search_query)) {
    // This is where you would implement your actual search logic
    // For example:
    /*
    $sql = "SELECT * FROM exams WHERE 
            exam_name LIKE ? OR 
            class_code LIKE ? OR 
            description LIKE ?";
    
    $stmt = $conn->prepare($sql);
    $search_term = "%{$search_query}%";
    $stmt->bind_param("sss", $search_term, $search_term, $search_term);
    $stmt->execute();
    $result = $stmt->get_result();
    
    while ($row = $result->fetch_assoc()) {
        $search_results[] = $row;
    }
    */
    
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
    <title>Search Results - OA Exams</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .search-results {
            padding: 40px 0;
        }
        
        .search-result-item {
            background: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .search-result-item h3 {
            color: var(--primary-color);
            margin-bottom: 10px;
        }
        
        .class-code {
            display: inline-block;
            background: var(--primary-color);
            color: white;
            padding: 5px 10px;
            border-radius: 3px;
            margin-bottom: 10px;
        }
        
        .no-results {
            text-align: center;
            padding: 40px;
            color: #666;
        }
    </style>
</head>
<body>
    <?php include 'index.php'; // This will include the header and navigation ?>
    
    <section class="search-results">
        <div class="container">
            <h2>Search Results for: "<?php echo $search_query; ?>"</h2>
            
            <?php if (empty($search_results)): ?>
                <div class="no-results">
                    <i class="fas fa-search" style="font-size: 3rem; margin-bottom: 20px;"></i>
                    <h3>No results found</h3>
                    <p>Try different keywords or check your spelling</p>
                </div>
            <?php else: ?>
                <?php foreach ($search_results as $result): ?>
                    <div class="search-result-item">
                        <h3><?php echo $result['exam_name']; ?></h3>
                        <div class="class-code"><?php echo $result['class_code']; ?></div>
                        <p><?php echo $result['description']; ?></p>
                        <a href="#" class="contact-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>
    
    <script src="js/main.js"></script>
</body>
</html> 
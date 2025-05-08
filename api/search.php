<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Set content type to JSON
header('Content-Type: application/json');

// Sample exam data from exams.php
$exams = [
    [
        'id' => 1,
        'title' => 'WGU C952 – Computer Architecture OA',
        'description' => '250 WGU C952 OA Questions and Answers – Pass the Exam in Less Than 1 Week! Are you getting prepared...',
        'category' => 'Computer Science',
        'class_code' => 'C952',
        'image' => 'images/exams/c952.png'
    ],
    [
        'id' => 2,
        'title' => 'WGU C954 – Information Technology Management',
        'description' => '250 WGU C954 OA Questions and Answers – Pass the Exam in Less Than 1 Week! Are you getting prepared...',
        'category' => 'Computer Science',
        'class_code' => 'C954',
        'image' => 'images/exams/e1.png'
    ],
    [
        'id' => 3,
        'title' => 'WGU C207 – Data-Driven Decision Making OA',
        'description' => '250 WGU C207 OA Questions and Answers – Pass the Exam in Less Than 1 Week! Are you getting prepared...',
        'category' => 'Business',
        'class_code' => 'C207',
        'image' => 'images/exams/e1.png'
    ],
    [
        'id' => 4,
        'title' => 'WGU C211 – Global Economics for Managers',
        'description' => 'Comprehensive study guide for Global Economics course',
        'category' => 'Business',
        'class_code' => 'C211',
        'image' => 'images/exams/e1.png'
    ],
    [
        'id' => 5,
        'title' => 'WGU C213 – WGU Accounting for Decision Makers',
        'description' => 'Complete guide for Accounting course',
        'category' => 'Business',
        'class_code' => 'C213',
        'image' => 'images/exams/e1.png'
    ],
    [
        'id' => 6,
        'title' => 'WGU C214 – Financial Management',
        'description' => 'Study materials for Financial Management course',
        'category' => 'Business',
        'class_code' => 'C214',
        'image' => 'images/exams/e1.png'
    ],
    [
        'id' => 7,
        'title' => 'WGU C232 – Introduction to Human Resource Management',
        'description' => 'HR Management course study guide',
        'category' => 'Social Science',
        'class_code' => 'C232',
        'image' => 'images/exams/e1.png'
    ],
    [
        'id' => 8,
        'title' => 'WGU C233 – Employment Law OA',
        'description' => 'Employment Law course materials',
        'category' => 'Social Science',
        'class_code' => 'C233',
        'image' => 'images/exams/e1.png'
    ],
    [
        'id' => 9,
        'title' => 'WGU C234 – Workforce Planning: Recruitment and Selection OA',
        'description' => 'Workforce Planning course guide',
        'category' => 'Social Science',
        'class_code' => 'C234',
        'image' => 'images/exams/e1.png'
    ],
    [
        'id' => 10,
        'title' => 'WGU C236 – Compensation and Benefits OA',
        'description' => 'Compensation and Benefits course materials',
        'category' => 'Social Science',
        'class_code' => 'C236',
        'image' => 'images/exams/e1.png'
    ],
    [
        'id' => 11,
        'title' => 'WGU C237 – Taxation I',
        'description' => 'Taxation course study guide',
        'category' => 'Business',
        'class_code' => 'C237',
        'image' => 'images/exams/e1.png'
    ],
    [
        'id' => 12,
        'title' => 'WGU C238 – Taxation II',
        'description' => 'Advanced Taxation course materials',
        'category' => 'Business',
        'class_code' => 'C238',
        'image' => 'images/exams/e1.png'
    ],
    [
        'id' => 13,
        'title' => 'WGU C239 – Business Law',
        'description' => 'Business Law course study guide',
        'category' => 'Business',
        'class_code' => 'C239',
        'image' => 'images/exams/e1.png'
    ],
    [
        'id' => 14,
        'title' => 'WGU C240 – Business Ethics',
        'description' => 'Business Ethics course materials',
        'category' => 'Business',
        'class_code' => 'C240',
        'image' => 'images/exams/e1.png'
    ],
    [
        'id' => 15,
        'title' => 'WGU C241 – Business Strategy',
        'description' => 'Business Strategy course guide',
        'category' => 'Business',
        'class_code' => 'C241',
        'image' => 'images/exams/e1.png'
    ],
    [
        'id' => 16,
        'title' => 'WGU C242 – Business Communication',
        'description' => 'Business Communication course materials',
        'category' => 'Business',
        'class_code' => 'C242',
        'image' => 'images/exams/e1.png'
    ],
    [
        'id' => 17,
        'title' => 'WGU C243 – Business Statistics',
        'description' => 'Business Statistics course study guide',
        'category' => 'Math',
        'class_code' => 'C243',
        'image' => 'images/exams/e1.png'
    ],
    [
        'id' => 18,
        'title' => 'WGU C244 – Business Calculus',
        'description' => 'Business Calculus course materials',
        'category' => 'Math',
        'class_code' => 'C244',
        'image' => 'images/exams/e1.png'
    ],
    [
        'id' => 19,
        'title' => 'WGU C245 – Business Algebra',
        'description' => 'Business Algebra course guide',
        'category' => 'Math',
        'class_code' => 'C245',
        'image' => 'images/exams/e1.png'
    ],
    [
        'id' => 20,
        'title' => 'WGU C246 – Business Geometry',
        'description' => 'Business Geometry course materials',
        'category' => 'Math',
        'class_code' => 'C246',
        'image' => 'images/exams/e1.png'
    ]
];

try {
    // Get search query from URL parameter
    $query = isset($_GET['q']) ? strtolower(trim($_GET['q'])) : '';
    
    // If query is empty, return empty results
    if (empty($query)) {
        echo json_encode(['results' => []]);
        exit;
    }
    
    // Filter exams based on search query
    $results = array_filter($exams, function($exam) use ($query) {
        return (
            stripos(strtolower($exam['title']), $query) !== false ||
            stripos(strtolower($exam['description']), $query) !== false ||
            stripos(strtolower($exam['category']), $query) !== false ||
            stripos(strtolower($exam['class_code']), $query) !== false
        );
    });
    
    // Sort results by relevance (exact matches first, then partial matches)
    usort($results, function($a, $b) use ($query) {
        $aTitle = strtolower($a['title']);
        $bTitle = strtolower($b['title']);
        $aClassCode = strtolower($a['class_code']);
        $bClassCode = strtolower($b['class_code']);
        
        // Exact class code match gets highest priority
        if ($aClassCode === $query && $bClassCode !== $query) return -1;
        if ($bClassCode === $query && $aClassCode !== $query) return 1;
        
        // Exact title match gets second priority
        if ($aTitle === $query && $bTitle !== $query) return -1;
        if ($bTitle === $query && $aTitle !== $query) return 1;
        
        // Starts with query gets third priority
        if (strpos($aTitle, $query) === 0 && strpos($bTitle, $query) !== 0) return -1;
        if (strpos($bTitle, $query) === 0 && strpos($aTitle, $query) !== 0) return 1;
        
        // Otherwise sort alphabetically
        return strcmp($aTitle, $bTitle);
    });
    
    // Return results as JSON
    echo json_encode(['results' => array_values($results)]);
    
} catch(Exception $e) {
    // Log the error
    error_log("Search error: " . $e->getMessage());
    
    // Return error response
    http_response_code(500);
    echo json_encode([
        'error' => true,
        'message' => 'An error occurred while processing your request'
    ]);
}
?> 
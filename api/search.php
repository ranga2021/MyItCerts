<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Set content type to JSON
header('Content-Type: application/json');

// AI certification catalog (kept in sync with exams.php and aiexams.html)
$exams = [
    [
        'id' => 'ai-900',
        'title' => 'Microsoft Certified: Azure AI Fundamentals (AI-900)',
        'description' => 'Learn AI fundamentals with Microsoft Azure and build a responsible AI foundation.',
        'category' => 'Microsoft AI',
        'image' => 'images/blogs/AI900.png',
        'link' => 'AI900'
    ],
    [
        'id' => 'ai-102',
        'title' => 'Microsoft Certified: Azure AI Engineer Associate (AI-102)',
        'description' => 'Design and deploy Azure AI solutions with hands-on guidance.',
        'category' => 'Microsoft AI',
        'image' => 'images/blogs/AI102.png',
        'link' => 'AI102.php'
    ],
    [
        'id' => 'aws-aif-c01',
        'title' => 'AWS Certified AI Practitioner (AIF-C01)',
        'description' => 'Validate foundational AI/ML knowledge with AWS services.',
        'category' => 'AWS AI',
        'image' => 'images/blogs/AIF-C01.png',
        'link' => 'AIF-C01'
    ],
    [
        'id' => 'aws-gdp-c01',
        'title' => 'AWS Certified Generative AI Developer - Professional (GDP-C01)',
        'description' => 'Build production-ready generative AI apps on AWS.',
        'category' => 'AWS AI',
        'image' => 'images/blogs/GDP-C01.png',
        'link' => 'GDP-C01'
    ],
    [
        'id' => 'google-genai',
        'title' => 'Generative AI Leader (GenAI)',
        'description' => 'Lead AI adoption and strategy with Google Cloud expertise.',
        'category' => 'Google AI',
        'image' => 'images/exams/google.png',
        'link' => 'coming-soon'
    ],
    [
        'id' => 'isaca-aaia',
        'title' => 'ISACA Advanced in AI Audit (AAIA)',
        'description' => 'Master AI governance, assurance, and audit readiness.',
        'category' => 'ISACA AI',
        'image' => 'images/blogs/AAIA.png',
        'link' => 'AAIA'
    ],
    [
        'id' => 'isaca-aaism',
        'title' => 'ISACA Advanced in AI Security Management (AAISM)',
        'description' => 'Build secure, governed AI programs with ISACA best practices.',
        'category' => 'ISACA AI',
        'image' => 'images/blogs/AAISM.png',
        'link' => 'AAISM'
    ],
    [
        'id' => 'nvidia-genl',
        'title' => 'NVIDIA-Certified Associate: Generative AI LLMs (NCA-GENL)',
        'description' => 'Prove your mastery of LLM pipelines with NVIDIA.',
        'category' => 'NVIDIA AI',
        'image' => 'images/blogs/AI-LLMS.png',
        'link' => 'AI-LLMS'
    ],
    [
        'id' => 'nvidia-aiio',
        'title' => 'NCA-AIIO - NVIDIA-Certified Associate: AI Infrastructure and Operations',
        'description' => 'Validate your expertise in AI infrastructure, data center management, and NVIDIA AI solutions.',
        'category' => 'NVIDIA AI',
        'image' => 'images/blogs/NCA-AIIO.png',
        'link' => 'NCA-AIIO'
    ],
    [
        'id' => 'nvidia-genm',
        'title' => 'NVIDIA-Certified Associate: Multimodal Generative AI (NCA-GENM)',
        'description' => 'Demonstrate expertise in multimodal generative AI systems.',
        'category' => 'NVIDIA AI',
        'image' => 'images/exams/logo4.png',
        'link' => 'coming-soon'
    ],
    [
        'id' => 'istqb-ctai',
        'title' => 'ISTQB CT-AI - Certified Tester AI Testing',
        'description' => 'Validate your expertise in testing AI-based systems with ISTQB.',
        'category' => 'ISTQB AI Testing',
        'image' => 'images/blogs/CT-AI.png',
        'link' => 'CT-AI'
    ],
    [
        'id' => 'pmi-cpmai',
        'title' => 'PMI-CPMAI - PMI Certified Professional in Managing AI',
        'description' => 'Lead AI programs and projects with the CPMAI methodology. Master AI project management.',
        'category' => 'PMI AI',
        'image' => 'images/blogs/PMI-CPMAI.png',
        'link' => 'PMI-CPMAI'
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
            stripos(strtolower($exam['category']), $query) !== false
        );
    });
    
    // Sort results by relevance (exact matches first, then partial matches)
    usort($results, function($a, $b) use ($query) {
        $aTitle = strtolower($a['title']);
        $bTitle = strtolower($b['title']);
        
        // Exact title match gets highest priority
        if ($aTitle === $query && $bTitle !== $query) return -1;
        if ($bTitle === $query && $aTitle !== $query) return 1;
        
        // Starts with query gets second priority
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
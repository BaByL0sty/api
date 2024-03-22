<?php
// Enable CORS
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header("Content-Type: application/json");

// Handle the request
$request = $_SERVER['REQUEST_URI'];
echo "<pre>";
print_r($request);
echo "</pre>";

// Route requests to appropriate actions
switch ($request) {
    case '/api/data':
        // Example: Retrieve data
        $data = array();
        for ($i = 0; $i < 10; $i++) {
            $data[$i] = array(
                'id' => $i,
                'name' => 'Item Api Get ' . $i,
                'email' => 'Email ' . $i
            );
        }
        echo json_encode($data);
        break;
    default:
        http_response_code(404);
        echo json_encode(['error' => 'Not Found']);
        break;
}

// Example function to retrieve data
function getData() {
    // Replace this with your logic to retrieve data
    return ['message' => 'This is your data'];
}

// Example function to save data
function saveData() {
    // Replace this with your logic to save data
    return ['message' => 'Data saved successfully'];
}
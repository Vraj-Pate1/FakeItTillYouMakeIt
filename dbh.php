<?php

// Get the search query from the form
$search_query = $_GET['q'];

// Define an array of the seven pages to search
$pages = array(
  'index.php',
  'About_us.php',
  'homes.php',
  'vehicles.php',
  'clothing.php',
  'catalog.php',
  'contact.php'
);

// Define an empty array to store the search results
$results = array();

// Loop through each page and search for the query
foreach ($pages as $page) {
  // Get the content of the page
  $content = file_get_contents($page);

  // Search the content for the query
  if (strpos($content, $search_query) !== false) {
    // If the query is found, add the page to the results array
    $results[] = $page;
  }
}

// Display the search results to the user
if (count($results) > 0) {
  echo "<h2>Search results for '$search_query':</h2>";
  foreach ($results as $result) {
    echo "<a href='$result'>$result</a><br>";
  }
} else {
  echo "<p>No results found for '$search_query'.</p>";
}
?>
<?php /* Template Name: Custom-Template */ ?>
<?php get_header();

global $wpdb;
$results = $wpdb->get_results("SELECT * FROM people");

if (!empty($results)) {
    foreach ($results as $row) {
        echo "<p>Column 1: {$row->Name}</p>";
        echo "<p>Column 2: {$row->Age}</p>";
        echo "<p>Column 3: {$row->Job}</p>";
        echo "<p>Column 4: {$row->Car}</p>";
    }
} else {
    echo "<p>No data found</p>";
}

//var_dump($results);
get_footer();
?>
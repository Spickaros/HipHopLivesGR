<?php
include('includes/dbh.inc.php');

if (isset($_POST["request"])) {
    $currentDate = date('Y-m-d');

    $location_filter = $_POST["request"];
    $sql = "SELECT * FROM lives WHERE (date >= '$currentDate' OR (location = 'Tour' AND endDate >= '$currentDate'))";
    
    if ($location_filter !== "All") {
        $sql .= " AND location IN ('$location_filter')";
    }
    
    $statement = $conn->prepare($sql);
    $statement->execute();

    $result = $statement->get_result();
    $total_row = $result->num_rows;
    if ($total_row > 0) {
        // Initialize the output variable
        $output = '';
        while ($row = $result->fetch_assoc()) {
            // Generate HTML for each filtered live event
            $output .= '<div class="images">';
            $output .= '<a href="' . $row["link"] . '" target="_blank" class="lives-link">';
            $output .= '<img src="img/' . $row["images"] . '" class="img-lives">';
            $output .= '<p class="desc">' . $row["artist"] . '-' . $row["location"] . '</p>';
            
            setlocale(LC_TIME, "el_GR.utf8"); // Set Greek locale
            $location = $row["location"];
            
            if ($location == "Tour") {
                $beginDate = $row["beginDate"];
                $endDate = $row["endDate"];
                $formatter = new IntlDateFormatter("el_GR.utf8", IntlDateFormatter::LONG, IntlDateFormatter::NONE);
                
                $output .= '<ion-icon name="calendar-outline" class="tour-date-icon"></ion-icon>';
                $output .= '<div class="tour-date">';
                $output .= $formatter->format(strtotime($beginDate)) . ' - ' . $formatter->format(strtotime($endDate));
                $output .= '</div>';
            } else {
                $date = $row["date"];
                $formatter = new IntlDateFormatter("el_GR.utf8", IntlDateFormatter::LONG, IntlDateFormatter::NONE);
                
                $output .= '<ion-icon name="calendar-outline" class="date-icon"></ion-icon>';
                $output .= '<div class="date">';
                $output .= $formatter->format(strtotime($date));
                $output .= '</div>';
            }
            
            $output .= '</a>';
            $output .= '</div>';
        }
        echo $output; // Output the generated HTML
    } else {
        ?> <p style='color:white; font-size:large;'><?php echo "Δεν υπάρχουν event για αυτή την τοποθεσία.";?></p> 
        <?php
    }
}
?>
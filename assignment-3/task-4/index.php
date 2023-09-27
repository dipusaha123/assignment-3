<?php

$studentGrades = array(
    array("Math" => 85, "English" => 78, "Science" => 92),
    array("Math" => 88, "English" => 90, "Science" => 87),
    array("Math" => 94, "English" => 86, "Science" => 91)
);


function calculateAverageGrades($grades) {
    foreach ($grades as $index => $student) {
        $total = array_sum($student);
        $average = $total / count($student);
        
        echo "Student " . ($index + 1) . " - Average Grade: " . $average . "\n";
    }
}

calculateAverageGrades($studentGrades);
?>

<?php 

    $cgpa = (float)readline("Please enter your cgpa: ");
    

    function getStudentGrade($cgpa) {
        if ($cgpa >= 4.0) {
            return "Excellent(A)";
        } 
        elseif ($cgpa <= 3.5 && $cgpa < 4.0) {
            return "Very Good(B+)";
        } 
        elseif ($cgpa <= 3.0 && $cgpa < 3.5) {
            return "Good(B)";
        } 
        elseif ($cgpa <= 2.5 && $cgpa < 3.0) {
            return "Fair(C+)";
        } 
        elseif ($cgpa <= 2.0 && $cgpa < 2.5) {
            return "Pass(C)";
        } else {
            return "Fail(F)";
        }
    }

    $studentGrade = getStudentGrade($cgpa);
    echo "Student CGPA: ". $cgpa."\n";
    echo "Student Grade: ". $studentGrade;


?>
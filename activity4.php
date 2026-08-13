<?php

// Ace

/*
Basic Information:
Name: Roan Ace C Santos
Age: 19
Address: San Marcos, Calumpit, Bulacan
Course: Bachelor of Science in Information Systems (BSIS)
Section: 2-B
School: Bulacan Polytechnic College (BPC)
Address: San Marcos, Calumpit, Bulacan
*/

$me = [
    "name" => "Roan Ace C Santos",
    "age" => 19,
    "address" => "San Marcos, Calumpit, Bulacan",
    "hobbies" => "Traveling,Fishing",
    "dream_job" => "Web Developer",
    "course" => "BSIS",
    "school" => "Bulacan Polytechnic College (BPC)"
];


echo "<h1>My Personal Information</h1>";

echo "<h2>Hello! I'm " . $me["name"] . "</h2>";

echo "<p><strong>Name:</strong> " . $me["name"] . "</p>";
echo "<p><strong>Age:</strong> " . $me["age"] . "</p>";
echo "<p><strong>Address:</strong> " . $me["address"] . "</p>";
echo "<p><strong>Hobbies:</strong> " . $me["hobbies"] . "</p>";
echo "<p><strong>Dream Job:</strong> " . $me["dream_job"] . "</p>";
echo "<p><strong>Course:</strong> " . $me["course"] . "</p>";
echo "<p><strong>School:</strong> " . $me["school"] . "</p>";

echo "<hr>";

print "I am <strong>" . $me["name"] . "</strong>, a <strong>" . $me["course"] . "</strong> student of <strong>" . $me["school"] . "</strong>.";

?>

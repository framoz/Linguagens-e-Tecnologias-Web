<?php
// PHP code begins with <?php tag - this tells the server this is PHP code to be processed

// ----- GET Parameters -----
// $_GET is a special PHP "superglobal" array that contains all parameters passed in the URL
// For example, in "sum2.php?num1=2&num2=5", $_GET['num1'] would be 2 and $_GET['num2'] would be 5

// The following lines check if the parameters exist and assign them to variables
// isset() checks if a variable is set (exists and is not NULL)
// The ternary operator (? :) works like this: condition ? value_if_true : value_if_false
$num1 = isset($_GET['num1']) ? $_GET['num1'] : 0; // If num1 parameter exists, use it; otherwise use 0
$num2 = isset($_GET['num2']) ? $_GET['num2'] : 0; // If num2 parameter exists, use it; otherwise use 0

// ----- Calculation -----
// PHP can perform mathematical operations directly
// + is the addition operator in PHP (just like in most languages)
$sum = $num1 + $num2; // Calculate the sum and store it in the $sum variable

// ----- PHP and HTML integration -----
// At this point, we've finished our PHP logic and are about to output HTML
// PHP can be mixed with HTML - the server processes PHP and sends only HTML to the browser
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum Calculator</title>
</head>
<body>
    <h1>Sum Calculator</h1>
    
    <!-- 
    We can embed PHP inside HTML using <?php ?> tags
    echo is a PHP command that outputs (prints) content to the page
    htmlspecialchars() is a security function that prevents XSS attacks by converting
    special characters to their HTML entities (e.g., < becomes &lt;)
    -->
    <p>The sum of <?php echo htmlspecialchars($num1); ?> and <?php echo htmlspecialchars($num2); ?> is: <?php echo htmlspecialchars($sum); ?></p>
    
    <!-- This is a simple link back to our form page -->
    <p><a href="form2.html">Back to calculator form</a></p>
</body>
</html>

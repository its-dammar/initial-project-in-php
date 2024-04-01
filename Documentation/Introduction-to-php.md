


Backend Web Development (Server side | Business Logic)
Programming Languages: PHP, Python, Ruby, Java, and Node.js etc.

It is the process of creating and maintaining the server-side logic of a web application/software system.
Handels tasks such as data storage, retrival, and processing and communicate with cliend side application.
The backend code interact with databases, APIs, and other externa; services.

Backend Developers are responsible for optimizing the performance and scablebility of the server-side code.
Implementation of APIs.


PHP: Hypertext Preprocessor
Introduction:
PHP is a popular server-side scripting language used for web development. It is embedded within HTML code and executed on the server, generating dynamic web pages. Here are some key features of PHP:

1. **Easy to learn:** PHP has a simple and intuitive syntax, making it accessible to beginners.

2. **Platform independence:** PHP runs on various operating systems, including Windows, macOS, and Linux.

3. **Extensive library support:** PHP has a vast collection of built-in functions and libraries, allowing developers to accomplish complex tasks with ease.

4. **Database integration:** PHP seamlessly integrates with popular databases like MySQL, PostgreSQL, and Oracle, enabling efficient data management.

5. **Scalability**: PHP can handle high traffic websites and scale well with the growth of your application.

6. **Frameworks and CMS:** PHP has a rich ecosystem of frameworks (e.g., Laravel, Symfony) and content management systems (e.g., WordPress, Drupal, joomula) that simplify web development. 

To get started with PHP, 
You need a web server with PHP support (e.g., Apache, Nginx) and a PHP interpreter installed. You can embed PHP code within HTML using the 

syntax:

`<?php` 
// code
 `?>` 
 

Example:
<?php
    // PHP code goes here
    echo "Hello, World!";
?>

variable:
<?php
$x= 30;
$y= 30;
$z= $x + $y;

echo $z;

 ?>

Requirements:
- Server (local server: localhost)
  - Wampp server ( Windows)
    - MYSQL : is a database management system
    - Apache : Local server
    - MariyaDB: database
  
  - XAMPP server (Windows, Mac, Linux)
  - Lamp (Mac, Linux)
  - Mamp (Linux)



_________________________________________________________________________________

Here are some of the key features of PHP:

**Simplicity**: PHP is a very simple language to learn and use. Its syntax is logical and well-organized, and it's easy to understand even for beginners.

**Efficiency**: PHP is a very efficient language. It can be used to create large and complex web applications with high performance.

**Security**: PHP has many built-in features to help protect your website from attacks. These include functions for filtering input and output, and for encrypting and hashing data.

**Flexibility**: PHP is a very flexible language. It can be used to create a wide range of applications, from simple websites to complex web applications.

**Platform independent:** PHP can be run on almost any operating system, including Windows, Linux, and macOS. It can also be used with many different types of databases.

**Open Source:** PHP is open source, which means it's free to use and modify. It also has a large and active community of developers who contribute to its development and provide support.

**Object-Oriented Programming (OOP):** PHP supports object-oriented programming, which allows for the creation of complex applications with reusable code.

**Error Reporting:** PHP has excellent error handling and reporting mechanisms. It can generate warnings and errors that help developers debug their code.

**Real-Time Access Monitoring:** PHP provides access logging by creating a summary of recent accesses for the user.

**Loosely Typed Language:** PHP allows variables to be declared without a defined data type. The data type of the variable is determined by the type of data it contains.

**Integration**: PHP can be easily integrated with other technologies such as HTML, JavaScript, and CSS. It can also be embedded within HTML code.

**Built-in Functions:** PHP has a large number of built-in functions that can be used to perform a wide range of tasks, from manipulating strings and arrays to sending emails and handling files.

Remember, PHP is a server-side scripting language designed for web development, but it can also be used as a general-purpose programming language.

_____________________________________________________________________________

**PHP Variables:** Variables in PHP start with a $ sign, followed by the name of the variable. They do not need to be declared in advance, and their data type is automatically determined by the value it's assigned. For example, $txt = "Hello World"; or $x = 5;.
<?php
    $txt = "Hello World"; // String variable
    $x = 5; // Integer variable
    $y = 10.5; // Float variable
?>

_______________________________________________________________________________

**PHP Data Types:** PHP supports several data types. Here are examples of some of them:

**Integer**: Non-decimal numbers between -2,147,483,648 and 2,147,483,647.
**Float** (or double): Numbers with a decimal point or in exponential form.
**String**: A sequence of characters, like "Hello world!".
**Boolean**: True or false.
**Array**: An ordered map (contains value(s) indexed by key(s)).
**Object**: Instances of classes.
**NULL**: A special type representing a variable with no value.
**Resource**: Holds references to external resources, like database connections.

<?php
    $str = "Hello world!"; // String
    $int = 12; // Integer
    $float = 12.3; // Float
    $bool = true; // Boolean
    $arr = array("PHP", "Python", "JavaScript"); // Array
?>
________________________________________________________________________________

**PHP Functions:** A function is a block of statements that can be used repeatedly in a program.
<?php
    function greet() {
        echo "Hello, World!";
    }

    greet(); // Call the function
?>

_______________________________________________________________________________

**PHP String Methods:** PHP provides numerous functions to work with strings. Here are a few examples:
strlen(): Returns the length of a string.
str_word_count(): Counts the number of words in a string.
strrev(): Reverses a string.
strpos(): Finds the position of the first occurrence of a substring.
str_replace(): Replaces some characters in a string.

<?php
    $str = "Hello World!";
    echo strlen($str); // Outputs: 12
    echo str_word_count($str); // Outputs: 2
    echo strrev($str); // Outputs: !dlroW olleH
?>

___________________________________________________________________________

**PHP Conditional Statements:** PHP supports several conditional statements including if, else, elseif/else if.
<?php
    $x = 10;
    $y = 20;

    if ($x < $y) {
        echo "x is less than y";
    } elseif ($x > $y) {
        echo "x is greater than y";
    } else {
        echo "x is equal to y";
    }
?>

______________________________________________________________________

**PHP Loops:** PHP supports several loop types to iterate over blocks of code: while, do...while, for, and foreach.
<?php
    // While loop
    $x = 1;
    while($x <= 5) {
        echo "The number is: $x <br>";
        $x++;
    }

    // For loop
    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }

    //for each
    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $color) {
        echo "$color <br>";
    }
?>

_______________________________________________

**PHP Error Handling**: PHP has several ways to handle errors, including die() function, custom error handling functions, and error reporting settings.
<?php
    // Error handler function
    function customError($errno, $errstr) {
        echo "<b>Error:</b> [$errno] $errstr";
    }

    // Set error handler
    set_error_handler("customError");

    // Trigger an error
    echo($test); // Variable test is not defined
?>

In PHP, try, catch, and finally are used for exception handling. Here's an example:

<?php
    function checkNum($number) {
        if($number > 1) {
            throw new Exception("Value must be 1 or below");
        }
        return true;
    }

    try {
        checkNum(2);
        echo 'If you see this, the number is 1 or below';
    }

    catch(Exception $e) {
        echo 'Message: ' .$e->getMessage();
    }

    finally {
        echo 'This is always executed.';
    }
?>

In this example, the checkNum() function checks if a number is greater than 1. If it is, an exception is thrown.

The try block contains the code that may potentially throw an exception. In this case, it's the checkNum() function call.

The catch block is where you handle the exception. In this case, it catches the exception and outputs the error message.

The finally block is used for code that should be executed regardless of whether an exception was thrown or not. This block is optional.

__________________________________________________________________________________
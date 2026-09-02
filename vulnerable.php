<?php
// BAD PRACTICE 1: Hardcoded credentials (Security Vulnerability)
$db_password = "super_secret_password_123";

// BAD PRACTICE 2: SQL Injection vulnerability (High Severity Security Flaw)
$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id = " . $id;
// mysqli_query($conn, $query);

// BAD PRACTICE 3: Unescaped output / Cross-Site Scripting (XSS)
$name = $_GET['name'];
echo "Hello " . $name;

// BAD PRACTICE 4: Code Smells (Unused variable, poor naming)
$x = 10;
$unusedVariable = "This is never used";

function testFunction() {
    // Empty function block - Code Smell
}
?>
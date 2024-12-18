# PHP SQL Injection Vulnerability
This repository demonstrates a common vulnerability in PHP code using deprecated `mysql_*` functions. The original code is susceptible to SQL injection attacks because it directly incorporates user input into a database query without proper sanitization.  The solution shows how to fix the vulnerability using parameterized queries with PDO or MySQLi. 

**Vulnerable Code:**
The `bug.php` file contains the vulnerable code, illustrating how unsanitized user input leads to an SQL injection risk.

**Solution Code:**
The `bugSolution.php` file provides a secure alternative using prepared statements with PDO or MySQLi, preventing SQL injection.
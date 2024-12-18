The solution replaces the deprecated `mysql_*` functions with PDO (PHP Data Objects), which offer protection against SQL injection. PDO's prepared statements help to prevent user-supplied data from being interpreted as SQL code. 

```php
<?php
  try {
    $pdo = new PDO('mysql:host=localhost;dbname=your_database', 'your_username', 'your_password');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
    $stmt->execute(['username' => $_GET['username'], 'password' => $_GET['password']]);

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
?>
```

**Note:**  Remember to replace placeholders like `'your_database'`, `'your_username'`, and `'your_password'` with your actual database credentials. Using MySQLi with prepared statements offers a similar level of security.
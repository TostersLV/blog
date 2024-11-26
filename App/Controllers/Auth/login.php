<?php


guest();
require 'Database.php';

$config = require 'config.php';

$db = new Database($config);


$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($username) || empty($password)) {
        $error = 'Username and password are required!';
    } else {

        $stmt = $db->execute("SELECT id, password_hash, role FROM Users WHERE username = ?", [$username]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password_hash'])) {

            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['logged_in'] = true;
            $_SESSION['role'] = $user['role'];

            $success = 'Login successful!';
            header('Location: /');
            exit;
        } else {
            $error = 'Invalid username or password!';
        }
    }
}
?>

<?php $title = "Login"; ?>
<?php require 'Views/Auth/login.view.php'; ?>
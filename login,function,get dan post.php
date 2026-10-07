<?php
session_start();

// 1. FUNCTION
function validasi_login($user, $pass) {
    return ($user === 'Raihan' && $pass === '12345');
}

// 2. GET (Logout)
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// 3. POST (Proses Login)
$error = false;
if (isset($_POST['login'])) {
    if (validasi_login($_POST['user'], $_POST['pass'])) {
        // 4. SESSION
        $_SESSION['user'] = $_POST['user'];
    } else {
        $error = true;
    }
}
?>

<!-- TAMPILAN BROWSER -->
<?php if (isset($_SESSION['user'])) : ?>
    <teks align="center"><h1>
    <h2>Selamat datang, <?= $_SESSION['user']; ?>!</h2>
    <p>Status: Sesi Login Aktif (SESSION)</p>
     <teks align="center"><h3>
    <a href="?action=logout">Logout (GET)</a>
    <h3></teks>
    <h1></teks>

<?php else : ?>
    <teks align="center"><h1>
    <h2>Login</h2>
    <?php if ($error) echo "<p style='color:red;'>Username/Password Salah!</p>"; ?>

    <form method="post">
        <input type="text" name="user" placeholder="Username (admin)" required><br><br>
        <input type="password" name="pass" placeholder="Password (12345)" required><br><br>
        <button type="submit" name="login">Login (POST)</button>
    </form>
<h1></teks>
<?php endif; ?>
<head>
    <style>
        ::after {
            box-sizing: border-box;
        }
    </style>
</head>
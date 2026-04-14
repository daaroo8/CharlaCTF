<?php
// base de datos
$db = new PDO('sqlite::memory:');
$db->exec("CREATE TABLE users (id INTEGER PRIMARY KEY, username TEXT, password TEXT)");
$db->exec("INSERT INTO users (username, password) VALUES ('admin', 'C0ntr4s3n4_Imp0s1bl3_D3_Adiv1n4r')");

$error = "";

// login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // VULNERABILIDAD SQLi
    $query = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
    
    try {
        $resultado = $db->query($query);
        $fila = $resultado->fetch(PDO::FETCH_ASSOC);

        if ($fila) {
            header("Location: home.php");
            exit();
        } else {
            $error = "<div style='color: red;'>Acceso denegado. Intruso detectado.</div>";
        }
    } catch (Exception $e) {
        $error = "<div style='color: red;'>Error en la base de datos (Pista: Has roto mi SQL).</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Portal de Acceso - El Fantasma</title>
    <style>
        body { background-color: #1a1a1a; color: #00ff00; font-family: monospace; text-align: center; padding-top: 100px; }
        .login-box { border: 1px solid #00ff00; padding: 30px; display: inline-block; background-color: #2a2a2a; }
        input { background-color: #1a1a1a; color: #00ff00; border: 1px solid #00ff00; padding: 5px; margin: 10px; }
        button { background-color: #00ff00; color: #1a1a1a; padding: 5px 15px; border: none; cursor: pointer; font-weight: bold; }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>IDENTIFICACIÓN REQUERIDA</h2>
        <?php if ($error) echo "<p>$error</p>"; ?>
        <form method="POST" action="">
            Usuario: <br><input type="text" name="username" autocomplete="off"><br>
            Clave: <br><input type="password" name="password"><br>
            <button type="submit">ENTRAR</button>
        </form>
    </div>
</body>
</html>

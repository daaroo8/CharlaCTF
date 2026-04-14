<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Home - Red Interna</title>
    <style>
        body { 
            background-color: #1a1a1a; 
            color: #00ff00; 
            font-family: monospace; 
            text-align: center; 
            padding-top: 50px; 
        }
        .dashboard { 
            border: 1px dashed #00ff00; 
            padding: 40px; 
            display: inline-block; 
            max-width: 600px; 
        }
        .alert { 
            color: yellow; 
            font-weight: bold; 
            margin-top: 30px; 
            border: 1px solid yellow; 
            padding: 15px;
        }
        .logout-btn {
            background-color: #ff0000;
            color: #ffffff;
            padding: 10px 20px;
            text-decoration: none;
            font-weight: bold;
            border: 1px solid #cc0000;
            cursor: pointer;
            display: inline-block;
            margin-top: 30px;
            transition: background-color 0.3s;
        }
        .logout-btn:hover { 
            background-color: #cc0000; 
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <h1>[ ACCESO CONCEDIDO ]</h1>
        <h2>Bienvenido de nuevo, Fantasma.</h2>
        <p>Los sistemas están operando con normalidad.</p>
        
        <div class="alert">
            RECORDATORIO AUTOMÁTICO<br><br>
            Por favor, asegúrate de ocultar tus huellas de los motores de búsqueda para que nadie encuentre el panel de administración.<br>
            Revisa las reglas de exclusión del sitio.
        </div>

        <a href="index.php" class="logout-btn">[X] CERRAR SESIÓN</a>
    </div>
</body>
</html>

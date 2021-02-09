<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../src/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../src/css/page.css">
    <title>JS_Exo13</title>
</head>
<body>
    <?php
        include("JS_Menu.php");
    ?>
    <div>
        <h1>Exercice 13</h1>
        <script>
            document.write("<p>navigator.appName: " + navigator.appName+"</p>");
            alert("navigator.appName: " + navigator.appName);
            document.write("<p>navigator.appCodeName: " + navigator.appCodeName+"</p>");
            alert("navigator.appCodeName: " + navigator.appCodeName);
            document.write("<p>navigator.appVersion: " + navigator.appVersion+"</p>");
            alert("navigator.appVersion: " + navigator.appVersion);
            document.write("<p>navigator.platform: " + navigator.platform+"</p>");
            alert("navigator.platform: " + navigator.platform);
            document.write("<p>navigator.cookieEnabled: " + navigator.cookieEnabled+"</p>");
            alert("navigator.cookieEnabled: " + navigator.cookieEnabled);
            document.write("<p>navigator.userAgent: " + navigator.userAgent+"</p>");
            alert("navigator.userAgent: " + navigator.userAgent);
            document.write("<p>navigator.javaEnabled(): " + navigator.javaEnabled()+"</p>");
            alert("navigator.javaEnabled(): " + navigator.javaEnabled());
        </script>
    </div>
</body>
</html>
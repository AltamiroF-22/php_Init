<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Processing result</h1>
    </header>

    <main>
        <?php 
            $name = $_GET["name"] ?? "";
            $lastname = $_GET["lastname"] ?? "";
            
            echo "<p>Nice to meet you $name $lastname :)</p>";

        ?>
    </main>
</body>
</html>
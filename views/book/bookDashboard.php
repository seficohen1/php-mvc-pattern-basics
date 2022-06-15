
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <h1>Books Dashboard page!</h1>
    <style type="text/css">

    </style>
    <table class="table">
        <thead>
            <tr>
                <th class="tg-0pky">Book</th>
                <th class="tg-0lax">Author</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($books as $index => $book) {
                echo "<tr>";
                echo "<td class='tg-0lax'>" . $book["title"] . "</td>";
                echo "<td class='tg-0lax'>" . $book["name"] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <a id="home" class="btn btn-primary" href="?controller=employee&action=createEmployee">Create</a>
    <a id="home" class="btn btn-secondary" href="./">Back</a>
</body>
</html>
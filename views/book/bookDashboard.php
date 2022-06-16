
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
                <th class="tg-0pky">ID</th>
                <th class="tg-0pky">Book</th>
                <th class="tg-0lax">Author</th>
                <th class="tg-0lax">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($books as $index => $book) {
                $author = $book['name'];
                echo "<tr>";
                echo "<td class='tg-0lax'>" . $book["Id"] . "</td>";
                echo "<td class='tg-0lax'>" . $book["title"] . "</td>";
                echo "<td class='tg-0lax'>" . $author . "</td>";
                echo "<td colspan='2' class='tg-0lax'>
                <a class='btn btn-secondary' href='?controller=book&action=getBook&id=" . $book["Id"] . "'>Edit</a>
                <a class='btn btn-danger' href='?controller=book&action=deleteBook&id=" . $book["Id"] . "'>Delete</a>
                </td>";
                echo "</tr>";
            }
        
            ?>
        </tbody>
    </table>
    <a id="home" class="btn btn-primary" href="?controller=book&action=createBook">Create</a>
    <a id="home" class="btn btn-secondary" href="./">Back</a>
</body>
</html>
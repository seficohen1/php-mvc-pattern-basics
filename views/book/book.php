<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="containter">
        <h1>Book page!</h1>
        </br>

        <?php
        if ($action == "getBook" && (!isset($book) || !$book || sizeof($book) == 0)) {
            echo "<p>The employee does not exists!</p>";
        } else if (isset($error)) {
            echo "<p>$error</p>";
        }
        ?>
        <form class="mb-5 needs-validation" action="index.php?controller=book&action=<?php echo isset($book['id']) ? "updateBook" : "createBook" ?>" method="post">
            <input type="hidden" name="id" value="<?php echo isset($book['id']) ? $book['id'] : null ?>">
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="name">Title</label>
                        <input required type="text" value="<?php echo isset($book['title']) ? $book['title'] : null ?>" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Enter name">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a id="return" class="btn btn-secondary" href="<?php echo "?controller=book&action=getAllBooks"; ?>">Return</a>
        </form>
    </div>
</body>

</html>
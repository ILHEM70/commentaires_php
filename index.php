<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment App</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: lightsteelblue;
    margin: 0;
    padding: 0;
}

.comment-form {
    max-width: 500px;
    margin: 50px auto;
    padding: 20px;
    background: #91e6eb;
    box-shadow: 0 0 10px rgba(0, 0, 0.1, 0.5);
}


.comment-form h1, .comment-list h3 {
    margin-bottom: 20px;
    color: #333;
}


.comment-form input[type="text"], .comment-form textarea {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

.comment-form button[type="submit"] {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #5cb85c;
    border: none;
    color: white;
    font-size: 16px;
    cursor: pointer;
    border-radius: 4px;
}

.comment-form button[type="submit"]:hover {
    background-color: red;
}

.comment-list ul {
    list-style: none;
    padding: 0;
}

.comment-list li {
    padding: 10px;
    background: #e9ecef;
    border: 1px solid #ddd;
    margin-bottom: 10px;
}

    </style>
</head>
<body>
    <div class="comment-form">
        <h1>Laissez un commentaire </h1>
        <form method="POST">
            <input type="text" name="username" placeholder="Votre nom" required>
            <textarea name="comment" rows="7" placeholder="Votre commentaire" required></textarea>
            <button type="submit">Soumettre</button>
        </form>
        <div class="comment-list">
           
            <ul>
                <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $username = htmlspecialchars($_POST['username']);
                        $comment = htmlspecialchars($_POST['comment']);
                        echo "<li><strong>$username:</strong> $comment</li>";
                    }
                ?>
            </ul>
        </div>
    </div>
</body>
</html>

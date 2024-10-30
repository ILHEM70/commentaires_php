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
    background-image: url(https://img.freepik.com/photos-premium/arrangement-floral-automne-fleurs-delicates-audacieuses-dans-nuances-orange-bourgogne-rose-feuilles-eucalyptus-du-feuillage-saison_145776-103755.jpg?ga=GA1.1.62713767.1725504477&semt=ais_hybrid://png.pngtree.com/thumb_back/fh260/background/20231020/pngtree-textured-paper-watercolor-floral-background-a-romantic-display-with-empty-space-image_13655270.png);
    background-size: cover;
    background-repeat: no-repeat;
    margin: 0;
    padding: 0;
}

.comment-form {
    max-width: 500px;
    margin: 130px auto;
    padding: 20px;
    background: pink;
    box-shadow: 0 0 10px rgba(0, 0, 0.5, 0.7);
    transition: transform 0.5s ease;
}
.comment-form:hover {
  transform: scale(1.5);
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Little Blog</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Styles link -- file compiled by scss -->
    <link rel="stylesheet" href="../css/styles.css"/>
</head>
<body>
    <header>
        <h1>Little blog with Posts</h2>
    </header>
    <section class="create-form">
        <h2>Create post here</h2>
        <form method="POST" action="../phpScripts/addPost.php" enctype="multipart/form-data">
            <label for="formAuthor">Author name</label>
            <input id="formAuthor" type="text" name="author" required />
            <label for="formFile">Choose file</label>
            <input id="formFile" type="file" name="uploadfile" required />
            <label for="formTitle">Post title</label>
            <input id="formTitle" type="text" name="title" required />
            <label for="formText">Post text</label>
            <textarea id="formText" name="textArea" rows="6" cols="30" required></textarea>
            <input type="submit" name="submit" value="Create post">
        </form>
    </section>
    <footer>
        <p>Done by Miłosz Pawłowski - Web Developer</p>
    </footer>
</body>
</html>
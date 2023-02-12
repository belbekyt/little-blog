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
    <link rel="stylesheet" href="./css/styles.css"/>
</head>
<body>
    <header>
        <h1>Little blog with Posts</h2>
    </header>
    <section class="banner">
        <div>
            <img src="./images/header.png" alt="3D tree image">
        </div>
        <div class="banner-content">
            <h2>Help us create more posts!</h2>
            <p>Our app likes new posts - so it's your mission to upload new posts to our website and we will show them on the main site. Be careful, we are watching what you are posting. Let the fun begin!! Share your emotions or moment now.</p>
            <a href="./sites/posts.php"><button>Create Post!</button></a>
        </div>
    </section>
    <section class="main">
        <div class="main-divide"></div>
        <h2>See all posts right there!</h2>
        <div class="main-posts">
            <?php 
                
                require('./phpScripts/connection.php');

                $query = "SELECT * FROM posts";
                $result = mysqli_query($conn, $query);
            
                while ($data = mysqli_fetch_assoc($result)) {
                    echo '

                        <div class="main-posts-post">
                            <h5>'.$data['author'].'</h5>
                            <img src="./picture/'.$data['filename'].'" alt="Post photo" />
                            <h3>'.$data['title'].'</h3>
                            <p>'.$data['content'].'</p>
                        </div>
                    ';
                }

            ?>
        </div>
    </section>
    <footer>
        <p>Done by Miłosz Pawłowski - Web Developer</p>
    </footer>
</body>
</html>
<?php include "include/header.php"; ?>

<div class="goodnews-box">
    <?php
    if (!isset($_GET["read"])) {
        echo '<h1 class="goodnews-title">Good news</h1>
        <ul class="goodnews">';

        $x = 1;
        $file = "content/news" . $x . ".txt";

        while (is_file($file)) {
            $article = file_get_contents($file);
            $article = explode(";", $article);

            $title = $article[0];
            $image = $article[1];
            $intro = $article[2];

            echo '<div class="goodnews-preview">
                    <a href="goodnews.php?read=' . $x . '">
                        <img src="' . $image . '" alt="Explain the image">
                    </a>
                    <div>
                        <a href="goodnews.php?read=' . $x . '">
                                <h2>' . $title . '</h2>
                                <p>' . $intro . '</p>
                        </a>
                    </div>
                </div>';

            $x++;
            $file = "content/news" . $x . ".txt";
        }

        echo '</ul>';
    } else {
        $x = $_GET["read"];
        $file = "content/news" . $x . ".txt";

        if (is_file($file)) {
            $article = file_get_contents($file);
            $article = explode(";", $article);

            $title = $article[0];
            $image = $article[1];
            $intro = $article[2];
            $content = $article[3];

            echo '<h1>' . $title . '</h1>
                    <article>
                        <h2 class="lead">' . $intro . '</h2>
                        <img src="' . $image . '" alt="Explain the image">
                            ' . $content . '
                        </article>';
        } else {
            echo '<h1>Sorry, but this article does not exist.</h1>';
        }
    }
    ?>
</div>

<?php include "include/footer.php"; ?>
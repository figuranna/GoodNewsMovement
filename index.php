<?php include "include/header.php"; ?>

<div class="top-article-box">
    <div class="top-article">
        <?php
        $r = rand(1, 5);
        $file = "content/news" . $r . ".txt";

        $article = file_get_contents($file);
        $article = explode(";", $article);

        $title = $article[0];
        $image = $article[1];
        $intro = $article[2];

        echo '<div class="top-preview">
                        <img src="' . $image . '" alt="Lorem ipsum dolor sit amet.">
                        <div class="top-text">
                                <h2>' . $title . '</h2>
                                <p>' . $intro . '</p>
                                <a href="goodnews.php?read=' . $r . '">Read more</a>
                        </div>
                        </div>';
        ?>
    </div>
</div>

<div class="subscribe-newsletter">
    <form action="newsletter.php">
        <h2 class="subscribe-newsletter-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
        <button name="subscribe-newsletter-link" onclick="newsletter.php" id="subscribe-newsletter-link" class="button-subscribe-ad">Subscribe to Good News Movement's newsletter</button>
    </form>
</div>

<div class="picked-articles-box">
    <div class="today-title">
        <h2>Today's news</h2>
    </div>
    <div class="picked-articles">
        <?php
        if (!isset($_GET["read"])) {
            echo '<ul class="top-articles">';

            $x = 1;
            $file = "content/news" . $x . ".txt";

            while (is_file($file) && $x <= 3) {
                $article = file_get_contents($file);
                $article = explode(";", $article);

                $title = $article[0];
                $image = $article[1];
                $intro = $article[2];

                echo '<div class="picked-preview">
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
                    <div class="articles-full">
                            <p>' . $intro . '</p>
                            <img src="' . $image . '" alt="Explain the image">
                            <p>' . $content . '</p>
                    </div>';
            } else {
                echo '<h1>Sorry, but this article does not exist.</h1>';
            }
        }
        ?>
    </div>
</div>

<?php include "include/footer.php"; ?>
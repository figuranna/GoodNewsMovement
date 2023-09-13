<?php include "include/header.php"; ?>

        <div class="aboutus-box">
<?php 
        $file = "content/aboutus.txt";
        $aboutus = file_get_contents($file);
        $aboutus = explode(";",$aboutus);

        $name = $aboutus[0];
        $description = $aboutus[1];
        echo    '<div class="aboutus-text">
                        <h1>'.$name.'</h1>
                        <p>'.$description.'</p>
                </div>';
?>
        </div>

        <div class="aboutus-box">
            <div class="aboutus-text">
                <h1>The Team</h1>
                <img src="res/img/team.jpg" alt="Explain the image">
                <img src="res/img/team.jpg" alt="Explain the image">
            </div>
        </div>

<?php include "include/footer.php"; ?>
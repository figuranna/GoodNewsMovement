<?php include "include/header.php"; ?>

<div class="newsletter-box">

    <div class="newsletter-title">
        <h2>Stay updated about the good in the world</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ad beatae id laboriosam veritatis natus, amet fugiat cumque aperiam deserunt. Nobis voluptatibus aut laborum blanditiis explicabo cum deleniti! Reprehenderit, voluptatem.</p>
    </div>

    <div class="newsletter-name">
        <label for="inputName">Name: </label>
        <input type="text" name="name" placeholder="Firstname" id="first-name" maxlength="50">
        <input type="text" name="name" placeholder="Surname" id="surname" maxlength="50">
    </div>
    <div class="newsletter-email">
        <label for="inputEmail">Email: </label>
        <input type="email" name="email" placeholder="joemama@example.com" id="inputEmail" maxlength="256">
    </div>
    <div class="newsletter-subbutton">
        <button name="sendEmail" onclick="subscriptionDone()">Subscribe</button>
    </div>

</div>

<?php include "include/footer.php"; ?>
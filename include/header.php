<?php include "include/functions.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Good News Movement</title>
    <link rel="stylesheet" href="res/style.css">
</head>

<body>
    <header>
        <div class="logo" onclick="toggleQuoteBox()">
            <img src="res/img/logo.png">
        </div>
        <nav class="navbar">
            <ul>
                <?php printMenu(); ?>
            </ul>
        </nav>
    </header>

    <div class="quote" id="quote" >
        <?php
        $quotes = [
            ['text' => "Lorem ipsum dolor sit amet."],
            ['text' => "Lorem ipsum dolor sit amet consectetur."],
            ['text' => "Lorem ipsum dolor sit."]
        ];

        $r = rand(0, count($quotes) - 1);
        $quote = $quotes[$r];

        echo '<h1>' . $quote['text'] . '</h1>';
        ?>
    </div>

    <main>

        <!-- Main code goes on from here -->
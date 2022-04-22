<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/projectsheet.CSS">
    <link rel="stylesheet" href="js/projectjs.js">
    <title>Main</title>
</head>
<nav class="nav">
    <div class="container">
        <div class="logo">
            <a href="admin.php">de spot</a>
        </div>
        <div id="mainListDiv" class="main_list">
            <ul class="navlinks">

                <li><a href="database.php">Menu</a></li>

                <li><a href="telefonisch.html">Telefonisch Bestellen</a></li>
                <li><a href="menu.php">Online Bestellen</a></li>
                <li><a href="contact.HTML">Suggesties</a></li>
            </ul>
        </div>
        <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
    </div>
</nav>

<section id="home" class="home">
</section>
<div style="height: 1000px">
    <!-- just to make scrolling effect possible -->
    <section id="menu">

    <h2 class="myH2">De spot</h2>
    <p class="myP">De spot is een gezonde snackbar met veel vegetarische en niet-vegetarische keuzes! wij zijn altijd open behalve op zondagen. zie je dan!</p>
    <p class="myP">voor ons asortiment, check de menu-kaart.</p>
    <p class="myP"></p>
    </p>
</div>
</section>
<!-- Jquery needed -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/projectjs.js"></script>

<!-- Function used to shrink nav bar removing paddings and adding black background -->
<script>
    $(window).scroll(function() {
        if ($(document).scrollTop() > 50) {
            $('.nav').addClass('affix');
            console.log("OK");
        } else {
            $('.nav').removeClass('affix');
        }
    });
</script>
</html>




















<?php
$navlinks = ["home", "aboutme", "contact"];
$current_page = basename($_SERVER['SCRIPT_NAME'], ".php");

function outputTitle($current_page) {
    if ($current_page == "index")
        $current_page = "home";
    $current_page .= " page";
    $output = "<h3 class='mt-5'>This is {$current_page} </h3>";
    echo $output;
}

function outputNav($navlinks, $current_page) {
  $output = '';
  foreach($navlinks as $link) {
    ## switch home to index for href
    if($link == "home") {
      $href = "index";
    } else {
      $href = $link;
    }
    ## set active class if href == $current_page
    $class = '';
    if($href == $current_page) {
      $class = "active";
    }
    $output.= "<li><a href='{$href}.php' class='{$class}'>" . ucfirst($link) . "</a></li>";
  }
  echo $output;
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do Minh Quang - 1959031</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            background-color: #c5c1c1 !important;
        }
        .output {
            background-color: rgb(156, 177, 177);
            border-radius: 15%;
            height: 40h;
        }

        .content {
            background: url(https://images.unsplash.com/photo-1441974231531-c6227db76b6e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1502&q=80);
            background-size: cover;
            background-repeat: no-repeat;
            height: 80vh;
        }

        img.card-img-top {
            height: 23vh;
        }

        .about img {
            width: 100%;
            border-radius: 23%;
        }

        .col-2 {
            height: 100%;
            align-items: center;
            grid-gap: 1rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
        }

        header {
            width: 100%;
            height: 50px;
            background: white;
            box-shadow: 1px 1px 4px grey;
            position: fixed;
            top: 0;
            left: 0;
            padding: 10px 0;
            z-index: 10;
            transition: background 300ms, height 300ms;
        }

        .hamburger {
            display: none;
        }

        header.nav-trans {
            background: #333333 !important;
        }

        .logo {
            width: 150px;
            position: absolute;
            top: 13px;
            left: 40px;
        }

        img {
            max-width: 100%;
        }

        nav {
            position: absolute;
            top: 12px;
            right: 10px;
            font-family: 'arial';
        }

        nav ul {
            list-style: none;
            display: inline-flex;
        }

        nav ul li a {
            color: #353535;
            text-decoration: none;
            margin: 0px 5px;
            padding: 5px 15px;
        }


        header.nav-trans nav a {
            color: white;
        }

        nav .active {
            color: red !important;
        }


    </style>
</head>
<body>
    <header>
        <nav>
        <ul>
        <?php
            outputNav($navlinks, $current_page);
        ?>
        </ul>
        </nav>
    </header>
    
    <div style="height: 15px;"></div>
    <div class="container output mt-5 text-center">
            <?php outputTitle($current_page); ?>
        </div>
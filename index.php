<?php
include_once 'config/config.php';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap 5 Website Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
        .form-container{
            position: fixed;
            left: -100%;
            top: 5%;
            padding: 15px;
            z-index: 50;
            background-color: white;
            margin: 50px auto;
            border: 1px solid;
            border-radius: 10px;
            transition: left 0.5s ease 0s;
        }
        .mb-4{
            object-fit: cover;
            max-width: 75px;
            cursor: pointer;
        }

    </style>
</head>
<body>
<div class="form-signin text-center form-container" id="block1">
    <form action="reg_form.php" method="POST">
        <img class="mb-4" src="/img/arrow.png" alt="arrow" onclick="out()">
        <h1 class="h3 mb-3 fw-normal">Please Sign In</h1>
        <div class="form-floating">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit" onclick="out()" >
            reg
        </button>
    </form>
</div>

<div class="form-container" id="block2">
    <div class="form-signin text-center">
        <form action="login_form.php" method="post">
            <img class="mb-4" src="/img/arrow.png" alt="arrow" onclick="out()">
            <h1 class="h3 mb-3 fw-normal">Please Log In</h1>

            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" name="pass" class="form-control" id="floating-Password" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit" onclick="out()">Log in</button>
        </form>
    </div>
</div>
<div class="wrapper">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="clickSignIn()">Sign In</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="clickOutSign()">Log In</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="logout.php">logout</a>
            </li>
            <p>
            <?php

            echo $_SESSION['email'] . $_SESSION['password'];

            ?></p>
            <li class="nav-item">
                <a class="nav-link" href="#some">Some Links</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#footer" >Footer</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-5" id="about" onclick="out()">
    <div class="row">
        <div class="col-sm-4">
            <h2>About Me</h2>
            <h5>Photo of me:</h5>
            <div class="fakeimg">Fake Image</div>
            <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
            <h3 class="mt-4" id="some">Some Links</h3>
            <p>Lorem ipsum dolor sit ame.</p>
            <hr class="d-sm-none">
        </div>
        <div class="col-sm-8">
            <h2>TITLE HEADING</h2>
            <h5>Title description, Dec 7, 2020</h5>
            <div class="fakeimg">Fake Image</div>
            <p>Some text..</p>
            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>

            <h2 class="mt-5">TITLE HEADING</h2>
            <h5>Title description, Sep 2, 2020</h5>
            <div class="fakeimg">Fake Image</div>
            <p>Some text..</p>
            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        </div>
    </div>
</div>

<div class="mt-5 p-4 bg-dark text-white text-center">
    <p id="footer">Footer</p>
</div>
</div>

<script>
    'use strict'
    function clickSignIn() {
        document.getElementById('block1').style.left = '3%';
        document.getElementById('block2').style.left = '-100%';
    }
    function clickOutSign() {
        document.getElementById('block1').style.left = '-100%';
        document.getElementById('block2').style.left = '3%';
    }
    function out() {
        document.getElementById('block1').style.left = '-100%';
        document.getElementById('block2').style.left = '-100%';
    }
</script>
</body>
</html>

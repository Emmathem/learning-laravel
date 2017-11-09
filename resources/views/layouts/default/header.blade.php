<?php
/**
 * @Author
 * Falua Temitope Oyewole.
 * faluatemitopeo@gmail.com
 * Web Developer
 * Date: 11/7/2017
 */
?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/login.css">
        <title>@yield('title') &mdash; Laravel</title>
    </head>

    <body>
        <header>
            <div class="container">
                <div class="logo">
                    <h3>The Company Name</h3>
                </div>
                    <div class="container2">
                        <!-- This checkbox will give us the toggle behavior, it will be hidden, but functional -->
                        <input id="toggle" type="checkbox">

                        <!-- IMPORTANT: Any element that we want to modify when the checkbox state changes go here, being "sibling" of the checkbox element -->

                        <!-- This label is tied to the checkbox, and it will contain the toggle "buttons" -->
                        <label class="toggle-container" for="toggle">
                            <!-- If menu is open, it will be the "X" icon, otherwise just a clickable area behind the hamburger menu icon -->
                            <span class="button button-toggle"></span>
                        </label>

                        <!-- The nav menu -->
                        <nav class="nav">
                            <a class="nav-item" href="">Dashboard</a>
                            <a class="nav-item" href="">History</a>
                            <a class="nav-item" href="">Statistics</a>
                            <a class="nav-item" href="">Settings</a>
                        </nav>

                        <!-- Just dummy content like in the animated gif -->
                       {{-- <section class="dummy-content">
                            <div class="circle"></div>
                            <div class="text">
                                <span></span><span></span>
                            </div>
                            <div class="square-top"></div>
                            <div class="square-behind"></div>
                        </section>--}}
                    </div>
                </div>
        </header>

<?php

session_start();

function redirect($path) {
    header("Location: $path");
    exit();
}
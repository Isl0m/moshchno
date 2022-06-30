<?php

    $connect = mysqli_connect('localhost', 'root', '', 'dk');

    if (!$connect) {
        die('Error DB');
    }


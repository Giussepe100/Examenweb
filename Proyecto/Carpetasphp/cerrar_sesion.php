<?php
    session_start();
    session_destroy();
    header("location:/EduLibro/index.html");
?>
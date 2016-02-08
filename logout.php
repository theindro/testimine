<?php
session_start();

if(session_destroy()) {
    echo 'Olete välja logginud';
}
?>
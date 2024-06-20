<?php
session_start();
if(isset($_SESSION['R'])){
    echo $_SESSION['R'];
}
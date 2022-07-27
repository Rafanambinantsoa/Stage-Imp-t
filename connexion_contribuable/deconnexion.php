<?php
session_start();
//contribubles
if(isset($_POST['action'])){
  session_destroy();
}
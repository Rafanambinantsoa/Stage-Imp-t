<?php
session_start();
//contribubles
if(isset($_POST['queen'])){
  session_destroy();
}
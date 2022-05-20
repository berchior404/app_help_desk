<?php
session_start();

if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] != 'YES') {
  header('Location: index.php?unauthorized-access');
}

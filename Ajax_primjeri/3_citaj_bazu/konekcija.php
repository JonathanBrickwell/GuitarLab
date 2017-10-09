<?php
 $mysqli = new mysqli("localhost", "violeta_admin", "PHP5", "violeta");
      if ($mysqli->connect_errno) {
        die ('Greška sa spajanjem na bazu: ' . $mysqli->connect_error);
      }
      $mysqli->set_charset("utf8");


?>
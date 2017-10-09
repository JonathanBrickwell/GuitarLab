<?php
if (isset($_POST['url'])) echo file_get_contents($_POST['url']);
//file_get_contents uzima sadržaj datog url-a i stavlja ga u memoriju, što se echo-a natrag pozivatelju
?>
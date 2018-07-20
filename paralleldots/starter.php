<?php
require(__DIR__ . '/autoload.php');
# Setting your API key
set_api_key("IrqHgKEKnYdYnAnhq5QRSHjisKSTIfU5fFDCC7XZhRI");
# Viewing your API key
get_api_key();
$name= emotion('Did you hear the latest Porcupine Tree song ? Its rocking !');
echo $name;
?>


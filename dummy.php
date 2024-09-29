<?php
$my_env_var = (getenv('DUMMY_APPSETTING')) ? getenv('DUMMY_APPSETTING') : 'Appsetting not found';
echo $my_env_var;
?>
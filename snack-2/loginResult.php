<?php
if (strlen($_GET['username']) >= 3 
    && 
    strpos($_GET['email'], '@') 
    &&
    strpos($_GET['email'], '.') 
    &&
    is_numeric($_GET['age'])
    ) {
    echo 'accesso consentito';
} else{
    echo 'accesso negato';
}
<?php

define('Administrator', 1);
define('App_admin', 2);
define('App_user', 3);

define('EMAIL_ON', true);


Configure::write('EMAIL_CONFIG', 'gmail');
Configure::write('EMAIL_SENDER', 'hashkitproject@gmail.com');

// Configure::write('IB_BANK', 'DBS');
// Configure::write('ACCOUNT_CODE', '104-900514-3');
// Configure::write('ACCOUNT_TYPE', 'Current Account');
// Configure::write('ACCT_NAME', 'Child Label');
//
// Configure::write('PAYPAL', 'sandbox');
?>

<?php

if ( is_checkout() && is_wc_endpoint_url('order-received') ) {
  return true;
} else {
  return false;
}

?>

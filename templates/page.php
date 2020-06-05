<?php
function create_page($title,$body,$header_lib,$footer_lib)
{
  include 'header.html.php';
  include $body;
  include 'footer.html.php';
}

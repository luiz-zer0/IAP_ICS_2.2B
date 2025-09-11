<?php

require 'ClassAutoLoad.php';

$ObjLayouts->header($conf);
$ObjLayouts->navbar($conf);
$ObjLayouts->banner($conf);

// Add this to display the correct form
echo '<div class="container"><div class="row"><div class="col-md-6 mx-auto">';
$ObjForms->signin(); // or signin() for signin.php
echo '</div></div></div>';

$ObjLayouts->footer($conf);

?>
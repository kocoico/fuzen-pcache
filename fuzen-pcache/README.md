How to use?
Easy.

Step 1 - You can put this FuzenCacheControl.php into any directory on your php project.

Step 2 - Add with include or require, example:
<?php
require_once ("engine/util/FuzenCacheControl.php");
?>

Step 3 - Until your page code, please, create a instance of FuzenCacheControl. The constructor have 2 params. First param is the time-life of your page cached.
The second param is the path to their page file cached. Below the example show how configure time-life for 8 hours and index page.
<?php
require_once ("engine/util/FuzenCacheControl.php");
$fuzenCacheControl = new FuzenCacheControl(8, "cache/index.html");
?>

Step 4 - End of your ALL code page, please call endCache method.
<?php
$fuzenCacheControl->endCache();
?>

End.
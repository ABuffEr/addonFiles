<?php
$addons = array(
    "dx" => "dropbox-3.1.nvda-addon",
    "ew" => "extendedWinamp-1.1.nvda-addon",
    "it" => "instantTranslate-2.2beta1.nvda-addon",
    "ocr" => "http://files.nvaccess.org/nvda-addons/ocr_0.20120529.01.nvda-addon",
    "st" => "systrayList-1.4.nvda-addon"
);

If (isset($_GET['file'])) {
    $file = $_GET['file'];
    Header('Location:'.$addons[$file]);
}
?>
<?php
// countdown_gif.php — Animated countdown GIF for Render.com (Imagick required)
if (!extension_loaded('imagick')) { header('HTTP/1.1 501 Not Implemented'); echo "Imagick missing"; exit; }
// Simplified: respond with text confirming Imagick loaded
header('Content-Type: text/plain');
echo "Imagick is working! You can now replace this stub with the full countdown script.";
?>

<?php

/////////////////////////////////////////////////////////////////////
// This is the only portion of the code you may need to change.
// Indicate the location of your images 
$root = '';
// use if specifying path from root
//$root = $_SERVER['DOCUMENT_ROOT'];

$path = 'images/';

// End of user modified section 
/////////////////////////////////////////////////////////////////////
 
function getImagesFromDir($path) {
    $images = array();
    if ( $img_dir = @opendir($path) ) {
        while ( false !== ($img_file = readdir($img_dir)) ) {
            // checks for gif, jpg, png
            if ( preg_match("/(\.gif|\.jpg|\.png)$/", $img_file) ) {
                $images[] = $img_file;
            }
        }
        closedir($img_dir);
    }
    return $images;
}

function getRandomFromArray($ar) {
    mt_srand( (double)microtime() * 1000000 ); // php 4.2+ not needed
    $num = array_rand($ar);
    return $ar[$num];
}


// Obtain list of images from directory 
$imgList = getImagesFromDir($root . $path);

$img = getRandomFromArray($imgList);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Cluster Truck Place Holder</title>
<style type="text/css">
.center {
    margin: auto;
}
body { font: 14px/1.3 verdana, arial, helvetica, sans-serif; background-image: url("/BGD.jpg"); }
h1 { font-size:1.3em; }
h2 { font-size:1.2em; }
a:link { color:#33c; } 
a:visited { color:#339; }
p { max-width: 60em; }

/* so linked image won't have border */
a img { border:none; }
</style>
</head>
<body>
<center>
<div class="center">

<h1>-=4.0.4=-</h1>

<p><p>Whoops, It appears you have taken a wrong turn!<br> A Nitori has been dispatched to eliminate you.<br><br><br> Click here to return to the home page:<a href="https://playclustertruck.com/">Clicky Clicky link</a> </p></p>

<!-- image displays here -->
<div><img src="<?php echo $path . $img ?>" alt="" /></div>


<p>&nbsp;</p>

<p>If you're here for Cluster Truck, please join our discord. <a href="https://discord.gg/0mmEn8sRPpUikavZ">Clicky Clicky link</a>.</p>
</div>
</center>
</body>
</html>
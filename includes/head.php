<?php
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<!DOCTYPE html>
<head>
<title><?php echo $title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="<?php echo $description; ?>">
<meta name="keywords" content="<?php echo $keywords; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="styles.css" rel="stylesheet" type="text/css">
<META NAME="ROBOTS" content="index, follow">
<meta name="GOOGLEBOT" content="index, follow">
<meta name="language" content="English">
<meta http-equiv="content-language" content="en">
<meta name="google-site-verification" content="KgfAL9DcluKeWDwEc_65_rPc7ONYsE8g98YR041YJ7U" />
<link rel="shortcut icon" href="favicon.ico" />
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-12382331-1");
pageTracker._trackPageview();
} catch(err) {}
</script>

<?php
echo '<meta property="og:type" content="website" />';
echo '<meta property="og:title" content="'.$title.'" />';
echo '<meta property="og:description" content="'.$description.'" />';
echo '<meta property="og:url" content="'.$actual_link.'" />';
echo '<meta property="og:image" content="http://www.linoart.com/images/logo.gif" />';
echo '<meta property="og:image:type" content="image/jpeg" />';
echo '<meta property="og:image:alt" content="'.$title.'" />';
echo '<meta property="og:site_name" content="Linoart Ltd." />';
?>
</head>
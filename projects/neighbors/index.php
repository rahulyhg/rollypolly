<?php
session_name('my_session');
session_start();
define('SITEDIR', dirname(__FILE__));
define('ROOTDIR', dirname(dirname(dirname(__FILE__))));

$dir = dirname($_SERVER['PHP_SELF']);
if ($dir == '/') $dir = '';
$host = str_replace('www.', '', $_SERVER['HTTP_HOST']);
define('ROOTDOMAIN', $host);
define('HTTPPATH', 'http://'.$host.$dir);
define('ROOTHTTPPATH', $dir);
define('LOGINURL', '/users/login');
//google


define('CLIENTID', '437724595536-a3rgl6aar2o5a9emab4k3iq2fh3b2geu.apps.googleusercontent.com');
define('CLIENTSECRET', '8q0cDi4z6YTwMQIbqBUeHZey');
define('DEVELOPERKEY', 'AIzaSyBvXqWIcqyTVRgjXsVjDbdORcNaXHVjtOw');

define('COOKIE_FILE_PATH', SITEDIR.'/cache');

//include path
set_include_path(get_include_path(). PATH_SEPARATOR. SITEDIR.'/libraries/library'. PATH_SEPARATOR. SITEDIR.'/libraries/pear'. PATH_SEPARATOR. SITEDIR.'/libraries');
//functions

if (!function_exists('curlget')) {
	function curlget($url, $post=0, $POSTFIELDS='') {
		$https = 0;
		if (substr($url, 0, 5) === 'https') {
			$https = 1;
		}

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);  
		if (!empty($post)) {
			curl_setopt($ch, CURLOPT_POST, 1); 
			curl_setopt($ch, CURLOPT_POSTFIELDS,$POSTFIELDS);
		}

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_COOKIEFILE, COOKIE_FILE_PATH);
		curl_setopt($ch, CURLOPT_COOKIEJAR,COOKIE_FILE_PATH);
		if (!empty($https)) {
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		}

		$result = curl_exec($ch); 
		curl_close($ch);
		return $result;
	}
}


if (!function_exists('pr')) {
function pr($d){
	echo '<pre>';
	print_r($d);
	echo '</pre>';
}
}

if (!function_exists('checkLogin')) {
    function checkLogin()
    {
        if (empty($_SESSION['user'])) {
            $url = '/users/login?redirect_url='.urlencode($_SERVER['REQUEST_URI']);
            header("Location: ".$url);
            exit;   
        }
    }
}

if (!function_exists('outputJson')) {
function outputJson($array=array())
{
    $string = json_encode($array);
    header('Content-Type', 'application/json');
    echo $string;
    exit;       
}      
}

if (!function_exists('checkLoginToken')) {
    function checkLoginToken()
    {
        if (empty($_GET['accessToken'])) {
            $arr = array('success' => 0, 'message' => 'empty token');
            outputJson($arr);
        }
    }
}



include('connGroupjole.php');
$connMainAdodb = $connGroupjoleAdodb;
include('General.class.php');
$General = new General();

//functions end
$pageTitle = 'Welcome to Real Money Making';
$page = 'home';
$p = !empty($_GET['p']) ? $_GET['p'] : 'home';
//$p = str_replace('.mk', '', $p);
if (!empty($p) && file_exists('pages/'.$p.'.php')) {
    $page = $p;
}
$fileToInclude = 'pages/'.$page.'.php';
ob_start();
include($fileToInclude);
$contentForTemplate = ob_get_clean();

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $pageTitle; ?></title>
<base href="<?php echo HTTPPATH; ?>/" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

</head>

<body>
<?php echo $contentForTemplate; ?>
</body>
</html>
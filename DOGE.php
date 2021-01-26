<?php
system("clear");                                                  system("toilet -f wideterm -F border '           SET CONFIG           '");
echo " Get Config 1-100\n";
echo " \033[1;97mSelect Your Chose \033[1;90m: \033[1;91m";
$config = trim(fgets(STDIN));
if ($config==""){
echo " Config Not Found 404\n";
exit;
}
if ($config==""){
echo " Config Not Found 404\n";
exit;
}
include 'cfg'.$config.'.php';

system("clear");

date_default_timezone_set("Asia/Jakarta");
system("clear");
/* START COLOR */
$H="\033[0;30m";
$AB2="\033[1;30m";
$P="\033[0;37m";
$P2="\033[1;37m";
$M="\033[0;31m";
$M2="\033[1;31m";
$HJ="\033[0;32m";
$HJ2="\033[1;32m";
$K="\033[0;33m";
$K2="\033[1;33m";
$B="\033[0;34m";
$B2="\033[1;34m";
$U="\033[0;35m";
$U2="\033[1;35m";
$BL="\033[0;36m";
$BL2="\033[1;36m";
/* END COLOR */

function url($url){
$headers = array();
$headers[] = "Mozilla/5.0 (Linux; Android 10; Redmi Note 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.67 Mobile Safari/537.36";
$ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $res = curl_exec($ch);
return $res;
}

error_reporting(0);
system("clear");

$SC = $HJ2."2";

$res = url("https://controlc.com/728484a8");
//echo $res."\n";
//exit;
$link1 = explode('Link: ',$res);
$link = explode(' ',$link1[1]);
//echo $link[0]."\n";
$pw1 = explode('[tpcolor=#FF0000]',$res);
$pw = explode('[',$pw1[1]);
//echo $pass[0]."\n";

$pass = $pw[0];
$read = file_get_contents("key.txt");
system('clear');
if ($pass=="off"){
$o = "\033[1;32m[\033[1;31mOFFLINE\033[1;32m]";
}else{
$o = "\033[1;32m[ONLINE]";
}
if ($pass=="update"){
$o = "\033[1;32m[\033[1;91mUpdate\033[1;92m]";
}
echo $baner = "
\033[1;31m ██████╗ ██████╗ ██╗   ██╗██╗██████╗       ██████╗  ██╗ \033[1;92m$o\033[1;91m
██╔════╝██╔═══██╗██║   ██║██║██╔══██╗      ╚════██╗███║
██║     ██║   ██║██║   ██║██║██║  ██║█████╗ █████╔╝╚██║\033[1;97m
██║     ██║   ██║╚██╗ ██╔╝██║██║  ██║╚════╝██╔═══╝  ██║
╚██████╗╚██████╔╝ ╚████╔╝ ██║██████╔╝      ███████╗ ██║
 ╚═════╝ ╚═════╝   ╚═══╝  ╚═╝╚═════╝       ╚══════╝ ╚═╝ SCRIPT V$SC\n";
//echo $HJ2." ◼ SILAHKAN COPAS LINK. JANGAN LUPA KOPI DAN ROKOK DI SIAPKAN\n";
//echo $green2." •SILAHKAN AMBIL PASSWORD DI DALAM VIDEO YT KAKEK.\n";
//echo $red2." •(The password is in the video)\n";
//echo "\033[1;31m ◼$P2 Link Password :$HJ2 $link[0]\n";

if ($link[0]==""){
echo " \033[1;91mKONEKSI TERPUTUS, SILAHKAN CEK KONEKSIMU\n";
echo " \033[3;91mConnection Lost, Please Check Your Connection\n";
exit;
}
if ($pass == 'update'){
      echo $HJ2." ◼ \033[1;91mSCRIPT Anda Sudah Tidak Terhubung ke Server \033[1;92mSugiono Official \n";
      echo " ◼ \033[1;97mSilahkan Copy Paste Link \n\n";
      echo $HJ2." ◼ \033[1;97mLink Script Versi Update \033[1;92m$link[0]\n\n";
      exit;
}

if ($pass == 'off'){

      echo $M2." ◼ SCRIPT SEDANG OFFLINE atau MAINTENANCE \n";
      exit;
}else{
if($read == $pass){
      echo $HJ2." ▶ UPLOAD Password \r";
      sleep(5);
      system("xdg-open https://m.youtube.com/channel/UC1FnD8Y52LcT4jvEjeMdDDw");
        echo "\033[1;32m ◼ \033[1;31mPERHATIAN...!!!           \n";
        echo "\033[1;32m   TETAP PATUHI PROTOKOL KESEHATAN DENGAN 3M\n\n";
        echo "   \033[1;31m~\033[1;32mMENCUCI TANGAN\n";
        echo "   \033[1;31m~\033[1;32mMEMAKAI MASKER\n";
        echo "   \033[1;31m~\033[1;32mMENJAGA JARAK AMAN 1 METER DARI ORANG LAIN\n\n";
        echo "   DAN TETAP BERDO'A MEMOHON PERLINDUNGAN KEPADA \033[1;37mALLAH SWT \n";
        echo "   \033[1;32mSEMOGA KITA TERLINDUNGI DARI \033[1;31mCOVID-21\n\n";
      sleep(1);
}
elseif($read != $pass){
      //echo $putih2." •Jangan di skip videonya. anggap aja nonton film Jav\n\n";
      $save = fopen("key.txt", "w");
echo "\033[1;31m ◼$P2 Link Password :$HJ2 $link[0]\n";
echo $M2." ◼ \033[1;37mMASUKAN PASSWORD DI SINI : ".$M2;
$p = trim(fgets(STDIN));
if ($p==""){
exit;
}
echo $P2."\n Loading \033[1;31m▪\r";
sleep(1);
echo $P2." Loading \033[1;31m▪ \033[1;31m▪\r";
sleep(1);
echo $P2." Loading \033[1;31m▪ \033[1;31m▪ \033[1;31m▪ \r";
sleep(1);
if($pass == $p){
        fwrite($save, $p);
        echo $HJ2." ◼ OPEN SCRIPT SUCCESS            \r";
        system("xdg-open https://m.youtube.com/channel/UC1FnD8Y52LcT4jvEjeMdDDw");
        fclose($save);
        sleep(5);
        echo "\033[1;32m ◼ \033[1;31mPERHATIAN...!!!           \n";
        echo "\033[1;32m   TETAP PATUHI PROTOKOL KESEHATAN DENGAN 3M\n\n";
        echo "   \033[1;31m~\033[1;32mMENCUCI TANGAN\n";
        echo "   \033[1;31m~\033[1;32mMEMAKAI MASKER\n";
        echo "   \033[1;31m~\033[1;32mMENJAGA JARAK AMAN 1 METER DARI ORANG LAIN\n\n";
        echo "   DAN TETAP BERDO'A MEMOHON PERLINDUNGAN KEPADA \033[1;37mALLAH SWT \n";
        echo "   \033[1;32mSEMOGA KITA TERLINDUNGI DARI \033[1;31mCOVID-21\n\n";
        sleep(1);
        }else{
        echo $M2." ◼ GAGAL...!!!, MASUKIN PASSWORD YG BENER DONG. SILAHKAN COBA LAGI\n";
        exit;
        }
        }
}
sleep(1);
echo "$P2   Silahkan Klik \033[1;32mENTER \033[1;37mUntuk Melanjutkan ".$M2;
$kkk = trim(fgets(STDIN));
system("clear");
echo "\033[1;92m";
system("toilet -f wideterm -F border ' SCRIPT MINING CRYPTO DOGECOIN '");
//system("toilet -f  -F border  'SUGIONO'");
//system("ctrl+l");
echo $M2.$baner1 = " @@@@@@ @@@  @@@  @@@@@@@  @@@  @@@@@@  @@@  @@@  @@@@@@$HJ2 SERVER ON
\033[1;31m!@@     @@!  @@@ !@@       @@! @@!  @@@ @@!@!@@@ @@!  @@@
 !@@!!  @!@  !@! !@! @!@!@ !!@ @!@  !@! @!@@!!@! @!@  !@!
    !:! !!:  !!! :!!   !!: !!: !!:  !!! !!:  !!! !!:  !!!
 ::.: :   :.:: :   :: :: :  :    : :. :  ::    :   : :. :
\033[1;37m SCRIPT VERSION\033[1;31m $SC ";
echo $P2."                DATE ".$HJ2.date("d.m.Y ").$P2."   TIME ".$HJ2.date("H:i:s")."\n";
echo " ===============================\033[1;31m404\033[1;32m===============================";
echo $baner2 = "
$P2 •Creator        :$HJ2 Kakek Sugiono
$P2 •Support By     :$HJ2 All Member
$P2 •Group Tele     :$HJ2 @SugionoShatoshi
$P2 •Channel YT     :$HJ2 Sugiono Official
$P2 •Donation Doge  :$M2 DFvVJc9pbty6Jrx94QuB7Da9LAsz7jnsso
$P2 =================================================================
$M2 •SCRIPT NOT FOR SALE •SCRIPT GRATIS GUNAKAN DENGAN BIJAK YA CUK
 •SEGALA RESIKO DI TANGGUNG CUCUK YA •KAKEK MAU KABUR DULU\n";
echo $B2." •••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••\n\n";


//include 'cfg.php';
$wl101="stop";
//include 'data.php';
//$WL = array(
//"$wl","$wl1","$wl2","$wl3","$wl4","$wl5","$wl6","$wl7","$wl8","$wl9","$wl10",
//"$wl11","$wl12","$wl13","$wl14","$wl15","$wl16","$wl17","$wl18","$wl19","$wl20");
//$wallet= current($WL);

//exit;
//include 'cfg.php';

echo " \033[1;91m[\033[1;92m1\033[1;91m] \033[1;97mAdd Wallet to \033[1;96mFaucetpay \n";
echo " \033[1;91m[\033[1;92m2\033[1;91m] \033[1;97mStart \033[1;92mMining \033[1;91m& \033[1;97mAuto \033[1;92mPayout \n";
echo " \033[1;91m[\033[1;92m3\033[1;91m] \033[1;97mLogin Server \033[1;91mBlockchair\n";
echo " \033[1;97mSelect Your Chose \033[1;90m: \033[1;91m";
$mtd = trim(fgets(STDIN));
echo "\n";

if ($mtd=="1"){

//$wal = array(
//"$w1","$w2","$w3","$w4","$w5","$w6","$w7","$w8","$w9","$w10",
//"$w11","$w12","$w13","$w14","$w15","$w16","$w17","$w18","$w19","$w20",
//"$w21","$w22","$w23","$w24","$w25","$w26","$w27","$w28","$w29","$w30",
//"$w31","$w32","$w33","$w34","$w35","$w36","$w37","$w38","$w39","$w40",
//"$w41","$w42","$w43","$w44","$w45","$w46","$w47","$w48","$w49","$w50");
//$wallet = current($wal);
while("true"){
echo " \033[1;97mWallet DOGE \033[1;90m: \033[1;91m";
$wallet = trim(fgets(STDIN));
if ($wallet==""){
exit;
}
echo " \033[1;97mLabel Name  \033[1;90m: \033[1;91m";
$no = trim(fgets(STDIN));
echo "\n";
//D8VgasnQKqwq2jcXwaB82eDqHQGN95iPEG
//$no = "0";
//while("true"){
$uaa = array(
"upgrade-insecure-requests: 1",
"user-agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36",
"cookie: session_token=".$session_token,
"cookie: faucetpay=".$faucetpay,
"cookie: remember_me=".$remember_me);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,
"https://faucetpay.io/page/user-admin/linked-addresses");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $uaa);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookiefp.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookiefp.txt");
$result = curl_exec($ch);
$tk1 = explode('name="token" value="',$result);
$token = explode('"',$tk1[1]);
echo " \033[1;90mToken = ".$token[0]."\r";
//sleep(3);
if ($token[0]==""){
echo " \033[1;91mPLEASE UPDATE YOUR COOKIE FAUCETPAY...\n";
exit;
}
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,
"https://faucetpay.io/page/user-admin/linked-addresses");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $uaa);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$datafp = "token=".$token[0]."&address=".$wallet."&label=".$no."&coin=4&submit=true";
curl_setopt($ch, CURLOPT_POSTFIELDS, $datafp);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookiefp.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookiefp.txt");
$result = curl_exec($ch);
//echo $result."\n";
$st = explode('Wohoo! ',$result);
$status = explode('.',$st[1]);
//echo $status[0]."\n";
if ($status[0]=="Your address has been linked successfully"){
echo " \033[1;97mSatus \033[1;91m•\033[1;92m".$status[0]."\r";
sleep(3);
echo " \033[1;92mSUCCESS \033[1;97mCreate Acount \033[1;95m".$wallet."       \r";
}else{
echo " \033[1;91mWALLET INVALID...!!!                           \r";
sleep(3);
echo "                                 \r";
$wallet="INVALID";
//exit;
}
//echo " \033[1;97mWallet DOGE \033[1;90m: \033[1;91m";
//$wallet = trim(fgets(STDIN));
//echo "\n";
$ua = array(
//"X-Requested-With: XMLHttpRequest",
"User-Agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36",
"Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
"Upgrade-Insecure-Requests: 1",
"Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7");
//"Cookie: PHPSESSID=8lftbauvh546f9b787qu1gjjg1;");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,
"https://cloud.dogeminer.fun/ajax_auth");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data = "username=".$wallet."&password=reki240210&reference_user_id=64011";
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);
        if ($result === 'success'){
        echo " Redirecting to your account...                       \r";
echo " \033[1;92mSUCCESS \033[1;97mCreate New \033[1;91mWallet \033[1;92m".$wallet."                               \n\n";
//exit;
//	sleep(3);
        //$("#result").html(success_message);
        //return window.location.href = '/';
        //return true;
}
//$no = $no+"1";
//$wallet = next($wal);
//$no = $no+"1";
//if ($wallet=="stop"){
//echo " \033[1;92mFINISH\n";
//exit;
//}
//echo " \033[1;92mSUCCESS \033[1;97mCreate Acount \033[1;95m".$wallet."       \n";
}
}

if ($mtd=="2"){

//$WL = array(
//"$wl","$wl1","$wl2","$wl3","$wl4","$wl5");
//$wallet= current($WL);
$WL = array(
"$wl1","$wl2","$wl3","$wl4","$wl5","$wl6","$wl7","$wl8","$wl9","$wl10",
"$wl11","$wl12","$wl13","$wl14","$wl15","$wl16","$wl17","$wl18","$wl19","$wl20",
"$wl21","$wl22","$wl23","$wl24","$wl25","$wl26","$wl27","$wl28","$wl29","$wl30",
"$wl31","$wl32","$wl33","$wl34","$wl35","$wl36","$wl37","$wl38","$wl39","$wl40",
"$wl41","$wl42","$wl43","$wl44","$wl45","$wl46","$wl47","$wl48","$wl49","$wl50",
"$wl51","$wl52","$wl53","$wl54","$wl55","$wl56","$wl57","$wl58","$wl59","$wl60",
"$wl61","$wl62","$wl63","$wl64","$wl65","$wl66","$wl67","$wl68","$wl69","$wl70",
"$wl71","$wl72","$wl73","$wl74","$wl75","$wl76","$wl77","$wl78","$wl79","$wl80",
"$wl81","$wl82","$wl83","$wl84","$wl85","$wl86","$wl87","$wl88","$wl89","$wl90",
"$wl91","$wl92","$wl93","$wl94","$wl95","$wl96","$wl97","$wl98","$wl99","$wl100","$wl101");
$wallet= current($WL);


while("true"){
//$wallet= next($WL);
//if ($wallet=="stop"){
//exit;
//}
$ua = array(
//"X-Requested-With: XMLHttpRequest",
"User-Agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36",
"Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
"Upgrade-Insecure-Requests: 1",
"Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7");
//"Cookie: PHPSESSID=8lftbauvh546f9b787qu1gjjg1;");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,
"https://cloud.dogeminer.fun/ajax_auth");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data = "username=".$wallet."&password=reki240210&reference_user_id=64011";
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);
        if ($result === 'success'){
        echo " Redirecting to your account...\r";
        sleep(3);
        //$("#result").html(success_message);
        //return window.location.href = '/';
        //return true;
}
//$wallet= next($WL);
//if ($wallet=="stop"){
//exit;
//}

//$no = $no+"1";
//if ($wallet=$wallet){
//$wallet = $wallet1;
//}
//echo " Wallet •• ".$wallet."\n";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,
"https://cloud.dogeminer.fun/dashboard");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);
$b1 = explode("$('#show_address').html('",$result);
$b = explode("'",$b1[1]);
if ($b[0]=$wallet){
echo " \033[1;97mWallet \033[1;91m•\033[1;92m".$b[0]."\r";
sleep(3);
//if ($b[0]==""){
//echo "\033[1;91m";
//system("toilet -f wideterm -F border '        LOST   CONNECTION       '");
//echo " \033[1;91mLOST CONNECTION\n";
//exit;
//}
}
$a1 = explode('id="getBalance" value="',$result);
$a = explode('"',$a1[1]);
echo " \033[1;97mYour Balance \033[1;91m[\033[1;92m".$a[0]."\033[1;91m] \033[1;95mDOGE                                \r";
//if ($a[0]==""){
//echo "\033[1;91m";
//system("toilet -f wideterm -F border '        LOST   CONNECTION       '"); 
//echo " \033[1;91mLOST CONNECTION\n";
//exit;
//}
//system("toilet -f wideterm -F border ' $a[0] '");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,
"https://cloud.dogeminer.fun/withdrawal");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data1 = "amount=".$a[0];
curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);
//$c1 = explode('<h2>Your earning balance: ',$result);
//$c = explode('</h2>',$c1[1]);
//if ($c[0]==""){
//echo "\033[1;91m";
//system("toilet -f wideterm -F border '        LOST   CONNECTION       '");
//echo " \033[1;91mLOST CONNECTION\n";
//exit;
//}
//echo " \033[1;97mYour Balance Now \033[1;91m[\033[1;92m".$c[0]."\033[1;91m] \033[1;95mDOGE\n";
$d1 = explode('&times;</span></button>',$result);
$d = explode('<',$d1[1]);
//echo " \033[1;97mStatus WD \033[1;91m•\033[1;92m".$d[0]."\n";
//if ($d[0]==""){
//echo "\033[1;91m";
//system("toilet -f wideterm -F border '        LOST   CONNECTION       '");
//echo " \033[1;91mLOST CONNECTION\n";
//exit;
//}
if ($d[0]=="Withdrawal paid successfully!"){
$e1 = explode('<input value="',$result);
$e = explode('"',$e1[1]);
echo "\033[1;92m";
system("toilet -f wideterm -F border '    SUCCESS  $a[0] DOGE    '");
echo " \033[1;92mSuccess Paid To \033[1;97mFaucetpay \033[1;91m[\033[1;95m".$e[0]."\033[1;91m]\n\n";
$wallet= next($WL);
}else{
//echo " \033[1;91mAn unexpected error has occurred and your payment cannot be made. Try again or contact the administrator.\n\n";
//$wallet= reset($WL);
echo " \033[1;91mWITHDRAW NOT ACC                                    \r";
}
//$wallet= next($WL);
if ($wallet=="stop"){
echo "\033[1;92m";
system("toilet -f wideterm -F border '             FINISH             '"); 
exit;
}
}
}

if ($mtd=="3"){

//$WL = array(
//"$wl","$wl1","$wl2","$wl3","$wl4","$wl5");
//$wallet= current($WL);
$WL = array(
"$wl1","$wl2","$wl3","$wl4","$wl5","$wl6","$wl7","$wl8","$wl9","$wl10",
"$wl11","$wl12","$wl13","$wl14","$wl15","$wl16","$wl17","$wl18","$wl19","$wl20",
"$wl21","$wl22","$wl23","$wl24","$wl25","$wl26","$wl27","$wl28","$wl29","$wl30",
"$wl31","$wl32","$wl33","$wl34","$wl35","$wl36","$wl37","$wl38","$wl39","$wl40",
"$wl41","$wl42","$wl43","$wl44","$wl45","$wl46","$wl47","$wl48","$wl49","$wl50",
"$wl51","$wl52","$wl53","$wl54","$wl55","$wl56","$wl57","$wl58","$wl59","$wl60",
"$wl61","$wl62","$wl63","$wl64","$wl65","$wl66","$wl67","$wl68","$wl69","$wl70",
"$wl71","$wl72","$wl73","$wl74","$wl75","$wl76","$wl77","$wl78","$wl79","$wl80",
"$wl81","$wl82","$wl83","$wl84","$wl85","$wl86","$wl87","$wl88","$wl89","$wl90",
"$wl91","$wl92","$wl93","$wl94","$wl95","$wl96","$wl97","$wl98","$wl99","$wl100","$wl101");
$wallet= current($WL);
//echo $wallet."\n";
//exit;
while("true"){
//$wallet= next($WL);
//if ($wallet=="stop"){
//exit;
//}
$ua = array(
//"X-Requested-With: XMLHttpRequest",
"User-Agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36",
"Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
"Upgrade-Insecure-Requests: 1",
"Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7");
//"Cookie: PHPSESSID=8lftbauvh546f9b787qu1gjjg1;");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,
"https://cloud.dogeminer.fun/ajax_auth");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data = "username=".$wallet."&password=reki240210&reference_user_id=64011";
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);
        if ($result === 'success'){
        echo " \033[1;91mRedirecting to your account...\r";
        sleep(3);
        echo " \033[1;92mSUCCESS \033[1;97mLogin \033[1;92m$wallet\n";
        $wallet=next($WL);
}
if ($wallet=="stop"){
echo "\033[1;92m";
system("toilet -f wideterm -F border '             FINISH            '"); 
exit;
}
}
}

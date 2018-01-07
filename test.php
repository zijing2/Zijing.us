<?php
//exec("node -v", $res, $code);
//var_dump($res, $code);
//exec('node /var/www/CS546/lab6',$res,$code);
/*exec("
echo 'Deploy success. Please visit <a href="http://zijing.us:6553">http://zijing.us:6553</a>';
sudo kill -9 $(sudo netstat -tlnp|grep 6553|awk '{print $7}'|awk -F '/' '{print $1}');
cd /var/www/CS546Final/website/;
npm start >> output.log &",$res,$code);
*/

exec("sh test.sh", $res, $code);


//exec("sudo kill -9 $(sudo netstat -tlnp|grep 6553|awk '{print $7}'|awk -F '/' '{print $1}')",$res,$code);
//exec('node /var/www/CS546/lab1.js & ',$res,$code);
//exec('node test.js >> output.log & ',$res,$code);
var_dump($res, $code);
?>

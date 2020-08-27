
<!--chapter 36 cookie-->
<?php
/*$value = '変数に保存した値です';
setcookie('save_message','Cookieに保存した値です',time()+60*60*24*14);
*/?>

<!--chapter 37 session-->
<?php
session_start();
$_SESSION['session_message'] = '値をセッションに保存しました';
?>

<!doctype html>
<html lang="ja">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>PHP</title>
</head>
<body>
<header>
    <h1 class="font-weight-normal">PHP</h1>
</header>

<main>
<h2>Practice</h2>
<pre>
<!-- ここにプログラムを記述します -->
<?php
//chapter 17
//$i = 1;
/*while ($i <= 365){
    print ($i . "\n");
    $i = $i+1 ;
}*/

//chapter 18
//print (date('n / j ( D )',time()+60*60*24) . "\n");
//print (date('n / j ( D )',strtotime('+2day')) . "\n");
//for($i=1;$i<=365;$i++){
//    $date = strtotime('+' . $i . 'day');
//    print (date('n / j ( D )', $date ));
//    print ("\n");
//}
//for($i=1;$i<=365;$i++):
//    $date = strtotime('+' . $i . 'day');
//    print (date('n / j ( D )', $date ));
//    print ("\n");
//endfor;

//chapter 19
//$week_name = ['日','月','火','水','木','金','土'];
////print (date('w'));
//print ($week_name[date('w')]);

//chapter20
//$fruits = [
//    'apple'=>'りんご',
//    'grape'=>'ぶどう',
//    'lemon'=>'レモン',
//    'tomato'=>'トマト',
//    'peach'=>'もも'
//];
////print ($fruits['grape']);
//foreach ($fruits as $english => $japanease){
//    print($english . ':' . $japanease . "\n");
//}

//chapter 21 if文

//print (date('G'));
//
//if (date('G') < 9 ){
//    print('現在受け付け時間外です。');
//}else{
//    print ('ようこそ！');
//}

//$x = '';
//if ($x) {
//    print ('xには文字が入っています。');
//}

//chapter 22 小数点

//print(floor(100/3000*100));//切り下げ
//print(ceil(100/3000*100));//切り上げ
//print(round(100/3000*100,3));//四捨五入

//chapter 23 sprintf

//$date = sprintf('%04d年 %02d月 %02d日',2018,1,23);
//print($date);

//chapter 24 ファイルに書き込み

//$success = file_put_contents('../../news_data/news.text','2018-06-01 ホームページをリニューアルしました。');
//
//if ($success) {
//    print ('ファイルへの書き込みが完了しました。');
//}else{
//    print('書き込みに失敗しました。');
//}

//chapter 25 ファイルの読み込み

//$news = file_get_contents('../../news_data/news.text');
//$news = "2018-06-04 ニュースを追加しました。" ."\n" . $news ;
//file_put_contents('../../news_data/news.text',$news);
//print($news);

//readfile('../../news_data/news.text')

//chapter 26 xmlを読み込む

/*$xmltree = simplexml_load_file('https://h2o-space.com/feed/');
foreach ($xmltree->channel->item as $item):
*/?><!--
・<a href="<?php /*print($item->link); */?>" >"<?php /*print ($item->title); */?>"</a>
--><?php
/*endforeach;*/

//chapter 27 jsonを読み込む

/*$file = file_get_contents('https://h2o-space.com/feed/json/');
$json = json_decode($file);

foreach ($json->items as $item):
*/?><!--
・<a href = "<?php /*print ($item->url); */?>"><?php /*print ($item->title); */?> </a>
--><?php
/*endforeach;
*/?>

<!--chapter 32-->

<!--    --><?php
/*    $age = '２０';
    $age = mb_convert_kana($age,'n','UTF-8');
    if (is_numeric($age)) {
        print ($age . '歳');
    } else {
        print ('※年齢が数字ではありません。');
    }
    */?>

<!--//chapter 33 正規表現-->

<!--    --><?php
/*    $zip = 'あうあうあー';

    $zip = mb_convert_kana($zip,'a','UTF-8');
    if (preg_match("/\A\d{3}[-]\d{4}\z/",$zip)) {
        print ('郵便番号:〒' . $zip);
    } else {
        print ('※　郵便番号を　123-4567　の形式でご記入下さい。');
    }
    */?>

<!--chapter 34 header -->
<!--    --><?php
//    header('Location: https://h2o-space.com');
//    exit();
//    ?>

<!--chapter 35 剰余算-->
<?php
/*$week = array('金','土','日','月','火','水','木');
//    print ($week[0]);
for ($i=1;$i<31;$i++){
    print ($week[$i%7]."\n");
}*/
?>

<!--<table>
    <?php
/*    for ($i=1;$i<=10;$i++){
        if ($i % 2) {
            print (' <tr style="background-color: #cccccc"> ');
        } else {
            print ('<tr>');
        }
        print ('<td>' . $i . '行目</td>');
        print ('</tr>');
    }
    */?>
</table>
-->

<!--chapter 36-->
<!--<a href="page02.php">Page2へ</a>-->

<!--chapter 37-->
    <p>セッションに値を保存しました。次のページに移動してみましょう</p>
    <a href="page02.php">page02へ</a>
</pre>
</main>
</body>
</html>
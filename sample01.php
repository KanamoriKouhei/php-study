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

print(floor(100/3000*100));//切り下げ
print(ceil(100/3000*100));//切り上げ
print(round(100/3000*100,3));//四捨五入

?>
</pre>
</main>
</body>
</html>
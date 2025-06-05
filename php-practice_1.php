<?php
// Q1 変数と文字列
$name = '井垣';
echo '私の名前は「' . $name . '」です。'

// Q2 四則演算
$num = 5*4;
echo $num;
echo $num/2;

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
echo '現在時刻は、' . date('Y年m月d日') . ' ' . date('H時i分s秒') . 'です。';

// Q4 条件分岐-1 if文
$device = 'mac';

if ($device === 'windows'){
  echo '使用OSは、' . $device . 'です。';
}
else{
  if ($device === 'mac'){
    echo '使用OSは' . $device . 'です。';
  }
  else
  echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 24;
$message = ($age < 18) ? '未成年です。' : '成人です。';

echo $message;

// Q6 配列
$kantoo = ['東京都','神奈川県','栃木県','千葉県','埼玉県','茨城県','群馬県'];
echo $kantoo[4] . 'と' . $kantoo[5] . 'は関東地方の都道府県です';

// Q7 連想配列-1
$kantoo = [
  '東京都'=>'新宿区',
  '神奈川県'=>'横浜市',
  '千葉県'=>'千葉市',
  '埼玉県'=>'さいたま市',
  '栃木県'=>'宇都宮市',
  '群馬県'=>'前橋市',
  '茨城県'=>'水戸市'];
foreach ($kantoo as $pref => $city){
  echo $city . "\n";
}

// Q8 連想配列-2
$kantoo = [
  '東京都'=>'新宿区',
  '神奈川県'=>'横浜市',
  '千葉県'=>'千葉市',
  '埼玉県'=>'さいたま市',
  '栃木県'=>'宇都宮市',
  '群馬県'=>'前橋市',
  '茨城県'=>'水戸市'];
  foreach ($kantoo as $pref => $city){
    if ($city === 'さいたま市'){
      echo $pref . 'の県庁所在地は、' . $city . 'です。';
    }
  }

// Q9 連想配列-3
$kantoo = [
  '東京都'=>'新宿区',
  '神奈川県'=>'横浜市',
  '千葉県'=>'千葉市',
  '埼玉県'=>'さいたま市',
  '栃木県'=>'宇都宮市',
  '群馬県'=>'前橋市',
  '茨城県'=>'水戸市'];
$kantoo['愛知県']='名古屋市';
$kantoo['大阪府']='大阪市';

foreach ($kantoo as $pref => $city){
  if ($city==='名古屋市' || $city==='大阪市'){
    echo $pref . 'は関東地方ではありません。' . "\n";
  }
  else{
    echo $pref . 'の県庁所在地は、' . $city . 'です。' . "\n";
  }
}

// Q10 関数-1
function hello($name)
{
  echo $name . 'さん、こんにちは。' . "\n";
}

hello('阿部');
hello('藤森');

// Q11 関数-2
function calcTaxInPrice($price)
{
  return $price*1.1;
}

$price = 1000;
$taxInPrice = calcTaxInPrice($price);
echo $price . '円の商品の税込価格は' . $taxInPrice . '円です。';

// Q12 関数とif文
function distinguishNum($number)
{
  return $number % 2;
}

$number1 = 11;
$answer1 = distinguishNum($number1);
if ($answer1 === 1){
  echo $number1 . 'は奇数です。' . "\n";
}
else {
  echo $number1 . 'は偶数です。' . "\n";
}

$number2 = 24;
$answer2 = distinguishNum($number2);
if ($answer2 === 1){
  echo $number2 . 'は奇数です。' . "\n";
}
else {
  echo $number2 . 'は偶数です。' . "\n";
}

// Q13 関数とswitch文
function evaluateGrade($Grade)
{
  return $Grade;
}

$Grade1 = 'A';
$Grade2 = 'B';
$Grade3 = 'C';
$Grade4 = 'D';
$Grade5 = '頑張ったで賞';
$Grades1 = evaluateGrade($Grade1);
$Grades2 = evaluateGrade($Grade2);
$Grades3 = evaluateGrade($Grade3);
$Grades4 = evaluateGrade($Grade4);
$Grades5 = evaluateGrade($Grade5);

switch ($Grades1){
  case 'A';
  case 'B';
    echo '合格です。' . "\n";
    break;
  
  case 'C';
    echo '合格ですが追加課題があります。' . "\n";
    break;
  
  case 'D';
    echo '不合格です。' . "\n";
    break;
  
  default:
    echo '判定不能です。講師に問い合わせてください。' . "\n";
    break;
}

switch ($Grades5){
  case 'A';
  case 'B';
    echo '合格です。' . "\n";
    break;
  
  case 'C';
    echo '合格ですが追加課題があります。' . "\n";
    break;
  
  case 'D';
    echo '不合格です。' . "\n";
    break;
  
  default:
    echo '判定不能です。講師に問い合わせてください。' . "\n";
    break;
}


?>
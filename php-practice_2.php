<?php
// Q1 tic-tac問題
for ($i = 1; $i <=100; $i++){
  if($i % 4 === 0 && $i % 5 ===0){
    echo "tic-tac\n";
  }
  elseif($i % 4 === 0){
    echo "tic\n";
  }
  elseif ($i % 5 === 0){
    echo "tac\n";
  }
  else{
    echo $i . "\n";
  }
}

// Q2 多次元連想配列
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

//問題１
echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。';

//問題２
foreach ($personalInfos as $index => $info){
  echo ++$index . '番目の' . $info['name'] . 'のメールアドレスは' . $info['mail'] . 'で、電話番号は' . $info['tel'] . 'です。' . "\n";
}

//問題３
$ageList = [25, 30, 18];
foreach ($personalInfos as $index => &$info){
  $info['age'] = $ageList[$index];
}
unset($info);

var_dump($personalInfos);

// Q3 オブジェクト-1
// Q3 オブジェクト-1
<?php

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }

    public function yamada()
    {
        echo "学籍番号{$this->studentId}の生徒は{$this->studentName}です。";
    }
}

$yamada = new Student(120,'山田');

$yamada->yamada();

// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($code)
    {
        echo "{$this->studentName}は{$code}の授業に参加しました。学籍番号:{$this->studentId}";
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
//問題１
$date = new DateTime();
$date->modify('-1 month');
echo $date->format('Y-m-d');

//問題２
$date = new DateTime();
$date1 = strtotime($date->format('Y-m-d'));
$date2 = strtotime("1992-04-25");

$date3 = ($date1 - $date2) / 86400;
echo 'あの日から' . $date3 . '日経過しました。';

?>
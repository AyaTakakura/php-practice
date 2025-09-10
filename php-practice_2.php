<?php
// Q1 tic-tac問題
echo "1から100までのカウントを開始します\n";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 4 === 0 && $i % 5 === 0) {
        echo "tic-tac\n";
    } elseif ($i % 4 === 0) {
        echo "tic\n";
    } elseif ($i % 5 === 0) {
        echo "tac\n";
    } else {
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
var_dump($personalInfos);
  //問題１
  echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。';
  //問題２
  foreach ($personalInfos as $index => $info) {
    $number = $index + 1;
    echo $number . '番目の' . $info['name'] . 'のメールアドレスは' . $info['mail'] .
         'で、電話番号は' . $info['tel'] . "です。\n";
  }
  //問題３
  $ageList = [25, 30, 18];

foreach ($personalInfos as $index => $info) {
    $personalInfos[$index]['age'] = $ageList[$index];
}

var_dump($personalInfos);

// Q3 オブジェクト-1
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
}
$student = new Student(120, '山田');
echo '学籍番号' . $student->studentId . '番の生徒は' . $student->studentName . 'です。';

// Q4 オブジェクト-2
class Student1
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    // attendメソッドを修正
    public function attend($subject)
    {
        echo $this->studentName . 'は' . $subject . 'の授業に参加しました。学籍番号：' . $this->studentId;
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
//問題1 今日の日付を作成
$date = new DateTime('now');

// 1ヶ月前に変更
$date->modify('-1 month');

// 指定フォーマットで出力
echo $date->format('Y-m-d');



//問題２ 今日の日付
$today = new DateTime('now');

// 基準の日付
$past = new DateTime('1992-04-25');

// 差を計算
$diff = $today->diff($past);

// 総日数を出力
echo 'あの日から' . $diff->days . '日経過しました。';



//追加問題1

//下記条件の下、「いけ、ネズミポケモンピカチュウ !! 10万ボルトだ !! 」とメソッドを編集·活用して出力してください。

//● 下記Pokemonクラスを基に、編集·活用して実装してください。
//● コンストラクタを作成し、各文字列をプロパティで呼び出すように実装してください。
//● $name にはポケモンの名前(ピカチュウ)を設定してください。
//●$element にはポケモンの属性(ネズミ)を設定してください。
//●$skillには技名(10万ボルト)を渡してください。

class Pokemon
{
  public $name;
  public $element;

  public function __construct($name, $element)
  {
    $this->name = $name;
    $this->element = $element;
  }

  public function attack($skill)
  {
    echo "いけ、{$this->element}ポケモン{$this->name} !! {$skill}だ !!";
  }
}

$pokemon = new Pokemon("ピカチュウ", "ネズミ");
$pokemon->attack("10万ボルト");




//追加問題２
//以下の条件の下、社員の情報と出勤記録を管理するためのEmployeeクラスを作成してください。

//要件（仕様）
//1.クラス名：Employee
//2.プロパティ（変数）
//a.employeeId（社員ID/正の整数）
//b.employeeName（社員名/任意の文字列）
//3.コンストラクタ
//a.a. 社員IDと社員名をプロパティから呼び出せるように実装
//4.メソッド
//a. checkIn()メソッド:実行時に「(任意の社員名)が出勤しました。社員ID:(任意の社員ID)」というメッセージを出力する。
// 5. 実行(こちらは変更しないでください)
$employee = new Employee(1, "山田太郎");
$employee->checkIn();
// 出力:(任意の社員名)が出勤しました。社員ID:(任意の社員ID)


class Employee
{
  public $employeeId;
  public $employeeName;

  public function __construct($employeeId, $employeeName)
  {
    $this->employeeId = $employeeId;
    $this->employeeName = $employeeName;
  }

  public function checkIn()
  {
    echo "{$this->employeeName}が出勤しました。社員ID:{$this->employeeId}";
  }
}

$employee = new Employee(1, "山田太郎");
$employee->checkIn();

?>
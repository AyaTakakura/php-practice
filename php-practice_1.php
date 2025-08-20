<?php
// Q1 変数と文字列
$name = '高倉';
echo '私の名前は「' . $name . '」です。';


// Q2 四則演算
$num = 5 * 4;
echo $num . "\n";
echo $num / 2;

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
$date = date('Y年m月d日 H時i分s秒');
echo '現在時刻は、' . $date . 'です。';

// Q4 条件分岐-1 if文
$device = 'mac';

if ($device === 'windows') {
    echo '使用OSは、windowsです。';
} else {
    if ($device === 'mac') {
        echo '使用OSは、macです。';
    } else {
        echo 'どちらでもありません。';
    }
}

// Q5 条件分岐-2 三項演算子
$age = 20;
echo ($age < 18) ? '未成年です。' : '成人です。';

// Q6 配列
$kanto = ['東京都', '神奈川県', '埼玉県', '栃木県', '千葉県', '茨城県', '群馬県'];
echo $kanto[3] . 'と' . $kanto[4] . 'は関東地方の都道府県です。';

// Q7 連想配列-1
$capitals = [
    '東京都'   => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県'   => '千葉市',
    '埼玉県'   => 'さいたま市',
    '栃木県'   => '宇都宮市',
    '群馬県'   => '前橋市',
    '茨城県'   => '水戸市',
];

foreach ($capitals as $capital) {
    echo $capital . "\n";
}

// Q8 連想配列-2
$capitals = [
    '東京都'   => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県'   => '千葉市',
    '埼玉県'   => 'さいたま市',
    '栃木県'   => '宇都宮市',
    '群馬県'   => '前橋市',
    '茨城県'   => '水戸市',
];
if (isset($capitals['埼玉県'])) { //isset=そのキーが存在していてnullでないか確認
    echo '埼玉県の県庁所在地は、' . $capitals['埼玉県'] . 'です。';
}
// Q9 連想配列-3
$capitals = [
    '東京都'   => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県'   => '千葉市',
    '埼玉県'   => 'さいたま市',
    '栃木県'   => '宇都宮市',
    '群馬県'   => '前橋市',
    '茨城県'   => '水戸市',
    '愛知県'   => '名古屋市',
    '大阪府'   => '大阪市',
];

$kanto = ['東京都', '神奈川県' , '千葉県' , '埼玉県' , '栃木県' , '群馬県' , '茨城県'];

foreach ($capitals as $pref => $city) {
    if (in_array($pref, $kanto)) {
        echo "{$pref}の県庁所在地は、{$city}です。\n";
    } else {
        echo "{$pref}は関東地方ではありません。\n";
    }
}


// Q10 関数-1
function hello($name) {
    return $name . 'さん、こんにちは。';
}

echo hello('ヤドン') . "\n";
echo hello('カラカラ') . "\n";

// Q11 関数-2
function calcTaxInPrice($price) {
    return $price * 1.1; 
}

$price = 1000; 
$taxInPrice = calcTaxInPrice($price);
echo $price . '円の商品の税込価格は' . $taxInPrice . '円です。';

// Q12 関数とif文
function distinguishNum($num) {
    if ($num % 2 === 0) {
        return $num . 'は偶数です。';
    } else {
        return $num . 'は奇数です。';
    }
}

echo distinguishNum(11) . "\n";
echo distinguishNum(24) . "\n";

// Q13 関数とswitch文
function evaluateGrade($grade) {
    switch ($grade) {
        case 'A':
        case 'B':
            return '合格です。';
        case 'C':
            return '合格ですが追加課題があります。';
        case 'D':
            return '不合格です。';
        default:
            return '判定不明です。講師に問い合わせてください。';
    }
}

echo evaluateGrade('A') . "\n";
echo evaluateGrade('E') . "\n";

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
    <p>
        <?php
        $nums = [15, 4, 18, 23, 10 ];

        // 昇順の関数 引数を配列型に指定
        function sort_nums (array $numbers) {
            // PHP標準関数'sort'を使用して配列型の引数'numbers'を昇順にソート
            sort($numbers);
            echo '昇順にソートします。<br>';
            // foreachで配列'numbers'を'number'として一つずつ取り出して処理（配列→要素）
            foreach ($numbers as $number) {
                echo "{$number}<br>";
            };
        }
        // 降順の関数
        function rsort_nums (array $numbers) {
            rsort($numbers);
            echo '降順にソートします。<br>';
            foreach ($numbers as $number) {
                echo "{$number}<br>";
            };
        }
        
        // 論理型(boolean)を利用してソート方向の選択と選択したソート処理をできる関数　第一引数は配列　第二引数は論理型に指定
        function sort_2way (array $array,bool $order) {
            if ($order == true) {
                sort_nums($array);
            } else {
                rsort_nums($array);
            }
        }

        sort_2way($nums, true);
        sort_2way($nums, false);
        
        ?>
    </p>
</body>
</html>
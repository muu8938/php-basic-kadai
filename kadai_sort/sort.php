<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていく
        $nums = [15, 4, 18, 23, 10 ];

        function sort_2way($array, $order) {

                // 引数$orderはTRUE(昇順)か
                if($order) {

                // メッセージを表示する「昇順にソートします。」
                echo "昇順にソートします。<br>";

                // 引数$arrayを昇順にソート
                sort($array);
                foreach ($array as $num) {
                    echo $num . '<br>';
                }

                } else {

                // 引数$orderがfalse（降順）の場合「降順にソートします。」
                    echo "降順にソートします。<br>";

                    // 引数$arrayを降順にソート
                    rsort($array);
                    foreach ($array as $num) {
                        echo $num . '<br>';
                    }
                }
            }

                // ソートした配列のデータを１行ずつ表示する
                sort_2way($nums, true);
                sort_2way($nums, false);
        ?>

    </p>
</body>

</html>
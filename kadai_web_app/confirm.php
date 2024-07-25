<?php

// ①form.phpのPostリクエストから入力情報を取得
// $_POSTは、PHPプログラムのどこでも使えるスーパーグローバル変数かつ連想配列
$name = $_POST['employee_name'];
$age = $_POST['employee_age'];
$department = $_POST['department'];

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎編</title>
</head>
<body>
    <h2>入力内容をご確認ください。</h2>
    <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>

    <table border="1">
        <tr>
            <th>項目</th>
            <th>入力内容</th>
        </tr>
        <tr>
            <td>お名前</td>
            <!-- PHPのコードはHTML構造の中に埋め込むことも可能 -->
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>年齢</td>
            <td><?php echo $age; ?></td>
        </tr>
        <tr>
            <td>所属部署</td>
            <td><?php echo $department; ?></td>
        </tr>
    </table>

    <p>
        <!-- onclickイベントはJavaScript -->
        <!-- クリック時にページ遷移を行いたい場合は、location.hrefプロパティを使います。onclick="location.href='hogehoge.html';" -->
        <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
        <!-- 1つ前のページに戻りたい場合はhistory.back()メソッド -->
        <button id="cancel-btn" onclick="history.back();">キャンセル</button>
    </p>
</body>
</html>
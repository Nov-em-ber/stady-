<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        // ①配列コンストラクタ
        //-------------------------
        let list = new Array('山田','愛媛','20才');
        console.log(list)

        // 2 配列リテラル
        // ----------------------------
        let list2 = ['山田','愛媛','20才'];
        console.log(list2)

        // この2種類の配列の違いは一つだけ数値を格納しようとしたとき
        // 配列コンストラクタでnew Array(5)は５つ分の配列要素を用意するという意味になる
        // 配列リテラルで5という数値を配列に格納する意味になる
        // JavaScriptで配列を扱う際には特に理由がないかぎり配列リテラルを使うようにする

        // 連想配列について
        // 配列との違いは｛｝を使うこと [:]
        //------------------------------------
        let list3 = {名前:"山田",住所:"愛媛",年齢:"20才"}
        console.log(list3)
    </script>
</body>
</html>
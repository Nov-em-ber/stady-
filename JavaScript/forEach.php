<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>forEach</h1>
    <script>
        'use strict';
        // forEach(配列)
        // --------------------------
        var list = new Array('山田','愛媛','20才');
        list.forEach(function( value ){
            console.log(value);
        });

        // forEach(連想配列) Object.keysという関数を使います
        // {}の中でキーの名称を記載
        // 値を取得したいとき配列名[キー]
        // キー名に対する値を取得することができる
        // --------------------------------
        var list2 = {名前:"山田",住所:"愛媛",年齢:"20才"}
        Object.keys(list2).forEach(function(key){
            console.log(key + '=' + list2[key]);
        });
    </script>
</body>
</html>
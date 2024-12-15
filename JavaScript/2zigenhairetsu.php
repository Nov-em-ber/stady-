<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>2次元配列について</h1>
    <script>
        'use strict';
        //2次元配列について
        // ----------------------
        let lists = [
            {名前:'山田' , 住所:'愛媛' , 年齢:'20才'},
            {名前:'井上' , 住所:'香川' , 年齢:'36才'},
            {名前:'佐藤' , 住所:'高知' , 年齢:'42才'},
        ];

        // forで表示
        for(let i = 0; i < lists.length; i++){
            Object.keys(lists[i]).forEach(function(key){
                console.log(key + '=' + lists[i][key])
            });
        }
    </script>
</body>
</html>
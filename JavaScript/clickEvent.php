<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .box {
            width: 100px;
            height: 100px;
            background: skyblue;
            cursor: pointer;
            transition: 0.8s;
        }
        .circle {
            background: pink;
            border-radius: 50%;
            transform: rotate(360deg);
        }
    </style>
</head>
<body>
    <h1>クリックイベント</h1>
    クリックするとcircleのクラスを追加するクリックイベント
    <div class="box" id="target"></div>
    <script>
        'use strict' // これは的確なエラーチェックをしてくれる
        document.getElementById('target').addEventListener('click' , () =>{
            document.getElementById('target').classList.toggle('circle');
        });

        // クラスを削除するイベントリスナー 
        document.getElementById('removeButton').addEventListener('click', () => { 
            document.getElementById('target').classList.remove('circle'); 
        });
    </script>
</body>
</html>
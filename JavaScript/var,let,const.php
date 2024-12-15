<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- var,let,constについて -->
    <script>
        var hoge ="varで定義";
        console.log(hoge); // varで定義が出力される
        // --------------------------------------
        if (true) {
            var fuga = "ifの中で定義";
        }
        console.log(fuga); // ifの中で定義が出力される
        //--------------------------------------

        var fuga = "最初の宣言";
        var fuga = "２回目の宣言";
        console.log(fuga); // ２回目の宣言が出力される(上書きされる)
    </script>
</body>
</html>
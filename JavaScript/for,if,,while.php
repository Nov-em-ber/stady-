<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        // PHPで変数を扱うときには[$]を入れていましたが
        // JavaScriptでは必要ない

        // if文(phpと一緒です)
        //-----------------------------
        let line = 30;
        let score = 15;
        if(line >= score){
            alert("赤点");
        }

        // elseif & else文
        //-----------------------------
        score = 30;
        if(line > score){
            alert("赤点");
        }else if(score == 100){
            alert("満点");
        }else{
            alert("合格");
        }

        // swich文
        //----------------------------
        var pref = "京都";
        switch (pref){
            case '東京':
                break;
            case '大阪':
                break;
            case '京都':
                break;
            case '神奈川':
                break;
            default:
                break;
        }



    </script>
</body>
</html>
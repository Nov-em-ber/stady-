<!DOCTYPE html>
<html lang="ja">
<head>
    <title>Get Clicked Element</title>
</head>
<body>
    <button class="myButton">ボタン1</button>
    <button class="myButton">ボタン2</button>
    <button class="myButton">ボタン3</button>
    <script>
        let buttons = document.querySelectorAll('.myButton');
        buttons.forEach(button => {
            button.addEventListener('click', function(event) {
                console.log('クリックされた要素:', event.target);
            });
        });
    </script>
</body>
</html>
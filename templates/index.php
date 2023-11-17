<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>To Do List</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <style>
        body {
            margin: 50px 0 0 0;
            padding: 0;
            width: 100%;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            text-align: center;
            color: #8d6c6c;
            font-size: 18px;
        }

        h1 {
            color: #666b32;
            letter-spacing: -3px;
            font-family: '', sans-serif;
            font-size: 150px;
            font-weight: 400;
            margin-bottom: 0;
        }
    </style>
</head>
<body>
<h1>To Do List</h1>
<div>What do i need to do?</div>
<form action="/action_page.php" method="get">
    <form autocomplete="off" method="POST" action="TodoModel" id="adddolist">
        <input type="text">
    <input type="submit" value="Submit">
</form>
</form>
<br>
<?php
echo \App\ViewHelpers\TodoHelper::renderTodo($todolist);
?>


</body>
</html>

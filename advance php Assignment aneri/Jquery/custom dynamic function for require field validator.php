<<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript" src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js"></script>

<script>
    $(document).ready(function(){
        $("#commentForm").validate();
    });

    function addInput() {
        var obj = document.getElementById("list").cloneNode(true);
        document.getElementById('parent').appendChild(obj);
    }
</script>

    </head>
    <body>

<form id="commentForm" method="get" action="">
    <p id="parent">
        <input id="list"  class="required" />
    </p>

    <input class="submit" type="submit" value="Submit"/>
    <input type="button" value="add" onClick="addInput()" />
</form>
</body>
</html>

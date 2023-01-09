<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--jQuery code to show animate() method-->
<script>
$(document).ready(function () {
$("#b1").click(function () {
$("#box").animate({
width: "300px"
});
$("#box").animate({
height: "300px"
});
});
});
</script>
<style>
div {
width: 100px;
height: 100px;
background-color: green;
}

#b1 {
margin-top: 10px;
}
</style>
</head>

<body>
<div id="box"></div>
<!-- click on this button -->
<button id="b1">Click Here !</button>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>table color</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='js/jquery.js'></script>
    <script>
        $(document).ready(function()
        {
            $("tr:even").css("background-color","#42f56f");
            $("tr:odd").css("background-color","#4287f5");
        });
    </script>
</head>
<body>
    <table align="center" width="80%" border="2" cellpadding="10" cellspacing="5">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>State</th>
        </tr>
        
        <tr align="center">
            <td>1</td>
            <td>Aneri Parikh</td>
            <td>Gujarat</td>
        </tr>
        <tr align="center">
            <td>2</td>
            <td>Mahek parekh</td>
            <td>Himachal Pradesh</td>
        </tr>
        <tr align="center">
            <td>3</td>
            <td>Sumedha</td>
            <td>Karnataka </td>
        </tr>
        <tr align="center">
            <td>4</td>
            <td>Arjun</td>
            <td>Kerala </td>
        </tr>
    </table>
</body>
</html>
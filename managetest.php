<html>

<head>
<title> MANAGER TEST PAGE </title>
</head>

<body>

<h1> MANAGE TEST PAGE</h1>

<form action="php_func/display_all.php" method="post">
        <fieldset>
            <legend>Display STUDENT</legend>
			<a href="php_func/display_all.php">
            <input type="button" name="display"  value="display attempts">
            </a>
        </fieldset>
</form>

<form action="php_func/search_student.php" method="post">
        <fieldset>
            <legend>Search Student</legend>
            <input type="text" name="findstd" id="findstd" placeholder="enter student id or name"> &nbsp;
            <input type="submit" value="Find!">
        </fieldset>
</form>

<form action="php_func/display_above.php" method="post">
        <fieldset>
            <legend>Display Student Score Above 100%</legend>
            <a href="php_func/display_above.php">
            <input type="button" name="display"  value="display attempts">
            </a>
        </fieldset>
</form>

<form action="php_func/display_below.php" method="post">
        <fieldset>
            <legend>Search Student Below 50%</legend>
            <a href="php_func/display_below.php">
            <input type="button" name="display"  value="display attempts">
            </a>
        </fieldset>
</form>

<form action="php_func/delete_for_student.php" method="post">
        <fieldset>
            <legend>Delete Attemp Record for Student</legend>
            <input type="text" name="del_atte" id="del_atte" placeholder="enter student id or name"> &nbsp;
            <input type="submit" value="DELETE!">
        </fieldset>
</form>

</body>

</html>
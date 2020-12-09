<?php
session_start();
	$bookmarks = (isset($_SESSION['newBookmark'])) ? $_SESSION['newBookmark'] : array();
	$URL = (isset($_SESSION['newURL']))? $_SESSION['newURL'] : array();
    if(isset($_POST['submit'])){
        if(!empty($_POST['web']) and !empty($_POST['url'])){
        	array_push($bookmarks, $_POST['web']);
			$_SESSION['newBookmark'] = $bookmarks;
			array_push($URL, $_POST['url']);
			$_SESSION['newURL'] = $URL;
	}
}

    if (isset($_POST['clear'])){
		$_SESSION['newBookmark']  = [];
		$_SESSION['newURL'] = [];
    }
    if (isset($_POST['x'])){
		array_splice($_SESSION['newBookmark'], $_POST['id'],1);
		array_splice($_SESSION['newURL'], $_POST['id'],1);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bookmark</title>
</head>
<style>
.heading{
	width: 50%;
	margin: 30px auto;
	text-align: center;
	border: 5px solid #6B8E23;
	border-color: #FF0000 #00FF00 #0000FF #000000;
	border-radius: 10px;
	
	
}
form {
	width: 50%; 
	margin: 30px auto; 
	border-radius: 5px; 
	padding: 10px;
	background: #E0FFFF;
	border: 1px solid #6B8E23;
}
form p {
	color: red;
	margin: 0px;
}
.input {
	width: 80%;
	height: 15px; 
	padding: 10px;
	border: 2px solid #008B8B;
	border-radius: 2 px;
}
.btn {
	margin-top:1%;
	height: 39px;
	background: #E0FFFF;
	color: 	#6B8E23;
	border: 2px solid #6B8E23;
	border-radius: 5px; 
	padding: 5px 20px;
}

table {
    width: 50%;
    margin: 30px auto;
    border-collapse: collapse;
}

th {
	font-size: 15px;
	color: 	#800080;
}

tr {
	border-bottom: 1px solid #cbcbcb;
}


th, td{
	border: none;
    height: 10px;
    padding: 2px;
}

tr:hover {
	background: #E9E9E9;
}

.task {
	text-align: left;
}

.delete{
	text-align: center;
	
}
.delete input{
	background:transparent;
	border-radius: 3px;
	text-decoration: none;
	border:none;
}.web{
	text-decoration: none;
	color:black;
}
</style>
<body>
<div class="heading">
		<h2 style="font-style: 'Hervetica';">Bookmark Website</h2>
	</div>
	<form method="post" action="bookmark.php" class="input_form">
		<input type="text" name="web" placeholder="Enter Website Name" class="input">
        <input type="text" name="url" placeholder="Enter Website URL" class="input"><br>
		<input type="submit" name="submit" value="Add Bookmark" class="btn">
        <input type="submit" name="clear" value="Clear All" class="btn">
	</form>
    <table>
	<thead>
		<tr>
			<th>Bookmark</th>
			<th style="width: 60px;">Action</th>
		</tr>
	</thead>
	<tbody>
	<?php if(isset($_SESSION['newBookmark'])and isset($_SESSION['newURL'])):
		for($id= 0; $id < count($_SESSION['newBookmark']); $id++):
		?>
		<tr>
		<?php $link1="https://www.".$_SESSION['newURL'][$id];
		$webname = $_SESSION['newBookmark'][$id];?>
		<td class="task">
		<?php
			echo "<a href='$link1' class='web'> $webname</a>";
			?></td>
           <td class="delete"><form action="bookmark.php" method="POST">
                <input type="hidden" name ="id" value="<?php echo $id;?>">
                <input name="x" type="submit" value="x">
            </form></td> 
			</tr> 
        <?php endfor?>
    <?php endif?>
	</tbody>
</table>
</body>
<tr>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Пример работы PHPMAILER</title>
</head>
<body>
<form enctype="multipart/form-data" method="post" id="form">
 <p>Имя</p>
 <input placeholder="Представьтесь" name="name" type="text" >
 <p>Email</p>
 <input placeholder="Укажите почту" name="email" type="text" >
 <p>Сообщение</p>
 <textarea name="text"></textarea>
 <p>Прикрепить файлы</p>
 <input type="file" name="myfile[]" multiple id="myfile">
 <p><input value="Отправить" type="submit"></p>
</form>
</body>
</html>

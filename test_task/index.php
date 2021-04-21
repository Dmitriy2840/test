<!DOCTYPE html>
<html>

<head>
	<title> Test </title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="form.js"></script>
	<link rel="stylesheet" type="text/css" href="css.css">
	<link rel="stylesheet" href="bootstrap.min.css">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
	
	<br>	
	<div class="col-auto" style="width:500px; left:35%; position: absolute;">
		<form action="form.php" method="post"  >
					<select class="custom-select custom-select-lg mb-3"  name="category">
		  				  <option  selected>Выберите категорию</option>
						  <option value="Спорт">Спорт</option>
						  <option value="Киберспорт">Киберспорт</option>
						  <option value="Online games">Online games</option>
					</select><br>
					<input type="text" name="firstname" class="form-control" placeholder="Имя"  ><br>
					<input type="text"  name="lastname" class="form-control" placeholder="Фамилия" ><br>
					<input type="email"  name="email" class="form-control" placeholder="Укажите E-mail" ><br>
				<div  class="form-check form-check-inline">
					<label for="contactChoice2" class="form-check-label">Мужчина</label>
					<input type="radio" class="form-check-input"  name="gender"   value="Мужчина" >
					<label for="contactChoice2" class="form-check-label">Женщина</label>	
					<input type="radio" class="form-check-input" name="gender" value="Женщина" > 
				</div><br>
			<br><input type="text" name="birthDate" class="form-control" placeholder="Укажите возраст" maxlength="200" size="50" ><br>
			<input type="submit" name="done"  class="btn btn-primary my-1" value="Отправить"><br>

		</form>
	</div>



</body>
</html>
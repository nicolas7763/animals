<!DOCTYPE html>
<html>
<head>
	<title>animals</title>
</head>
<body>
<h1>Генная инженерия для начинающих (жми F5!).</h1>
<h2><a href="https://ru.wikipedia.org/wiki/Четвериков,_Сергей_Сергеевич"> Серге́й Серге́евич Четверико́в</a> нервно курит в сторонке!</h2>
<?php
$Eurasia = array('Helarctos malayanus', 'Melursus ursinus', 'Neofelis nebulosa',
 'Prionailurus bengalensis', 'Uncia uncia', 'Cuon alpinus', 'Canis lupus arabs', 
 'Catopuma temminckii', 'Vulpes cana', 'Saiga tatarica');

$Africa = array('Panthera leo', 'Rhinocerotidae', 'Loxodonta africana', 'Panthera pardus',
 'Lemuridae', 'Okapia johnstoni', 'Giraffa camelopardalis', 'Cephalophinae', 'Hippotigris',
  'Crocodylia');

$North_America = array('Mammuthus columbi', 'Cervus elaphus subspp', 'Gulo gulo', 'Ursus americanus',
 'Ondatra zibethicus', 'Castor canadensis', 'Caluromys', 'Alligator', 'Bison bison', 'Canis latrans');

$South_America = array('Vicugna pacos', 'Inia geoffrensis', 'Vicugna', 'Chrysocyon brachyurus',
 'Lama guanicoe', 'Choloepus didactylus','Potos flavus', 'Nasua', 'Leopardus pardalis', 'Tremarctos ornatus');

$Australia = array('Macropus giganteus', 'Phascolarctos cinereus', 'Tachyglossidae', 'Dendrolagus',
 'Canis lupus dingo', 'Phalanger', 'Vombatidae', 'Tarsipes rostratus', 'Ornithorhynchus anatinus', 'Petaurus australis');

$Antarctica = array('Phoca vitulina', 'Mirounga leonina', 'Leptonychotes weddellii', 'Ommatophoca rossii',
 'Lobodon carcinophagus', 'Balaenoptera musculus', 'Physeter macrocephalus', 'Aptenodytes forsteri',
  'Spheniscus mendiculus', 'Eudyptes chrysolophus');

$animals = array('Eurasia'=>$Eurasia, 'Africa'=>$Africa, 'North_America'=>$North_America,
 'South_America'=>$South_America, 'Australia'=>$Australia, 'Antarctica'=>$Antarctica);

$a= array();//создаем пустой массив для значений прошедших проверку

foreach ($animals as $country => $stats) {
	foreach ($stats as $value) {
		$findme= " ";//указываем что ищем пробел

		$pos= strpos($value, $findme);

		if ($pos ===false) {
			unset($value);//если проверка не пройдена значение удаляем
		}else{
			$a["$country"][] ="$value";//добавляем в пустой массив значения прошедшие проверку
		}
	}
}
$e =array();//создаем пустой массив для второго слова названия

$c= array();//создаем пустой массив для первого слова названия

foreach ($a as $country => $stats) {//перебираем массив животных из двух и более строк
	foreach ($stats as $value) {
		$b = explode(" ", $value);//разбиваем

		$firstName=array_shift($b);//вырезаем первое слово и записываем в переменную

		$lastName=array_shift($b);

		$e[]= "$lastName"; 

		$c[] = "$firstName";//создаем массив с первыми словами названий животных

		shuffle($e);//перемещиваем элементы массива

		shuffle($c);

		$h = array_combine($c, $e);//комбинируем перемешанные элементы и записываем в массив
	}
}
	$count = count($h);//считаем количество элементов массива
	foreach ($h as $key => $value){
		echo "$key  $value ";

		if (--$count > 0) {
			echo ", ";

		}else{
			echo ". ";
	}
}
?>

</body>

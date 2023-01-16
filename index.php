

<?php
//Primitives
$name = "Jonas";  //kintamasis name ir jam priskirta reiksme
$lastName = "Jonaitis";
$age = 30; //integer
$average = 42.50; // Float
$isONLine = false;

//Advanced data types
$students = ["Ieva", "Toma", "Greta"];

echo "Sveiki";

var_dump($name);
var_dump($age);
var_dump($average);
var_dump($isOnLine);
var_dump($students);


print_r($students);

foreach ($students as $student){
    echo "$student<br>";
}
echo $name.$lastName;
echo "Vardas $name. Pavarde $lastName.";

echo "Filmo pavadinimas: \"Alice in Bordeland\"";

?>
$students = ["Ieva", "Toma", "Greta"];
<?php foreach($students as $student):?>
    <li><?$student;?></li>
    <?php endforeach;?>

<div>Testas</div>;

<div>
    <h1><?= "Sveiki $name";?></h1>
    <ul>
        <li><?= $name;?></li>    
        <li><?= $age;?></li>
        <li><?= $average;?></li>
        <li><?= $isONLine;?></li>
        <li><?= $students;?></li>
        <li><?= $students;?></li>
    </ul>
    <pre>
        <?php print_r($students)?>
    </pre>
</div>


<?php



$eilute = " labas rytas, man patinka html, css, javascript, react, python ir php! ";
$ilgis = strlen($eilute);
echo $eilute;
echo $ilgis;






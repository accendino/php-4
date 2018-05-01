<?php

// FIRST
function greetingOne($name = "Гость") {
	$day = getdate();	
	
	if ( $day['wday'] > 0 and $day['wday'] < 6 ) {
		echo "Привет, $name! Хорошего и продуктивного рабочего дня!<br><br>";
	} else {
		echo "Привет, $name! Желаю вам хорошо отдохнуть в этот день!<br><br>";
	}	
}
greetingOne();
greetingOne("Olya");
echo "<br><br><br><br><br><br>";

// SECOND
function greetingTwo( $name = "Гость") {
	$day = getdate();
	//print_r($day);
	
	switch ( $day['wday'] ) {
		case '1': case '2': case '3': case '4': case '5':
			echo "Привет, $name! Хорошего и продуктивного рабочего дня!<br><br>";
			break;
		
		case '0': case '6':
			echo "Привет, $name! Желаю вам хорошо отдохнуть в этот день!<br><br>";
			break;

		default:
			echo "Привет, $name! В неделе не может быть " . $day['wday'] . " дней!<br><br>";
			break;
	}
}

greetingTwo();
greetingTwo("Olya");
echo "<br><br><br><br><br><br>";

// THIRD
function greetingThree( $name = "Гость") {
	$day = getdate();
	//print_r($day);
	
	switch ( $day['wday'] ) {
		case '1': ; case '2': ; case '3': ; case '4': ; case '5': 
		echo "Привет, $name! Хорошего и продуктивного рабочего дня!<br><br>"; 
		break;
		
		case '0': ; case '6': 
		echo "Привет, $name! Желаю вам хорошо отдохнуть в этот день!<br><br>"; 
		break;

		default: break;
	}
}

greetingThree();
greetingThree("Olya");

?>
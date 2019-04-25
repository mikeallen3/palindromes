<?php 
	
	//Get file path for input.txt in work folder
	$file_path = getcwd();
	$input_file = $file_path . '/input.txt'; //Using this file for testing, replace as needed for testing

	var_dump($input_file);

	//Read entire file into array
	$lines = file($input_file);

	//New array declaration for storing individual lines
	$new_array = array();

	//Loop through file lines and echo each line individually
	foreach($lines as $line) {
		//Original unmodified line
		$original_line = str_replace(array("\n", "\r"), '', $line);

		//Remove white-space, special characters, and make all lowercase
		$line = str_replace(' ', '', $line);
		$line = strtolower($line);
		$line = preg_replace('/[^A-Za-z0-9\-]/', '', $line);

		//Create new line in reverse
		$newstring = strrev($line);

		//Array of Palindromes storage
		$all_palindromes = array();

		//Storage of for storing temporary string
		$temp_string = '';

		//Storage of string length
		$temp_string_length = 0;

		//Create temporary array made from input list item to loop thru
		$temp_array = str_split($line);

		//Loop through temporary array to check for Palindromes
		foreach($temp_array as $character) {
			$temp_string .= $character;

			//If there is a palindrome add to an array
			if(strlen($temp_string) > 1 && $temp_string == strrev($temp_string)) {
				$all_palindromes[] = $temp_string;
				$temp_string_length = $temp_string_length + strlen($temp_string);
			}
		}

		//Only add to JSON file if the string had a palindrome
		if(isset($all_palindromes) ){
			//Build new array for json file
			$new_array[] = array(
				'Line' => $line,
				'Palindromes' => $all_palindromes,
				'Total Characters' => $temp_string_length, 
			);

			//Make Json object
			$myJSON = json_encode($new_array);
		}

	}

	//Set the filename
	$json_file_name = $file_path . '/generated_list.json';

	//open or create the file
	$handle = fopen($json_file_name,'w+');

	//write the data into the file
	fwrite($handle, $myJSON);

	//close the file
	fclose($handle);
?>
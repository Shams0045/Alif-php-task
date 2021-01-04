<?php 

require_once('IO.php');
require_once('Operator.php');

	$args = IO::getArguments();
 
	$values = IO::getParsedFileContent($args['filename']);

	$negative = [];
	$positive = [];
	
	for ($i = 0, $iMax = count($values); $i < $iMax; $i += 2) {
		switch ($args['operation']) {
			case '+':
				$value = Operator::plus((float)$values[$i], (float)$values[$i + 1]);
				break;
			case '-':
				$value = Operator::minus((float)$values[$i], (float)$values[$i + 1]);
				break;
			case '/':
				$value = Operator::divide((float)$values[$i], (float)$values[$i + 1]);
				break;
			case '*':
				$value = Operator::multiply((float)$values[$i], (float)$values[$i + 1]);
				break;
		}
		if ($value < 0) {
			$negative[] = $value;
		} else {
			$positive[] = $value;
		}
	}

IO::writeToFile('negative.txt', $negative);
IO::writeToFile('positive.txt', $positive);


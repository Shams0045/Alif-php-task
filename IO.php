<?php
declare(strict_types=1);

class IO
{ 
	public static function getArguments(): array
	{
		global $argv;

		[$issuer, $filename, $operation] = $argv;

		return [
			'filename' => $filename,
			'operation' => $operation,
		];
	}

	 
	public static function getParsedFileContent(string $filename): array
	{
		$fileContent = file_get_contents($filename);

		$values = explode(' ', $fileContent); 

		return $values;
	}


	public static function writeToFile(string $fileName, $value): void {
		if (is_array($value)) {
			$value = implode("\n", $value);
		}
		$result = file_put_contents($fileName, $value.PHP_EOL);
	}
}
 
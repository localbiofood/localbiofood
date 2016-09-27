<?php

namespace App\Http\Controllers;

class WebsitesController extends Controller
{


	public function show()
	{
		$url = 'https://m.ss.lv/lv/transport/moto-transport/motorcycles/honda/';
		$lines_array = file($url);
		$lines_string = implode('', $lines_array);

		$rows = $this->extractRows($lines_string);
	}

	private function extractData($rows)
	{
		foreach($rows as $row)
		{
			$columns = explode('<td', $row);
			dd($columns);
		}
	}


	private function extractRows($lines)
	{

		$lineArray = explode('<tr>', $lines);
		$rowArray = explode('<tr ', $lineArray[2]);

		array_forget($rowArray, 0);
		return $rowArray;
	}
}


<?php
/**
 * Coight 2018 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
// [START sheets_quickstart]
require __DIR__ . '/vendor/autoload.php';
	$client = new Google_Client();
    $client->setApplicationName('Google Sheets API PHP');
    $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
    $client->setAccessType('offline');
 	$client->setAuthConfig(__DIR__ . '/credentials.json');
	$service = new Google_Service_Sheets($client);
	$spreadsheetId = "1oMvz6XfgQpiL9ymL0qxIWcHVEay9UAr8ujMeP3UwSnY";
	
	$range = "Download";
	$values = [
	["This", "is","a", "new","row"],
	];
	$body = new Google_Service_Sheets_ValueRange([
	'values => $values'
	]);
	$params = [
	'valueInputOption' => 'RAW'
	];
	$insert =[
	'insertDataOption' => "INSERT_ROWS"
	];
	$result = $service -> $spreadsheets_values -> append(
	$spreadsheetId,
	$range,
	$body,
	$params,
	$insert
	);
	
// [END sheets_quickstart]

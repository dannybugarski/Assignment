<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

require(app_path().'/pms.php');  // The file containing the pms array is in the app directory. 
                                 // app_path() give us the path the the app directory
                                


// To do: Display search form
Route::get('/', function()
{

	return view('search');
});


// To do: Perform search and display results
Route::post('search', function()
{
  // Fetch form data
$name = $_POST["name"];
$year = $_POST["year"];
$state = $_POST["state"];


// call search() to perform search
function search($name, $year, $state) {
  $pms = getPms();
  
  
  // Filter $pms by $name
  if (!empty($name)) {
    $results = array();
    foreach ($pms as $pm) {
      if (stripos($pm['name'], $name) !== FALSE) {
        $results[] = $pm;
      }
    }
    $pms = $results;
  }

  // Filter $pms by $year
  if (!empty($year)) {
    $results = array();
    foreach ($pms as $pm) {
      if (strpos($pm['from'], $year) !== FALSE || 
          strpos($pm['to'], $year) !== FALSE) {
        $results[] = $pm;
      }
    }
    $pms = $results;
  }

  // Filter $pms by $state
  if (!empty($state)) {
    $results = array();
    foreach ($pms as $pm) {
      if (stripos($pm['state'], $state) !== FALSE) {
        $results[] = $pm;
      }
    }
    $pms = $results;
  }

  return $pms;

}


  // call view to display search result
return view('results');
});


<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| LIST OF ROUTES AND FUNCTIONS USED IN MY ASSIGNMENT 
|
*/


//Get route, returns post list

Route::get('/', function() {
    $sql = "select * from item";
    $items = DB::select($sql);
    return view('items.item_list')->with('items', $items);
});

//Get route, returns post details

Route::get('item_detail/{id}', function($id){
    $item = get_item($id);
    return view('items.item_detail')->with('item', $item);
});


//Get route, returns the view to add a post

Route::get('add_item',function(){
    return view("items.add_item");

});


Route::get('recent_item', function() {
    $sql = "select * from item";
    $items = DB::select($sql);
    return view('items.recent_item')->with('items', $items);
});

Route::get('recent_post', function() {
    $sql = "select * from item";
    $items = DB::select($sql);
    return view('items.recent_post')->with('items', $items);
});

Route::get('documentation', function() {
    $sql = "select * from item";
    $items = DB::select($sql);
    return view('items.documentation')->with('items', $items);
});

Route::get('Er_diagram', function() {
    $sql = "select * from item";
    $items = DB::select($sql);
    return view('items.Er_diagram')->with('items', $items);
});


//Post route, enables the adding of a post, returns to front page

Route::post('add_item_action', function(){
    $summary = request('summary');
    $details = request('details');
    $fullname = request('Fullname');
    $datee = request('Datee');
    $id = add_item($summary, $details, $fullname, $datee);
    if ($id){
        return redirect(url("/"));
    } else {
        die("Error while adding item");
    }
});

//Get route, helps enable the editing of a post

Route::get('update_item/{id}', function($id){
    $item = get_item($id);
    return view("items.update_item")->with('item', $item);
});

//Post route, helps enable the editing of a post, returns to pront page

Route::post('update_item_action', function(){
    $id = request('id');
    $summary = request('summary');
    $details = request('details');
    update_item($id, $summary, $details);
    if ($id){
        return redirect(url("item_detail/$id"));
    } else {
        die("Error while adding item");
    }
});

//Get route, helps enable the deletion of a post

Route::get('delete_item/{id}', function($id){
    $id = request('id');
    // $item = get_item($id);
    delete_item($id);
    if ($id){
        return redirect(url("/"));
    } else {
        die("Error while adding item");
    }
});

//Function enables the deletion of a post

function delete_item($id) {
    $sql = "delete from item where id = ?";
    DB::delete($sql, array($id));
} 

//update post function

function update_item($id, $summary, $details) {
    $sql = "update item set summary = ?, details = ? where id = ?";
    DB::update($sql, array($summary, $details, $id));
}

//add post function

function add_item($summary, $details, $fullname, $datee){
    $sql = "insert into item (summary, details, Fullname, Datee) values (?, ?, ?, ?)";
    DB::insert($sql, array($summary, $details, $fullname, $datee));
    $id = DB::getPdo()->lastInsertId();
    return($id);
}

//get post function

function get_item($id){
    $sql = "select * from item where id=?";
    $items = DB::select($sql, array($id));
    if (count ($items)!= 1){
        die("Something has gone wrong, invalid query or result: $sql");
    }
    $item = $items[0];
    return $item;
}




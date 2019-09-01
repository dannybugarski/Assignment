@extends('layouts.master')

@section('title')
  item list
@endsection
  
@section('content')
  
    <h1>{{$item->summary}}</h1>
    <p>{{$item->details}}</p>

    <a href="{{url("delete_item/$item->id")}}">Delete Item</a>
    <a href="{{url("/")}}"">Home</a>
    <a href="{{url("update_item/$item->id")}}">Update item</a>
@endsection
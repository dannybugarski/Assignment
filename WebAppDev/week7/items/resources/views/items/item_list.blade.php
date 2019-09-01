@extends('layouts.master')

@section('title')
  item list
@endsection
  
@section('content')
<h1>Items</h1>
  @if ($items)
    <ul>
    @foreach($items as $item)
      <li><a href="{{url("item_detail/$item->id")}}">{{$item->summary}}</a></li>
    @endforeach
    </ul>
  @else
    No item found
  @endif
<h1>Add item</h1>
<a href="{{url("add_item")}}">Add Item</a>
@endsection
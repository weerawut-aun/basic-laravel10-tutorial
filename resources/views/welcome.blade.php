@extends('layouts.app')
@section('title','หน้าแรก')
@section('content')
    <h2>บทความล่าสุด</h2>
   <hr>
   @foreach ($blogs as $item)
       <p>{{$item->title}}</p>
       <p>{!!Str::limit($item->content,100)!!}</p>
       <a href="/detail/{{$item->id}}">อ่านเพิ่มเติม</a>
       <hr>
   @endforeach
@endsection
    

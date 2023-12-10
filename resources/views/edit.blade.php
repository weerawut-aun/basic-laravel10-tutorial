@extends('layouts.app')
@section('title','แก้ไขบทความ')
@section('content')
    <h2 class="text-center py-2">แก้ไขบทความบทความ</h2>
    <form method="POST" action={{route('update',$blog->id)}}>
        @csrf
        <div class="form-group">
            <label for="title">ชื่อบทความ</label>
            <input type="text" name="title" value={{$blog->title}} class="form-control">
        </div>
        @error('title')
            <div>
                <span class="text-danger">{{$message}}</span>
            </div>
        @enderror
        <div class="form-group">
            <label for="content">เนื้อหาบทความ</label>
          <textarea name="content"  cols="30" rows="5" class="form-control" id="content">{{$blog->content}}</textarea>
        </div>
        @error('content')
        <div>
            <span class="text-danger">{{$message}}</span>
        </div>
    @enderror
        <input type="submit" value="อัตเดท" class="btn btn-primary my-2">
        <a href="/author/blog" class="btn btn-success">บทความทั้งหมด</a>
    </form>
    <script>
        ClassicEditor
            .create( document.querySelector( '#content' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
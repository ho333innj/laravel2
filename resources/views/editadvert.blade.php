@extends('layouts.master')
@section('title','login')
@section('main')
<div class="container" style="padding-left:30%;padding-right:30%; margin-top:100px;">

    <form style="text-align:center" method="POST" action="/advert.edit/{{$AdvertID}}" >
        @csrf
        <div class="form-group card-body">
{{--            <div class="form-group"  style="margin-top:20px">--}}
{{--                <lable for="category"> دسته بندی</lable>--}}
{{--                <select name="Category" class="form-control">--}}
{{--                   @foreach($categories as $category)--}}
{{--                   <option >{{$category->CategoryName}}</option>--}}
{{--                   @endforeach--}}
{{--                     </select>--}}
{{--                </div>--}}
              <div class="form-group"  style="margin-top:20px">
             <label for="Title">نام کالا</label>
          <input type="text" class="form-control" id="Title" name="Title" value="{{$Adverts->Title}}" >
              </div>
                 <br>
                     <label for="describtion">توصیف کالا</label>
                          <input type="text" class="form-control" id="describtion" name="describtion"  value="{{$Adverts->Describtion}}">
                              </div>
                          <br>
                     <div class="form-group">
                  <label for="price">قیمت</label>
             <input type="text" class="form-control" id="price" name="price" >
            </div>
         <br>
            {{-- <label for="myfile">عکس کالا را آپلود کنید</label>
                <input type="file" id="myfile" name="myfile">
                <br> --}}








        <button type="submit" class="btn btn-primary"  style="margin-top:20px" >ثبت ویرایش</button>

    </div>
    </div>
      </form>
@endsection

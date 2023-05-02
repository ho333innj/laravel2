@extends('layouts.master')
@section('title')
listpage
@endsection
@section('titr')
<h3 style="text-align:center">لیست آگهی ها</h3>
@endsection
@section('main')

 <table border='2' class="table table-striped">
            <tr>
                 <td><b>advertid</b></td>
                <td><b>title</b></td>
                <td><b>description</b>
                </td> <td><b>edit</b></td>
                <td><b>delete</b></td>

            </tr>
@if(count($adverts))
    @foreach ($adverts as $adverts)
            <tr>
                <td>{{$adverts->AdvertID}}</td>  <td>{{$adverts->Title}}</td>  <td>{{$adverts->Describtion}}</td>

                 <td> <form action="/advert.edit.show" method="post">
                         @csrf
                    <button class="btn btn-primary">ویرایش</button>
                 </form>
                </td>

                 <td><button type="button" class="btn btn-danger">حذف</button></td>
                 {{-- <td><button>ویرایش</button></td> --}}

               </tr>
    @endforeach
@endif
 </table>

@endsection

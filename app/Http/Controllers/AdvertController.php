<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advert;
use App\Models\Category;




class AdvertController extends Controller
{
//    public function create(){
//     // $Advert = Advert::create(['City_ID' => '1 ', 'Category_ID'=>'3' ,'User_ID'=>'19', 'Title'=>'ماشین', 'Describtion' => 'میفروشم', 'price'=>'200']);
//     $categories= Category::all();

//    return view('newadvert' ,['categories'=>$categories]);
// }

   public function show(){
    $adverts= Advert::all();
    return view('lists.advertslist',['adverts'=>$adverts]);
   }
//    public function showUA(){
//     $adverts= Advert::all();
//     $users=User::all();
//     return view('lists.usersadvertslist',['adverts'=>$adverts],['users'=>$users]);
//    }
    public function showcreateadvert(){

        $categories= Category::all();
        return view('newadvert' , ['categories'=>$categories]);
    }
    public function create(Request $request){
        // $rec=$request->all();
        // $name=$request->post('advertname');
        // $describtion=$request->post('describtion');
        // $price=$request->post('price');
        // $category=$request->post('category');

        //     $Advert = Advert::create([ 'Title'=>$name, 'Describtion' => $describtion , 'price'=>$price , 'category'=>$category]);
        //     session()->put('name' , 'اطلاعات وارد شد');
        // return redirect('/');
        // $request->validate([
        //     'title'=>'required|unique:adverts|max:100',
        //     'body'=>'required',
        // ] , [
        //     'title.required'=>'عنوان باید وارد شود',
        //     'title.unique'=>'عنوان تکراری است',
        //     'body.required'=>'محتوای آگهی را وارد کنید',
        // ]
        // );
        $advert=new Advert;
        $advert->title=$request->title;
        $advert->describtion=$request->describtion;
        $advert->price=$request->price;
        $advert->save();
        return redirect('advert.show');
        // ->with('message' , 'آگهی اضافه شد');
    }



    public function edit(Request & $request , $AdvertID){
        $Advert =Advert::find($AdvertID);
        $Advert->Title =$request->input('Title','');
        $Advert->Describtion=$request->input('Describtion','');
        $Advert->Price=$request->input('Price','');;
        $Advert->save();
        // $advert = new Advert;
        // $advert->title = $request->title;
        // $advert->describtion = $request->describtion;
        // $advert->price = $request->price;

        // $advert->save();


    }


    public function showedit($AdvertID){
        $adverts= Advert::find($AdvertID);
        return view('editadvert' , ['adverts'=>$adverts]);
    }


}


// AdvertID
// User_ID
// Category_ID
// Title
// Describtion
// Price
// cover
// AdvertState
// created_at
// updated_at



// public function edit(Request & $request){
//     $rec = $request->all();
//     $name=$request->post('advertname');
//     $describtion=$request->post('describtion');
//     $price=$request->post('price');
//     $category=$request->post('category')
    // $Advert = Advert::update([ 'Title'=>$name, 'Describtion' => $describtion , 'price'=>$price , 'category'=>$category]);


    // $flight = new Flight;

    // $flight->name = $request->name;

    // $flight->save();

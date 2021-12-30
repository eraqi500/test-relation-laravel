<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Address;
use App\Models\Post;
use App\Models\Role;
use App\Models\Staff;
use App\Models\Product;
use App\Models\Tag;
use App\Models\Video;
use  App\Http\Controllers\PostsController;
use Carbon\Carbon;
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

Route::get('/', function () {
    return view('welcome');
});
//    [name , email , password]

//Route::get('/insert',function (){
//
//    $user = User::findOrFail(3);
//    $address = new Address([
//        'name' => '2020 NewYork av HM HM 11205'
//    ]);
//
//    $user->Address()->save($address);
//
//});
//Route::get('/update', function () {
//
//    $address = Address::whereUserId(3)->first();
//    $address -> name = '4533 Update AV , Alasaka' ;
//    $address->save();
//});
//Route::get('/read' , function (){
//
//    $user = User::findOrFail(1);
//
//    echo $user->Address->name;
//});
//Route::get('/read' , function (){
//
//    $user = User::findOrFail(1);
//
//    echo $user->Address()->delete();
//});

//Route::get('/create', function () {
//  $user = User::findOrFail(2);
//
//  $post = new Post;
//  $post->title = 'this second title';
//  $post-> body = 'this the second content';
//
//$user ->Posts()->save($post);
//
//});
//
//Route::get('/read' , function (){
//
//    $user = User::findOrFail(2);
//    return $user->Posts;
//});

//Route::get('/update', function () {
//  $user = User::find(1);
//
//  $user->Posts()->whereId(1)->update([
//     'title' => 'I love laravel' ,
//     'body' =>' Update is Awesome work'
//  ]);
//});

//Route::get('/delete' , function (){
//
//    $user = User::find(1);
//
//    $user ->Posts()->whereId(1)->delete();
//});

//Route::get('/create', function () {
//
//    $user = User::findOrFail(2);
//    $role = new Role(['name' => 'User']);
//
//    $user -> Roles()->save($role);
//});
//
//
//Route::get('/read', function () {
//  $user = User::findOrFail(1);
//  foreach ($user ->Roles as $role ){
//      dd($role);
//  }
//});
//
//Route::get('/update', function () {
//  $user = User::findOrFail(1);
//
//  if($user -> has('roles')){
//      foreach ($user -> Roles as $role){
//          if($role->name == 'Administrator'){
//              $role->name= strtolower('Subscriber');
//              $role -> save();
//          }
//      }
//  }
//});
//
//
//Route::get('/delete', function () {
//   $user = User::findOrFail(1);
//
//    foreach ($user -> roles as $role){
//
//        $user -> Roles()->delete();
//        $role->whereId(5)->delete();
//    }
//
//});


//Route::get('/create', function () {
//   $staff = Staff::findOrFail(1);
//
//   $staff->Photos()->create(['path' =>  'example_3.jpg']);
//
//});
//
//Route::get('/read', function () {
// $staff = Staff::findOrFail(1);
//
//  foreach ($staff -> photos as $photo){
//      return $photo -> path;
//  }
//});
//
//Route::get('/update', function () {
// $staff = Staff::findOrFail(1);
// $photo = $staff->photos() -> whereId(1) -> first();
// $photo ->path = 'Update Example.jpg';
// $photo -> save();
//});
//
//Route::get('/delete', function () {
//    $staff = Staff::findOrFail(1);
//
//    $staff->photos()->whereId(1)->delete();
//
//});

//Route::get('/create', function () {
//
//    $post = Post::create([
//        'name' => 'wow check this name' ,
//        'title' => 'this title' ,
//        'body' => 'this body'
//    ]);
//
//    $tag1 = Tag::find(1);
//
//    $post->tags()->save($tag1);
//
//    $ved = Video::create([
//        'name' => 'Videos.mov'
//    ]);
//
//    $tag2 = Tag::find(2);
//
//    $ved->tags()->save($tag2);
//
//
//});
//
//
//Route::get('/read', function () {
// $post = Post::findOrFail(6);
//
// foreach ($post->tags as $tag){
//
//     return $tag->whereName('Github')->update(['name' => 'update php']);
// }
//
//});


Route::resource('/posts', PostsController::class);
//
//Route::get('/dates', function () {
//
//     $date = new DateTime('+1 week');
////     echo $date;
//     echo $date->format('m-d-Y');
//     echo '<br>';
//     echo  Carbon::now()->diffForHumans();
//    echo '<br>';
//    echo Carbon::now()->subMonths()->diffForHumans();
//
//});

Route::get('/getname', function () {
  $user = User::findOrFail(1);
  echo $user->name;
});

Route::get('/setname', function () {
   $user = User::find(1);
   $user->name = 'wilimes khaild';
   $user->save();

});


Route::get('/admin/user/roles', ['middleware' => ['role', 'auth', 'web'], function () {



}]);















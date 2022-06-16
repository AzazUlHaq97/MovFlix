<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DynamicPDFController;

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





Route::get('/dynamic_pdf/pdf/{id}',[DynamicPDFController::class,'pdf']);


Route::get('/Graphics',[HomeController::class,'Graphics']);



Route::get('/Index',[HomeController::class,'Index']);
Route::get('/Game',[HomeController::class,'Game']);
Route::get('/Cars',[HomeController::class,'Cars']);

Route::get('/Add_Deals',[HomeController::class,'Add_Deals']);


Route::get('/View',[HomeController::class,'View']);

Route::get('/Pack',[HomeController::class,'Pack']);
Route::get('/Quiz',[HomeController::class,'Quiz']);

Route::get('/Ben10',[HomeController::class,'Ben10']);
Route::get('/AngryBird',[HomeController::class,'AngryBird']);



Route::get('/Display_Game',[HomeController::class,'Display_Game']);
Route::get('/Spiderman',[HomeController::class,'Spiderman']);

Route::get('/About',[HomeController::class,'About']);
Route::get('/Contact',[HomeController::class,'Contact']);

Route::get('/Celebrity',[HomeController::class,'Celebrity']);


Route::get('/Celebrity_grid',[HomeController::class,'Celebrity_grid']);


Route::get('/Registration',[HomeController::class,'Registration']);
Route::post('/Registration',[HomeController::class,'Click_Registration']);

Route::get('/Login',[HomeController::class,'Login']);
Route::post('/Login',[HomeController::class,'Click_Login']);

Route::get('/EditProfile',[HomeController::class,'EditProfile']);
Route::post('/EditProfile',[HomeController::class,'Click_EditProfile']);



Route::get('/CheckOut',[HomeController::class,'CheckOut']);

Route::get('/Movie',[HomeController::class,'Movie']);
Route::post('/Movie',[HomeController::class,'Click_Movie_Filter']);

Route::get('/Display_Movie/{id}',[HomeController::class,'Display_Movie']);





Route::get('/Movie_BookingProcess/{id}',[HomeController::class,'Movie_BookingProcess']);
Route::post('/Movie_BookingProcess',[HomeController::class,'Click_Movie_BookingProcess']);


Route::get('/Booking_Summery/{id}',[HomeController::class,'Booking_Summery']);



Route::get('/Logout',[HomeController::class,'Logout']);

Route::get('/Movie_Seats/{id}',[HomeController::class,'Movie_Seats']);

Route::post('/Movie_Seats',[HomeController::class,'Click_Movie_Seats']);


Route::get('/Movie_Products',[HomeController::class,'Movie_Products']);






Route::get('/Dashboard',[AdminController::class,'Dashboard']);


Route::get('/Admin_Login',[AdminController::class,'Admin_Login']);
Route::post('/Admin_Login',[AdminController::class,'Click_Admin_Login']);

Route::get('/Admin_EditProfile',[AdminController::class,'Admin_EditProfile']);
Route::post('/Admin_EditProfile',[AdminController::class,'Click_Admin_EditProfile']);



Route::get('/Add_Category',[AdminController::class,'Add_Category']);
Route::post('/Add_Category',[AdminController::class,'Click_Add_Category']);
Route::get('/Category_List',[AdminController::class,'Category_List']);
Route::post('/Category_List',[AdminController::class,'Click_Category_List']);
Route::get('/Delete_Categorys/{id}',[AdminController::class,'Delete_Categorys']);
Route::get('/Edit_Category/{id}',[AdminController::class,'Display_Edit_Category']);
Route::post('/Edit_Category',[AdminController::class,'Click_Edit_Category_List']);




Route::get('/Add_Movies',[AdminController::class,'Add_Movies']);
Route::post('/Add_Movies',[AdminController::class,'Click_Add_Movies']);
Route::get('/Movie_List',[AdminController::class,'Movie_List']);
Route::post('/Movie_List',[AdminController::class,'Click_Movie_List']);
Route::get('/Delete_Movie/{id}',[AdminController::class,'Delete_Movie']);
Route::get('/Edit_Movie/{id}',[AdminController::class,'Edit_Movie']);
Route::post('/Edit_Movie',[AdminController::class,'Click_Edit_Movie_List']);



Route::get('/Add_Theatres',[AdminController::class,'Add_Theatres']);
Route::post('/Add_Theatres',[AdminController::class,'Click_Add_Theatres']);
Route::get('/Theatres_List',[AdminController::class,'Theatres_List']);
Route::post('/Theatres_List',[AdminController::class,'Click_Theatres_List']);
Route::get('/Delete_Theatres/{id}',[AdminController::class,'Delete_Theatres']);
Route::get('/Edit_Theatres/{id}',[AdminController::class,'Edit_Theatres']);
Route::post('/Edit_Theatres',[AdminController::class,'Click_Edit_Theatres']);



Route::get('/Add_MovieTime',[AdminController::class,'Add_MovieTime']);
Route::post('/Add_MovieTime',[AdminController::class,'Click_Add_MovieTime']);
Route::get('/MovieShow_List',[AdminController::class,'MovieShow_List']);
Route::post('/MovieShow_List',[AdminController::class,'Click_MovieShow_List']);
Route::get('/Delete_MovieTime/{id}',[AdminController::class,'Delete_MovieTime']);
Route::get('/Edit_ShowTime/{id}',[AdminController::class,'Edit_ShowTime']);
Route::post('/Edit_ShowTime',[AdminController::class,'Click_Edit_ShowTime']);



Route::get('/Add_MovieCast',[AdminController::class,'Add_MovieCast']);
Route::post('/Add_MovieCast',[AdminController::class,'Click_Add_MovieCast']);
Route::get('/MovieCast_List',[AdminController::class,'MovieCast_List']);
Route::post('/MovieCast_List',[AdminController::class,'Click_MovieCast_List']);
Route::get('/Delete_MovieCast/{id}',[AdminController::class,'Delete_MovieCast']);
Route::get('/Edit_MovieCast/{id}',[AdminController::class,'Edit_MovieCast']);
Route::post('/Edit_MovieCast',[AdminController::class,'Click_Edit_MovieCast_List']);


Route::get('/Add_Deals',[AdminController::class,'Add_Deals']);
Route::post('/Add_Deals',[AdminController::class,'Click_Add_Deals']);
Route::get('/Deals_List',[AdminController::class,'Deals_List']);
Route::post('/Deals_List',[AdminController::class,'Click_Deals_List']);
Route::get('/Delete_Deals_List/{id}',[AdminController::class,'Delete_Deals_List']);
Route::get('/Edit_Deals_List/{id}',[AdminController::class,'Edit_Deals_List']);
Route::post('/Edit_Deals_List',[AdminController::class,'Click_Edit_Deals_List']);



Route::get('/Seat',[AdminController::class,'Seat']);
Route::post('/Seat',[AdminController::class,'click_Seat']);
Route::get('/Seat_List',[AdminController::class,'Seat_List']);
Route::post('/Seat_List',[AdminController::class,'Click_Seat_List']);
Route::get('/Delete_Seat_List/{id}',[AdminController::class,'Delete_Seat_List']);
Route::get('/Edit_Seat_List/{id}',[AdminController::class,'Edit_Seat_List']);
Route::post('/Edit_Seat_List',[AdminController::class,'Click_Edit_Seat_List']);








Route::get('/Admin_Users',[AdminController::class,'Admin_Users']);
Route::get('/Admin_EditUser/{id}',[AdminController::class,'Admin_EditUser']);
Route::post('/Admin_EditUser',[AdminController::class,'Click_Admin_EditUser']);
Route::get('/Delete_Admin_EditUser/{id}',[AdminController::class,'Delete_Admin_EditUser']);


Route::get('/Order_Details',[AdminController::class,'Order_Details']);
Route::get('/Delete_Order_Details/{id}',[AdminController::class,'Delete_Order_Details']);


Route::get('/Reviews',[AdminController::class,'Reviews']);
Route::get('/Delete_Reviews/{id}',[AdminController::class,'Delete_Reviews']);

Route::get('/Admin_Logout',[AdminController::class,'Admin_Logout']);
Route::get('/Admin_Users',[AdminController::class,'Admin_Users']);





Route::get('/products', [ProductController::class, 'index']);
Route::get('/cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');

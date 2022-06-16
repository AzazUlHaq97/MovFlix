<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;



class AdminController extends Controller
{


    public function Dashboard()
    {
        if(!session()-> has('Admin_Name'))
        {
         return redirect('Admin_Login');
        }

        return view('Dashboard');
    }

    public function Admin_Login()
    {



        return view('Admin_Login');
    }




    public function Click_Admin_Login(Request $request)
    {

     $Email =  request('admin_email');
     $Pass =  request('admin_password');
     $query = DB::select('select * from admin where Admin_Email = ? and Admin_Password = ?',[$Email,$Pass]);


     if($query)
     {
         Session::put('Admin_Id',$query[0] -> Admin_Id);
         Session::put('Admin_Name',$query[0] -> Admin_Name);
         Session::put('Admin_Image', $query[0] ->Admin_Image);



        // Session::put('category',$query[0] -> Category_Id);

        //  Session::put('category_name',$query[0] -> Category_Name);

         return redirect('Dashboard');
     }
     else
     {

     return redirect('Admin_Login')-> with('Incorrect','Incorrect Email or password');

     }

     }








     public function Admin_EditProfile()
     {

        if(!session()-> has('Admin_Name'))
        {
         return redirect('Admin_Login');
        }



     $ID = session('Admin_Id');

     $query_admin = DB::select('select * from admin where Admin_Id = ?',[$ID]);

     return view('Admin_EditProfile',compact('query_admin'));
     }








     public function Click_Admin_EditProfile(Request $request)
     {




        if($request->Inproduct==NULL)
        {

            $ImageName = request('HiddenPicPath');
            $Image = $ImageName;
        }

        else
        {

       $ImageName = time()."." .$request -> Inproduct -> extension();
       $request -> Inproduct -> move(public_path('public/images/Admin_img'),$ImageName);
       $Image = "public/images/Admin_img/".$ImageName;

       }

       $Admin_Id = request('admin_id');
       $Admin_Name = request('admin_name');
       $Admin_Email = request('admin_email');
       $Admin_Password = request('admin_pass');




       $ID = session('Admin_Id');

        $query_admin = DB::select('select * from admin where Admin_Id = ?',[$ID]);

         $query_admin = DB::update('UPDATE `admin` SET `Admin_Name`= ?,`Admin_Email`= ?,`Admin_Password`= ?,`Admin_Image`= ? WHERE Admin_Id = ? ' ,[$Admin_Name,$Admin_Email,$Admin_Password,$Image,$Admin_Id]);

         if($query_admin)
         {
            return redirect('Dashboard') -> with('Status','Profile Updated Successfully!');
         }
         else
         {
             return redirect('Admin_EditProfile') -> with('Status','Profile Update Error!');
         }


      return view('Admin_EditProfile',compact('query_admin'));

     }


     public function Add_Deals()
     {
        if(!session()-> has('Admin_Name'))
        {
         return redirect('Admin_Login');
        }

         return view('Add_Deals');
     }

     public function Click_Add_Deals(Request $request)
     {


        if($request->M_pic == NULL )
        {

            $product = request('HiddenPicPath');


        }
        else
        {

         $product = time()."." .$request -> M_pic -> extension();
         $request -> M_pic -> move(public_path('public/images/Products'),$product);
         $M_Pic = "public/images/Products".$product;


        }



        $Product_Name = request('Product_Name');
        $Product_Description = request('Product_Description');
        $Product_Price = request('Product_Price');
        $M_Pic = "public/images/Products/".$product;

        
        $query = DB::insert('INSERT INTO `products`( `Product_Name`, `Product_description`, `price`, `picture`) VALUES (?,?,?,?)',[$Product_Name,$Product_Description,$Product_Price,$M_Pic]);


        if($query)
        {

           return redirect('Deals_List') -> with('Status','Deals Successfully Inserted!');
        }
        else
        {
            return redirect('Deals_List') -> with('Status','Deals Insertion Error!');
        }


     }



     public function Deals_List()
     {
         if(!session()-> has('Admin_Name'))
         {
          return redirect('Admin_Login');
         }
 
 
         $query_products = DB::select('select * from products');
 
         return view('Deals_List',compact('query_products'));
 
     }


     
     public function Delete_Deals_List($id)
     {
 
 
     $query = DB::delete('delete from products where Product_Id  = ?', [$id]);
     if($query)
     {
 
     return redirect('Deals_List')->with('status', 'Data Deleted Successfully');
     }
     else
     {
     echo "Data Deletion failled";
     }
 
     }






     public function Edit_Deals_List($id)
     {
 
         if(!session()-> has('Admin_Name'))
         {
          return redirect('Admin_Login');
         }
 
 
       
     $Edit_Deals_List = DB::select('select * from products where Product_Id  = ?',  [$id]);
 
 
         return view('Edit_Deals_List',compact('Edit_Deals_List'));
     }
 



     public function Click_Edit_Deals_List(Request $request)
     {
 
 
 
        if($request->M_pic == NULL )
        {

            $product = request('HiddenPicPath1');


        }
        else
        {

         $product = time()."." .$request -> M_pic -> extension();
         $request -> M_pic -> move(public_path('public/images/Products'),$product);
         $M_Pic = "public/images/Products".$product;


        }
 
 

 
         $M_ID = request('Product_Id');
         $Product_Name = request('Product_Name');
         $Product_Description = request('Product_Description');
         $Product_Price = request('Product_Price');
         $M_Pic = "public/images/Products/".$product;
 
        
 
       
 
         $query_Edit_Details = DB::update('UPDATE `products` SET `Product_Name` = ?,`Product_description`= ?,`price`= ?,`picture`= ? WHERE Product_Id = ?', [$Product_Name,$Product_Description,$Product_Price,$M_Pic,$M_ID]);
 
 
 
         if($query_Edit_Details)
         {
            return redirect('Deals_List') -> with('Status','Products Successfully Updated!');
         }
         else
         {
             return redirect('Deals_List') -> with('Status','Movie Edition Error!');
         }
 
 
 
 
         return view('Edit_Deals_List',compact('query_Edit_Details'));
     }








// -----------------------------------------------------------------------

     public function Add_Category()
     {
        if(!session()-> has('Admin_Name'))
        {
         return redirect('Admin_Login');
        }

         return view('Add_Category');
     }



     public function Click_Add_Category(Request $request)
     {

        $Country_Movie = request('C_Movie');
        $Category_Country = request('C_Country');

        $query = DB:: insert('INSERT INTO `category`(`Category_Name`, `Category_Country`) VALUES(?,?)',
        [$Country_Movie,$Category_Country]);


        if($query)
        {

           return redirect('Category_List') -> with('Status','Category Successfully Inserted!');
        }
        else
        {
            return redirect('Add_Category') -> with('Status','Category Insertion Error!');
        }


     }




     public function Add_Movies()
     {

        if(!session()-> has('Admin_Name'))
        {
         return redirect('Admin_Login');
        }

        $query_cat = DB::select("select * from category");

      return view('Add_Movies',compact('query_cat'));
     }



     public function Click_Add_Movies(Request $request)
     {




        if($request->M_pic == NULL )
        {

            $Poster = request('HiddenPicPath');


        }
        else
        {

         $Poster = time()."." .$request -> M_pic -> extension();
         $request -> M_pic -> move(public_path('public/images/image1'),$Poster);
         $M_Pic = "public/images/image1".$Poster;


        }




        if($request->M_dimg == NULL)
        {


            $Direct_img = request('HiddenPicPath');

        }
        else
        {

            $Direct_img = time()."." .$request -> M_dimg -> extension();
            $request -> M_dimg -> move(public_path('public/images/image2'),$Direct_img);
            $M_Dimg = "public/images/image2".$Direct_img;

        }



        $M_Pic = "public/images/image1/".$Poster;

        $M_Title = request('M_title');
        $M_price = request('M_price');
        $M_des = request('M_des');
        $M_Relese = request('M_relese');
        $M_Dimg = "public/images/image2/".$Direct_img;
        $M_dname = request('M_dname');

        $M_ddes = request('M_ddes');
        $M_url = request('M_url');
        $M_dmin = request('M_duration');
        $Category = request('category');



        $query_cat = DB::select("select * from category");

        $query = DB:: insert ('INSERT INTO `movies`(`Movie_Poster`, `Movie_Title`, `Movie_Price`, `Movie_Description`, `Movie_Release_year`, `Movie_Director_Name`, `Movie_Director_Img`, `Movie_Director_Description`, `Movie_Url`, `Movie_duration_min`, `Category_Id`) VALUES (?,?,?,?,?,?,?,?,?,?,?)',[$M_Pic,$M_Title,$M_price,$M_des,$M_Relese,$M_dname,$M_Dimg,$M_ddes,$M_url,$M_dmin,$Category]);



        if($query)
        {
           return redirect('Movie_List') -> with('Status','Movie Successfully Inserted!');
        }
        else
        {
            return redirect('Add_Movies') -> with('Status','Movie Insertion Error!');
        }

        return view('Add_Movies',compact('query','query_cat'));
     }





     public function Add_Theatres()
     {
        if(!session()-> has('Admin_Name'))
        {
         return redirect('Admin_Login');
        }

         $query_cat = DB::select("select * from movie_theaters");



         return view('Add_Theatres',compact('query_cat'));
     }


     public function Click_Add_Theatres(Request $request)
     {

        $T_name = request('T_name');
        $T_address = request('T_address');
        $T_place = request('T_place');

        $query = DB:: insert('INSERT INTO `movie_theaters`(`Theaters_Name`,`Theaters_Address`, `Theaters_Place`) VALUES(?,?,?)',
        [$T_name,$T_address,$T_place]);


        if($query)
        {

           return redirect('Theatres_List') -> with('Status','Theaters Successfully Inserted!');
        }
        else
        {
            return redirect('Add_Theatres') -> with('Status','Theaters Insertion Error!');
        }



     }



     public function Add_MovieTime()
     {
        if(!session()-> has('Admin_Name'))
        {
         return redirect('Admin_Login');
        }

        $query_move = DB::select("select * from movies");
        $query_the = DB::select("select * from movie_theaters");


        return view('Add_MovieTime',compact('query_move','query_the'));
     }

     public function Click_Add_MovieTime()
     {

        $S_D = request('S_D');

        $S_Time = request('S_Time');
        $E_Time = request('E_Time');

        $T_Name = request('T_Id');
        $M_Name = request('M_Id');



        $query_move = DB::select("select * from movies");
        $query_the = DB::select("select * from movie_theaters");

        $query = DB:: insert('INSERT INTO `movie_show_time`(`Date`, `Start_time`, `End_time`, `Theaters_Id`, `Movie_Id`) VALUES (?,?,?,?,?)',[$S_D,$S_Time,$E_Time,$T_Name,$M_Name,]);


        if($query)
        {

           return redirect('MovieShow_List') -> with('Status','Show_Time Successfully Inserted!');
        }
        else
        {
            return redirect('Add_Theatres') -> with('Status','Show_Time Insertion Error!');
        }




        return view('Add_MovieTime',compact('query','query_move','query_the'));
     }





    public function Add_MovieCast()
    {
        if(!session()-> has('Admin_Name'))
        {
         return redirect('Admin_Login');
        }

         $query_move = DB::select("select * from movies");

         return view('Add_MovieCast',compact('query_move'));
    }


    public function Click_Add_MovieCast(Request $request)
    {


        if($request->Actor_pic == NULL )
        {

            $Actor = request('HiddenPicPath');


        }
        else
        {

         $Actor = time()."." .$request -> Actor_pic -> extension();
         $request -> Actor_pic -> move(public_path('public/images/Actor_img'),$Actor);
         $Actor_Img = "public/images/Actor_img".$Actor;


        }




        if($request->Actresses_pics == NULL)
        {


            $Actresses = request('HiddenPicPath');

        }
        else
        {

            $Actresses = time()."." .$request -> Actresses_pics -> extension();
            $request -> Actresses_pics -> move(public_path('public/images/Actresses_img'),$Actresses);
            $Actresses_Img = "public/images/Actresses_img".$Actresses;

        }







        $Actor_Name = request('Actor_Name');
        $Actor_Img = "public/images/Actor_Img/".$Actor;
        $Actor_Des = request('Actor_Des');

        $Actresses_Name = request('Actresses_Name');
        $Actresses_Img = "public/images/Actresses_img/".$Actresses;
        $Actresses_Des = request('Actresses_Des');
        $Movie_ID = request('Movie_Id');




        $query_move = DB::select("select * from movies");



        $query = DB:: insert('INSERT INTO `movie_cast`(`Actors_Name`, `Actors_Img`, `Actors_Des`, `Actresses_Name`, `Actresses_Img`, `Actresses_Des`,`Movie_Id`) VALUES (?,?,?,?,?,?,?)',[$Actor_Name,$Actor_Img,$Actor_Des,$Actresses_Name,$Actresses_Img,$Actresses_Des,$Movie_ID]);


        if($query)
        {

        return redirect('MovieCast_List') -> with('Status','Movie Cast Successfully Inserted!');
        }
        else
        {
            return redirect('Add_MovieCast') -> with('Status','Movie Cast Insertion Error!');
        }


        return view('Add_MovieCast',compact('query','query_move'));
    }





    public function Category_List()
    {
        if(!session()-> has('Admin_Name'))
        {
         return redirect('Admin_Login');
        }


        $query_C_list = DB::select('select * from category');

        return view('Category_List',compact('query_C_list'));

    }



    public function Display_Edit_Category($id)
    {

        $query_C_list = DB::select('select * from category where Category_Id = ?',[$id]);

        return view('Edit_Category',compact('query_C_list'));

    }








    public function Delete_Categorys($id)
    {




    $query = DB::delete('delete from category where Category_Id = ?',[$id]);
    if($query)
    {
    return redirect('Category_List')->with('Deletion', 'Data Deleted Successfully');
    }
    else
    {
    echo "Data Deletion failled";
    }

    }



    public function Click_Edit_Category_List(Request $request)
    {
        $Country_Id = request('C_Id');
        $Country_Movie = request('C_Movie');
        $Category_Country = request('C_Country');

        $query_Skills = DB::update('UPDATE `category` SET `Category_Name` = ?,`Category_Country`= ? WHERE  Category_Id = ?' ,[$Country_Movie,$Category_Country,$Country_Id]);



        if($query_Skills)
        {

           return redirect('Category_List') -> with('Status','Update Successfully Inserted!');
        }
        else
        {
            return redirect('Category_List') -> with('Status','Update Insertion Error!');
        }

        return view('Category_List');
    }








    public function Movie_List()
    {


        if(!session()-> has('Admin_Name'))
        {
         return redirect('Admin_Login');
        }


        $query_movies = DB::select('select * from movies');

        return view('Movie_List',compact('query_movies'));

    }


    public function Delete_Movie($id)
    {



    $query = DB::delete('delete from movies where Movie_Id = ?', [$id]);
    if($query)
    {

    return redirect('Movie_List')->with('status', 'Data Deleted Successfully');
    }
    else
    {
    echo "Data Deletion failled";
    }

    }




    public function Edit_Movie($id)
    {

        if(!session()-> has('Admin_Name'))
        {
         return redirect('Admin_Login');
        }


        $query_Edit_Movie1 = DB::select('select * from category');
        $query_Edit_Movie = DB::select('select * from movies where Movie_Id  = ?',  [$id]);


        return view('Edit_Movie',compact('query_Edit_Movie','query_Edit_Movie1'));
    }



    public function Click_Edit_Movie_List(Request $request)
    {





        if($request->M_pic == NULL )
        {

            $Poster = request('HiddenPicPath1');
            $M_P = $Poster;

        }
        else
        {

         $Poster = time()."." .$request -> M_pic -> extension();
         $request -> M_pic -> move(public_path('public/images/image1'),$Poster);
         $M_P = "public/images/image1/".$Poster;


        }




        if($request->M_dimg == NULL)
        {


            $Direct_img = request('HiddenPicPath');
            $D_Img = $Direct_img;

        }
        else
        {

            $Direct_img = time()."." .$request -> M_dimg -> extension();
            $request -> M_dimg -> move(public_path('public/images/image2'),$Direct_img);
            $D_Img = "public/images/image2/".$Direct_img;

        }






        $M_ID = request('M_Id');


        $M_Title = request('M_title');
        $M_price = request('M_price');
        $M_des = request('M_des');
        $M_Relese = request('M_relese');

        $M_dname = request('M_dname');
        $M_DDes = request('M_ddes');
        $M_url = request('M_url');
        $M_dmin = request('M_duration');
        $Category_Id = request('Cat');




        $query_Edit_Movie = DB::update('UPDATE `movies` SET `Movie_Poster` = ?,`Movie_Title`= ?,`Movie_Price`= ?,`Movie_Description`= ?,`Movie_Release_year`= ?,`Movie_Director_Name`= ?,`Movie_Director_Img`= ?,`Movie_Director_Description`= ?,`Movie_Url`= ?,`Movie_duration_min`= ?, `Category_Id`= ? WHERE Movie_Id = ?', [$M_P,$M_Title,$M_price,$M_des,$M_Relese,$M_dname,$D_Img,$M_DDes,$M_url,$M_dmin,$Category_Id,$M_ID]);




        if($query_Edit_Movie)
        {
           return redirect('Movie_List') -> with('Status','Movie Successfully Updated!');
        }
        else
        {
            return redirect('Movie_List') -> with('Status','Movie Edition Error!');
        }




        return view('Edit_Movie',compact('query_Edit_Movie'));
    }







    public function Theatres_List()
    {

        if(!session()-> has('Admin_Name'))
        {
         return redirect('Admin_Login');
        }

        $query_movie_theaters = DB::select('select * from movie_theaters');

        return view('Theatres_List',compact('query_movie_theaters'));

    }


    public function Delete_Theatres($id)
    {
    $query = DB::delete('delete from movie_theaters where Theaters_Id  = ?', [$id]);
    if($query)
    {

    return redirect('Theatres_List')->with('status', 'Data Deleted Successfully');
    }
    else
    {
    echo "Data Deletion failled";
    }

    }






    public function Edit_Theatres($id)
    {
        if(!session()-> has('Admin_Name'))
        {
         return redirect('Admin_Login');
        }

        $query_Edit_Theatres = DB::select('select * from movie_theaters where Theaters_Id  = ?',[$id]);


        return view('Edit_Theatres',compact('query_Edit_Theatres'));
    }



    public function Click_Edit_Theatres(Request $request)
    {
        $T_ID  = request('T_Id');
        $T_name = request('T_name');
        $T_address = request('T_address');
        $T_place = request('T_place');



        $query_Edit_Theatres = DB::update('UPDATE `movie_theaters` SET `Theaters_Name` = ?,`Theaters_Address`= ?, `Theaters_Place`= ? WHERE  Theaters_Id  = ?' ,[$T_name,$T_address,$T_place,$T_ID]);
        if($query_Edit_Theatres)
        {

           return redirect('Theatres_List') -> with('Status','Theaters Successfully Updated!');
        }
        else
        {
            return redirect('Theatres_List') -> with('Status','Theaters Edition Error!');
        }



        return view('Edit_Theatres',compact('query_Edit_Theatres'));

    }









    public function MovieCast_List()
    {

        if(!session()-> has('Admin_Name'))
        {
         return redirect('Admin_Login');
        }

        $query_movie_cast = DB::select('select * from movie_cast');

        return view('MovieCast_List',compact('query_movie_cast'));

    }


    public function Delete_MovieCast($id)
    {
    $query = DB::delete('delete from movie_cast where Cast_Id = ?', [$id]);
    if($query)
    {

    return redirect('MovieCast_List')->with('status', 'Data Deleted Successfully');
    }
    else
    {
    echo "Data Deletion failled";
    }

    }


    public function Edit_MovieCast($id)
    {




        if(!session()-> has('Admin_Name'))
        {
         return redirect('Admin_Login');
        }


        $query_move = DB::select("select * from movies");

        $query_movie_cast = DB::select('select * from movie_cast where Cast_Id  = ?',[$id]);



        return view('Edit_MovieCast',compact('query_movie_cast','query_move'));
    }




    public function Click_Edit_MovieCast_List(Request $request)
    {
        if($request->Actor_pic == NULL)
        {

            $Actor = request('HiddenPicPath1');
            $Actor_Img = $Actor;

        }
        else
        {

         $Actor = time()."." .$request -> Actor_pic -> extension();
         $request -> Actor_pic -> move(public_path('public/images/Actor_img'),$Actor);
         $Actor_Img = "public/images/Actor_img/".$Actor;
        }

        if($request->Actresses_pics == NULL)
        {
            $Actresses = request('HiddenPicPath2');
            $Actresses_Img =$Actresses;
        }
        else
        {
            $Actresses = time()."." .$request -> Actresses_pics -> extension();
            $request -> Actresses_pics -> move(public_path('public/images/Actresses_img'),$Actresses);
            $Actresses_Img = "public/images/Actresses_img/".$Actresses;
        }

        $Actor_Name = request('Actor_Name');
        $Actor_Des = request('Actor_Des');

        $Actresses_Name = request('Actresses_Name');
        $Actresses_Des = request('Actresses_Des');
        $Movie_ID = request('Movie_Id');
        $Cast_ID = request('Cast_Id');

        $query_Edit_Movie = DB::update('UPDATE `movie_cast` SET `Actors_Name` = ?,`Actors_Img`= ?,`Actors_Des`= ?,`Actresses_Name`= ?,`Actresses_Img`= ?,`Actresses_Des`= ? ,`Movie_Id`= ? WHERE Cast_Id  = ?',[$Actor_Name,$Actor_Img,$Actor_Des,$Actresses_Name,$Actresses_Img,$Actresses_Des,$Movie_ID,$Cast_ID]);


        $query_move = DB::select("select * from movies");

        if($query_Edit_Movie)
        {

        return redirect('MovieCast_List') -> with('Status','Movie Cast Successfully Updated!');
        }
        else
        {
            return redirect('MovieCast_List') -> with('Status','Movie Cast Insertion Error!');
        }



        return view('Edit_MovieCast',compact('query_Edit_Movie'));
    }







    public function MovieShow_List()
    {
        if(!session()-> has('Admin_Name'))
        {
         return redirect('Admin_Login');
        }

        $query_movie_show_time = DB::select('select * from movie_show_time');

        return view('MovieShow_List',compact('query_movie_show_time'));

    }




    public function Delete_MovieTime($id)
    {
    $query = DB::delete('delete from movie_show_time where Show_Id = ?', [$id]);
    if($query)
    {

    return redirect('MovieShow_List')->with('status', 'Data Deleted Successfully');
    }
    else
    {
    echo "Data Deletion failled";
    }

    }





    public function Edit_ShowTime($id)
    {
        if(!session()-> has('Admin_Name'))
        {
         return redirect('Admin_Login');
        }

        $query_movie = DB::select('select * from movies');
        $query_the = DB::select('select * from movie_theaters');
        $query_show_time = DB::select('select * from movie_show_time where Show_Id  = ?',[$id]);

        return view('Edit_ShowTime',compact('query_show_time','query_movie','query_the'));
    }



    public function Click_Edit_ShowTime(Request $request)
    {

        $S_D = request('S_D');

        $S_Time = request('S_Time');
        $E_Time = request('E_Time');


        $S_ID = request('S_Id');
        $T_ID = request('T_Id');
        $M_ID = request('M_Id');



        $query_Edit_ShowTime = DB::update('UPDATE `movie_show_time` SET `Date`= ?,`Start_time`= ?,`End_time`= ?,`Theaters_Id`= ?,`Movie_Id`= ? WHERE Show_Id = ?',[$S_D,$S_Time,$E_Time,$T_ID,$M_ID,$S_ID]);



        if($query_Edit_ShowTime)
        {

           return redirect('MovieShow_List') -> with('Status','Show_Time Successfully Inserted!');
        }
        else
        {
            return redirect('MovieShow_List') -> with('Status','Show_Time Insertion Error!');
        }




        return view('Edit_ShowTime');



    }





    public function Admin_Users()
    {

        if(!session()-> has('Admin_Name'))
        {
         return redirect('Admin_Login');
        }


        $Admin_User = DB::select('select * from users');

        return view('Admin_Users',compact('Admin_User'));
    }






    public function Admin_Logout()
    {
    Session::forget('Admin_Name');
     return view('Admin_Login');
    }





















     public function Admin_EditUser($id)
    {


        if(!session()-> has('Admin_Name'))
        {
         return redirect('Admin_Login');
        }


     $query_users = DB::select('select * from users where User_ID = ?',[$id]);

      return view('Admin_EditUser',compact('query_users'));
    }

    public function Click_Admin_EditUser(Request $request)
    {



        if($request->u_image == NULL)
        {

            $User = request('HiddenPicPath1');
            $Image = $User;

        }
        else
        {

         $User = time()."." .$request -> u_image -> extension();
         $request -> u_image -> move(public_path('public/images/User_img'),$User);
         $Image = "public/images/User_img/".$User;
        }

        $U_ID = request('Id');
        $Name = request('u_name');
        $Email = request('u_email');
        $Password = request('u_password');
        $Dob = request('u_dob');
        $Gender = request('u_gender');
        $Mobile = request('u_contact_no');



        $query_edit = DB::update('UPDATE `users` SET `Name`= ?,`Image`= ?,`Email`= ?,`Password`= ?, `DateOfBirth` = ?, `Gender` = ?, `Contact_No` = ? WHERE User_ID = ?',
        [$Name,$Image,$Email,$Password,$Dob,$Gender,$Mobile,$U_ID]);



        if($query_edit)
        {

        return redirect('Admin_Users') -> with('Status','Movie Cast Successfully Updated!');
        }
        else
        {
            return redirect('Admin_Users') -> with('Status','Movie Cast Insertion Error!');
        }




     return view('Admin_EditUser',compact('query_edit','Reviews'));

    }





    public function Delete_Admin_EditUser($id)
    {

    $query = DB::delete('delete from users where User_ID = ?',[$id]);
    if($query)
    {
    return redirect('Admin_Users')->with('Deletion', 'Data Deleted Successfully');
    }
    else
    {
    echo "Data Deletion failled";
    }

    }






    public function Order_Details()
    {


        if(!session()-> has('Admin_Name'))
        {
         return redirect('Admin_Login');
        }

        $Order_Detail = DB::select('select b.Booking_Id,u.Name,u.Image,m.Movie_Title, m.Movie_Poster,t.Theaters_Name,s.Seat_Number,b.Amount,b.Ticket_Date,b.Date,r.R_Stars
        from movies m, booking_process b ,users u , movie_theaters t, seat s, reviews r
        where m.Movie_Id = b.Movie_Id AND u.User_ID = b.User_ID AND b.Theaters_Id = t.Theaters_Id and m.Movie_Id = r.Movie_Id
        and b.Seat_Id = s.Seat_Id');

        return view('Order_Details',compact('Order_Detail'));

    }





    public function Reviews()
    {

       if(!session()-> has('Admin_Name'))
        {
         return redirect('Admin_Login');
        }


    $Reviews = DB::select('select * from reviews');


    return view('Reviews',compact('Reviews'));
    }


    public function Delete_Reviews($id)
    {

    $Reviews = DB::delete('delete from reviews where R_Id = ?',[$id]);

    if($Reviews)
    {
    return redirect('Reviews')->with('Deletion', 'Data Deleted Successfully');
    }
    else
    {
    echo "Data Deletion failled";
    }

    }










    public function Delete_Order_Details($id)
    {

    $query = DB::delete('delete from booking_process where Booking_Id = ?',[$id]);
    if($query)
    {
    return redirect('Order_Details')->with('Deletion', 'Data Deleted Successfully');
    }
    else
    {
    echo "Data Deletion failled";
    }

    }












































    public function Seat()
    {


        $query_seat = DB::select('SELECT ms.Show_Id,ms.Date,mt.Theaters_Name
        FROM movie_show_time ms, movie_theaters mt
        WHERE ms.Theaters_Id = mt.Theaters_Id');
        
       return view('Seat',compact("query_seat"));

    }


    public function Click_Seat()
    {


        if(!session()-> has('Admin_Name'))
        {
         return redirect('Admin_Login');
        }
    
      
        $S_No = request('S_No');

        $Show_Id = request('Show_Id');
    
    
        

        $query = DB:: insert('INSERT INTO `seat`(`Seat_Number`, `Show_Id`) VALUES (?,?)',[$S_No,$Show_Id]);
    
        if($query)
        {
    
        return redirect('Seat_List') -> with('Status','Seat Successfully Inserted!');
        }
        else
        {
            return redirect('Seat_List') -> with('Status','Seat Insertion Error!');
        }
    

        return view('Seat',compact('query_movies'));

    }





    public function Seat_List()
    {


        $query_seat = DB::select("SELECT *
        FROM seat");
      

       return view('Seat_List',compact("query_seat"));

    }



    public function Delete_Seat_List($id)
    {

    $query = DB::delete('delete from seat where Seat_Id  = ?',[$id]);
    if($query)
    {
    return redirect('Seat_List')->with('Deletion', 'Data Deleted Successfully');
    }
    else
    {
    echo "Data Deletion failled";
    }

    }




    public function Edit_Seat_List($id)
    {

        if(!session()-> has('Admin_Name'))
        {
         return redirect('Admin_Login');
        }


       $Edit_Theater = DB::select('SELECT ms.Show_Id,ms.Date,mt.Theaters_Name
       FROM movie_show_time ms, movie_theaters mt
       WHERE ms.Theaters_Id = mt.Theaters_Id');

        $Edit_Seat = DB::select('select * from seat where Seat_Id = ?',[$id]);


        return view('Edit_Seat_List',compact('Edit_Seat','Edit_Theater'));
    }



    public function Click_Edit_Seat_List(Request $request)
    {
       

        $Seat_Id = request('Seat_Id');
        $S_No = request('S_No');
        $Theater = request('Show_Id');

        $query_update = DB::update('UPDATE `seat` SET `Seat_Number` = ?,`Show_Id` = ? WHERE  Seat_Id  = ?',[$S_No,$Theater,$Seat_Id]);

        $Edit_Theater = DB::select('SELECT ms.Show_Id,ms.Date,mt.Theaters_Name
       FROM movie_show_time ms, movie_theaters mt
       WHERE ms.Theaters_Id = mt.Theaters_Id');

        if($query_update)
        {

           return redirect('Seat_List') -> with('Status','Update Successfully Inserted!');
        }
        else
        {
            return redirect('Seat_List') -> with('Status','Update Insertion Error!');
        }

        return view('Edit_Seat_List');
    }




























}

<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;


class HomeController extends Controller
{


    public function Index()
    {

        $query2 = DB::select('SELECT m.Movie_Id,m.Movie_Poster,m.Movie_Title,m.Movie_Release_year,c.Category_Name,c.Category_Country
        FROM movies m, category c
        WHERE c.Category_Id = m.Category_Id');



        return view('Index',compact('query2'));
    }


    public function Game()
    {
        return view('Game');
    }


    public function View()
    {
        return view('View');
    }


    public function Ben10()
    {
        return view('Ben10');
    }


    public function AngryBird()
    {
        return view('AngryBird');
    }




    public function Spiderman()
    {
        return view('Spiderman');

    }


    public function Cars()
    {
        return view('Cars');

    }





    public function CheckOut()
    {
        return view('CheckOut');

    }


    public function Pack()
    {
        return view('Pack');

    }



    public function Graphics()
    {
        return view('Graphics');

    }



    public function Quiz()
    {
        return view('Quiz');

    }




    public function Display_Game()
    {
        return view('Display_Game');
    }

    public function About()
    {
        return view('About');
    }


    public function Contact()
    {
        return view('Contact');
    }




    public function Movie()
    {

    $query2 = DB::table('movies')->select('*')->paginate(8);

    $query1 = DB::select("select * from category");


    return view('Movie',compact('query1','query2'));

    }



    public function Click_Movie_Filter(Request $request)
    {

           $cat = request('inpCat');

        if($cat == '')
        {
            $query2 = DB::table('movies')->select('*')->paginate(4);
        }
        else
        {
            $query2 = DB::table('movies')->select('*')->where('Category_Id', '=', $cat)->paginate(4);
        }


        $query1 = DB::select("select * from category");

        return view('Movie',compact('query2','query1'));

    }


    public function Display_Movie($id)
    {





        $query_User = DB::select('select c.Name,c.Image,c.Email,c.Password,c.DateOfBirth,c.Gender,c.Contact_No,c.Registration_Date
        from users c, booking_process m
        where c.User_ID = m.User_ID and Movie_Id = ?',[$id]);





    $query_review = DB::select('select r.User_ID,r.R_Name,r.R_Des,r.R_Stars,u.Name,u.Image,u.Registration_Date
    from reviews r, users u
    where r.User_ID = u.User_ID and Movie_Id = ?',[$id]);


   $query_category = DB::select('select c.Category_Name, c.Category_Country
   from category c, movies m
   where c.Category_Id = m.Category_Id and Movie_Id = ?',[$id]);

    $query_Show_Movie = DB::select('select * from movies where Movie_Id = ?', [$id]);
    $query1 = DB::select('select * from movie_show_time where Movie_Id = ?',[$id]);
    $query2 = DB::select('select * from movie_cast where Movie_Id  = ?',[$id]);

    Session::put('variableName', $query_Show_Movie[0] ->Movie_Price);

    $query_The = DB::select('select c.Theaters_Id,c.Theaters_Name, c.Theaters_Address, c.Theaters_Place
    from movie_theaters c, movie_show_time m
    where c.Theaters_Id = m.Theaters_Id and Movie_Id = ?',[$id]);


    $query_Seat = DB::select('select * from seat');
    // $query_Seat = DB::select('select * from seat where Theaters_Id  and Movie_Id = ?',[$id]);


    return view('Display_Movie',compact('query_Show_Movie','query1','query2','query_Seat','query_category','query_The','query_review','query_User'));
    }















    public function Registration()
    {
        return view('Registration');
    }


    public function Click_Registration(Request $request)
    {




        if($request->file == NULL)
        {


            $imageName = request('HiddenPicPath');
            $Image = $imageName;

        }
        else
        {

            $imageName = time()."." .$request -> file -> extension();
            $request -> file -> move(public_path('public/images/User_img'),$imageName);
            $Image = "public/images/User_img/".$imageName;

        }




      $Name = request('name');
      $Email = request('email');
      $Password = request('password');
      $Dob = request('Dob');
      $Gender = request('gender');
      $Mobile = request('mobile');
      $date = Carbon::now();




     $query1 = DB::select("select * from users where Email = ?",[$Email]);

    if($query1)
    {
        return redirect('Registration') -> with('Status','Email Already Exist');

    }
    else
    {


      $query = DB::insert('INSERT INTO `users` (`Name`, `Image`, `Email`, `Password`, `DateOfBirth`, `Gender`, `Contact_No`, `Registration_Date`) VALUES (?,?,?,?,?,?,?,?)',
      [$Name,$Image,$Email,$Password,$Dob,$Gender,$Mobile,$date]);

        if($query)
        {
           return redirect('Login') -> with('Status','Record Successfully Inserted!');
        }
        else
        {
            return redirect('Registration') -> with('Status','Record Insertion Error!');
        }

    }

    }





    public function Login()
    {
        if(session()-> has('User_Name'))
        {
         return redirect('Index');
        }

        return view('Login');
    }





    public function Click_Login(Request $request)
    {
     $email =  request('uname');
     $pass =  request('upass');
     $query = DB::select('select * from users where Email = ? and Password = ?',[$email,$pass]);

     if($query)
     {
         Session::put('User_ID',$query[0] -> User_ID);
         Session::put('User_Name',$query[0] -> Name);
         Session::put('User_Image', $query[0] ->Image);
         Session::put('User_Email',$query[0] -> Email);
         Session::put('User_Password',$query[0] -> Password);
         Session::put('User_Dob',$query[0] -> DateOfBirth);
         Session::put('User_Gender',$query[0] -> Gender);
         Session::put('User_Number',$query[0] -> Contact_No);
         Session::put('User_Registration_Date',$query[0] -> Registration_Date);



         return redirect('Index')->with('alert', 'Login Successfully!');


     }

     else
     {

     return redirect('Login')-> with('Incorrect','Incorrect Email or password');

     }

     }








     public function EditProfile(Request $request)
     {


        if(!session()-> has('User_Name'))
        {
         return redirect('Index');
        }


        $ID = session('User_ID');


        $query_edit = DB::select('select * from users where User_ID = ?',[$ID]);

         return view('EditProfile',compact('query_edit'));
        }








     public function Click_EditProfile(Request $request)
     {



        if($request->file1 == NULL)
        {

            $imageName = request('HiddenPicPath1');
            $Image = $imageName;

        }
        else
        {

            $imageName = time()."." .$request -> file1 -> extension();
            $request -> file1 -> move(public_path('public/images/User_img'),$imageName);
            $Image = "public/images/User_img/".$imageName;

        }








        $ID = request('U_ID');
        $Name = request('name');
        $Email = request('email');
        $Password = request('password');
        $Dob = request('Dob');
        $Gender = request('gender');
        $Mobile = request('mobile');
        $Registration = request('res');





         $query_edit = DB::update('UPDATE `users` SET `Name`= ?,`Image`= ?,`Email`= ?,`Password`= ?, `DateOfBirth` = ?, `Gender` = ?, `Contact_No` = ?, `Registration_Date`= ?  WHERE User_ID = ? ',
         [$Name,$Image,$Email,$Password,$Dob,$Gender,$Mobile,$Registration,$ID]);

         if($query_edit)
         {
            return redirect('Index') -> with('Status','Profile Updated Successfully!');
         }
         else
         {
             return redirect('EditProfile') -> with('Status','Profile Update Error!');
         }

         return view('EditProfile',compact('query_edit'));

     }





     public function Celebrity()
     {





     $query_cast = DB::table('movie_cast')->select('*')->paginate(3);


      return view('Celebrity',compact('query_cast'));
     }











      public function Celebrity_grid()
     {





        $query_cast = DB::table('movie_cast')->select('*')->paginate(4);


       return view('Celebrity_grid',compact('query_cast'));
     }




     public function Movie_BookingProcess($id)
     {




        $query_category = DB::select('select c.Category_Name, c.Category_Country
        from category c, movies m
        where c.Category_Id = m.Category_Id and Movie_Id = ?',[$id]);




        $query_Show_Movie = DB::select('select * from movies where Movie_Id = ?', [$id]);

        $query1 = DB::select('select * from movie_show_time where Movie_Id = ?',[$id]);





$query_Seat = DB::select('select * from seat');

$query_The = DB::select('select c.Theaters_Id,c.Theaters_Name, c.Theaters_Address, c.Theaters_Place
from movie_theaters c, movie_show_time m
where c.Theaters_Id = m.Theaters_Id and Movie_Id = ?',[$id]);




$ID = session('User_ID');


$query_User = DB::select('select * from users where User_ID = ?',[$ID]);





       return view('Movie_BookingProcess',compact('query_Show_Movie','query_User','query_The','query1','query_category','query_Seat'));
     }



     public function Click_Movie_BookingProcess()
     {

        $U_ID  =  request('UserID');
        $R_Name  =  request('name');
        $R_Message  =  request('message');
        $R_Stars  =  request('stars');
        $Movie_Id  =  request('M_Id');



        $query123 = DB:: insert('INSERT INTO `reviews`(`R_Name`, `R_Des`, `R_Stars`, `Movie_Id`,`User_ID`) VALUES (?,?,?,?,?)',[$R_Name,$R_Message,$R_Stars,$Movie_Id,$U_ID]);


        $query_Seat = DB::select('select * from seat');
        $query_The = DB::select('select * from movie_theaters');
        $query_User = DB::select('select * from users');



        $Theaters_Id = request('Theaters');
        $Movie_Id   =  request('Movie_Id');
        $Seat_Id   =  request('seat_no');
        $User_ID   =  request('UserID');
        $Amount   =  request('Amount');



        $Date   =  request('Date');

        $date = Carbon::now();

        $query = DB:: insert('INSERT INTO `booking_process`(`Theaters_Id`, `Movie_Id`, `Seat_Id`,`User_ID`,`Amount`,`Ticket_Date`,`Date`) VALUES (?,?,?,?,?,?,?)',[$Theaters_Id,$Movie_Id,$Seat_Id,$User_ID,$Amount,$date,$Date]);




        if($query)
        {

         return redirect('Booking_Summery/'.$Movie_Id)->with('Booking', 'Ticket Booking Successful');


        }
        else
        {
            return redirect('Booking_Summery') -> with('Status','Movie Cast Insertion Error!');
        }






      return view('Movie_BookingProcess',compact('query','query_Seat','query123'));
     }




     public function Logout()
     {



        Session::forget('User_Name');


         return view('Login');


     }




     public function Booking_Summery($id)
     {



        $Order_Detail = DB::select('select b.Booking_Id,u.Name,u.Image,m.Movie_Title, m.Movie_Poster,t.Theaters_Name,t.Theaters_Address,s.Seat_Number,m.Movie_Price,b.Ticket_Date,b.Date,m.Movie_Release_year,m.Movie_duration_min,ms.Start_time
        from movies m, booking_process b ,users u , movie_theaters t, seat s,movie_show_time ms

        where m.Movie_Id = b.Movie_Id AND u.User_ID = b.User_ID AND b.Theaters_Id = t.Theaters_Id
         and m.Movie_Id = ms.Movie_Id  and b.Seat_Id = s.Seat_Id and m.Movie_Id = ?', [$id]);



        if(!session()-> has('User_Name'))
        {
         return redirect('Index');
        }


     $query_Show_Movie = DB::select('select * from movies where Movie_Id = ?', [$id]);


    $ID = session('User_ID');


    $query_User = DB::select('select * from users where User_ID = ?',[$ID]);



    return view('Booking_Summery',compact('Order_Detail','query_User','query_Show_Movie'));

    }







    public function Movie_Seats($id)
    {


        $intA = (int)$id;


        $query_seat = DB::select("select *
        from seat s left outer join seat_booking_status sb
        on s.seat_id = sb.seat_id
        where s.Show_Id = 7 order by seat_number");

        $QUERY_SEAT_SIMPLE = DB::select("select * from seat");
        $query_Booking = DB::select('SELECT * from seat_booking_status');



   return view('Movie_Seats',compact('QUERY_SEAT_SIMPLE','query_Booking','query_seat'));

    // return view('Movie_Seats');
    }



    public function Click_Movie_Seats()
    {



        // $query_seat = DB::select('select * from seat');

        $query_The = DB::select('select c.Theaters_Id,c.Theaters_Name, c.Theaters_Address, c.Theaters_Place
        from movie_theaters c, movie_show_time m
        where c.Theaters_Id = m.Theaters_Id');


        $Seat_id  =  request('Seat_Id');

        $query123 = DB:: insert('INSERT INTO `seat_booking_status` (`Status`,`Seat_Id`) VALUES (?,?)',["Booking",$Seat_id]);



        if($query123)
        {

         return redirect('Movie_Seats/'.$query_The[0]->Theaters_Id)->with('Booking', 'Ticket Booking Successful');


        }
        else
        {
            return redirect('Movie_Seats') -> with('Status','Movie Cast Insertion Error!');
        }




        return view('Movie_Seats',compact('query123'));

    }


















    public function Movie_Products()
    {

    $query_Food = DB::select('select * from products');
    return view('Movie_Products',compact('query_Food'));

    }









}

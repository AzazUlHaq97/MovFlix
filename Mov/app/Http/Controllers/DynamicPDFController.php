<?php


namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\PDF;





class DynamicPDFController extends Controller
{


    function pdf()
    {
     $pdf = App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_customer_data_to_html());
     return $pdf->stream();
    }

    function convert_customer_data_to_html()
    {






        $Order_Detail = DB::select('select b.Booking_Id,u.Name,u.Image,m.Movie_Title, m.Movie_Poster,t.Theaters_Name,t.Theaters_Address,s.Seat_Number,m.Movie_Price,b.Ticket_Date,b.Date,m.Movie_Release_year,m.Movie_duration_min,ms.Start_time
    from movies m, booking_process b ,users u , movie_theaters t, seat s,movie_show_time ms

    where m.Movie_Id = b.Movie_Id AND u.User_ID = b.User_ID AND b.Theaters_Id = t.Theaters_Id
     and m.Movie_Id = ms.Movie_Id  and b.Seat_Id = s.Seat_Id');







     foreach($Order_Detail as $customer)
     {




          $output = '





          <style>
          .address
          {
width:10px;
height:100px;
overflow-hidden;
          }

          .booking-summery
          {
  background-image: url("public/images/two2.jpg");
   background-size: cover;
   font-family: Arial, Helvetica, sans-serif;
          }

          h2{text-transform: capitalize;}

          .row{
            font-family: "Sofia", sans-serif;
              width: 100%;
              margin:20px auto 0px auto;

          }

          li{

             list-style:none;
             font-style:italic;
             line-height:14px;


          }
          span{

              font-size: 16px;
          }

      </style>

     </head>
     <body class="booking-summery">



      <div class="row">
          <div  style="width:100%;padding:10px;">

          <ul>

          <li>

     <h3 style="text-align:center;margin-right:10px;"><img src="'.$customer->Image.'" style="width:262px;height:125px;margin-top:118px;border-radius:5%"></h3>
     <h1  style="text-align:center;color:black;font-weight:bold;margin-top:40px; text-decoration: underline;letter-spacing: 3px;font-style:italic;">'.$customer->Name.'</h1>
     <h3 style="text-align:center;color:#ad773b;letter-spacing: 4px;font-style:italic;">'.$customer->Movie_Title.'</h3><br>
          </li>


          <li>
              <h3 class="subtitle" style="margin-left:100px;"><span>Cinema</span><span style="color:#ff84ac;margin-left:250px;">'.$customer->Theaters_Name.'</span></h3>
          </li>

          <li>
              <h3 class="subtitle"  style="margin-left:100px;width:500px;"><span>Address</span> <span style="color:#ff84ac;margin-left:237px;">'.$customer->Theaters_Address.'</span></h3>
          </li>

          <li>
             <h3 class="subtitle" style="margin-left:100px"><span>Duration Min</span><span style="color:#ff84ac;margin-left:203px;">
          '.$customer->Movie_duration_min.'</span></h3>
          </li>

          <li>
          <h3 class="subtitle" style="margin-left:100px"><span>Show Date</span><span style="color:#ff84ac;margin-left:223px;">'.$customer->Date.'</span></h2>
          </li>

          <li>
            <h3 class="subtitle" style="margin-left:100px"><span>Show Time</span> <span style="color:#ff84ac;margin-left:214px;">'.$customer->Start_time.'</span></h2>
          </li>


          <li>
          <h3 class="subtitle" style="margin-left:100px"><span>Seat No:</span> <span style="color:#ff84ac;margin-left:230px;">
              '.$customer->Seat_Number.'</span></h2>
          </li>
          <li>
          <h3 class="subtitle" style="margin-left:100px"><span>Ticket Price</span> <span style="color:#ff84ac;margin-left:210px;">Rs :
              '.$customer->Movie_Price.'</span></h2>
          </li>
          </ul>



          </div>
          </div>

          ';

     }

          return $output;

         }



            //   <li>
        //       <h3 class="subtitle" style="margin-left:100px"><span>Release Date:</span> <span style="color:#9aace5;margin-left:250px;">'.$customer->Movie_Release_year.'</span></h2>
        //   </li>


}


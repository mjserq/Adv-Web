<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class salesController extends Controller
{
    //SALES CONTROLL

    public function sales(){
        //command for retrieving records from the mysql database
   
           $sales =  DB::SELECT("SELECT * FROM sales_tbl");
           return view('sales',['sales' => $sales]);
       }

       public function insertSales(Request $request){
        //initialization
        $sales_id=$request->input('sales_id');
        $sales_date=$request->input('sales_date');
        $product_sold=$request->input('product_sold');
        $total_amount=$request->input('total_amount');
        //mysql insert command
        DB::INSERT("INSERT into sales_tbl(sales_id,sales_date,product_sold,total_amount)VALUES(?,?,?,?)", [$sales_id,$sales_date,$product_sold,$total_amount]);
        $sales =  DB::SELECT("SELECT * FROM sales_tbl");
           return view('sales',['sales' => $sales]);

    }

    public function deleteSales($sales_id){

        DB::DELETE("DELETE FROM sales_tbl WHERE sales_id=?",[$sales_id]);
          $sales =  DB::SELECT("SELECT * FROM sales_tbl");
        return view('sales',['sales' => $sales]);
    }
}

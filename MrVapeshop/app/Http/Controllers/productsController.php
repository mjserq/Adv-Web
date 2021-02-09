<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
class productsController extends Controller
{
    public function prod(){
        //command for retrieving records from the mysql database
   
           $products =  DB::SELECT("SELECT * FROM product_tbl");
           return view('products',['products' => $products]);
       }

       public function insertProduct(Request $request){
        //initialization
        $prod_name=$request->input('prod_name');
        $prod_price=$request->input('prod_price');
        $prod_quantity=$request->input('prod_quantity');
        //mysql insert command
        DB::INSERT("INSERT into product_tbl(prod_name,prod_price,prod_quantity)VALUES(?,?,?)", [$prod_name,$prod_price,$prod_quantity]);
        $products =  DB::SELECT("SELECT * FROM product_tbl");
           return view('products',['products' => $products]);

    }

    public function deleteProduct($prod_id){

        DB::DELETE("DELETE FROM product_tbl WHERE prod_id=?",[$prod_id]);
          $products =  DB::SELECT("SELECT * FROM product_tbl");
        return view('products',['products' => $products]);
    }



    

    
}

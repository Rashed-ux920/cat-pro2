<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use App\Models\User;
// use Exception as GlobalException;
use FFI\Exception;
use Illuminate\Http\Request;

class dashboard extends Controller
{
    public function index(){
        $users = User::all();
        $category = category::all();
        $producteall = product::all();

        // dd($producteall);

        return view('dashboard',['users' => $users],['category' => $category,'productesall' => $producteall]);
    }

    public function create(){
        return view('categoryform');
    }

    public function stor(Request $request){

        try {
            $category = new category;

            $category->name = $request->name;
            $category->desc = $request->desc;

            $category->save();

            return redirect('dashboard')->with('success',' the category has been saved');
        } catch (Exception $e) {
            return redirect('dashboard')->with('fail',' the category has been not saved'." ". 'Erorr '. $e->getMessage());
        }


    }

    public function show($id){
        $category = category::find($id);
        return view('categoryupdateform',['categoryold' => $category]);

    }
    public function update(Request $request,$id){

        try {
            $category = category::find($id);

            $category->name = $request->name;
            $category->desc = $request->desc;

            $category->save();

            return redirect('dashboard')->with('success',' the category has been updated');
        } catch (Exception $e) {
            return redirect('dashboard')->with('fail',' the category has been not saved'." ". 'Erorr '. $e->getMessage());
        }


    }

    public function destroy($id){
        $category = category::find($id);
        dd($category);
        $category->delete();

        return redirect('dashboard')->with('success', 'Post deleted successfully.');
    }


}

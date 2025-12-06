<?php

namespace App\Http\Controllers;

use App\Models\Expertise;
use Illuminate\Http\Request;

class ExpertiseController extends Controller
{
    public function index()
    {
        $Expertise = Expertise::all();
        return view('expertise/Expertise', ['expertise' => $Expertise]);
    }

    public function add_new()
    {
        $expertises=Expertise::where('parent_id',null)->get();
        return view('expertise/add_new_expertise',get_defined_vars());
    }

    public function insert(Request $request)
    {
        // return $request->all();
        $imageName=null;
        if (!empty($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('/images'), $imageName);
        } 
         $imageBanner=null;
        if (!empty($request->banner)) {
            $imageBanner = time() . '.' . $request->banner->extension();
            $request->banner->move(public_path('/images'), $imageBanner);
        } 
        $data = [
            'title' => $request->title,
             'parent_id' => $request->parent_id!="null"?$request->parent_id:null,
            'image'=>$imageName,
            'banner'=>$imageBanner,
            'short_description' => $request->short_description,
            'discription' => $request->discription,
        ];
        $response = Expertise::create($data);
        if ($response) {
            return redirect('/admin/expertise')->with('success', 'Your Expertise has been created.');
        } else {
            return redirect('/admin/expertise')->with('error', 'Something Went Wrong');
        }
    }

    public function edit($id)
    {
        $expertise = Expertise::where('id', $id)->first();
         $expertises=Expertise::where('parent_id',null)->get();
        return view('expertise/edit',get_defined_vars());
    }
    public function update(Request $request)
    {
        // return $request->all();
         $imageName=$request->old_image;
        if (!empty($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('/images'), $imageName);
        } 
         $imageBanner=$request->old_banner;
        if (!empty($request->banner)) {
            $imageBanner = time() . '.' . $request->banner->extension();
            $request->banner->move(public_path('/images'), $imageBanner);
        } 
   
        $data = [
            
        ];
        $response = Expertise::find($request->id)->update([
            'title' => $request->title,
             'parent_id' => $request->parent_id!="null"?$request->parent_id:null,
            'image'=>$imageName,
            'banner'=>$imageBanner,
            'short_description' => $request->short_description,
            'discription' => $request->discription
            ]);
        if ($response) {
            return redirect('/admin/expertise')->with('success', 'Your Expertise has been Updated.');
        } else {
            return redirect('/admin/expertise')->with('error', 'Something Went Wrong');
        }
    }

    // teams

    public function destroy($id)
    {
        Expertise::where('id', '=', $id)->delete();
        return redirect('admin/expertise');
    }
}

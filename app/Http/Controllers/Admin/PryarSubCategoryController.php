<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Gate;
use App\Models\PrayerSubCategory;
use App\Models\PrayerCategory;

use Illuminate\Support\Facades\File;

class PryarSubCategoryController extends Controller
{
    public function show(){
        $PrayerSubCategory=PrayerSubCategory::get();
        $PrayerCategory=PrayerCategory::get();
        return view('admin.pages.dashboard.prayer-sub-category',compact('PrayerSubCategory','PrayerCategory'));
    }
     public function store(Request $request){
         abort_if(Gate::denies('permission_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $this->validate($request, [
            'title' =>'required',
            'icon' =>'required',
            'prayer_category_id' =>'required',
           
        ]);

        $PrayerSubCategory = new PrayerSubCategory();
        $PrayerSubCategory->title = $request->title;
        $PrayerSubCategory->prayer_category_id = $request->prayer_category_id;
     
        if ($request->hasFile('icon')) {
            
            $fileName = time().'.'.$request->icon->extension();
            $path = $request->file('icon')->move(public_path('admin/assets/images/Prayersubcatgory'), $fileName);
            $PrayerSubCategory->icon = url('admin/assets/images/Prayersubcatgory/' . $fileName);
        }
        $PrayerSubCategory->save();

        if($PrayerSubCategory){
            return redirect()->route('prayer-sub-category')->with('success', 'Prayer Sub Category Created Successfully.');

         }else{
            return redirect()->route('prayer-sub-category')->with('error', 'Failed to create Prayer Sub Category.Please retry..');
         }
    }
    public function update(Request $request, $id)
{
    // Find the PrayerSubCategory by its ID
    $prayersubcategory = PrayerSubCategory::find($id);

    // Check if the PrayerSubCategory exists
    if (!$prayersubcategory) {
        return redirect()->route('prayer-sub-category')->with('error', 'Prayer Sub Category not found.');
    }

    // Update the attributes
    $prayersubcategory->title = $request->input('title');
    $prayersubcategory->prayer_category_id = $request->input('prayer_category_id');

    if ($request->hasFile('icon')) {
        if ($prayersubcategory->icon) {
            $oldImage = public_path('admin/assets/images/Prayersubcatgory/' . basename($prayersubcategory->icon));
            if (File::exists($oldImage)) {
                File::delete($oldImage);
            }
        }

        $fileName = time().'.'.$request->file('icon')->extension();
        $path = $request->file('icon')->move(public_path('admin/assets/images/Prayersubcatgory'), $fileName);
        $prayersubcategory->icon = url('admin/assets/images/Prayersubcatgory/' . $fileName);
    }

    $saved = $prayersubcategory->save();

    if ($saved) {
        return redirect()->route('prayer-sub-category')->with('success', 'Prayer Sub Category updated Successfully.');
    } else {
        return redirect()->route('prayer-sub-category')->with('error', 'Failed to update Prayer Sub Category. Please retry.');
    }
}
        public function delete($id){
           $prayersubcategory= PrayerSubCategory::where('id',$id)->delete();
            if ($prayersubcategory) {   
                return redirect()->route('prayer-sub-category')->with('success', 'Prayer Sub Category deleted Successfully.');

            }else{
        return redirect()->route('prayer-sub-category')->with('error', 'Failed to delete Prayer Sub Category. Please retry.');

            }
        } 
    
}

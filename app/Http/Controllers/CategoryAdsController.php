<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\CategoryAds;

class CategoryAdsController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index(Request $request){
    $category = new CategoryAds;

    $res['success'] = true;
    $res['result']  = $category->all();

    return response($res);
  }

  public function create(Request $request){
    $category = new CategoryAds;
    $category->fill([ 'name' => $request->input('name')]);
    if ($category->save()) {
      $res['success'] = true;
      $res['result']  = 'Success add new category!';

      return response($res);
    }
  }

  public function read(Request $request, $id){
    $category = CategoryAds::where('id', $id)->first();

    if ($category !== null) {
      $res['success'] = true;
      $res['result'] = $category;

      return response($res);
    }else {
      $res['success'] = true;
      $res['result'] = 'Category not found!';

      return response($res);
    }
  }

  public function update(Request $request, $id){
    if ($request->has('name')) {
      $category = CategoryAds::find($id);
      $category->name = $request->input('name');
      if ($category->save()) {
        $res['success'] = true;
        $res['result']  = 'Success update'.$request->input('name');

        return response($res);
      }
    }else {
      $res['success'] = false;
      $res['result']  = 'Please fill name category!';

      return response($res);
    }
  }

  public function delete(Request $request, $id){
    $category = CategoryAds::find($id);
    if ($category->delete($id)) {
      $res['success'] = true;
      $res['result']  = 'Success delete category!';

      return response($res);
    }

  }

}

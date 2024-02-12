<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Itemgroups;
use App\Models\Items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Auth;

class DashControl extends Controller
{
  /*
    public function __construct()
    {
        $this->middleware('auth');
    }
*/
    
    public function SaveItems(request $request){
        $img_path= $request->file('itemImg')->store('photos','public');
        $data=Items::create([
          "itemName"=>$request->itemName,
          "callories"=>$request->callories,
          "desc"=>$request->desc,
          "itemgroupno"=>$request->itemgroupno,
          "price"=>$request->price,
          'itemImg'=>$img_path,
        ]);
        $data->save();
        return redirect('items');
      }

      public function SaveGroupItems(request $request){
        $img_path= $request->file('groupImg')->store('photos','public');
        $data=Itemgroups::create([
          'itemgroupName'=>$request->itemgroupName,
          'groupImg'=>$img_path
        ]);
        $data->save();
        return redirect('groups');
      }

      public function GetItems(){ 
        $data=Items::All();
        $data2=Itemgroups::All();
        return view("dashboard.additem",["data"=>$data,"data2"=>$data2]);
      }

      public function GetItemGroup(){
        $data=Itemgroups::All();
        return view("dashboard.addgroup",["data"=>$data]);
      }


    public function Disply(request $request){
      $data=DB::table('itemgroups')->join('items','itemgroups.id','=','items.itemgroupno')->get();
      return view('dashboard.controlpanel', ['data'=>$data]);
    }

    public function delGroup($id){
      $item=Itemgroups::find($id);
      $item->delete();
      Storage::disk('public')->delete($item->itemImg
);
      return redirect('groups');
    }
  
    public function delItem($id){
      $item=Items::find($id);
      $item->delete();
      Storage::disk('public')->delete($item->itemImg);
      return redirect('items');
    }

    public function editGroup($id){
      $group=Itemgroups::find($id);
      return view('dashboard.editGroup',['group'=>$group]);
    }

    public function editItem($id){
      $item=Items::find($id);
      $itemgroup=Itemgroups::All();
      return view('dashboard.editItem',['item'=>$item],['itemgroup'=>$itemgroup]);
    }


    public function updateGroup(request $request){
      $group=Itemgroups::find($request->id);
      Storage::delete('app/public/'.$group->groupImg);
      $img_path= $request->file('groupImg') ->store('photos','public');
      $group->itemgroupName=$request->itemgroupName;
      $group-> groupImg=$img_path;
      $group->save();//update($request->all());
      
      return redirect('groups');
    }

    public function updateItem(Request $request){
      $item=Items::find($request->id);   
      $item->update($request->all());//save();
      return redirect('items');
    }

      public function logout(){
        Auth::logout();
      }  
}

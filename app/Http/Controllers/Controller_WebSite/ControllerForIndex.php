<?php

namespace App\Http\Controllers\Controller_WebSite;

use App\Models\Cv;
use App\Models\Plog;
use App\Models\Photo;
use App\Models\Footer;
use App\Models\Percent;
use App\Models\Conntact;
use App\Models\add_titel;
use App\Models\Education;
use App\Models\Expierince;
use App\Models\addNameTitel;
use Illuminate\Http\Request;
use App\Models\continueModel;
use App\Http\Controllers\Controller;

class ControllerForIndex extends Controller
{
    public function index(){
        $titel=add_titel::get();//all()->last()->id;
        $titelName=addNameTitel::latest('id')->first();
        $infoConn=Conntact::all();
        $infoPlogs=Plog::all();
        $infoPhoto=Photo::all();
        $infoFooters=Footer::all();
        $infoExpierinces=Expierince::all();
        $infoEducations=Education::all();
        $infoPercents=Percent::all();

        $infoCvs=Cv::all();

        return view('master.index',compact('titel','titelName','infoConn','infoPlogs','infoPhoto','infoFooters','infoExpierinces','infoEducations','infoCvs','infoPercents'));
    }


    public function addCon(){
        $info=Conntact::paginate(5);
        return view('pagesDash.ADD.Add_con',compact('info'));
    }




    public function storeCon(Request $request){
        $request->validate([
            'email'=>'required',
            'phone'=>'required',
            'addrress'=>'required',

        ],[
            'email.required'=>' البريد مطلوب!',
            'phone.required'=>'  رقم الهاتف مطلوب !',
            'addrress.required'=>' العنوان الخاص بك مطلوب !',

        ]);
        $emp=new Conntact();
        $emp->Email=$request->email;
        $emp->Phone=$request->phone;
        $emp->Adress=$request->addrress;
        $emp->save();
return redirect()->route('Dash.admin')->with(['sucsess'=>'تمت اضافة بيانات التواصل بنجاح ']);
    }


                         // EUD for Titel

    public function edit($lang_id)
    {
       $lan= Conntact::find($lang_id);
       if(!$lan)
       return redirect()->back();

       $all=Conntact::select('id','Email','Phone','Adress')->find($lang_id);

       return view('pagesDash.EUD.editForConn',compact('all'));
    }


    public function update(request $request, $lang_id )
    {
       $lan=Conntact::select('id','Email','Phone','Adress','created_at','updated_at')->find($lang_id);
       if(!$lan)
       return redirect()->back();
      // $lan->update($request->all());
       $lan->update([
         'Email'=>$request->email,
         'Phone'=>$request->phone,
         'Adress'=>$request->addrress,
        ]);
       return redirect()->route('add.con')->with(['sucsess'=>'تم التعديل بنجاح']);
    }

    public function delete( $lang_id )
    {
$lang=Conntact::find( $lang_id);
if(!$lang)
    return redirect()->back()->with('خطا','هذا السجل غير موجود لقد تم حذفه بالفعل');
//delete
$lang->delete();
       return redirect()->route('add.con')->with(['sucsesss'=>'تم  حذف سجل !']);
    }



                           // EUD for AddTitel


        public function editForAddTitel($lang_id)
        {
            $lan= addNameTitel::find($lang_id);
            if(!$lan)
            return redirect()->back();
            $all=addNameTitel::select('id','name_titel')->find($lang_id);
            return view('pagesDash.EUD.editForAddTitel',compact('all'));
        }

        public function updateForAddTitel(request $request, $lang_id )
        {
           $lan=addNameTitel::select('id','name_titel','created_at','updated_at')->find($lang_id);
           if(!$lan)
           return redirect()->back();
          // $lan->update($request->all());
           $lan->update([
             'name_titel'=>$request->addNameMessage,
            ]);
           return redirect()->route('add.Titile')->with(['sucsess'=>'تم التعديل بنجاح']);
        }

        public function deleteForAddTitel( $lang_id )
        {
        $lang=addNameTitel::find( $lang_id);
        if(!$lang)
        return redirect()->back()->with('خطا','هذا السجل غير موجود لقد تم حذفه بالفعل');
        //delete
        $lang->delete();
           return redirect()->route('add.Titile')->with(['false'=>'تم  حذف سجل !']);
        }
                            // EUD for Titel
public function editForTitel($lang_id)
{
    $lan= add_titel::find($lang_id);
    if(!$lan)
    return redirect()->back();

    $all=add_titel::select('id','titel')->find($lang_id);

    return view('pagesDash.EUD.editForTitel',compact('all'));
}

public function updateeditForTitel(request $request, $lang_id )
{
   $lan=add_titel::select('id','titel','created_at','updated_at')->find($lang_id);
   if(!$lan)
   return redirect()->back();
  // $lan->update($request->all());
   $lan->update([
     'titel'=>$request->addMessage,
    ]);
   return redirect()->route('add.Titile')->with(['sucsess'=>'تم التعديل بنجاح']);
}


public function deleteeditForTitel( $lang_id )
{
$lang=add_titel::find( $lang_id);
if(!$lang)
return redirect()->back()->with('خطا','هذا السجل غير موجود لقد تم حذفه بالفعل');
//delete
$lang->delete();
   return redirect()->route('add.Titile')->with(['sucsesss'=>'تم  حذف سجل !']);
}

         // show page percent
public function AddPercent(){

    return view('pagesDash.ADD.Add_Percent');
}


}

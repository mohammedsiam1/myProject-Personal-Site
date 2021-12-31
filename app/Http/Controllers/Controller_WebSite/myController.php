<?php

namespace App\Http\Controllers\Controller_WebSite;

use App\Models\Cv;
use App\Models\Link;
use App\Models\Plog;
use App\Models\Photo;
use App\Models\Footer;
use App\Models\add_titel;
use App\Models\Education;
use App\Models\Expierince;
use App\triets\imagetrits;
use App\Models\addNameTitel;
use App\Models\Link_detiles;
use Illuminate\Http\Request;
use App\Models\continueModel;
use Illuminate\Routing\Controller;

class myController extends Controller
{
    use imagetrits;
    public function addTitile(){

        $addnametitels=addNameTitel::get();
        $addTitels=add_titel::get();
        return view('pagesDash.ADD.Add_Titel',compact('addnametitels','addTitels'));

    }
    public function storePhoto(Request $request){

       $request->validate(
            [
                  'photo2'=>'required',
              ],[
                  'photo2.required'=>' اختر صورة !',
              ]);

         //   echo $request->photo2;
              $filename=$this->saveimag($request->photo2,'folderimgr');
            //  echo $filename;
             // dd($request->photo2);
              $emp=new Photo();
              $emp->phto=$filename;
              $emp->save();
        return redirect()->back()->with(['sucsess'=>'تمت اضافة الصورة']);
    }
    public function index_Dashbord(){
        $alllinks ['data']=Link::orderby("id","asc")->select('id','linksName')->get();
        $Messages=continueModel::get();
        // $numberOfMessages=continueModel::latest()->take(1)->get();
        $numberOfMessages=continueModel::count();
        return view('master.index_Dash',compact('Messages','numberOfMessages'))->with('alllinks',$alllinks);
    }

    public function showAllDetilLinks(Request $request)
    {
$parnt_id=$request->id;
$subCatihry['data']=Link_detiles::where('Link_id',$parnt_id)->get();                    //// ???
if($subCatihry['data']){
    return response()->json($subCatihry);
}
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',
        ],[
            'name.required'=>' الاسم مطلوب!',
            'email.required'=>' الايميل مطلوب   !',
            'subject.required'=>' موضوع الرسالة مطلوب !',
            'message.required'=>' الرسالة مطلوبة  !',
        ]);

        $emp=new continueModel();
        $emp->Name=$request->name;
        $emp->Email=$request->email;
        $emp->Subject=$request->subject;
        $emp->Message=$request->message;
        $emp->save();
return redirect()->route('showAllDetilLinks')->with(['True']);
    }
    public function storTitel(Request $request){
        $request->validate([
            'addMessage'=>'required',
        ],[
            'addMessage.required'=>'  اضف عنوان!',
        ]);
        $emp=new add_titel();
        $emp->titel=$request->addMessage;
        $emp->save();
return redirect()->route('Dash.admin')->with(['sucsess'=>'تمت الاضافة بنجاح']);
    }

    public function storNameTitel(Request $request){
        $request->validate([
            'addNameMessage'=>'required',
        ],[
            'addNameMessage.required'=>'  اضف عنوان!',
        ]);
        $emp=new addNameTitel();
        $emp->name_titel=$request->addNameMessage;
        $emp->save();
return redirect()->route('Dash.admin')->with(['sucsess'=>'تمت اضافة اسم بنجاح']);
    }



            // AddPlog

    public function showAddPlog(){

        return view('pagesDash.ADD.Add_plg');

        }
    public function StorePlog(Request $request){
    $request->validate(
  [
        'Who'=>'required',
        'Titel'=>'required',
        'Descraption'=>'required',
        'Photoo'=>'required',
    ],[
        'Who.required'=>'  من اضاف هذه المقالة !',
        'Titel.required'=>' اضف عنوان ',
        'Descraption.required'=>' اضف وصف',
        'Photoo.required'=>' اختر صورة ! ',
    ]);

    $filename=$this->saveimag($request->Photoo,'folderimgr');
    $emp=new Plog();
    $emp->name=$request->Titel;
    $emp->descraption=$request->Descraption;
    $emp->who=$request->Who;
    $emp->Phote=$filename;
    $emp->save();
    return redirect()->back()->with(['sucsess'=>'تمت الاضافة ']);

    }
    public function showPlog($lang_id){
        $lan= Plog::find($lang_id);
        if(!$lan)
        return redirect()->back();
        $alls=Plog::select('id','who','name','Phote','descraption')->find($lang_id);

        return redirect()->route('show.Plog')->with('alls');

        }


                // Add to Footer
        public function addFooter(){
            return view('pagesDash.ADD.Add_Foter');
            }

        public function storeFooter( Request $request){
            $request->validate([
            'Titel'=>'required',
            'Year'=>'required',
            ],[
            'Titel.required'=>'عنوان الفوتر مطلوب',
            'Year.required'=>'اضف السنة',
            ]);
            if(!$request->Titel)
                return redirect()->back()->with(['false'=>'لم تتم الاضافة بنجاح']);
            $fot= new Footer();
            $fot->Titel=$request->Titel;
            $fot->Year=$request->Year;
            $fot->save();
            return redirect()->route('add.Footer')->with(['succsess'=>'تمت الاضافة بنجاح']);
        }


                    // Add to Experince

    public function addExperince(){
        return view('pagesDash.ADD.Add_Exp');
        }

        public function storeExperince( Request $request){
            $request->validate([
            'firstMenu'=>'required',
            'AddrExp'=>'required',
            'Exp'=>'required',

            ],[
            'firstMenu.required'=>'  اضف اسم اللائحة',
            'AddrExp.required'=>' اضف عنوان الخبرة ',
            'Exp.required'=>'اضف خبرتك',
            ]);
            if(!$request->Exp)
            return redirect()->back()->with(['false'=>'لم تتم الاضافة بنجاح']);
            $fot= new Expierince();
            $fot->first_menu=$request->firstMenu;
            $fot->addrress=$request->AddrExp;
            $fot->exp=$request->Exp;
            $fot->save();
             return redirect()->route('add.Experince')->with(['succsess'=>'تمت الاضافة بنجاح']);
                            }


                              // Add to Experince

    public function addInstitute(){
    return view('pagesDash.ADD.Add_Edio');
    }

    public function storeInstitute( Request $request){
        $request->validate([
        'firstMenu'=>'required',
        'Institute'=>'required',
        'detiles_Institute'=>'required',

        ],[
        'firstMenu.required'=>'  اضف اسم اللائحة',
        'Institute.required'=>' اضف عنوان الخبرة ',
        'detiles_Institute.required'=>'اضف خبرتك',
        ]);
        if(!$request->detiles_Institute)
        return redirect()->back()->with(['false'=>'لم تتم الاضافة بنجاح']);
        $fot= new Education();
        $fot->first_menu=$request->firstMenu;
        $fot->addrress_Institute=$request->Institute;
        $fot->Institute=$request->detiles_Institute;
        $fot->save();
            return redirect()->route('add.Institute')->with(['succsess'=>'تمت الاضافة بنجاح']);
                        }

        public function addCV(){
            return view('pagesDash.ADD.Add_CV');
            }



public function storeCV(Request $request){

    $request->validate(
            [
                'cv'=>'required',
            ],[
                'cv.required'=>' اختر صورة !',
            ]);
            $filename=$this->saveimag($request->cv,'folderimgr');
            $emp=new Cv();
            $emp->cv=$filename;
            $emp->save();
        return redirect()->back()->with(['sucsess'=>'تمت الاضافة ']);
    }

    public function test(){
        return view('pagesDash.show.test');
        }


}

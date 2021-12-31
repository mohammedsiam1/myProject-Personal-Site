<link href="{{ asset('frountend/css/bootstrap.css') }}"rel="stylesheet">

<link href="{{ asset('frountend/assetsDashbord/css/main.css') }}"rel="stylesheet">
<link href="{{ asset('frountend/assetsDashbord/css/util.css') }}"rel="stylesheet">
<link href="{{ asset('frountend/assetsDashbord/css/mycss.css') }}"rel="stylesheet">

<div style=" background: rgba(13, 125, 216, 0.356); " dir="rtl" class="flex justify-between items-center border-b border-gray-300">
    <h1 style="text-align: center" "margin-right: 40px;font-size: 22px" class="text-2xl font-semibold pt-2 pb-6">الاضافة</h1>
    <hr>
</div>

<div class="social-container">
    @if (Session::has('sucsess'))
<div style="background: #3bc90385; font-weight: bold;text-align: center;
align-items: center;" class="alert alert-success" role="alert">
    {{ Session::get('sucsess') }}
</div>
@endif
  </div>
  <div class="social-container">
    @if (Session::has('false'))
<div style="background: #f00d0d49; font-weight: bold;text-align: center;
align-items: center;" class="alert alert-danger" role="alert">
    {{ Session::get('false') }}
</div>
@endif
  </div>
<div class="allpage">
<div id="sh1" class="limiter">
    <div class="container-table100">
        <div class="wrap-table100">
            <div class="table100">
                <table style="width: 90%">
                    <thead>
                        <tr class="table100-head">
                            <th style="width: 5%" class="column2">رقم</th>
                            <th style="" class="column2">اسم عنوان الاضافة</th>
                            <th  class="column4">تاريخ الاضافة</th>
                            <th class="column4">تاريخ التعديل</th>
                            <th class="column6">  حذف  تعديل</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($addnametitels as $addnametitel )
                        <tr>
                            <th class="column2">{{ $loop->index+1 }}</th>

                            <th id="FirstName{{$addnametitel->id}}" class="column2">{{$addnametitel -> name_titel }} </th>
                            <th id="LastName{{$addnametitel->id}}" class="column4">{{$addnametitel -> created_at }}</th>
                            <th id="LastName{{$addnametitel->id}}" class="column4">{{$addnametitel -> updated_at }}</th>

                            <th class="column6">
                                <a href="{{ route('edit.ForAddTitel',$addnametitel->id) }}" class="btn btn-primary btn-xs">تعديل</a>
                                <a href="{{ route('delete.ForAddTitel',$addnametitel->id) }}" class="btn btn-danger btn-xs">حذف</a>

                            </th>
                        </tr>
                         @endforeach
                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>
<div class="add">
<div>
    <form class="tit2" action="{{ route('stor.NameTitile') }}">
    <div style="margin-left: 550;margin-right: 50;margin-top: 100;">

            <label style="text-align: center;margin-left: 150px"> اضافة اسم عنوان الموقع الرئيسي</label>
            <br>
    <textarea name="addNameMessage" placeholder="اضافاة العنوان الرئيسي"  style="border-radius: 2%;width:400px;  height:200px;">

        </textarea>
        <br>
        <span style="color: red;  font-size: 14px; margin-left: 300px"  class=" {{$errors->has('addNameMessage') ? 'text-danger':' '  }}">{{ $errors->first('addNameMessage') }}</span>
        <br>
        <div style="margin-top:50px;margin-left: 100px">
        <label> اضافة اسم</label>
        <input  class="btn btn-primary" type="submit" value="اضافة">
        </div>

    </div>
    </form>
    </div>

    <div class="tit">
        <form action="{{ route('stor.Titile') }}">
        <div style="margin-left: 550;margin-right: 50;">
                <label style="text-align: center;margin-left: 150px"> اضافة عنوان الموقع الرئيسي</label>
                <br>
        <textarea name="addMessage" placeholder="اضافاة العنوان الرئيسي"  style="border-radius: 2%;width:400px;  height:200px;">

            </textarea>
            <br>
            <span style="color: red;  font-size: 14px; margin-left: 300px"  class=" {{$errors->has('addMessage') ? 'text-danger':' '  }}">{{ $errors->first('addMessage') }}</span>
            <br>
            <div style="margin-top:50px;margin-left: 100px">
            <label> اضافة عنوان</label>
            <input  class="btn btn-primary" type="submit" value="اضافة">
            </div>

        </div>
        </form>
        </div>

<br>
        <div  style="width: 180px;background: rgba(245, 201, 201, 0.226);margin-left: 650px;margin-bottom: 50px;margin-top: 80px;" class="tit">
            <form action="{{ route('store.Photo') }}"  method="POST" enctype="multipart/form-data">
                @csrf
                <div >
                <label style="margin-bottom: 30px" class="file2" for="file">تحميل الصورة الرئيسية للموقع </label>
                <span style="color: red;  font-size: 14px; margin-left: 300px"  class=" {{$errors->has('photo2') ? 'text-danger':' '  }}">{{ $errors->first('photo2') }}</span>
                <input onchange="loadFile(event);" type="file" id="photo2"  name="photo2" class="email file">
            </div>
            <input style="margin-top: 30px" class="btn btn-primary" type="submit" value="اضافة صورة">
            <img id="output2" style="margin-left: 10px;height: 70px" class="myimage " alt="your Image"  />

            </form>
            </div>

            </div>

<div id="sh2" class="limiter">
    <div class="container-table100">
        <div class="wrap-table100">
            <div class="table100">
                <table style="width: 90%">
                    <thead>
                        <tr class="table100-head">
                            <th style="width: 5%" class="column2">رقم</th>
                            <th style="" class="column2"> عنوان الاضافة</th>
                            <th class="column4">تاريخ الاضافة</th>
                            <th class="column4">تاريخ التعديل</th>
                            <th class="column6">  تعديل عرض حذف</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($addTitels as $addTitel )
                        <tr>
                            <th class="column2">{{ $loop->index+1 }}</th>
                            <th id="FirstName{{$addTitel->id}}" class="column2">{{$addTitel -> titel }} </th>
                            <th id="LastName{{$addTitel->id}}" class="column4">{{$addTitel -> created_at }}</th>
                            <th id="LastName{{$addTitel->id}}" class="column4">{{$addTitel -> updated_at }}</th>

                            <th class="column6">
                        <a href="{{ route('edit.ForTitel',$addTitel->id) }}" class="btn btn-primary btn-xs">تعديل</a>
                        <a href="{{ route('delete.ForTitel',$addTitel->id) }}" class="btn btn-danger btn-xs " >حذف</button>

                            </th>

                        </tr>
                         @endforeach
                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>

</div>

<script src="{{ asset('frountend/assetsDashbord/js/jquery.min.js') }}"></script>
<script>
var loadFile=function(event){
var image=document.getElementById('output2');
image.src=URL.createObjectURL(event.target.files[0]);  /*// انشئ رابط خارجي عشان اقدر اشوفو وخود هيكل الصورة وليس رابطها*/
    };
</script>

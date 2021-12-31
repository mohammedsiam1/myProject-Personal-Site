<link href="{{ asset('frountend/css/bootstrap.css') }}"rel="stylesheet">
<link href="{{ asset('frountend/assetsDashbord/css/mycss.css')}}"rel="stylesheet">
<link href="{{ asset('frountend/assetsDashbord/css/main.css') }}"rel="stylesheet">
<link href="{{ asset('frountend/assetsDashbord/css/util.css') }}"rel="stylesheet">

<div style="  background: rgba(13, 125, 216, 0.356); " dir="rtl" class="flex justify-between items-center border-b border-gray-300">
    <h1 style="text-align: center" "margin-right: 40px;font-size: 22px" class="text-2xl font-semibold pt-2 pb-6">اضافة وساءل التواصل</h1>
    <hr>
</div>
@if (Session::has('sucsess'))
<div style="background: #3bc90385; font-weight: bold;text-align: center;
align-items: center;" class="alert alert-success" role="alert">
    {{ Session::get('sucsess') }}
</div>
@endif
<div class="social-container">
    @if (Session::has('sucsesss'))
<div style="background: #f00d0d49; font-weight: bold;text-align: center;
align-items: center;" class="alert alert-danger" role="alert">
    {{ Session::get('sucsesss') }}
</div>
@endif
  </div>
<div  class="conn">
<form action="{{ route('store.Con') }}">
    <div class="mb-3">
        <label  class="form-label" for="inputEmail">البريد الالكتروني</label>
        <input name="email" type="text" class="form-control" id="inputEmail" placeholder="ادخل البريد الالكتروني">
        <span style="color: red;  font-size: 14px; margin-left: 300px"  class=" {{$errors->has('email') ? 'text-danger':' '  }}">{{ $errors->first('email') }}</span>

    </div>
    <div class="mb-3">
        <label class="form-label" for="inputPassword">رقم الهاتف</label>
        <input name="phone" type="text" class="form-control" id="inputPassword" placeholder="ادخل رقم الهاتف">
        <span style="color: red;  font-size: 14px; margin-left: 300px"  class=" {{$errors->has('phone') ? 'text-danger':' '  }}">{{ $errors->first('phone') }}</span>

    </div>
    <div class="mb-3">
        <label class="form-label" for="inputEmail">العنوان</label>
        <input name="addrress" type="text" class="form-control" id="inputEmail" placeholder="ادخل العنوان الخاص بك">
        <span style="color: red;  font-size: 14px; margin-left: 300px"  class=" {{$errors->has('addrress') ? 'text-danger':' '  }}">{{ $errors->first('addrress') }}</span>

    </div>
    <button type="submit" class=" mybot btn btn-primary">اضافة</button>
</form>
</div>

<div id="sh2" class="limiter">
    <div class="container-table100">
        <div class="wrap-table100">
            <div class="table100">
                <table style="width: 120%">
                    <thead>
                        <tr class="table100-head">
                            <th style="width: 5%" class="column2">رقم</th>
                            <th style="" class="column2"> البريد الالكتروني</th>
                            <th style="width: 10%" class="column2"> رقم الهاتف</th>
                            <th style="width: 10%" class="column4">العنوان</th>
                            <th style="width: 10%" class="column4">تاريخ الاضافة</th>
                            <th class="column4">تاريخ التعديل</th>
                            <th class="column6">  تعديل عرض حذف</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($info as $infor )
                        <tr>
                            <th class="column2">{{ $loop->index+1 }}</th>
                            <th id="FirstName{{$infor->id}}" class="column2">{{$infor -> Email }} </th>
                            <th id="LastName{{$infor->id}}" class="column2">{{$infor -> Phone }}</th>
                            <th id="LastName{{$infor->id}}" class="column4">{{$infor -> Adress }}</th>
                            <th id="LastName{{$infor->id}}" class="column4">{{$infor -> created_at }}</th>
                            <th id="LastName{{$infor->id}}" class="column4">{{$infor -> updated_at }}</th>

                            <th class="column6">
                                <button  type="button" data-type="dialog" class=" btn-sweetalert btn btn-success btn-xs">عرض</button>
                                <a href="{{ route('edit.abd',$infor->id) }}" class="btn btn-primary btn-xs">تعديل</a>
                                <a href="{{ route('delete',$infor->id) }}" class="btn btn-danger btn-xs">حذف</a>
                            </th>

                        </tr>
                         @endforeach
                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>

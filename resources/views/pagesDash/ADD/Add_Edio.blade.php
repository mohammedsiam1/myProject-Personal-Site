<link href="{{ asset('frountend/css/bootstrap.css') }}"rel="stylesheet">
<link href="{{ asset('frountend/assetsDashbord/css/mycss.css')}}"rel="stylesheet">
<link href="{{ asset('frountend/assetsDashbord/css/main.css') }}"rel="stylesheet">
<link href="{{ asset('frountend/assetsDashbord/css/util.css') }}"rel="stylesheet">

<div style="  background: rgba(13, 125, 216, 0.356); " dir="rtl" class="flex justify-between items-center border-b border-gray-300">
    <h1 style="text-align: center" "margin-right: 40px;font-size: 22px" class="text-2xl font-semibold pt-2 pb-6">اضافة  الخبرات والدراسة</h1>
    <hr>
</div>
@if (Session::has('succsess'))
<div style="background: #3bc90385; font-weight: bold;text-align: center;
align-items: center;" class="alert alert-success" role="alert">
    {{ Session::get('succsess') }}
</div>
@endif
<div class="social-container">
    @if (Session::has('false'))
<div style="background: #f00d0d49; font-weight: bold;text-align: center;
align-items: center;" class="alert alert-danger" role="alert">
    {{ Session::get('false') }}
</div>
@endif
  </div>


  <div  class="conn">
    <form action="{{ route('store.Institute') }}">
        <div class="mb-3">
            <label  class="form-label" for="inputEmail"> اسم اللائحة الرئيسية</label>
            <input name="firstMenu" type="text" class="form-control" id="inputEmail" placeholder="ادخل  عنوان اللائحة الرئيسية">
            <span style="color: red;  font-size: 14px; margin-left: 300px"  class=" {{$errors->has('firstMenu') ? 'text-danger':' '  }}">{{ $errors->first('firstMenu') }}</span>

        </div>
        <div class="mb-3">
            <label class="form-label" for="inputPassword">اسم المعهد </label>
            <input name="Institute" type="text" class="form-control" id="inputPassword" placeholder=" ادخل عنوان المعهد الخاص بك">
            <span style="color: red;  font-size: 14px; margin-left: 300px"  class=" {{$errors->has('Institute') ? 'text-danger':' '  }}">{{ $errors->first('Institute') }}</span>

        </div>
        <div class="mb-3">
            <label class="form-label" for="inputEmail">تفاصيل المعهد</label>
            <input name="detiles_Institute" type="text" class="form-control" id="inputEmail" placeholder="اضف تفاصيل المعهد الخاص بك">
            <span style="color: red;  font-size: 14px; margin-left: 300px"  class=" {{$errors->has('detiles_Institute') ? 'text-danger':' '  }}">{{ $errors->first('detiles_Institute') }}</span>

        </div>
        <button type="submit" class=" mybot btn btn-primary">اضافة</button>
    </form>
    </div>
    <br>

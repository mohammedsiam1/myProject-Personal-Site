<link href="{{ asset('frountend/css/bootstrap.css') }}"rel="stylesheet">
<link href="{{ asset('frountend/assetsDashbord/css/main.css') }}"rel="stylesheet">


<div style=" background: rgba(13, 125, 216, 0.356); " dir="rtl" class="flex justify-between items-center border-b border-gray-300">
    <h1 style="text-align: center" "margin-right: 40px;font-size: 22px" class="text-2xl font-semibold pt-2 pb-6">اضافة معلومات المهارة بالنسبة المئوية</h1>
    <hr>
</div>
<div class="social-container">
    @if (Session::has('succsess'))
<div style="background: #3bc90385; font-weight: bold;text-align: center;
align-items: center;" class="alert alert-success" role="alert">
    {{ Session::get('succsess') }}
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



  <div  class="conn">
    <form action="{{ route('Add.Percent') }}"   >
  <div class="mb-3" style="margin-top: 50px;margin-left: 600px">
    <label class="form-label" for="inputPassword">اضف اسم للمهارة العملية </label>
    <input style="background: rgba(134, 195, 236, 0.205);width: 400px;height: 70px" name="namepercent" type="text" class="form-control" id="inputPassword" placeholder="  اضف اسم  للخبرة الخاصة بك ">
    <span style="color: red;  font-size: 14px; margin-left: 300px"  class=" {{$errors->has('namepercent') ? 'text-danger':' '  }}">{{ $errors->first('Titel') }}</span>

</div>

<div class="mb-3" style="margin-top: 30px;margin-left: 600px">
    <label class="form-label" for="inputEmail">اضف  النسبة المئوية</label>
    <input style="background: rgba(134, 195, 236, 0.205);height: 70px;width: 400px;" name="percent" type="number"  class="form-control" id="inputEmail" placeholder=" اضف النسبة المئوية للمهارة  الخاصة بك">
    <span style="color: red;  font-size: 14px; margin-left: 300px"  class=" {{$errors->has('percent') ? 'text-danger':' '  }}">{{ $errors->first('Year') }}</span>

</div>
<button type="submit" style="margin-top: 30px;margin-left: 750px" style="margin-bottom: 50px" class=" mybot btn btn-primary"> اضافة </button>
</form>
</div>

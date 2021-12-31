<link href="{{ asset('frountend/css/bootstrap.css') }}"rel="stylesheet">

<link href="{{ asset('frountend/assetsDashbord/css/main.css') }}"rel="stylesheet">
<link href="{{ asset('frountend/assetsDashbord/css/util.css') }}"rel="stylesheet">
<link href="{{ asset('frountend/assetsDashbord/css/mycss.css') }}"rel="stylesheet">


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


  <div  style="height: 250px;width: 250px;background: rgba(245, 201, 201, 0.082);margin-left: 650px;margin-bottom: 50px;margin-top: 80px;" class="tit">
    <form action="{{ route('store.CV') }}"  method="POST" enctype="multipart/form-data">
        @csrf
        <div >
        <label style="margin-bottom: 30px" class="file2" for="file">تحميل الخاص بك CV</label>
        <span style="color: red;  font-size: 14px; margin-left: 300px"  class=" {{$errors->has('photo2') ? 'text-danger':' '  }}">{{ $errors->first('photo2') }}</span>
        <input onchange="loadFile(event);" type="file" id="photo2"  name="cv" class="email file">
    </div>
    <input style="margin-top: 30px" class="btn btn-primary" type="submit" value="CV  اضافة ">

    </form>
    </div>

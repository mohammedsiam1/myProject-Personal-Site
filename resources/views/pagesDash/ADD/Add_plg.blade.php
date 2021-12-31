<link href="{{ asset('frountend/css/style.css') }}"rel="stylesheet">
<link href="{{ asset('frountend/css/bootstrap.css') }}"rel="stylesheet">
<link href="{{ asset('frountend/assetsDashbord/css/mycss.css')}}"rel="stylesheet">
<section  class="blog" id="blog">
    @if (Session::has('sucsess'))
    <div style="background: #3bc90385; font-weight: bold;text-align: center;
    align-items: center;" class="alert alert-success" role="alert">
        {{ Session::get('sucsess') }}
    </div>
    @endif
    <div class="social-container">
        @if (Session::has('folse'))
    <div style="background: #f00d0d38; font-weight: bold;text-align: center;
    align-items: center;" class="alert alert-danger" role="alert">
        {{ Session::get('folse') }}
    </div>
    @endif
      </div>
    <h1 class="heading"> <span>انشاء </span> مدونة   </h1>

    <div class="box-container">

        <div class="box">
            <img src=" {{ asset('frountend/image/blog1.jpg') }}" alt="">
            <div class="content">
                <h3 class="info"> <i class="fas fa-user"></i> by, admin <i class="fas fa-calendar"></i> 1st may, 2021 </h3>
                <h3> <big> blog title goes here </big> </h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum in molestias deleniti fugit excepturi atque cum animi harum distinctio et.</p>

            </div>
        </div>
    </div>
</section>

<div style="margin-top: -180px" class="conn">
    <form   method="POST" action="{{ route('Store.Plog') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label  class="form-label" for="inputEmail"> بواسطة من ؟</label>
            <input  name="Who" type="text" class="form-control" id="inputEmail" placeholder=" من صاحب المدونة ؟ ">
            <span style="color: red;  font-size: 14px; margin-left: 300px"  class=" {{$errors->has('Who') ? 'text-danger':' '  }}">{{ $errors->first('Who') }}</span>

        </div>
        <div class="mb-3">
            <label class="form-label" for="inputPassword">اضف عنوان </label>
            <input style="height: 70px" name="Titel" type="text" class="form-control" id="inputPassword" placeholder=" اضف عنوان المدونة ">
            <span style="color: red;  font-size: 14px; margin-left: 300px"  class=" {{$errors->has('Titel') ? 'text-danger':' '  }}">{{ $errors->first('Titel') }}</span>

        </div>
        <div class="mb-3">
            <label class="form-label" for="inputEmail">اضف وصف</label>
            <input style="height: 70px" name="Descraption" type="text" class="form-control" id="inputEmail" placeholder=" اضف وصف لهذه المدونة ">
            <span style="color: red;  font-size: 14px; margin-left: 300px"  class=" {{$errors->has('Descraption') ? 'text-danger':' '  }}">{{ $errors->first('Descraption') }}</span>

        </div>
        <div class="mb-3">
            <label class="form-label" for="inputEmail">اضف صورة</label>
            <input type="file" id="imag"  name="Photoo"  onchange="loadFile(event);"  class="form-control">
            <img id="output2" style="margin-left: 235px;margin-top: 10px;height: 100px" class="myimage " alt="your Image"  />
            <span style="color: red;  font-size: 14px; margin-left: 300px"  class=" {{$errors->has('Photoo') ? 'text-danger':' '  }}">{{ $errors->first('Photoo') }}</span>
        </div>

        <button type="submit" style="margin-bottom: 50px" class=" mybot btn btn-primary"> اضافة مدونة</button>
    </form>
    </div>
    <script src="{{ asset('frountend/assetsDashbord/js/jquery.min.js') }}"></script>
<script>
var loadFile=function(event){
var image=document.getElementById('output2');
image.src=URL.createObjectURL(event.target.files[0]);  /*// انشئ رابط خارجي عشان اقدر اشوفو وخود هيكل الصورة وليس رابطها*/

    };

</script>

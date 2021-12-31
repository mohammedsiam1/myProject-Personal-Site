<link href="{{ asset('frountend/css/bootstrap.css') }}"rel="stylesheet">
<link href="{{ asset('frountend/assetsDashbord/css/mycss.css')}}"rel="stylesheet">
<div  class="conn">
    
    @foreach ($alls as $all )

    @endforeach

        <div class="mb-3">
            <label  class="form-label" for="inputEmail"> من اضاف هذه المقالة</label>
            <label  class="form-label" for="inputEmail">{{  $all->who}}   </label>

        </div>
        <div class="mb-3">
            <label class="form-label" for="inputPassword"> عنوان المقالة بالكامل</label>
            <label  class="form-label" for="inputEmail"> {{  $all->name}} </label>

        </div>
        <div class="mb-3">
            <label class="form-label" for="inputEmail">تفاصيل المقالة بالكامل</label>
            <label  class="form-label" for="inputEmail"> {{  $all->descraption}} </label>

        </div>
        <div class="mb-3">
            <label class="form-label" for="inputEmail"> صورة المقالة</label>
            <label  class="form-label" for="inputEmail">
                <img  src="{{asset('folderimgr/'. $all ->	Phote )  }} " alt="no photo">


            </label>

        </div>

        <a href="{{ route('showAllDetilLinks') }}" class=" mybot btn btn-primary">رجوع</a>

    </div>



<link href="{{ asset('frountend/css/bootstrap.css') }}"rel="stylesheet">
<link href="{{ asset('frountend/assetsDashbord/css/mycss.css')}}"rel="stylesheet">
<div  class="conn">

    <form action="{{ route('update.upd',$all->id) }}">
        <div class="mb-3">
            <label  class="form-label" for="inputEmail">البريد الالكتروني</label>
            <input name="email" type="text" class="form-control"  id="inputEmail" placeholder="ادخل البريد الالكتروني" value="{{ $all->Email }}">

        </div>
        <div class="mb-3">
            <label class="form-label" for="inputPassword">رقم الهاتف</label>
            <input name="phone" type="text" class="form-control"  id="inputPassword" placeholder="ادخل رقم الهاتف" value="{{ $all->Phone }}">

        </div>
        <div class="mb-3">
            <label class="form-label" for="inputEmail">العنوان</label>
            <input name="addrress" type="text" class="form-control"  id="inputEmail" placeholder="ادخل العنوان الخاص بك" value="{{ $all->Adress }}">
        </div>
        <button type="submit" class=" mybot btn btn-primary">تعديل</button>
    </form>
    </div>

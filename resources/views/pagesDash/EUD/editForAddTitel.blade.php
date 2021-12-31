<link href="{{ asset('frountend/css/bootstrap.css') }}"rel="stylesheet">
<div>
    <form class="tit2" action="{{ route('update.ForAddTitel',$all->id) }}">
    <div style="margin-left: 550;margin-right: 50;margin-top: 100;">

            <label style="text-align: center;margin-left: 150px"> تعديل اسم عنوان الموقع الرئيسي</label>
            <br>
    <textarea name="addNameMessage"  placeholder="تعديل العنوان الرئيسي"  style="border-radius: 2%;width:400px;  height:200px;"
    >
   {{ $all->name_titel }}
        </textarea>
        <br>

        <div style="margin-top:50px;margin-left: 100px">
        <label> تعديل اسم</label>
        <input  class="btn btn-primary" type="submit" value="تعديل">
        </div>

    </div>
    </form>
    </div>

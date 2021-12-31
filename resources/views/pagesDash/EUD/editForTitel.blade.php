<link href="{{ asset('frountend/css/bootstrap.css') }}"rel="stylesheet">
    <div class="tit">
        <form action="{{ route('update.ForTitel',$all->id) }}">
        <div style="margin-left: 550;margin-right: 50;">
                <label style="text-align: center;margin-left: 150px"> تعديل عنوان الموقع الرئيسي</label>
                <br>
        <textarea name="addMessage"  placeholder="تعديل العنوان الرئيسي"  style="border-radius: 2%;width:400px;  height:200px;">
            {{ $all->titel }}
            </textarea>
            <br>

            <div style="margin-top:50px;margin-left: 100px">
            <label> تعديل عنوان</label>
            <input  class="btn btn-primary" type="submit" value="تعديل">
            </div>

        </div>
        </form>
        </div>

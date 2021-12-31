
<section class="contact" id="contact">

    <h1 class="heading"> تواصل <span> معي</span> </h1>

    <div class="box-container">
@foreach ($infoConn as $infoConnn)
@endforeach
        <div class="box">
            <i class="fas fa-phone"></i>
            <h3>رقم الهاتف الخاص بي</h3>
            <p>{{$infoConnn->Phone}}</p>
        </div>

        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3> البريد الالكتروني</h3>
            <p>{{  $infoConnn->Email}}</p>
        </div>

        <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>عنواني</h3>
            <p>{{ $infoConnn->	Adress}}</p>
        </div>

    </div>
    <div class="row">
        <form method="POST" class="addMessage"  action="{{ route('store1') }}">
            @csrf
            <div class="inputBox">
                <input type="text" name="name" placeholder="الاسم">
                <span style="color: red;  font-size: 14px; margin-left: 300px"
                 class=" {{$errors->has('name') ? 'text-danger':' '  }}">{{ $errors->first('name') }}</span> {{--  asset('assets/truee.jpg')--}}
                <input type="email" name="email" placeholder="البريد الالكتروني">
                <span style="color: red;  font-size: 14px; margin-left: 300px"
                 class=" {{$errors->has('email') ? 'text-danger':' '  }}">{{ $errors->first('email') }}</span> {{--  asset('assets/truee.jpg')--}}
            </div>
            <input type="text" name="subject" placeholder="الموضوع">
            <span style="color: red;  font-size: 14px; margin-left: 300px"
              class=" {{$errors->has('subject') ? 'text-danger':' '  }}">{{ $errors->first('subject') }}</span>
            <textarea  id="" name="message" cols="30" rows="10" placeholder="الرسالة"></textarea>
            <span style="color: red;  font-size: 14px; margin-left: 300px"
              class=" {{$errors->has('message') ? 'text-danger':' '  }}">{{ $errors->first('message') }}</span>
            <button     class="btn" type="submit"> ارسال رسالة</button>
        </form>

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3402.7138370500747!2d34.40738128500518!3d31.477057181383948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2s!4v1639652774511!5m2!1sar!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>
<script>
    $('.addMessage').click(function(e) {
        e.preventDefault();

swal.fire('تم ارسال الرسالة')
});
</script>

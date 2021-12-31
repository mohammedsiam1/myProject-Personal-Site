<section class="blog" id="blog">

    <h1 class="heading"> <span> مدونتي  </span>  وخدماتي  </h1>
    <div class="box-container">
@foreach ( $infoPlogs as $infoPlog )
<form action="{{ route('show.Plog',$infoPlog->id)}}"   enctype="multipart/form-data">
    @csrf
        <div class="box">
            <img src=" {{ asset('frountend/image/blog1.jpg') }}"  alt="">

            <div class="content">
                <h3 class="info"> <i class="fas fa-user"></i> {{ $infoPlog->who }} <i class="fas fa-calendar"></i> <small> {{ $infoPlog->created_at }} </small> </h3>
                <a href="#" class="title"> {{ $infoPlog->name }} </a>
                <p>{{ $infoPlog->descraption }}</p>
                <button  type="submit"class="btn" >اقرأ اكثر</button>
            </div>
        </div>
    </form>
@endforeach
</div>
</section>

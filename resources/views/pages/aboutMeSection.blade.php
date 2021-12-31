<section class="about" id="about">

    <h1 class="heading"> حول  <span>قدراتي</span> </h1>

    <div class="row">



        <div class="box">
            <h3 class="title">مهاراتي البرمجية</h3>
            @foreach ($infoPercents as $infoPercent )
            <div class="progress">

                <h3> {{ $infoPercent->namePercent  }}<span>{{ $infoPercent->Percent .'%' }}</span> </h3>
                <div class="bar"><span style="width:{{ $infoPercent->Percent .'%'}} "></span></div>

            </div>
            @endforeach
          
        </div>

        <div class="box">
            <h3 class="title">مهاراتي </h3>
            <div class="progress">
                <h3> تصميم المواقع <span>98%</span> </h3>
                <div class="bar"><span></span></div>
            </div>
            <div class="progress">
                <h3>تطوير المواقع <span>67%</span> </h3>
                <div class="bar"><span></span></div>
            </div>
            <div class="progress">
                <h3>تصميم الجرافيك <span>75%</span> </h3>
                <div class="bar"><span></span></div>
            </div>
            <div class="progress">
                <h3>التسويق <span>60%</span> </h3>
                <div class="bar"><span></span></div>
            </div>
        </div>

        <div class="box">
            <h3 class="title">خبرتي العملية</h3>
            <div class="exp-box">
            @foreach ($infoExpierinces as $infoExpierince )
                <h3>{{  $infoExpierince->addrress}}</h3>
                <p>{{  $infoExpierince->exp}}</p>
                <br>
                <br>
            @endforeach
        </div>
        </div>

        <div class="box">
            <h3 class="title">اين درست</h3>
            <div class="exp-box">
                @foreach ($infoEducations as $infoEducation )
                <h3>{{  $infoEducation->addrress_Institute}}</h3>
                <p>{{  $infoEducation->Institute}}</p>
                <br>
                <br>
            @endforeach
            </div>

        </div>

    </div>
@foreach ($infoCvs as $infoCv )

@endforeach
    <div class="download">
        <a href="{{asset('folderimgr/'.$infoCv -> cv )  }}" class="btn">  رؤية ملف ال  cv </a>
    </div>
</section>

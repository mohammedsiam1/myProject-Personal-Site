<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>



<section class="home" id="home">

    <div class="image">
@foreach ($infoPhoto as $infoPhotoo )
@endforeach

<img  src="{{asset('folderimgr/'.$infoPhotoo ->	phto )  }} " alt="no photo">



    </div>

    <div class="content">

        <h3> <span>

            {{  $titelName ->name_titel}}

          </span> </h3>

        <p>

            @foreach ($titel as $nameTitel )

           @endforeach
           {{   $nameTitel->titel }}

        </p>
        <a href="#about" class="btn">من انا ؟</a>
    </div>

</section>

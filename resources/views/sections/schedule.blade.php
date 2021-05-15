<section id="schedule" class="section-with-bg">
  <div class="container wow fadeInUp">
    <div class="section-header">
      <h2>Event Schedule</h2>
      <p>Here is our event schedule</p>
    </div>
    
    <ul class="nav nav-tabs" role="tablist">

      @foreach($esemenyek as $esemeny)
        <li class="nav-item">
          <a class="nav-link{{ $esemeny->id === 1 ? ' active' : '' }}" href="#day-{{ $esemeny->id }}" role="tab" data-toggle="tab">Day {{ $esemeny->id }}</a>
        </li>
      @endforeach
    </ul> 
     
    <h3 class="sub-heading">Voluptatem nulla veniam soluta et corrupti consequatur neque eveniet officia. Eius
      necessitatibus voluptatem quis labore perspiciatis quia.</h3>

    <div class="tab-content row justify-content-center">
      {{-- @foreach($schedules as $key => $day)--}}
      @foreach($esemenyek as $esemeny)
        <div role="tabpanel" class="col-lg-9 tab-pane fade{{ $esemeny->id === 1 ? ' show active' : '' }}" id="day-{{$esemeny->id}}">

      @foreach ($eloadok as $eloado) 
      
          <div class="row schedule-item">
          @foreach ($eloado->szekciok as $szekcio)
      
              <div class="col-md-1">Kezdete<time>{{$szekcio->pivot->kezdete}}</time></div>
                <div class="col-md-1">Vege<time>{{$szekcio->pivot->vege}}</time></div> 
              @endforeach
              <div class="col-md-10">
                @if($eloado)
                  <div class="speaker">
                    <img src="" alt="{{$eloado->nev}}">
                  </div>
                @endif
                <h4>{{ $eloado->eloadascim }} @if($eloado)<span>{{ $eloado->nev }}</span>@endif</h4>
                {{-- <p>{{ $schedule->subtitle }}</p> --}}
              </div>
            </div>
            @endforeach
          {{-- @endforeach  --}}
        </div>
       @endforeach 
    </div>
  </div>
</section>

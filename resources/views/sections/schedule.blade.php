<section id="schedule" class="section-with-bg">
  <div class="container wow fadeInUp">
    <div class="section-header">
      <h2>Event Schedule</h2>
      <p>Here is our event schedule</p>
    </div>
 
    <h3 class="sub-heading">Voluptatem nulla veniam soluta et corrupti consequatur neque eveniet officia. Eius
      necessitatibus voluptatem quis labore perspiciatis quia.</h3>

     <div class="tab-content row justify-content-center">
   
        <div role="tabpanel" class="col-lg-10" id="1">
      @foreach ($szekciok as $szekcio) 
      @foreach($moderatorok as $mod)
        @if($mod->szekciok_id==$szekcio->id)
        {{$mod->name}}
        @endif
        @endforeach
     
        <p class="szekciocim">{{$szekcio->szekcionev}},szekcio kezdete:{{$szekcio->idopont}}</p>
        @if($szekcio->online==1)<p class="link">
        <a href="{{$szekcio->link}}">link:{{$szekcio->link}}</a>
        </p>
        @endif
        @foreach ($szekcio->eloadok as $szekcio) 
          <div class="row schedule-item">                
              <div class="col-md-1">Kezdete<time>{{$szekcio->pivot->kezdete}}</time></div>
               <div class="col-md-1">Vege<time>{{$szekcio->pivot->vege}}</time></div>                                      
              <div class="col-md-10">
                {{-- @if($szekcio)
                  <div class="speaker">
                    <img src="" alt="{{$szekcio->nev}}">
                  </div> 
                @endif--}}
                <h4>{{ $szekcio->eloadascim }} @if($szekcio)<br><span> {{$szekcio->fokozat}} {{$szekcio->nev }}</span>@endif</h4>
               <h4>{{$szekcio->intezmeny}}</h4>
              
              </div>
            </div>
          @endforeach
        @endforeach 
         
        </div>
     
    </div> 
  </div>
</section>

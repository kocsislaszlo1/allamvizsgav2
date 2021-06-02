<section id="schedule" class="section-with-bg">
  <div class="container wow fadeInUp">
    <div class="section-header">
      <h2>Event Schedule</h2>
      <p>Here is our event schedule</p>
    </div>
       
    <h3 class="sub-heading">Voluptatem nulla veniam soluta et corrupti consequatur neque eveniet officia. Eius
      necessitatibus voluptatem quis labore perspiciatis quia.</h3>
      {{-- <table class=" table table-bordered table-striped table-hover datatable datatable">
        <thead>
            <tr>
                <td>Szekcio neve</td>
                <td>eloado neve</td>
                <td>link</td>              
              <td>eloadas kezdete</td>
              <td>eloadas vege</td>
            </tr>
        </thead>
        <tbody>          
          @foreach ($szekciok as $szekcio)
          <tr>
              <td>{{$szekcio->szekcionev}}</td>
             
              <td>
                <ul> 
                   @foreach($szekcio->eloadok as $eloado)
                  <li>
                    {{$eloado->nev}}
                    
                  </li>  
                  @endforeach
                </ul>
              </td><a href="">
            <td><a href="{{$szekcio->link}}">{{$szekcio->link}}</td>
                @foreach($szekcio->eloadok as $eloado)
                    @if($eloado->pivot->kezdete && $eloado->pivot->vege)
                     <td>{{$eloado->pivot->kezdete}} </td>
                    <td>{{$eloado->pivot->vege}}</td>
                    @endif
                              
                @endforeach
            
        
           </tr>
          @endforeach
        </tbody>
    </table> --}}
     <div class="tab-content row justify-content-center">

    
        <div role="tabpanel" class="col-lg-10" id="1">
      @foreach ($szekciok as $szekcio) 
      
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
                <h4>{{ $szekcio->eloadascim }} @if($szekcio)<br><span>{{$szekcio->fokozat}}.{{ $szekcio->nev }},{{$szekcio->szekcionev}}</span>@endif</h4>
               <h4>{{$szekcio->intezmeny}}</h4>
              
              </div>
            </div>
          @endforeach
        @endforeach 
         
        </div>
     
    </div> 
  </div>
</section>

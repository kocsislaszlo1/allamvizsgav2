<section id="speakers" class="wow fadeInUp">
  <div class="container">
    <div class="section-header">
      <h2>Event Speakers</h2>
      <p>Here are some of our speakers</p>
    </div>

    <div class="row">
      @foreach ($plenarisok as $plenaris)
          
   
       <div class="col-lg-4 col-md-6">
          <div class="speaker">
           <div class="hatter">
             
           </div>
            <div class="details">
              <h3><a href="" >{{ $plenaris->nev }}</a></h3>
              <p>{{$plenaris->eloadascim}}</p>
              <p>eloadas kezdete:{{$plenaris->kezdete}}</p>
              <p>eloadas vege:{{$plenaris->vege}}</p>
              <div class="social">
                <p>{{$plenaris->email}}</p>
                <p>{{$plenaris->intezmeny}}</p>
              </div>
            </div>
          </div>
        </div>
          @endforeach
     
    </div>
  </div>

</section>

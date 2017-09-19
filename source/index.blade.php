@extends('_layouts.master')
@section('body')
  <div class="section section--lg" style="background-color: rgba(216, 210, 196, 0.2);">
    <div class="container type--center">
      <img src="/imgs/meta_logo.svg" width="8%" alt="Meta Lab logo" style="background: black">
      <br><br><br>
      <h1 class="type--thin">Web Services</h1>
    </div>
  </div>
  <main class="main main--metalab">
    <div class="section">
        <div class="container type--center">
          <h2 class="type--thin">Expanding Collaboration</h2>
          <br>
          <div class="row">
              <div class="col-md-4">
                <img src="/imgs/affinity.png" class="img--fluid" alt="Affinity">
                <p>  
                  <a href="{{ $page->getBaseUrl('affinity') }}">Affinity</a>
                </p>
              </div>
              <div class="col-md-4">
                <img src="/imgs/curriculum.png" class="img--fluid" alt="Curriculum">
                <p>
                  <a href="{{ $page->getBaseUrl('curriculum') }}">Curriculum</a>
                </p>
              </div>
              <div class="col-md-4">
                <img src="/imgs/degrees.png" class="img--fluid" alt="Degrees">
                <p>
                  <a href="{{ $page->getBaseUrl('degrees') }}">Degrees</a>
                </p>
              </div>
              <hr>
              <div class="col-md-4 col-md-offset-2">
                <img src="/imgs/directory.png" class="img--fluid" alt="Directory">
                <p>
                  <a href="{{ $page->getBaseUrl('directory') }}">Directory</a>
                </p>
              </div>
              {{-- <div class="col-md-4"> --}}
                {{-- <img src="//www.csun.edu/metalab/metaphor/docs/imgs/faculty.png" class="img--fluid" alt="Roster">
                <p>
                  <a href="{{ $page->getBaseUrl('roster') }}">Roster</a>
                </p> --}}
              {{-- </div> --}}
              <div class="col-md-4">
                <img src="/imgs/waldo.png" class="img--fluid" alt="Waldo">
                <p>
                  <a href="{{ $page->getBaseUrl('waldo') }}">Waldo</a>
                </p>
              </div>
          </div>
        </div>
      </div>
    <div class="section section--lg type--center" style="background-color: rgba(216, 210, 196, 0.2);">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h2 class="type--thin">Projects Powered By Our Services</h2>
          </div>
          <div class="container type--center">
            <div class="row"> 
              <div class="col-md-4 col-md-offset-2">
                <img src="//www.csun.edu/metalab/metaphor/docs/imgs/faculty.png" class="img--fluid" alt="Profiles App">
                <p>
                  <a href="//www.csun.edu/faculty">Profiles</a>
                </p>
               </div>
               <div class="col-md-4">
                <img src="//www.csun.edu/metalab/metaphor/docs/imgs/helix.png" class="img--fluid" alt="Scholarship App">
                <p>
                  <a href="//www.csun.edu/faculty/beta/scholarship">Scholarship</a>
                </p>
               </div>
            </div>
          </div>
         </div>
        </div>
      </div>
  </main>
@endsection

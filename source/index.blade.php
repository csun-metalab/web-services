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
                <p>
                    <a href="{{ $page->getBaseUrl('affinity')}}">
                        <img src="/imgs/affinity.png" class="img--fluid" alt="Affinity">
                        Affinity
                    </a>
                </p>
              </div>
              <div class="col-md-4">
                <p>
                    <a href="{{ $page->getBaseUrl('citations') }}">
                        <img src="/imgs/citations.png" class="img--fluid" alt="Citations">
                        Citations
                    </a>
                </p>
              </div>
              <div class="col-md-4">
                <p>
                    <a href="{{ $page->getBaseUrl('curriculum') }}">
                        <img src="/imgs/curriculum.png" class="img--fluid" alt="Curriculum">
                        Curriculum
                    </a>
                </p>
              </div>
              <div class="col-md-4">
                <p>
                    <a href="{{ $page->getBaseUrl('degrees') }}">
                        <img src="/imgs/degrees.png" class="img--fluid" alt="Degrees">
                        Degrees
                    </a>
                </p>
              </div>
              <hr>
              <div class="col-md-4">
                <p>
                    <a href="{{ $page->getBaseUrl('directory') }}">
                        <img src="/imgs/directory.png" class="img--fluid" alt="Directory">
                        Directory
                    </a>
                </p>
              </div>
              <div class="col-md-4">
                <p>
                    <a href="{{ $page->getBaseUrl('media') }}">
                        <img src="/imgs/media.png" class="img--fluid" alt="Media">
                        Media
                    </a>
                </p>
              </div>
              <div class="col-md-4 col-md-offset-2">
                <p>
                    <a href="{{ $page->getBaseUrl('roster') }}">
                        <img src="/imgs/roster.png" class="img--fluid" alt="Roster">
                        Roster
                    </a>
                </p>
              </div>
              <div class="col-md-4">
                <p>
                    <a href="{{ $page->getBaseUrl('waldo') }}">
                        <img src="/imgs/waldo.png" class="img--fluid" alt="Waldo">
                        Waldo
                    </a>
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
              <div class="col-md-4">
                <p>
                    <a href="{{ $page->getBaseUrl('jewel') }}">
                        <img src="/imgs/jewel.png" class="img--fluid" alt="Jewel Wrapper">
                        Jewel
                    </a>
                </p>
               </div>
               <div class="col-md-4">
                <p>
                    <a href="//www.csun.edu/faculty/beta/scholarship">
                        <img src="/imgs/faculty.png" class="img--fluid" alt="Profiles App">
                        Profiles
                    </a>
                </p>
               </div>
               <div class="col-md-4">
                <p>
                    <a href="//www.csun.edu/faculty/beta/scholarship">
                        <img src="/imgs/helix.png" class="img--fluid" alt="Scholarship App">
                        Scholarship
                    </a>
                </p>
               </div>
            </div>
          </div>
         </div>
        </div>
      </div>
  </main>
@endsection

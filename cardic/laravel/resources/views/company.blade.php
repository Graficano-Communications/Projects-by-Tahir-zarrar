@extends('layouts.master')

@section('title', 'Home')

@section('content')

<div>
        <img src="{{asset('assets/images/feedback.jpg')}}"  width="100%">
 </div>

<div class="container-fluid">
  <div class="container">
    @if(session()->has('message'))
            <div class="alert alert-success">
            {{ session()->get('message') }}
            </div>
            @endif
          <br/>
          <div class="row space-bottom">
            <div class="col-md-6">
              <h1 class="space-up" style="">Specialists in the Cardic Surgical</h1>
              <div style="width:300px;border-bottom:1px solid #DD0B2F;margin-top:15px; line-height: 24px;"></div>
              <p style="text-align:justify;">
              For more than 50 years made by Cardic is a synonym for state-of-the-art surgical- and endoscopic instruments and equipment of high quality and precision. The success of Cardic derives from innovation, commitment and a strong focus on our continuing tradition.
A product range with over 20.000 articles is distributed worldwide under our own brand as well as OEM. Indispensable ‘tools’ for maturing a new idea into the surgical instrument of highest precision include our state-of-the-art manufacturing facility with 6.000 m², the ingenuity and strong commitment of our entire team of technicians and skilled workers and a location which for more than 100 years has been the very world center – with a high manufacturing penetration – for developing and producing all types of innovative and patient-oriented surgical instrumentation for distinguished physicians across the globe.
              </p>
            </div>

            <div class="col-md-6">
             <img src="{{asset('assets/images/feedback.jpg')}}"  width="100%" height="400px">
            </div>
  
          </div>

          <div class="row space-bottom">  
 
            <div class="col-md-12 col-sm-6" style="padding-bottom: 40px;">
              <div class="ts-heading heading-2 style-1"><h2 style="border: medium none;">Our areas of competence<div style="width:300px;border-bottom:1px solid #DD0B2F;margin-top:15px; "></div></h2></div>
            </div>
 
            <div  style="margin-right: 20px;">
            <a class="imghov" href="#">
            <img src="https://tontarra.de/wp-content/uploads/2014/12/company_development-design_overview.jpg" class="img-fluid" alt="" sizes="(max-width: 356px) 100vw, 356px" width="356" height="193"> 
            </a>  
            <div style="margin-right: 20px; margin-top: 15px;">
              <div><h5><a href="https://tontarra.de/en/company/development-design/">Development &amp; Design</a></h5><ul><li>Construction</li><li>Design of prototypes | Prototype building</li><li>CAD | CAM</li></ul></div></div>
            </div>

            <div style="padding-right: 20px; ">
            <a class="imghov" href="#">
            <img src="https://tontarra.de/wp-content/uploads/2014/12/company_development-design_overview.jpg" class="img-fluid" alt="" sizes="(max-width: 356px) 100vw, 356px" width="356" height="193"> 
            </a>  
            <div style="margin-right: 20px; margin-top: 15px;">
              <div><h5><a href="https://tontarra.de/en/company/development-design/">Manufacturing </a></h5><ul><li>Production of Low and High Volume series</li><li>CNC | CAM | Automation</li><li>Assembly | Cleaning & Passivation</li></ul></div></div>
            </div>

            <div style="padding-right: 20px;">
            <a class="imghov" href="#">
            <img src="https://tontarra.de/wp-content/uploads/2014/12/company_development-design_overview.jpg" class="img-fluid" alt="" sizes="(max-width: 356px) 100vw, 356px" width="356" height="193"> 
            </a>  
            <div style="margin-right: 20px; margin-top: 15px;">
              <div><h5><a href="https://tontarra.de/en/company/development-design/">Company History</a></h5><ul><li>Our Vision</li><li>About Cardic</li><li>Give best of the best.</li></ul></div></div>
            </div>
 

            <div style="padding-right: 20px;">
            <a class="imghov" href="#">
            <img src="https://tontarra.de/wp-content/uploads/2014/12/company_development-design_overview.jpg" class="img-fluid" alt="" sizes="(max-width: 356px) 100vw, 356px" width="356" height="193"> 
            </a>
            <div style="margin-right: 20px; margin-top: 15px;">
              <div><h5><a href="https://tontarra.de/en/company/development-design/">Quality Management</a></h5><ul><li>Technical Documentation</li><li>Audits | Quality assurance</li><li>Controlling | Process Control</li></ul></div></div>
            </div> 

             <div style="padding-right: 20px;">
            <a class="imghov" href="#">
            <img src="https://tontarra.de/wp-content/uploads/2014/12/company_development-design_overview.jpg" class="img-fluid" alt="" sizes="(max-width: 356px) 100vw, 356px" width="356" height="193"> 
            </a>
            <div style="margin-right: 20px; margin-top: 15px;">
              <div><h5><a href="https://tontarra.de/en/company/development-design/">Service &amp; Support</a></h5><ul><li>Consulting | Training</li><li>Information Service</li><li>Repair Service</li></ul></div></div>
            </div> 

          </div>

          
</div>
</div>
@endsection
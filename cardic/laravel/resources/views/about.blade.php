@extends('layouts.master')

@section('title', 'About')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <img src="{{asset('assets/images/aboutcardic.jpg')}}" class="img-fluid" oncontextmenu="return false;" >
    </div>    
  </div>
  <div class="container"> 
    <div class="row">
    <div class="col-md-12 about">
      <h3>ABOUT US</h3>
      <p>Cardic Instruments is a privately owned company providing personalized service and the finest in Surgical Instruments for over 36 years. Established in 1981, Our Company manufactures a wide range of Surgical Instruments with specialization in Cardio Vascular, Tungsten Carbide, Orthopedic, and Hysterectomy Instrumentation.</p>
      <p>All instruments and devices of our product range are manufactured by well-trained and experienced skilled workers with special craftsmanship and by use of most modern machines and equipment. On this occasion, we only use materials which meet our high-quality standards. The CEO of Cardic Instruments, Mr. Muhammad Afzal Choudhry, brings with him a lifetime of knowledge about the world of surgical instruments. This insight allows us to understand the needs of our customers in a way most other instrument companies are unable to do.</p>
      <p>All products we manufacture, comply with the basic requirements of the EC Directive 93/42/EWG and have thus the CE mark. Our Quality Management System is certified according to ISO 9001: 2008 & DIN EN ISO 13485:2012 + AC: 2012. The compliance with international standards, like for instance those of the FDA, has the highest priority for us. Every single product has to pass several quality checks and thus is individually treated by hand.</p>

      <h3>CERTIFICATES</h3>
      <p>All Products we manufacture, comply with the basic requirments of the EC Directive 93/42/ EWG and have thus the CE mark. Our Quality Management System is Certified according to ISO 900:2008 & DIN EN ISO 13485:2012 + AC:2012. The Compliance with international standards, like forinstance those of the FDA, has the highest priority for us. Every single product has to pass several quality checks and thus is individually treated by hand.</p>
      <img src="{{asset('assets/images/certificates.jpg')}}" class="img-fluid" oncontextmenu="return false;">
      
    </div> 
    </div>
  </div>

</div>    

@endsection
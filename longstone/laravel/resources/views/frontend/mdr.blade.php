@extends('frontend.layout.master')
@section('title', 'Long Stone Int')
@section('main-container')
<style>
    p{
        text-align: justify;
    }
    .table{
        border: 1px solid #000000;
    }
   
</style>
    
<section class="cover-background background-position-top wow animate__fadeIn" style="background-image: url('{{ asset('assets/frontend/images/Front-images/mdr-banner.jpg') }}'); height:500px;">
    <div class="opacity-medium"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-xl-6 col-lg-7 col-md-10 position-relative page-title-large text-center">
                {{-- <h1 class="alt-font text-white font-weight-500 no-margin-bottom">About Us</h1> --}}
            </div>
        </div>
    </div>
</section>

    <!-- start section -->
    <section class="position-relative pb-0 overflow-visible wow animate__fadeIn" data-wow-delay="0.4s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5 class="alt-font text-extra-dark-gray font-weight-500 margin-30px-bottom w-95 text-center">We Stand Ready for MDR Compliance at Longstone</h5>
                    <p style="text-align: center;">As of 2017, the Medical Device Directive (MDD), which had been in place since 2002, was repealed by the EU Medical Device Regulation (MDR), set to be fully implemented in 2024. In response, Longstone is fully prepared to transition to MDR as soon as it takes effect. Since July 2021, an MDR transition program has been in place within the organization to ensure full compliance with the updated regulations. Longstone will obtain EMDR certification within the next year for all classes of medical devices, ensuring continued market availability beyond 2024. Notably, compliance for Class I medical devices will be achieved by July 2022, with an ongoing transition process for Class IIa and IIb classifications.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 position-relative margin-70px-top lg-margin-30px-top md-margin-50px-bottom wow animate__fadeInLeft">
                    <div class="w-70 border-radius-6px overflow-hidden position-relative">
                        <img src="{{ asset('assets/frontend/images/Front-images/mdr-1.jpg') }}" alt="" />
                    </div>
                    <div class="position-absolute right-15px bottom-0px w-70" data-parallax-layout-ratio="1.1">
                        <img class="border-radius-6px" src="{{ asset('assets/frontend/images/Front-images/mdr-2.jpg') }}" alt="" />
                    </div>
                </div>
                <div class="col-12 col-lg-5 offset-lg-1">
                    <div class="alt-font text-extra-medium font-weight-500 margin-30px-bottom"><span
                            class="w-30px h-1px bg-fast-blue d-inline-block align-middle margin-20px-right"></span><span
                            class="text-fast-blue d-inline-block">Longstone MDR</span></div>
                    <h5 class="alt-font text-extra-dark-gray font-weight-500 margin-30px-bottom w-95">We Stand Ready for MDR Compliance at Longstone</h5>
                    <p >With the upcoming 2024 implementation of the new Medical Device Regulation (MDR), we have taken proactive measures to align with the impending changes. The anticipated impact of these regulations is particularly significant for Class IIa medical devices, which include invasive and electrical devices.
                        Our preparedness for the forthcoming 2024 Medical Device Regulation (MDR) establishes us as a dependable partner in navigating this evolving regulatory landscape. We are well-equipped to address the implications for Class IIa medical devices, particularly within the invasive and electrical device categories.                        
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    {{-- <section class="wow animate__fadeIn">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-4 row-cols-sm-2 align-items-center justify-content-center">
                <!-- start counter item -->
                <div class="col text-center sm-margin-40px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                    <h4 class="vertical-counter d-inline-flex text-extra-dark-gray alt-font appear font-weight-600 letter-spacing-minus-2px md-letter-spacing-normal mb-0"
                        data-to="2530"></h4>
                    <span class="alt-font text-uppercase text-small d-block margin-5px-top">Working hours</span>
                </div>
                <!-- end counter item -->
                <!-- start counter item -->
                <div class="col text-center sm-margin-40px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <h4 class="vertical-counter d-inline-flex text-extra-dark-gray alt-font appear font-weight-600 letter-spacing-minus-2px md-letter-spacing-normal mb-0"
                        data-to="3200"></h4>
                    <span class="alt-font text-uppercase text-small d-block margin-5px-top">Photo capture</span>
                </div>
                <!-- end counter item -->
                <!-- start counter item -->
                <div class="col text-center xs-margin-40px-bottom wow animate__fadeIn" data-wow-delay="0.6s">
                    <h4 class="vertical-counter d-inline-flex text-extra-dark-gray alt-font appear font-weight-600 letter-spacing-minus-2px md-letter-spacing-normal mb-0"
                        data-to="2830"></h4>
                    <span class="alt-font text-uppercase text-small d-block margin-5px-top">Work completed</span>
                </div>
                <!-- end counter item -->
                <!-- start counter item -->
                <div class="col text-center wow animate__fadeIn" data-wow-delay="0.8s">
                    <h4 class="vertical-counter d-inline-flex text-extra-dark-gray alt-font appear font-weight-600 letter-spacing-minus-2px md-letter-spacing-normal mb-0"
                        data-to="2060"></h4>
                    <span class="alt-font text-uppercase text-small d-block margin-5px-top">Telephonic talk</span>
                </div>
                <!-- end counter item -->
            </div>
        </div>
    </section> --}}
    <!-- end section -->
    <!-- start section -->
    <section class="wow animate__fadeIn">
        <div class="container">
            <div class="row align-items-center">
                
                <div class="col-12 col-lg-6 ">
                    <h5 class="alt-font font-weight-500 text-extra-dark-gray margin-50px-bottom xs-margin-30px-bottom">We Stand Ready for MDR Compliance at Longstone</h5>
                    <!-- start feature box item -->
                    <div class="alt-font font-weight-500 d-inline-block text-extra-medium margin-15px-bottom"><span
                            class="w-30px h-1px d-inline-block align-middle bg-fast-blue margin-15px-right"></span><span
                            class="text-fast-blue d-inline-block">Commitment to Quality and Compliance</span></div>
                    <p >As a supplier of surgical instruments to the medical industry, we have fully embraced these regulatory updates to ensure a consistent supply of high-quality products. Our extensive portfolio, developed through a unique combination of expertise and innovation, provides the flexibility needed in today’s ever-changing global market. Despite economic challenges, we remain committed to collaborating with our partners to develop innovative solutions that enhance compliance while optimizing costs.
                    </p>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div
                        class="alt-font font-weight-500 d-inline-block text-extra-medium margin-15px-bottom margin-20px-top">
                        <span class="w-30px h-1px d-inline-block align-middle bg-fast-blue margin-15px-right"></span><span
                            class="text-fast-blue d-inline-block">Longstone’s Approach to Regulatory Adaptation
                        </span>
                    </div>
                    <p >Acknowledging the 2017 announcement by the European Commission (EC) regarding the implementation of a Single Regulatory Document (SRD) for all Class IIa devices, we recognize the necessity of preparing for this upcoming regulatory framework.</p>
                    <!-- end feature box item -->
                </div>
                <div class="col-12 col-lg-5 md-margin-50px-bottom wow animate__fadeInRight offset-lg-1" data-wow-delay="0.4s">
                    <div>
                        <img src="{{ asset('assets/frontend/images/Front-images/mdr-3.jpg') }}" alt="our process03" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-light-gray wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-12 col-xl-5 col-lg-6 col-sm-8 text-center margin-6-rem-bottom md-margin-5-rem-bottom sm-margin-3-rem-bottom">
                    <span class="alt-font text-extra-medium margin-20px-bottom d-block text-fast-blue font-weight-500">MDR medical Devices</span>
                    <h5 class="alt-font text-extra-dark-gray font-weight-500">Classification of MDR medical Devices</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th style="white-space: nowrap">Class</th>
                                    <th>Examples of Devices</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="white-space: nowrap">Class 1</td>
                                    <td>Bandages, stethoscopes, eyeglasses, and other medical devices used to treat patients.</td>
                                    <td>Class I devices are considered low-risk and are subject to general controls. They are non-invasive and do not pose a significant risk to patients. Kummas Instruments ensures complete product identification and traceability through UDI Codes and ISO 15223-1 labels.</td>
                                </tr>
                                <tr>
                                    <td style="white-space: nowrap"></td>
                                    <td>Subclassifications: Is (sterile condition), Im (measuring function), Ir (reusable surgical)</td>
                                    <td>Subclassifications within Class I further categorize devices based on specific characteristics such as sterility, measuring function, and reusability.</td>
                                </tr>
                                <tr>
                                    <td style="white-space: nowrap">Class IIA</td>
                                    <td>Hearing aids, catheters, short-term contact lenses.</td>
                                    <td>Class IIA devices are of moderate risk and require a higher level of regulation compared to Class I.</td>
                                </tr>
                                <tr>
                                    <td style="white-space: nowrap">Class IIB</td>
                                    <td>Forceps, scissors, scalpels, ventilators, insulin pens, long-term contact lenses, incubators, forceps.</td>
                                    <td>Class IIB devices pose a higher level of risk than Class I and IIA devices. They require a more rigorous assessment and conformity assessment procedure.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="parallax wow animate__fadeIn" data-parallax-background-ratio="0.2"
        style="background-image:url('images/our-process-bg-5.jpg');">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div
                    class="col-12 col-xl-7 col-md-8 col-sm-10 position-relative text-center text-md-start sm-margin-30px-bottom">
                    <h4 class="alt-font font-weight-600  mb-0">Conclusion</h4>
                    <p>At Longstone, we utilize cutting-edge technology to manufacture products that are both highly efficient and effective. Our instruments are trusted by hospitals, clinics, and healthcare facilities worldwide. We understand the critical importance of providing healthcare professionals with access to top-tier instruments at competitive prices, ensuring the highest standard of patient care. Our dedicated compliance team stands ready to support you with all regulatory requirements.</p>
                </div>
                <div class="col-12 col-xl-5 col-md-4 position-relative text-center text-md-end">
                    <a href="{{ url('contact-us') }}" class="btn btn-large btn-gradient-light-purple-light-orange">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection

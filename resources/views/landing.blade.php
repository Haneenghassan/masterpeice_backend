@extends('layout.master')
@section('title','Home')
@section('content')

    <!-- landing video -->

    <div  id="video" >
        <!-- loop :to make video run for infinity -->
        <video autoplay loop muted >
            <source src="/photos/video.mp4" type="video/mp4">
        </video>
    </div>
    <div>
        <img src="RSVL-9-2019-MKTG-080_web.png" id="photo">
    </div>
    <div>
        <!-- fs:fontsize && text-center:to make text in center page -->
        <h1 class=" fs-1 text-center header ">A HEARTFELT DEDICATION TO <br>  NURTURING INTELLIGENCE.</h1>
    </div>


    <div>
    <button type="button" class="btn register"> Register</button>
    </div>

    <div class="textsection1">
        <p>Our Services<p>    
            </div>

    <div id="section1" >
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card h-100">
                <img src="/photos/109-1090866_special-project-preschool-icon-png-transparent-removebg-preview (1).png" class="card-img-top mt-1 h-55 "  alt="...">
                <div class="card-body">
                  <h5 class="card-text" style="font-size: 2.5rem;text-align: center;">Pre-Schools</h5>
                </div>
              </div>
            </div>
            <div class="col">
                <!-- h-100 act the height -->
              <div class="card h-100">
                <img src="/photos/babysitter.png" class="card-img-top h-55 mt-4 photobabysitter" alt="babysittercard">
                <div class="card-body">   
                  <h5 class="card-text" style="font-size: 2.5rem;text-align: center;">Baby Sitter</h5>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                  <div class="h-60" style="width: 70%;">
                <img src="/photos/special_need-removebg-preview-removebg-preview.png" class="card-img-top"   alt="...">
                 </div>
                <div class="card-body ">
                  <h5 class="card-text " style="font-size: 2.5rem;text-align: center;">disabilities</h5>
                </div>
              </div>
            </div>
          </div>
    </div>

    <div class="section2">
        <div class="text-center">
            <img src="/photos/Untitled-removebg-preview (1).png" class="rounded" style="width: 38%;" alt="imghappyvally">
          </div>
          <h2 id="headersection2">A HEARTFELT DEDICATION TO NURTURING INTELLIGENCE.</h2>
          <p class="text-center " style="width: 80%; padding-left: 20%;">
            we view children as competent, capable, and rich with ideas,Children observe, investigate, and explore the world around them through play in the art classrooms.our website experience is about the sense of comfort and security you feel when your child is warmly greeted each morning by teachers and friends and the pride you feel in your child’s daily progress and accomplishments.
          <p>
    </div>


     <div class="section3">
    <div class="row text-center" style=" margin-left: 20%;">
      <div class="col-3 text-center peaceofmind">
        <img src="/photos/home.png" class="img-fluid" alt="...">
        <h3 style="color: white;">Peace Of Mind</h3>
        <p style="color: white;">Happy Vally offers parents peace-of-mind with the knowledge that each child will be supported both academically and emotionally in an environment that is always safe, secure, and nurturing</p>
      </div>
      <div class="col-3 text-center peaceofmind ">
        <img src="/photos/heart_icon.png" class="img-fluid" alt="...">
        <h3 style="color: white;">CARING FOR CHILDREN AND FAMILIES</h3>
        <p style="color: white;">Since the family is a child's primary source of love and care, we dedicate ourselves to helping families through every stage of their child's development.</p>
      </div>
      <div class="col-3 text-center peaceofmind ">
        <img src="/photos/globe_icon.png" class="img-fluid" alt="...">
        <h3 style="color: white;">EXCELLENCE IN EDUCATION </h3>
        <p style="color: white;">Since the family is a child's primary source of love and care, we dedicate ourselves to helping families through every stage of their child's development.</p>
      </div>
    </div>
</div>

<div class="section4">
    <div class="row justify-content-start">
        <div class="col-6 ms-5 mt-4">
            <h3>JOIN OUR Family </h3> 
            <p>
                When you join us, you embrace our environment of community. We are proud to cultivate an environment where all pre-schools and peoplewho can represente care can are represented and celebrated in our website. Both your professional and personal aspirations matter to us. Showing appreciation is one of our favorite things to do.
            </p> 
        <div>
            <p  style="font-size: 30px;font-weight: 600;">
                <a class="buttonyellow"  href=""  >Join Us</a>
            </p>
        </div>
        </div>
        <div class="col-5 ms-5">
            <img src="/photos/Untitled design.png" class="img-fluid imgsection4 mt-3" alt="photojoinus">
        </div>
    </div>
</div>


<section style="background-image: url(/photos/Swash_Green_Top.png); display: flex;">
  
      <div class="row text-center"  style="margin:3% 3%;" >
      <div class="col-md-4 mb-5 mb-md-0">
        <div class="d-flex justify-content-center mb-4">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
            class="rounded-circle shadow-1-strong" width="150" height="150" />
        </div>
        <h5 class="mb-3">Maria Smantha</h5>
 
        <p class="px-xl-3">
          <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet, consectetur
          adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic
          tenetur.
        </p>
        <!-- <ul class="list-unstyled d-flex justify-content-center mb-0">
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="fas fa-star-half-alt fa-sm text-warning"></i>
          </li>
        </ul> -->
      </div>
      <div class="col-md-4 mb-5 mb-md-0">
        <div class="d-flex justify-content-center mb-4">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
            class="rounded-circle shadow-1-strong" width="150" height="150" />
        </div>
        <h5 class="mb-3">Lisa Cudrow</h5>
       
        <p class="px-xl-3">
          <i class="fas fa-quote-left pe-2"></i>Ut enim ad minima veniam, quis nostrum
          exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid commodi.
        </p>
        <!-- <ul class="list-unstyled d-flex justify-content-center mb-0">
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
        </ul> -->
      </div>
      <div class="col-md-4 mb-0">
        <div class="d-flex justify-content-center mb-4">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp"
            class="rounded-circle shadow-1-strong" width="150" height="150" />
        </div>
        <h5 class="mb-3">John Smith</h5>

        <p class="px-xl-3">
          <i class="fas fa-quote-left pe-2"></i>At vero eos et accusamus et iusto odio
          dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.
        </p>
        <!-- <ul class="list-unstyled d-flex justify-content-center mb-0">
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="fas fa-star fa-sm text-warning"></i>
          </li>
          <li>
            <i class="far fa-star fa-sm text-warning"></i>
          </li>
        </ul> -->
      </div>
    </div>
  </section>
</div>
@endsection


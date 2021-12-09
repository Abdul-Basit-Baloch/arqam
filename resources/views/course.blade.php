@extends('include.layout')
@section('content')

  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Tahleem Balghan</h2>
        <h3><span>Level One</span></h3>
        <p>Duration of this level is 5 months and in this level we will teach you following subjects.</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-3">
          <div class="info-box mb-4">
            <i class="bx bx-book"></i>
            <h3>Tafseer</h3>
            <p>Amma Para</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-book"></i>
            <h3>Arabic Grammar</h3>
            <p>Basics</p>
          </div>
        </div>

        <div class="col-lg-2 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-book"></i>
            <h3>Hadith</h3>
            <p>40 Hadith</p>
            
          </div>
        </div>
          
        <div class="col-lg-2 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-book"></i>
            <h3>Tajweed</h3>
            <p>Noorani Qaida</p>
            
          </div>
        </div>

        <div class="col-lg-2 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-book"></i>
            <h3>Fiqh</h3>
            <p>Tahleem ul Islam</p>
            
          </div>
        </div>


      </div>

      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
    
          <div class="section-title">
            <h2>Tahleem Balghan</h2>
            <h3><span>Level Two</span></h3>
            <p>Duration of this level is 5 months and in this level we will teach you following subjects.</p>
          </div>
    
          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-3">
              <div class="info-box mb-4">
                <i class="bx bx-book"></i>
                <h3>Tafseer</h3>
                <p>Amma Para</p>
              </div>
            </div>
    
            <div class="col-lg-3 col-md-6">
              <div class="info-box  mb-4">
                <i class="bx bx-book"></i>
                <h3>Arabic Grammar</h3>
                <p>Basics</p>
              </div>
            </div>
    
            <div class="col-lg-2 col-md-6">
              <div class="info-box  mb-4">
                <i class="bx bx-book"></i>
                <h3>Hadith</h3>
                <p>40 Hadith</p>
                
              </div>
            </div>
              
            <div class="col-lg-2 col-md-6">
              <div class="info-box  mb-4">
                <i class="bx bx-book"></i>
                <h3>Tajweed</h3>
                <p>Noorani Qaida</p>
                
              </div>
            </div>
    
            <div class="col-lg-2 col-md-6">
              <div class="info-box  mb-4">
                <i class="bx bx-book"></i>
                <h3>Fiqh</h3>
                <p>Tahleem ul Islam</p>
                
              </div>
            </div>
    
    
          </div>
    

      <div class="section-title">
        
        <h3><span>Enroll in your desire course.</span></h3>
        
      </div>


      <div class="row" data-aos="fade-up" data-aos-delay="100">

        

        <div class="col-lg-12">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="row">
              <div class="col form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Father's Name" required>
              </div>
              <div class="col form-group">
                <select class="form-control"  required>
                  <option value="">Select Course</option>
                  <option value="">Tahleem Balghan level 1</option>
                  <option value="">Tahleem Balghan level 2</option>
                  <option value="">Nazra</option>
                </select>
              </div>
            </div>
           
            <div class="row">
              <div class="col form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="CNIC Number" required>
              </div>
              <div class="col form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Age" required>
              </div>
            </div>
           

            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Apply</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->


  @endsection
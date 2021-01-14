@extends('main_layout/layout')
@section('content')
           <div class="wrap-group" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <!-- item list -->
                        <div class="list-item">
                            <h2>ABOUT ME</h2>
                            <p>Morris Schultz, Attorney with 10+ years experience in legal consultancy. He has spent significant time on his feet in
                            court arguing and trying cases. During his practice at “SomeLawFirm and Partners” Morris defended one of the top
                            corporations in the world and government agencies in premises liability, product liability and employment discrimination
                            matters.</p>  
                            <div class="flex-between list-item" id="me-pic">
                                <div class="box">
                                    <img  alt=""
                                      src="{{url('storage/photos/2/person.png')}}"
                                      alt="">       
                                </div>
                                  <div class="box">
                                      <p>Morris Schultz, Attorney with 10+ years experience in legal consultancy. He has spent significant time on his feet in
                            court arguing and trying cases. During his practice at “SomeLawFirm and Partners” Morris defended one of the top
                            corporations in the world and government agencies in premises liability, product liability and employment discrimination
                            matters</p>

                                </div>     
                            </div>
                            <div class="quote">
                                Morris Schultz, Attorney with 10+ years experience in legal consultancy. He has spent significant time on his feet in
                            court arguing and trying cases. During his practice at “SomeLawFirm and Partners” Morris defended one of the top
                            corporations in the world and government agencies in premises liability, product liability and employment discrimination
                            matters
                            </div>
                            <p>Morris Schultz, Attorney with 10+ years experience in legal consultancy. He has spent significant time on his feet in
                            court arguing and trying cases. During his practice at “SomeLawFirm and Partners” Morris defended one of the top
                            corporations in the world and government agencies in premises liability, product liability and employment discrimination
                            matters</p>
                        </div>
                        <!-- information -->
                        <div class="list-item flex-between">
                            <div class="box">
                                <h4 class="box-title">Personal information</h4>
                              <div class="information">
                                  <div class="flex-between">
                                      <h6>Full Name</h6>
                                      <p>Le Van Hoa</p>
                                  </div>
                                  <div class="flex-between">
                                      <h6>D.O.B.</h6>
                                      <p>05 Sep 1986</p>
                                  </div>
                                  <div class="flex-between">
                                      <h6>ADDRESS</h6>
                                      <p>24058, Belgium, Brussels, Liutte 27, BE</p>
                                  </div>
                                  <div class="flex-between">
                                      <h6>E-MAIL</h6>
                                      <p>lehoa.strong@gmail.com</p>
                                  </div>
                                  <div class="flex-between">
                                      <h6>PHONE</h6>
                                      <p>0986.238.723</p>
                                  </div>

                              </div>
                            </div>
                            <!-- skill -->
                            <div class="box">
                                <h4 class="box-title">My skill</h4>
                                <!-- list skill -->
                                <div class="list-skill flex-column">
                                    <p>Intellectual Property</p>
                                    <div class="skill-bar">
                                        <div class="skill"></div>
                                    </div>
                                    <div class="skill-number">90%</div>
                                </div>
                                <!-- list skill -->
                                <div class="list-skill flex-column">
                                    <p>Intellectual Property</p>
                                    <div class="skill-bar">
                                        <div class="skill"></div>
                                    </div>
                                    <div class="skill-number">90%</div>
                                </div>
                                <!-- list skill -->
                                <div class="list-skill flex-column">
                                    <p>Intellectual Property</p>
                                    <div class="skill-bar">
                                        <div class="skill"></div>
                                    </div>
                                    <div class="skill-number">90%</div>
                                </div>
                            </div>
                        </div>
                    </div> 


                    {{-- other --}}
                             <div class="wrap-group" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" id="other">
                        <h2>Other</h2>
                        <div class="list-item flex-between">
                            <!-- box -->
                          <div class="box">
                              <h4 class="box-title">Some Statistics</h4>
                              <div class="statistics-group flex">
                                 
                                  <!-- list -->
                                  <div class="statistic-item flex-column">
                                    <svg>
                                        <circle stroke-dasharray="200" stroke-dashoffset="0" cx="50" cy="50" r="40"  stroke="#223D72" stroke-width="6" fill="transparent" />
                                    </svg>
                                    <p class="text-center">Winning Cases</p>
                                  </div>
                                  <!-- list -->
                                  <div class="statistic-item flex-column">
                                    <svg>
                                        <circle stroke-dasharray="200" stroke-dashoffset="0" cx="50" cy="50" r="40"  stroke="#223D72" stroke-width="6" fill="transparent" />
                                    </svg>
                                    <p class="text-center">Winning Cases</p>
                                  </div>
                                  <!-- list -->
                                  <div class="statistic-item flex-column">
                                    <svg>
                                        <circle stroke-dasharray="200" stroke-dashoffset="0" cx="50" cy="50" r="40"  stroke="#223D72" stroke-width="6" fill="transparent" />
                                    </svg>
                                    <p class="text-center">Winning Cases</p>
                                  </div>
                                
                              </div>
                          </div>
                          <!-- box -->
                          <div class="box">
                              <h4 class="box-title">Languages</h4>
                              <div class="flex-column">
                                  <!-- list -->
                                  <div class="list-skill">
                                      <p>Vietnamese</p>
                                      <div class="flex-between language">
                                          <div class="flex-between dot">
                                            <i class="fas fa-circle" data-aos="fade-right"></i>
                                            <i class="fas fa-circle" data-aos="fade-right"></i>
                                            <i class="fas fa-circle" data-aos="fade-right"></i>
                                            <i class="fas fa-circle" data-aos="fade-right"></i>
                                            <i class="fas fa-circle" data-aos="fade-right"></i>
                                            <i class="fas fa-circle" data-aos="fade-right"></i>
                                            <i class="fas fa-circle" data-aos="fade-right"></i>
                                            <i class="far fa-circle" data-aos="fade-right"></i>
                                            <i class="far fa-circle" data-aos="fade-right"></i>
                                          </div>
                                          <span>nature</span>
                                      </div>
                                  </div>
                                  <!-- list -->
                                  <div class="list-skill">
                                      <p>Vietnamese</p>
                                      <div class="flex-between language">
                                          <div class="flex-between dot">
                                            <i class="fas fa-circle" data-aos="fade-right"></i>
                                            <i class="fas fa-circle" data-aos="fade-right"></i>
                                            <i class="fas fa-circle" data-aos="fade-right"></i>
                                            <i class="fas fa-circle" data-aos="fade-right"></i>
                                            <i class="fas fa-circle" data-aos="fade-right"></i>
                                            <i class="fas fa-circle" data-aos="fade-right"></i>
                                            <i class="fas fa-circle" data-aos="fade-right"></i>
                                            <i class="far fa-circle" data-aos="fade-right"></i>
                                            <i class="far fa-circle" data-aos="fade-right"></i>
                                          </div>
                                          <span>nature</span>
                                      </div>
                                  </div>
                                  <!-- list -->
                                  <div class="list-skill">
                                      <p>Vietnamese</p>
                                      <div class="flex-between language">
                                          <div class="flex-between dot">
                                            <i class="fas fa-circle" data-aos="fade-right"></i>
                                            <i class="fas fa-circle" data-aos="fade-right"></i>
                                            <i class="fas fa-circle" data-aos="fade-right"></i>
                                            <i class="fas fa-circle" data-aos="fade-right"></i>
                                            <i class="fas fa-circle" data-aos="fade-right"></i>
                                            <i class="fas fa-circle" data-aos="fade-right"></i>
                                            <i class="fas fa-circle" data-aos="fade-right"></i>
                                            <i class="far fa-circle" data-aos="fade-right"></i>
                                            <i class="far fa-circle" data-aos="fade-right"></i>
                                          </div>
                                          <span>nature</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="list-item">
                            <h4 class="box-title">Interests</h4>
                            <div class="interests flex">
                                <!-- list -->
                                <div class="interests-item flex">
                                    <i class="fas fa-code"></i> <p>code</p>
                                </div>
                                <!-- list -->
                                <div class="interests-item flex">
                                    <i class="fas fa-book"></i> <p>book</p>
                                </div>
                                <!-- list -->
                                <div class="interests-item flex">
                                    <i class="fas fa-pen"></i> <p>write content</p>
                                </div>
                                <!-- list -->
                                <div class="interests-item flex">
                                    <i class="fas fa-coffee"></i> <p>coffee</p>
                                </div>
                                <!-- list -->
                                <div class="interests-item flex">
                                    <i class="fab fa-leanpub"></i> <p>Learn Every thing</p>
                                </div>
                            </div>

                        </div>
                    </div>
@endsection
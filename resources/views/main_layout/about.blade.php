@extends('main_layout/layout')
@section('content')
           <div class="wrap-group" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <!-- item list -->
                        <div class="list-item">
                            <h2>ABOUT ME</h2>
                            <p>I'm Hoa. I'm IT Helpdesk and Web Developer. Currently I'm majoring in IT at night. I have 2 years of experience as an office worker and 1 year in IT technical support. In work and in life, I always set the highest standards for myself. That is why I am always in the top of the fields where I study, i work and  I participate. My biggest strength is my ability to learn and absorb very quickly. I always try to do my best at my job and find ways to improve my productivity.</p>  
                            <div class="flex-between list-item" id="me-pic">
                                <div class="box">
                                    <img  alt=""
                                      src="{{url('storage/photos/2/person.png')}}"
                                      alt="">       
                                </div>
                                  <div class="box">
                                      <p>I always think we'll have the best answer if we know the question. My question now is, Who am I? What am I doing and where am I? Who do I want to be in the next 5 years? These questions motivate me to try harder. I work more, I read more books and I study more. Now that my high scores in school may not make me very happy. But it makes me proud of myself. What I spent my time seriously will give me worthy results.</p>

                                </div>     
                            </div>
                            <div class="quote">
                                Some people tell me lazy. It's true. I think alway have the better way for handle the job or something in my life. If my job need myself handle it. i will, but it can handle by computer or something fast why i don't learn new thing and try it ?
                            </div>
                            <p>With experience working in many different environments I believe that I can handle many jobs with the best results.</p>
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
                                    <div class="skill-bar" data-aos="fade-right">
                                        <div class="skill"></div>
                                    </div>
                                    <div class="skill-number">90%</div>
                                </div>
                                <!-- list skill -->
                                <div class="list-skill flex-column">
                                    <p>Intellectual Property</p>
                                    <div class="skill-bar" data-aos="fade-right">
                                        <div class="skill"></div>
                                    </div>
                                    <div class="skill-number">90%</div>
                                </div>
                                <!-- list skill -->
                                <div class="list-skill flex-column">
                                    <p>Intellectual Property</p>
                                    <div class="skill-bar" data-aos="fade-right">
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
                              <h4 class="box-title">My Strengths</h4>
                              <div class="statistics-group flex">
                                 
                                  <!-- list -->
                                  <div class="statistic-item flex-column" data-aos="zoom-in">
                                    <svg >
                                        <circle stroke-dasharray="233" stroke-dashoffset="0" cx="50" cy="50" r="40"  stroke="#223D72" stroke-width="6" fill="transparent" />
                                    </svg>
                                    <p class="text-center">Learn Fast</p>
                                  </div>
                                  <!-- list -->
                                  <div class="statistic-item flex-column" data-aos="zoom-in">
                                    <svg>
                                        <circle stroke-dasharray="235" stroke-dashoffset="0" cx="50" cy="50" r="40"  stroke="#223D72" stroke-width="6" fill="transparent" />
                                    </svg>
                                    <p class="text-center">Working Group</p>
                                  </div>
                                  <!-- list -->
                                  <div class="statistic-item flex-column" data-aos="zoom-in">
                                    <svg>
                                        <circle stroke-dasharray="225" stroke-dashoffset="0" cx="50" cy="50" r="40"  stroke="#223D72" stroke-width="6" fill="transparent" />
                                    </svg>
                                    <p class="text-center">Enthusiasm</p>
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
                                            <i class="fas fa-circle" data-aos="fade-right"></i>
                                            <i class="far fa-circle" data-aos="fade-right"></i>
                                          </div>
                                          <span>nature</span>
                                      </div>
                                  </div>
                                  <!-- list -->
                                  <div class="list-skill">
                                      <p>English</p>
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
                                          <span>fluent</span>
                                      </div>
                                  </div>
                                  <!-- list -->
                                  <div class="list-skill">
                                      <p>Chinese</p>
                                      <div class="flex-between language">
                                          <div class="flex-between dot">
                                            <i class="fas fa-circle" data-aos="fade-right"></i>
                                            <i class="fas fa-circle" data-aos="fade-right"></i>
                                            <i class="fas fa-circle" data-aos="fade-right"></i>
                                            <i class="far fa-circle" data-aos="fade-right"></i>
                                            <i class="far fa-circle" data-aos="fade-right"></i>
                                            <i class="far fa-circle" data-aos="fade-right"></i>
                                            <i class="far fa-circle" data-aos="fade-right"></i>
                                            <i class="far fa-circle" data-aos="fade-right"></i>
                                          </div>
                                          <span>newbie</span>
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
                                    <i class="fas fa-code"></i> <p>Code</p>
                                </div>
                                <!-- list -->
                                <div class="interests-item flex">
                                    <i class="fas fa-book"></i> <p>Book</p>
                                </div>
                                <!-- list -->
                                <div class="interests-item flex">
                                    <i class="fas fa-pen"></i> <p>Write content</p>
                                </div>
                                <!-- list -->
                                <div class="interests-item flex">
                                    <i class="fas fa-coffee"></i> <p>Coffee</p>
                                </div>
                                <!-- list -->
                                <div class="interests-item flex">
                                    <i class="fab fa-leanpub"></i> <p>Learn Every thing</p>
                                </div>
                            </div>

                        </div>
                    </div>
@endsection
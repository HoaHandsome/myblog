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
                            <a href="{{url(route('about'))}}" class="button">Read More</a>              
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
                    <div class="wrap-group" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" id="experiecen">
                        <h2>Experience</h2>
                        <div class="group-job flex-column">
                            <!-- list item -->
                            <div class="list-job flex">
                                <div class="list-date">
                                    <div class="date text-center">2010-2015</div>
                                </div>
                                <div class="introduce-job flex-column">
                                    <h4>Bebsi v. Goga Gola</h4>
                                    <h6>Formula for Goga Gola</h6>
                                    <p>Goga Gola was invented amazing formula for headache which was properly copyrighted and kept in secret. Bebsi’s
                                    management argued that formula was invented by Bebsi’s scientists.</p>
                                </div>
                                
                            </div>
                            <!-- list item -->
                            <div class="list-job flex">
                                <div class="list-date">
                                    <div class="date text-center">2010-2015</div>
                                </div>
                                <div class="introduce-job flex-column">
                                    <h4>Bebsi v. Goga Gola</h4>
                                    <h6>Formula for Goga Gola</h6>
                                    <p>Goga Gola was invented amazing formula for headache which was properly copyrighted and kept in secret. Bebsi’s
                                    management argued that formula was invented by Bebsi’s scientists.</p>
                                </div>
                                
                            </div>
                            <!-- list item -->
                            <div class="list-job flex">
                                <div class="list-date">
                                    <div class="date text-center">2010-2015</div>
                                </div>
                                <div class="introduce-job flex-column">
                                    <h4>Bebsi v. Goga Gola</h4>
                                    <h6>Formula for Goga Gola</h6>
                                    <p>Goga Gola was invented amazing formula for headache which was properly copyrighted and kept in secret. Bebsi’s
                                    management argued that formula was invented by Bebsi’s scientists.</p>
                                </div>
                                
                            </div>
                        </div>

                    </div>
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
                    <div class="wrap-group" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" id="picture">
                        <h2>picture</h2>
                        <div>
                            <div id="btn-contatransparent" class="flex">
                                <div class="div btn-list active" onclick="filterSelection('all')">All </div>
                                <div class="div btn-list" onclick="filterSelection('design')">Design </div>
                                <div class="div btn-list" onclick="filterSelection('team')">Team </div>
                                <div class="div btn-list" onclick="filterSelection('work')">Work </div>
                            </div>
                            <div class="img-container">
                                <div class="filter-div design" data-aos="fade-down-right">
                                    <img src="{{url('storage/photos/2/blog.png')}}" alt="">
                                    <div class="description-picture">
                                        Design
                                    </div>
                                    
                                </div>
                                <div class="filter-div team">
                                    <img src="{{url('storage/photos/2/blog2.png')}}" alt="">
                                    <div class="description-picture">
                                        Team
                                    </div>
                                   
                                </div>
                                <div class="filter-div design">
                                    <img src="{{url('storage/photos/2/blog3.png')}}" alt="">
                                    <div class="description-picture">
                                          Design
                                    </div>
                                   
                                </div>
                                <div class="filter-div design team" data-aos="flip-left">
                                    <img src="{{url('storage/photos/2/blog.png')}}" alt="">
                                    <div class="description-picture">
                                        This is my picture
                                    </div>
                                   
                                </div>
                                <div class="filter-div work"  data-aos="fade-up">
                                    <img src="{{url('storage/photos/2/blog2.png')}}" alt="">
                                    <div class="description-picture">
                                        This is my picture
                                    </div>
                                  
                                </div>
                                <div class="filter-div work" data-aos="fade-up">
                                    <img src="{{url('storage/photos/2/blog.png')}}" alt="">
                                    <div class="description-picture">
                                        This is my picture
                                    </div>
                                   
                                </div>
                                <div class="filter-div team"data-aos="fade-up">
                                    <img src="{{url('storage/photos/2/blog.png')}}" alt="">
                                    <div class="description-picture">
                                        This is my picture
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrap-group" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" id="blog">
                        <h2>blog</h2>
                        <div class="list-item flex-column">
                            <img src="{{url('storage/photos/2/blog.png')}}" alt="">
                            <p>This is my blog. Where i can write about my live, my job and experience in my life. Sometime this habit make me happy
                            after a long day. I sit down and have time think about myself, think about something in the future or lookback the past.</p>
                        </div>
                        <a href="blog.html" class="button">Visit Blog</a>
                    </div>
                    <div class="wrap-group" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" id="contact">
                        <h2>contact</h2>
                        <div class="list-item contact">
                            <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                                    <li><a href="#"><i class="fas fa-phone-alt"></i></a></li>
                                    <li><a href="#"><i class="fab fa-github"></i></a></li>
                            </ul>
                            <h3>FEEL FREE TO CONTACT ME</h3>
                           <form method="POST" action="{{route('create_messenger')}}" id="contact-form" onsubmit="return ValidateForm()" id="contact-form" class="contact-form">
                                @csrf
                                <div class="form-group" id="gr_name">
                                    <label for="name">Your Name(required)</label>
                                    <input type="text" id="name" name="name">
                                    <span>The name entered is invalid.</span>
                                </div>
                                <div class="form-group" id="gr_mail">
                                    <label for="mail">Your Mail(required)</label>
                                    <input type="mail" id="mail" name="mail">
                                    <span>The Mail entered is invalid.</span>
                                </div>
                                <div class="form-group" id="gr_phone">
                                    <label for="phone">Your Phone(required)</label>
                                    <input type="text" id="phone" name="phone">
                                    <span>The phone entered is invalid.</span>
                                </div>
                                <div class="form-group" id="gr_subject">
                                    <label for="subject">Subject</label>
                                    <input type="text" id="subject" name="subject" >
                                    <span>The Subject entered is invalid.</span>
                                </div>
                                <div class="form-group" id="gr_messenger">
                                    <label for="messenger">Message</label>
                                    <textarea name="messenger" id="messenger" cols="30" rows="10"></textarea>
                                    <span>The Message entered is invalid.</span>
                                </div>
                                <div class="form-group">
                                    <button class="button" type="submit">Send</button>
                                </div>
                                <div id="notification" class="text-center">
                                    One or more fields have an error. Please check and try again.
                                </div>

                            </form>
                        </div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125357.39648186456!2d106.63181743781948!3d10.931715478843733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d79ff9eafb9f%3A0x2d324a0dd89d1200!2zVHguIFRodeG6rW4gQW4sIELDrG5oIETGsMahbmc!5e0!3m2!1svi!2s!4v1610091355585!5m2!1svi!2s"
                            width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>





@endsection
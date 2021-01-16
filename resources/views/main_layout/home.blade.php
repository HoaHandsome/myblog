@extends('main_layout/layout')
@section('content')
   
                    <div class="wrap-group" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <!-- item list -->
                        <div class="list-item">
                            <h2>ABOUT ME</h2>
                            <p>I'm Hoa. I'm IT Helpdesk and Web Developer. Currently I'm majoring in IT at night. I have 2 years of experience as an office worker and 1 year in IT technical support. In work and in life, I always set the highest standards for myself. That is why I am always in the top of the fields where I study, i work and  I participate. My biggest strength is my ability to learn and absorb very quickly. I always try to do my best at my job and find ways to improve my productivity.</p>  
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
                                      <p>25 Nov 1995</p>
                                  </div>
                                  <div class="flex-between">
                                      <h6>ADDRESS</h6>
                                      <p>Sen Thuy, Le Thuy, Quang Binh</p>
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
                                    <p>Network Administrator</p>
                                    <div class="skill-bar" data-aos="fade-right">
                                        <div class="skill"></div>
                                    </div>
                                    <div class="skill-number">80%</div>
                                </div>
                                <!-- list skill -->
                                <div class="list-skill flex-column">
                                    <p>Web Design( Laravel + Vue + Js + ...)</p>
                                    <div class="skill-bar" data-aos="fade-right">
                                        <div class="skill"></div>
                                    </div>
                                    <div class="skill-number">75%</div>
                                </div>
                                <!-- list skill -->
                                <div class="list-skill flex-column">
                                    <p>Office( Excel + Vba + Word ...)</p>
                                    <div class="skill-bar" data-aos="fade-right">
                                        <div class="skill"></div>
                                    </div>
                                    <div class="skill-number">95%</div>
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
                                    <div class="date text-center">2015-2018</div>
                                </div>
                                <div class="introduce-job flex-column">
                                    <h4>Mondelez Kinh Đô</h4>
                                    <h6>Warehouse Staff For Mondelez Kinh Đô</h6>
                                    <p>Working in the warehouse department, supporting import and export goods and managing goods in the warehouse. Processing and providing data for accountants.</p>
                                </div>
                                
                            </div>
                            <!-- list item -->
                            <div class="list-job flex">
                                <div class="list-date">
                                    <div class="date text-center">2019-2019</div>
                                </div>
                                <div class="introduce-job flex-column">
                                    <h4>Vietnam - YCH Group</h4>
                                    <h6>Office For Vietnam - YCH Group</h6>
                                    <p>Working on Oracle system data processing system. During the work, I wrote 2 excel files and 1 dataload file. Achieve a prize of creative ideas for improving work.</p>
                                </div>
                                
                            </div>
                            <!-- list item -->
                            <div class="list-job flex">
                                <div class="list-date">
                                    <div class="date text-center">2019-2021</div>
                                </div>
                                <div class="introduce-job flex-column">
                                    <h4>Cty TNHH BAO BI VIET</h4>
                                    <h6>Admin, IT Helpdesk for Cty TNHH BAO BI VIET </h6>
                                    <p>Make production reports. Troubleshooting network system and repairing device.</p>
                                </div>
                                
                            </div>
                        </div>

                    </div>
                    <div class="wrap-group" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" id="education">
                        <h2>Education</h2>
                        <div class="group-job flex-column">
                            <!-- list item -->
                            <div class="list-job flex">
                                <div class="list-date">
                                    <div class="date text-center">2018-2021</div>
                                </div>
                                <div class="introduce-job flex-column">
                                    <h4>Binh Duong Industrial Intermediate School</h4>
                                    <h6>Majoring in IT </h6>
                                    <p>I was always have high score when I was in school. Was the captain of the youth assault team.</p>
                                </div>
                                
                            </div>
                            <!-- list item -->
                            <div class="list-job flex">
                                <div class="list-date">
                                    <div class="date text-center">2019-2020</div>
                                </div>
                                <div class="introduce-job flex-column">
                                    <h4>Saigon American English (SAS) </h4>
                                    <h6>Learn English communication</h6>
                                    <p>When i learn at SAS , this time make me confident and make me a lot of knowledge. Now i can speak english fluently, i feed confident more when i speak english with foreigner . </p>
                                </div>
                                
                            </div>
                         
                            <!-- list item -->
                            <div class="list-job flex">
                                <div class="list-date">
                                    <div class="date text-center">2020-2021</div>
                                </div>
                                <div class="introduce-job flex-column">
                                    <h4>Fullstack web developer course in Laptrinhcuocsong.com</h4>
                                    <h6>Fullstack web developer </h6>
                                    <p>Learn about how to create a website. Start learning from the frontend to the backend. Course included Html + Css + Js + Git + Vue + Php + Laravel. You can see detail about course at <a href="https://laptrinhcuocsong.com/khoa-hoc-full-stack-web-developer.html">here</a>.</p>
                                </div>
                                
                            </div>
                               <!-- list item -->
                            <div class="list-job flex">
                                <div class="list-date">
                                    <div class="date text-center">2021-...</div>
                                </div>
                                <div class="introduce-job flex-column">
                                    <h4>Chinese Language Center </h4>
                                    <h6>Learn Chinese Language</h6>
                                    <p>I don't limit my abilities in any of these areas. So I decided to learn a new language that is Chinese. If i still live i'll learn.</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
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
                    <div class="wrap-group" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" id="picture">
                        <h2>picture</h2>
                        <div>
                            <div id="btn-contatransparent" class="flex">
                                <div class="div btn-list active" onclick="filterSelection('all')">All </div>
                                <div class="div btn-list" onclick="filterSelection('work')">Work </div>
                                <div class="div btn-list" onclick="filterSelection('friends')">Friends</div>
                                <div class="div btn-list" onclick="filterSelection('other')">Other</div>
                            </div>
                            <div class="img-container">
                                <div class="filter-div work" data-aos="fade-down-right">
                                    <img src="{{url('storage/photos/2/blog.png')}}" alt="">
                                    <div class="description-picture">
                                        Work
                                    </div>
                                    
                                </div>
                                <div class="filter-div friends" data-aos="zoom-in-up">
                                    <img src="{{url('storage/photos/2/blog2.png')}}" alt="">
                                    <div class="description-picture">
                                        Friends
                                    </div>
                                   
                                </div>
                                <div class="filter-div work" data-aos="zoom-in-down">
                                    <img src="{{url('storage/photos/2/blog3.png')}}" alt="">
                                    <div class="description-picture">
                                          Work
                                    </div>
                                   
                                </div>
                                <div class="filter-div work other" data-aos="flip-left">
                                    <img src="{{url('storage/photos/2/blog.png')}}" alt="">
                                    <div class="description-picture">
                                        Other
                                    </div>
                                   
                                </div>
                                <div class="filter-div friends"  data-aos="fade-up">
                                    <img src="{{url('storage/photos/2/blog2.png')}}" alt="">
                                    <div class="description-picture">
                                        Friends
                                    </div>
                                  
                                </div>
                                <div class="filter-div work" data-aos="fade-up">
                                    <img src="{{url('storage/photos/2/blog.png')}}" alt="">
                                    <div class="description-picture">
                                        Work
                                    </div>
                                   
                                </div>
                                <div class="filter-div other"data-aos="fade-up">
                                    <img src="{{url('storage/photos/2/blog.png')}}" alt="">
                                    <div class="description-picture">
                                        Other
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
                        <a href="{{url(route('blog'))}}" class="button">Visit Blog</a>
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

@extends('main_layout/layout')
@section('content')
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
                            <form action="#">
                                <div class="form-group">
                                    <label for="name">Your Name(required)</label>
                                    <input type="text" id="name" name="name">
                                    <span>The name entered is invalid.</span>
                                </div>
                                <div class="form-group">
                                    <label for="mail">Your Mail(required)</label>
                                    <input type="mail" id="mail" name="mail">
                                    <span>The Mail entered is invalid.</span>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Your Phone(required)</label>
                                    <input type="text" id="phone" name="phone">
                                    <span>The phone entered is invalid.</span>
                                </div>
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" id="subject" name="subject" >
                                    <span>The Subject entered is invalid.</span>
                                </div>
                                <div class="form-group">
                                    <label for="messenger">Subject</label>
                                    <textarea name="messenger" id="messenger" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="button" type="submit">Send</button>
                                </div>
                                <div class="notification text-center">
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
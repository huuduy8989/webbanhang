@extends('frontend.master')
@section('content')


<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact Us <i class="fa fa-chevron-right"></i></span></p>
          <h2 class="mb-0 bread">Contact Us</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section bg-light">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-md-12">
                      <div class="wrapper px-md-4">
                          <div class="row mb-5">
                              <div class="col-md-3">
                                  <div class="dbox w-100 text-center">
                              <div class="icon d-flex align-items-center justify-content-center">
                                  <span class="fa fa-map-marker"></span>
                              </div>
                              <div class="text">
                              <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                            </div>
                        </div>
                              </div>
                              <div class="col-md-3">
                                  <div class="dbox w-100 text-center">
                              <div class="icon d-flex align-items-center justify-content-center">
                                  <span class="fa fa-phone"></span>
                              </div>
                              <div class="text">
                              <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                            </div>
                        </div>
                              </div>
                              <div class="col-md-3">
                                  <div class="dbox w-100 text-center">
                              <div class="icon d-flex align-items-center justify-content-center">
                                  <span class="fa fa-paper-plane"></span>
                              </div>
                              <div class="text">
                              <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                            </div>
                        </div>
                              </div>
                              <div class="col-md-3">
                                  <div class="dbox w-100 text-center">
                              <div class="icon d-flex align-items-center justify-content-center">
                                  <span class="fa fa-globe"></span>
                              </div>
                              <div class="text">
                              <p><span>Website</span> <a href="#">yoursite.com</a></p>
                            </div>
                        </div>
                              </div>
                          </div>
                          <div class="row no-gutters">
                              <div class="col-md-7">
                                  <div class="contact-wrap w-100 p-md-5 p-4">
                                      <h3 class="mb-4">Contact Us</h3>
                                      <form method="POST" action="{{route('c.submit')}}"  class="contactForm">
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label class="label" for="name">Full Name</label>
                                                      <input type="text" class="form-control" name="ten" id="ten" required>
                                                  </div>
                                              </div>
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label class="label" for="email">Email Address</label>
                                                      <input type="text" class="form-control" name="email" id="email" value="" >
                                                  </div>
                                              </div>
                                              <div class="col-md-12">
                                                  <div class="form-group">
                                                      <label class="label" for="subject">Subject</label>
                                                      <input type="text" class="form-control" name="subject" id="subject" value="" placeholder="Subject">
                                                  </div>
                                              </div>
                                              <div class="col-md-12">
                                                  <div class="form-group">
                                                      <label class="label" for="#">Phone Number</label>
                                                      <textarea class="form-control"name="sdt" id="sdt"  value=""></textarea>
                                                  </div>
                                              </div>
                                              <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="#">Messager</label>
                                                    <textarea class="form-control"name="note" id="note" cols="30" rows="4" placeholder="Message" value="" row="3"></textarea>
                                                </div>
                                            </div>
                                              <div class="col-md-12">
                                                  <div class="form-group">
                                                      @csrf
                                                      <button type="submit" class="btn btn-primary py-3 px-4">Thêm</button>
                                                  </div>
                                              </div>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                              <div class="col-md-5 order-md-first d-flex align-items-stretch">
                                  <div id="map" class="map"></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      @endsection
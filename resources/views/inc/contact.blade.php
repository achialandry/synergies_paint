<!-- Footer================================================== -->
      <div class="container-fluid" id="footer-page">
          <div class="row ">
              <div class="col-md-4 offset-md-4 col-sm-4 mx-auto text-center mt-3"><br>
                  <h1 class="h1-responsive elegant-text">CONTACT</h1>

              </div>
          </div>
          <div class="row mt-2">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-10 offset-md-1">
                              <hr class="services">
                          </div>

                          <div class="col-md-5 offset-md-1 text-left elegant-text">
                              <p>EMAIL: INFO@PAINTINGSYNERGY.CA</p><br>
                              <p>PHONE:778-237-0684</p><br>
                              <p>OPENING HOURS: MON - FRI: 7AM - 6PM SATURDAY: 8AM - 6PM</p><br>
                          </div>
                          <div class="col-md-4 text-left">
                              {!! Form::open(['route' => 'contact.store', 'class' => 'form']) !!}
                              <div class="md-form">
                                  <div class="md-form">
                                  {!! Form::label('name', 'Name', ['class' => 'white-text']) !!}
                                  {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                  </div>
                              </div>

                              <div class="md-form">
                                  <div class="md-form">
                                  {!! Form::label('email', 'Email', ['class' => 'white-text']) !!}
                                  {!! Form::text('email', null, ['class' => 'form-control']) !!}
                                  </div>
                              </div>
                              <div class="md-form">
                                  <div class="md-form">
                                  {!! Form::label('subject', 'Subject', ['class' => 'white-text']) !!}
                                  {!! Form::text('subject', null, ['class' => 'form-control']) !!}
                                  </div>
                              </div>
                              <div class="md-form">
                                  <div class="md-form">
                                  {!! Form::label('message', 'Message', ['class' => 'white-text']) !!}
                                  {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
                                  </div>
                              </div>
                              {!! Form::submit('Submit', ['class'=> 'btn btn-elegant']) !!}
                              {!! Form::close() !!}

                              <!--using this to spit out errors -->
                              @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                              @endif
                          </div>
                      </div>
                  </div>
          </div>
          <div class="row bg-dark ">
              <div class="col-md-6 offset-md-3 text-center">
                  <div class="row">
                      <div class="col-md-4 offset-md-4 text-center mt-4 mb-2">
                           <a href="#"><i class="fab fa-2x fa-facebook-square white-text" aria-hidden="true"></i></a>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-4 offset-md-4 text-center mt-0 mb-2">
                          <a href="https://www.synergypainting.com">@2018 Synergy Painting.</a>
                      </div>
                  </div>


              </div>
          </div>
      </div>

  @props(['journeys','skills'])
  <section class="experience-section py-5">
      <div class="container">
          <h2 class="text-center mb-5">Our Journey and Expertise</h2>

          <!-- Stats Counter -->
          <div class="stats-counter mb-5">
              <div class="row g-4">
                  @foreach ($journeys as $journey)
                      <div class="col-md-4">
                          <div class="counter-item">
                              <div class="counter-icon">
                                  <i class="fas {{ $journey->icon }}"></i>
                              </div>
                              <div class="counter-number" data-target="{{ $journey->count }}">0</div>
                              <div class="counter-label">{{ $journey->title }}</div>
                          </div>
                      </div>
                    @endforeach


              </div>
          </div>
          <!-- Expertise Grid -->
          <div class="expertise-grid">
              <div class="row g-4">
                  <div class="col-lg-6">
                      <div class="expertise-card">
                          <div class="expertise-header">
                              <div class="expertise-icon">
                                  <i class="fas fa-star"></i>
                              </div>
                              <h3>Professional Excellence</h3>
                          </div>
                          <div class="expertise-body">
                              <p>
                                  With over 10 years of experience in professional
                                  photography, we've mastered the art of capturing life's most
                                  precious moments.
                              </p>
                              <div class="expertise-skills">
                                @foreach ($skills as $skill)

                                  <div class="skill-item">
                                      <div class="skill-info">
                                          <span>{{ $skill->name }}</span>
                                          <span>{{ $skill->percentage }}%</span>
                                      </div>
                                      <div class="skill-progress">
                                          <div class="progress-bar" style="width: {{ $skill->percentage }}%"></div>
                                      </div>
                                  </div>
                                  @endforeach
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="expertise-card">
                          <div class="expertise-header">
                              <div class="expertise-icon">
                                  <i class="fas fa-trophy"></i>
                              </div>
                              <h3>Our Specialties</h3>
                          </div>
                          <div class="expertise-body">
                              <div class="specialty-grid">
                                  <div class="specialty-item">
                                      <i class="fas fa-ring"></i>
                                      <h4>Wedding</h4>
                                      <p>Capturing your special moments with elegance</p>
                                  </div>
                                  <div class="specialty-item">
                                      <i class="fas fa-user"></i>
                                      <h4>Portrait</h4>
                                      <p>Professional headshots and family portraits</p>
                                  </div>
                                  <div class="specialty-item">
                                      <i class="fas fa-handshake"></i>
                                      <h4>Corporate</h4>
                                      <p>Business events and professional gatherings</p>
                                  </div>
                                  <div class="specialty-item">
                                      <i class="fas fa-camera-retro"></i>
                                      <h4>Fashion</h4>
                                      <p>Fashion and model photography</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

@php
            $links = App\Models\WebsiteLink::latest()->first();
          @endphp
      <section id="contact" class="tf__contact_2 pt_40 xs_pt_40">
        <div class="container">
          <div class="row animation">
            <div class="col-xl-4 col-md-6 col-lg-4">
              <div
                class="tf__contact_2_text fade_left"
                data-trigerId="contact"
              >
                <span>
                  <img
                    src="{{ asset('frontend/assets/svg/voice_phone.svg') }}"
                    alt="contact"
                    class="img-fluid w-100 svg">
                </span>
                <h3>Phone</h3>
                <p>
                  Loram ipsum eros justo, posuer oborti viverra laor house of
                  street
                </p>
                <a href="callto:01739920277">{{ $links->phone?? null }}</a>
              </div>
            </div>
            <div class="col-xl-4 col-md-6 col-lg-4">
              <div
                class="tf__contact_2_text fade_left"
                data-trigerId="contact"
              >
                <span>
                  <img
                    src="{{ asset('frontend/assets/svg/map_issue.svg') }}"
                    alt="contact"
                    class="img-fluid w-100 svg">
                </span>
                <h3>Location</h3>
                <p>
                  Dhaka 102, m eros justo, posuer oborti viverra laor house of
                  street
                </p>
                <a href="https://maps.app.goo.gl/qCGA76CGTn9VnQTC7">{{ $links->address_english ?? null}}</a>
              </div>
            </div>
            <div class="col-xl-4 col-md-6 col-lg-4">
              <div
                class="tf__contact_2_text fade_left"
                data-trigerId="contact"
              >
                <span>
                  <img
                    src="{{ asset('frontend/assets/svg/send_mail.svg') }}"
                    alt="contact"
                    class="img-fluid w-100 svg">
                </span>
                <h3>Monday - Sunday</h3>
                <p>
                  Dhaka 102, m eros justo, posuer oborti viverra laor house of
                  street
                </p>
                <a href="mailto:parvazreza00@gmail.comil.com"
                  >{{ $links->email ?? null}}</a
                >
              </div>
            </div>
          </div>
          <div class="contact_form_2">
            <form>
              <div class="row">
                <div class="col-lg-6">
                  <input type="text" placeholder="Your Name Here">
                </div>
                <div class="col-lg-6">
                  <input type="text" placeholder="Subject" >
                </div>
                <div class="col-lg-12">
                  <input type="email" placeholder="Email" >
                </div>
                <div class="col-12">
                  <textarea
                    rows="5"
                    placeholder="Your Message Here"
                  ></textarea>
                </div>
              </div>
              <button type="submit">Submit</button>
            </form>
          </div>
        </div>
      </section>

      <section id="contact" class="tf__contact_2 pt_95 xs_pt_45">
        <div class="container">
            <h2 style="text-align: center;font-size: 50px;font-weight: 600;margin-bottom:20px">My Location Map</h2>
          <div class="row animation">
            <div class="col-xl-12 col-md-12 col-lg-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.932402070672!2d90.42170557597379!3d23.82100268606101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c6489f1f33bf%3A0x8cf48cff0b79ee99!2sKuratolii%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1699786021879!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
          </div>

        </div>
      </section>

<footer id="footer" class="dark" data-scrollto-settings='{"offset":140,"speed":1250,"easing":"easeOutQuad"}'>
      <!-- Copyrights
      ============================================= -->
      <div id="copyrights">
        <div class="container">
          <div class="row col-mb-30">
            <div class="col-md-6 text-center text-md-start">
              Copyrights © 2022 All Rights Reserved by FHM Agency.<br />
              <div class="copyright-links">
                <a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a>
              </div>
            </div>

            <div class="col-md-6 text-center text-md-end">
              <div class="d-flex justify-content-center justify-content-md-end">

                {{-- @isset($web_information->social->facebook) --}}
                <a href="#" class="social-icon si-small si-borderless si-facebook">
                  <i class="icon-facebook"></i>
                  <i class="icon-facebook"></i>
                </a>
                {{-- @endisset --}}

                {{-- @isset($web_information->social->twitter) --}}
                <a href="{{ $web_information->social->twitter ?? "https://twitter.com/" }}" class="social-icon si-small si-borderless si-twitter">
                  <i class="icon-twitter"></i>
                  <i class="icon-twitter"></i>
                </a>
                {{-- @endisset --}}

                {{-- @isset($web_information->social->gmail) --}}
                <a href="{{ $web_information->social->gmail ?? "https://gmail.com/" }}" class="social-icon si-small si-borderless si-gplus">
                  <i class="icon-gplus"></i>
                  <i class="icon-gplus"></i>
                </a>
                {{-- @endisset --}}

                {{-- @isset($web_information->social->pinterest) --}}
                <a href="{{ $web_information->social->pinterest ?? "https://pinterest.com/" }}" class="social-icon si-small si-borderless si-pinterest">
                  <i class="icon-pinterest"></i>
                  <i class="icon-pinterest"></i>
                </a>
                {{-- @endisset --}}

                {{-- @isset($web_information->social->vimeo) --}}
                <a href="{{ $web_information->social->vimeo ?? "https://vimeo.com/" }}" class="social-icon si-small si-borderless si-vimeo">
                  <i class="icon-vimeo"></i>
                  <i class="icon-vimeo"></i>
                </a>
                {{-- @endisset --}}

                {{-- @isset($web_information->social->github) --}}
                <a href="{{ $web_information->social->github ?? "https://github.com/" }}" class="social-icon si-small si-borderless si-github">
                  <i class="icon-github"></i>
                  <i class="icon-github"></i>
                </a>
                {{-- @endisset --}}

                {{-- @isset($web_information->social->yahoo) --}}
                <a href="{{ $web_information->social->yahoo ?? "https://yahoo.com/" }}" class="social-icon si-small si-borderless si-yahoo">
                  <i class="icon-yahoo"></i>
                  <i class="icon-yahoo"></i>
                </a>
                {{-- @endisset --}}

                {{-- @isset($web_information->social->linkedin) --}}
                <a href="{{ $web_information->social->linkedin ?? "https://linkedin.com/" }}" class="social-icon si-small si-borderless si-linkedin">
                  <i class="icon-linkedin"></i>
                  <i class="icon-linkedin"></i>
                </a>
                {{-- @endisset --}}
              </div>

              <div class="clear"></div>

              <i class="icon-envelope2"></i> {{ $web_information->information->email ?? '' }}
              <span class="middot">·</span>
              <i class="icon-headphones"></i> {{ $web_information->information->phone ?? '' }}
              <span class="middot">·</span>
              <i class="icon-skype2"></i> {{ $web_information->information->site_name ?? '' }}
            </div>
          </div>
        </div>
      </div>
      <!-- #copyrights end -->
    </footer>
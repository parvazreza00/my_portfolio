<section
        id="skills"
        class="tf__skills_2 pt_40 xs_pt_40 pb_40 xs_pb_40 mt_40 xs_mt_40">
        <div class="container">
          <div class="row">
            <div class="col-xl-9 col-lg-9 m-auto">
              <div class="tf__section_heading mb_30">
                <h5 class="has-animation">MY Skills</h5>
                <hr style="border-top:3px solid #55E6A5;width:100px;margin:auto;margin-top:-10px">
                <h2 class="has-animation">
                  Crafting Stories through Design and Imagination
                </h2>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xxl-8 col-xl-10 m-auto">
              @include('frontend.home.skill.skill_tabs')
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="tab-content" id="pills-tabContent">                
                @include('frontend.home.skill.education')
                @include('frontend.home.skill.biography')
                @include('frontend.home.skill.experience')
                @include('frontend.home.skill.training')
                @include('frontend.home.skill.certification')              
               
              </div>
            </div>
          </div>
        </div>
      </section>
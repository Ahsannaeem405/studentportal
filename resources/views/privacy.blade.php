@extends('layouts.mainlayout')

@section('title')
<title>Privacy Policy</title>
@endsection

  @section('content')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" style="    margin-top: 100px;" data-aos="fade-in">
      <div class="container">
        <h2>Privacy Policy</h2>
      </div>
    </div>


    <section id="cource-details-tabs" class="cource-details-tabs">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Have you at any point felt as you don't have a place anyplace? </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">the world doesn't make sense why do i feel like this and not others?
                </a>
              </li>

            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3  style="    margin-top: 12px;">
                        To be honest </h3>
                    <p class="fst-italic">It's a not unexpected feeling, most people encounters it once in their life.

                        On different occasions it very well might be the consequence of something more profound that should be tended to with the assistance of a psychological well-being proficient or talk to our advisors.

                        Regardless, the need to have a place is  important for every human. Each individual, somewhat, need  require to feel like they identify with somebody around them.

                        If, at the present time, you feel as you don't find a place with individuals and spots that are around you, there is probable a justification for it. </p>

                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{asset('images/bullying.jpg')}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <p class="fst-italic" style="    margin-top: 12px;">It's difficult to sort out one's spot on the planet when you are continually targeted from all sides from online media, customary media, your loved ones, or even colleagues who feel you should see the world the same way they do it can be tiresome .

                        Not every person does need to see like that , and that is alright. It takes loads of alternate points of view, thoughts, and activities to make life as we know it possible.

                        A varying perspective or character can feel segregating on the grounds that you may not feel comprehended. Furthermore, if you don't feel comprehended, you will not feel like you have a place.

                        A decent way of countering this inclination is to find others who see the world through comparative eyes. Investigate gatherings, exercises, or areas where you can meet others with comparative points of view and interests.

                        you should not just give in just to feel like you fit in , meaning things like joining gangs or things you normally wont , why ruin your life when you have so much you can do with it find your worth , talk to a advisor if you have any questions .</p>

                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{asset('images/R.jpg')}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Cource Details Tabs Section -->

  </main><!-- End #main -->


  @endsection

@extends('layouts.back')

@section('content')
<style>
h3{
  color:#368e64;
}
</style>
<div class="row">
  <section id="part_1" style="min-height:600px;padding:20px">
    <section class="faq-det">

      <div class="faq-area row">
        <div class="col-md-12 faq-min">
          <div class="pogramsArea">
            <ul>
              <li class="same" id="tab-1"><a class="tabActive" id="atab-1" href="javascript:void(0)">What is the difference between a wallet ID and an address?<span class="icon"> <i class="fa fa-minus"></i></span></a>
                <div id="1stslide-1" class="openSlide" style="display: block;">
                  <p>
                    You can think of your wallet ID as a username that contains numbers, letters, and dashes. It is only used to log into your wallet and should be kept private. Your wallet ID can be found in the welcome email we sent you when you created your wallet or in Settings. Addresses are what you share with others when you want to receive funds.
                  </p>
                  </div>
                </li>
                <li class="same" id="tab-2"><a class="" id="atab-2" href="javascript:void(0)">How do I receive/send funds? <span class="icon"> <i class="fa fa-plus"></i></span></a>
                  <div id="1stslide-2" class="openSlide" style="display: none;">
                    <p>To receive funds, the sender needs your address. Your wallet will automatically generate a new address for Campuscoin transaction you make.
                       Click on ‘Request’, copy the address to share with the sender. To send funds, click ‘Send’, and enter the recipient’s address in the ‘To’ field and how much you want to send. </p>
                  </div>
                </li>
                <li class="same" id="tab-3"><a class="" id="atab-3" href="javascript:void(0)">What do I need to do to keep my wallet safe? <span class="icon"> <i class="fa fa-plus"></i></span></a>
                  <div id="1stslide-3" class="openSlide" style="display: none;">
                    <p>Our Security Center can help you keep your wallet secure and ensure that you can access your funds even if you lose your password - all in less than 5 minutes. A great place to start is to enable 2-Step Verification to help prevent unauthorized access to your wallet and write down your Recovery Phrase to make sure you never lose access to your funds. We also recommend using a unique, random password that’s at least 16 characters or more. </p>
                  </div>
                </li>


                </ul>

              </div>

            </div>

          </div>


        </section>
        <div class="clearfix"></div>
      </section>
    </div>
    <script>
    $(document).ready(function(){
      $(".same").click(function(){
        var sliderid = $(this).attr("id");

        var n = sliderid.split('-');
        var indid = (n[1]);

        $( ".openSlide" ).slideUp( "fast", function() {
          $( ".tabActive" ).removeClass( "tabActive" );
        });

        $('.pogramsArea i').removeClass('fa-minus').addClass('fa-plus');

        $( "#1stslide-" + indid ).slideDown( "fast", function() {
          $( "#atab-" + indid ).removeClass( "tabinActive").addClass("tabActive");
          $( "#atab-" + indid + ' i').removeClass( "fa-plus").addClass("fa-minus");
        });
      });
    });
    </script>
    <script type="text/javascript">


    $('ul.nav li.dropdown').hover(function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });
  </script>
@endsection

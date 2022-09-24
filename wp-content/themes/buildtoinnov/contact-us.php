<?php get_header(); ?>
<style>
    .top-space{
        margin-top:0px;
    }
    #head-cover32 {
    background-image: url(<?php echo get_template_directory_uri();?>/assets/images/Banner-Contact-Us-1024x278.png);
    background-position: center bottom !important;
    background-size: unset;
}
   .form__fields--newsletter .form__field,#semail, #mce-FNAME{border-bottom:0px;}
</style>
<div class="" style="    background-color: transparent;
    background-image: linear-gradient(90deg, #ffffff 0%, #55b93491 100%)">
<header id="head-cover32">
	<div class="container">	

	</div>
</header>
    </div>
    <div id="page" class="hfeed site full-height">

        <div class="page-wrap full-height">
            
<div class="page--contact--wrap full-height">
    <div class="main page--contact" role="main">
        <article id="page--contact" class="content">
            
            <div class="" id="page-contact-wrapper">
                <div class="rfp">
    <div class="rfp__inner">
 
        <form method="post" id="contactus-form" class="form--contact" action="">
            <div class="wrap">
                <div class="form__general">
                    <h3>General <span class="green">Stuff</span></h3>
                    <div class="form__field-wrap form__field--req">
                        <label class="form__field__label" for="form__field--name">Name<span class="asterisk">*</span></label>
                        <input type="text" name="form__field--name" id="hname" class="form__field required" required />
                    </div><!--
                 --><div class="form__field-wrap form__field--req">
                        <label class="form__field__label" for="form__field--email">Email address<span class="asterisk">*</span></label>
                        <input type="email" name="form__field--email" id="hemail" class="form__field required" placeholder="&nbsp;" required />
                    </div><!--
                    // new line
                 --><div class="form__field-wrap">
                        <label class="form__field__label" for="form__field--location">Location</label>
                        <input type="text" name="form__field--location" id="hlocation" />
                    </div><!--
                 --><div class="form__field-wrap form__field--req">
                        <label class="form__field__label" for="form__field--phone">Phone Number<span class="asterisk">*</span></label>
                        <input type="text" name="form__field--phone" id="hphone" class="form__field required" required />
                    </div><!--
                    // new line
                 --><div class="form__field-wrap">
                        <label class="form__field__label" for="form__field--phone">Company Name</label>
                        <input type="text" name="form__field--company" id="hcompany" class="form__field" />
                    </div><!--
                 --><div class="form__field-wrap">
                        <label class="form__field__label" for="form__field--website">Website</label>
                        <input type="text" name="form__field--website" id="hwebsite" class="form__field" />
                    </div>
                </div><!--

             --><div class="form__project">
                    <h3>Your <span class="green">Project</span></h3>
                    <div class="form__field-wrap form__field--req">
                        <em class="form__field__label" for="form__field--type">Type of Project<span class="asterisk">*</span></em>
                        <div class="select select--type select--checkbox">
                            <div class="projectarea">
                                <span id="project" title="">&nbsp;</span>
                                <i></i>
                            </div>
                            <ul class="options checkbox">
                                <li class="option">
                                    <input type='checkbox'  name='form__field--type' id='form__field--type__iOS' class='visuallyhidden form__field--checkbox' value='iPhone / iPad App' ><label for='form__field--type__iOS' class='form__field--checkbox__label'><span>iPhone / iPad App</span></label>
                                </li>
                                <li class="option">
                                    <input type='checkbox'  name='form__field--type' id='form__field--type__android' class='visuallyhidden form__field--checkbox' value='Android App' ><label for='form__field--type__android' class='form__field--checkbox__label'><span>Android App</span></label>
                                </li>
                                <li class="option">
                                    <input type='checkbox'  name='form__field--type' id='form__field--type__web' class='visuallyhidden form__field--checkbox' value='Website' ><label for='form__field--type__web' class='form__field--checkbox__label'><span>Website</span></label>
                                </li>
                                <li class="option">
                                    <input type='checkbox'  name='form__field--type' id='form__field--type__branding' class='visuallyhidden form__field--checkbox' value='Logo / Branding' ><label for='form__field--type__branding' class='form__field--checkbox__label'><span>Logo / Branding</span></label>
                                </li>
                                <li class="option option--other">
                                    <input type='checkbox'  name='form__field--type--other' id='form__field--type__other' class='visuallyhidden form__field--checkbox' value='Other' ><label for='form__field--type__other' class='form__field--checkbox__label'><span>Other</span></label>
                                </li>
                                <li class="option hidden" data-listener="form__field--type__other">
                                    <input type="text" name="form__field--type" id="form__field--type__other--text" value="" placeholder="Please describe" />
                                    <label class="form__field__label" for="form__field--type__other--text" class="visuallyhidden">Other</label>
                                </li>
                            </ul>
                        </div>
                    </div><!--
                 --><div class="form__field-wrap form__field--req">
                        <em class="form__field__label" for="form__field--budget">Approx Budget</em>
                        <div class="select select--budget">
                            <div class="budgetarea">
                                <span id="budget">&nbsp;</span>
                                <i></i>
                            </div>
                            <ul class="options radio">

                                    <li class="option">

                                        <input type='radio'  name='form__field--budget' id='form__field--budget__gt_500000' class='visuallyhidden form__field--checkbox' value='Above $20k' data-value=500000><label for='form__field--budget__gt_500000' class='form__field--checkbox__label'><span>Above $20k</span></label>

                                    </li>

                                    <li class="option">

                                        <input type='radio'  name='form__field--budget' id='form__field--budget__250000-500000' class='visuallyhidden form__field--checkbox' value='$15k - $20k' data-value=250000><label for='form__field--budget__250000-500000' class='form__field--checkbox__label'><span>$15k - $20k</span></label>

                                    </li>

                                    <li class="option">

                                        <input type='radio'  name='form__field--budget' id='form__field--budget__150000-250000' class='visuallyhidden form__field--checkbox' value='$10k - $15k' data-value=150000><label for='form__field--budget__150000-250000' class='form__field--checkbox__label'><span>$10k - $15k</span></label>

                                    </li>

                                    <li class="option">

                                        <input type='radio'  name='form__field--budget' id='form__field--budget__75000-150000' class='visuallyhidden form__field--checkbox' value='$5k - $10k' data-value=75000><label for='form__field--budget__75000-150000' class='form__field--checkbox__label'><span>$5k - $10k</span></label>

                                    </li> 

                                    <li class="option option--other">


                                            <input type="text" name="form__field--budget-text" id="form__field--budget__other--text" class="budgetfield"  value="" placeholder="Enter budget" />

                                            <label class="visuallyhidden budgetenter" for="form__field--budget__other--text">Enter budget</label>

                                    </li>

                                

                            </ul>
                        </div>
                    </div><!--
                    // new line
                 --><div class="form__field-wrap full-width">
                        <label class="form__field__label" for="form__field--synopsis">Project Synopsis</label>
                        <textarea name="form__field--synopsis" id="form__field--synopsis" class="form__field"></textarea>
                    </div><!--
                 -->
                 <!--<div class="form__field-wrap full-width">-->
                 <!--       <input type='checkbox' checked name='opt_in_for_newsletters' id='opt_in_for_newsletters' class='visuallyhidden form__field--checkbox' value='Add me to the Buildtoinnov8 mailing list' ><label for='opt_in_for_newsletters' class='form__field--checkbox__label'><span>Add me to the Buildtoinnov8 mailing list</span></label>-->
                 <!--   </div>-->
                </div>
                <input type="text" tabindex="-1" class="form__item--hidden visuallyhidden" name="form__field--subject" id="form__field--subject" />
                <input type="text" tabindex="-1" class="form__item--hidden visuallyhidden" name="form__field--referral" id="form__field--referral" />
            </div><!-- .wrap -->
            <button type="submit" class="btn--diamond btn--diamond--disabled" disabled>
                <i></i>
                <span>Submit</span>
            </button>
            <div class="kr--top">
                <b></b>
            </div>
            <div class="kr--left">
                <b></b>
            </div>
            <div class="kr--right">
                <b></b>
            </div>
        </form>
    </div>
</div>
            </div>
             </article> <!-- .content -->
    </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
            $("#contactus-form").submit(function (event) {
                event.preventDefault();
           
             //$('#false-modal').modal('show');   
            var hname = $('#hname').val();
            var hemail = $('#hemail').val();
            var hphone = $('#hphone').val();
            var hcompany = $('#hcompany').val();
            var hlocation = $('#hlocation').val();
            var hwebsite = $('#hwebsite').val();
            var hmsg = $('#hmsg').val();
            var project = $("#project").attr("title");
            var budget  = $('#budget').text();
            
            var is_error = false;
            if(hname=="")
            {
              $('#hname').addClass('error');
              is_error = true;
              
            }
            else
            {
              $('#hname').removeClass('error');
            }
            
            if(hemail=="")
            {
              $('#hemail').addClass('error');
              is_error = true;
              
            }
            else
            {
              $('#hemail').removeClass('error');
            }
            if(hphone=="")
            {
              $('#hphone').addClass('error');
              is_error = true;
              
            }
            else
            {
              $('#hphone').removeClass('error');
            }
            
            if(project=="")
            {
              $('.projectarea').addClass('error');
              is_error = true;
              
            }
            else
            {
              $('.projectarea').removeClass('error');
            }
            if(budget==0)
            {
              $('.budgetarea').addClass('error');
              is_error = true;
              
            }
            else
            {
              $('.budgetarea').removeClass('error');
            }
            if(is_error)
            {
              event.preventDefault();
              return;
            }

            $.ajax({
                'url': "<?php echo get_template_directory_uri (); ?>/ideaform.php",
                'type': 'POST',
                'data': {'hname': hname,'hemail': hemail,'hphone': hphone,'hcompany': hcompany,'project': project,'budget': budget,'hmsg': hmsg},
                'success': function (data) {
                    
                    if (data=='success') {
                    //$('.step2').addClass('acitve');
                    //$('.booknow').removeAttr("disabled");
                    
                    
                     window.location.href = "<?php echo get_site_url()?>/thank-you";
                    
                    }
                    else {
                    $('.errormsg').show();
                    }
                }
            });

        });
</script>   
                <div class="contact__top">
    <div class="wrap">
     </div><!-- .wrap -->
</div><!-- .contact__top -->
<!--                <div class="contact__newsletter">-->
<!--	<div class="wrap">-->
<!--		<h2 class="contact__newsletter__title">Newsletter Signup</h2><!---->
 <!--<form  id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form--newsletter" target="_blank" novalidate> -->
<!--			<div id="mce-responses" class="clear">-->
<!--				<p class="successmsg" style="display:none;">Thank You for subscribing with us.</p>-->
<!--      <p class="errormsg" style="display:none;">Already Subscribed.</p>-->
<!--			</div>-->
<!--			<div class="mc_embed_signup">-->
<!--				<div class="form__fields--newsletter">-->
<!--					<div class="form__field mc-field-group form__field--newsletter-fname">-->
						
<!--						<input type="text" id="mce-FNAME" name="FNAME" placeholder="Name" required />-->
<!--						<div class="input--fake"></div>-->
<!--					</div><!---->
<!--<div class="form__field mc-field-group form__field--newsletter-email">-->
						
<!--						<input type="email" value="" id="semail" name="EMAIL" required class="required email form__field--email" id="mce-EMAIL" placeholder="Email  " required>-->
<!--						<div class="input--fake"></div>-->
<!--					</div>-->
<!--				</div><!---->
 <!--<button type="submit" class="btn--diamond" id="mc-embedded-subscribe"> -->
<!--					<i></i>-->
<!--					<span class="size--nano" >Subscribe</span>-->
<!--				</button>-->
<!--			</div>-->
<!--		</form>-->
<!--	</div>-->
<!--</div>-->
<script type="text/javascript">
            $("#mc-embedded-subscribe-form").submit(function (event) {
              event.preventDefault();
            
             //$('#false-modal').modal('show');   
            var semail = $('#semail').val();
            
            var is_error = false;
            
            
            if(is_error)
            {
              event.preventDefault();
              return;
            }

            $.ajax({
                'url': "subscriber.php",
                'type': 'POST',
                'data': {'semail': semail},
                'success': function (data) {
                    
                    if (data=='success') {
                    
                    $('.successmsg').show();
                    $('.errormsg').hide();
                    $('#semail').val('');
                    
                    }
                    else {
                      $('#semail').val('');
                      $('.successmsg').hide();
                    $('.errormsg').show();
                    }
                }
            });

        });
</script> 
            </div>
       
</div>

        </div><!-- .page-wrap -->
    </div><!-- .site -->
    <div class="loading" aria-hidden="true">
	<div class="loading__element"></div>
	<div class="loading__text">
		<img alt="Buildtoinnov8 Page of Contact" src="/<?php echo get_template_directory_uri (); ?>/assets/images/emblem.svg" />
	</div>
</div>
    <script>
        var core_team_json_host = 'https://fueled.com/';
        var query_string = 1476877092;
        var cdn_url = '';
    </script>
 

       

 
 
</div>

<script>
    

    function trackOutboundLink(link, category, action, label) {
        try {
          _gaq.push(['_trackEvent', category , action, label]);
        } catch(err){}

        setTimeout(function() {
            document.location.href = link;
        }, 100);
    }

    $(function(){
    // track outbound email links
    var mailto_link = $('a[href^="mailto:"]');
    mailto_link.on('click', function(e){
        var link = $(this).attr('href'),
            category = "Email Links",
            action = "click",
            label = link.replace("mailto:", "");
        trackOutboundLink(link, category, action, label);
        e.preventDefault();
    });
  });
  $('.budgetenter').click(function(){
           $('.budgetfield').css('visibility','visible');
           $('.budgetfield').css('opacity','1');
           $('.budgetenter').css('display','none');
        })
</script>
<!-- google analytics ends-->
	
<!-- /.contact page -->	  
    
</body>
</html>


<?php get_footer(); ?>

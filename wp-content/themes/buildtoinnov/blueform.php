<form method="post" id="idea-form" class="form--contact2" action="https://backend.fueled.com/api/contact/">
            <div class="wrap_blue">
                <div class="form__generalblue">
                    <h3> HAVE AN IDEA? </h3>
					<p> Simply fill up the form below and we will call you to bring your idea to life </p>
                    <div class="form__field-wrap form__field--req">
                        
                        <input type="text" name="form__field--name" id="hname" placeholder="Your name*" class="form__field required"  />
                    </div><!--
                 --><div class="form__field-wrap form__field--req">
                       
                        <input type="email" name="form__field--email" id="hemail" placeholder="Your email address*" class="form__field required" placeholder="&nbsp;"  />
                    </div>
                
                 <div class="form__field-wrap form__field--req">
                       
                        <input type="text" name="form__field--phone" id="hphone" placeholder="Phone Number*" class="form__field required"  />
                    </div><!--
                    
                 --><div class="form__field-wrap form__field--req">
                       
                        <input type="text" name="form__field--phone" id="hcompany" placeholder="Company Name" class="form__field required"  />
                    </div>
                    
                    <div class="form__field-wrap form__field--req">
                        
                        <div class="select select--type select--checkbox">
                            <div class="projectarea">
                                <span id="project" title="">&nbsp;</span>
                                <p class="t_project">Type of Project*</p><i></i>
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
                        
                        <div class="select select--budget">
                            <div class="budgetarea">
                                <span id="budget">&nbsp;</span>
                                <p class="t_project">Approx Budget</p><i></i>
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

                                        <input type='radio'  name='form__field--budget' id='form__field--budget__other' class='visuallyhidden form__field--checkbox' value='Under $5k' data-value=75000><label for='form__field--budget__other' class='form__field--checkbox__label'><span>Under $5k</span></label>

                                            <input type="text" name="form__field--budget-text" id="form__field--budget__other--text" value="" placeholder="Enter budget" />

                                            <label class="visuallyhidden" for="form__field--budget__other--text">Enter budget</label>

                                    </li>

                                

                            </ul>
                        </div>
                    </div><!--
                    // new line
                 --><div class="form__field-wrap full-width">
                        
                        <textarea name="form__field--synopsis" id="hmsg" placeholder="Project Synopsis" class="form__field"></textarea>
                    </div>
                
                </div>
				<button class="b_sub_blue" type="submit"> GET IN TOUCH </button>
				
				
            </div><!-- .wrap -->
            
         
           
        </form>
        <script type="text/javascript">
            $("#idea-form").submit(function (event) {
                event.preventDefault();

             //$('#false-modal').modal('show');   
            var hname = $('#hname').val();
            var hemail = $('#hemail').val();
            var hphone = $('#hphone').val();
            var hcompany = $('#hcompany').val();
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
            if(hcompany=="")
            {
              $('#hcompany').addClass('error');
              is_error = true;
              
            }
            else
            {
              $('#hcompany').removeClass('error');
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
                    
                    $('.successmsg').show();
                    $('#name').val('');
                    $('#email').val('');
                    $('#phone').val('');
                    $('#msg').val('');
                    
                    }
                    else {
                    $('.errormsg').show();
                    }
                }
            });

        });
</script>
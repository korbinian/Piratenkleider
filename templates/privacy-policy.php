<?php
/* 
 Template Name: Privacy policy
 */
?>
<?php 
    get_header();
    global $options;  
     ?>

<div class="section content" id="main-content">
  <div class="row">
    <div class="content-primary">
	
	<?php
	    $image_url = '';
	    $image_alt = '';
	    $attribs = array(
                 "credits" => $options['img-meta-credits'],
                );
	    if (has_post_thumbnail()) { 
		$thumbid = get_post_thumbnail_id(get_the_ID());
		$image_url_data = wp_get_attachment_image_src( $thumbid, 'full');
		$image_url = $image_url_data[0];
		$attribs = piratenkleider_get_image_attributs($thumbid);	
	    } 
	    if (!(isset($image_url) && (strlen($image_url)>4))) { 	
		if (($options['aktiv-platzhalterbilder-indexseiten']==1) && (isset($options['src-default-symbolbild']))) {  
		    if (isset($options['src-default-symbolbild_id']) && ($options['src-default-symbolbild_id'] >0)) {
			$image_url_data = wp_get_attachment_image_src( $options['src-default-symbolbild_id'], 'full');
			$image_url = $image_url_data[0];
			$attribs = piratenkleider_get_image_attributs($options['src-default-symbolbild_id']);
		    } else {
			$image_url = $options['src-default-symbolbild'];
		    }		    
		}
	    }
	    
	    if (isset($image_url) && (strlen($image_url)>4)) { 
		if ($options['indexseitenbild-size']==1) {
		    echo '<div class="content-header-big">';
		} else {
		    echo '<div class="content-header">';
		}
		?>    		    		    		        
		   <h1 class="post-title"><span><?php the_title(); ?></span></h1>
		   <div class="symbolbild"><img src="<?php echo $image_url ?>" alt="">
		   <?php if (isset($attribs["credits"]) && (strlen($attribs["credits"])>1)) {
                           echo '<div class="caption">'.$attribs["credits"].'</div>';  
                    }  ?>
		   </div>
		</div>  	
	    <?php } ?>

      <div class="skin">
        <?php if (!(isset($image_url) && (strlen($image_url)>4))) { ?>
	    <h1 class="post-title"><span><?php the_title(); ?></span></h1>
	<?php } ?>
	
	


        <?php 


        
 global $locale;
 
 $locale_file = get_template_directory() . "/languages/privacy-policy-$locale.php";
if ( is_readable( $locale_file ) ) {
        require_once( $locale_file );
} else { ?>
    
    
            
            
            <h2>Privacy Policy</h2>
            
            <h3>Information You Give Us Directly</h3>
<p>
In order to run this website, we need to collect, and in some cases process, 
some information about you. This includes information that you've given to us, 
such as details you've entered on forms during the signup / membership
process or entered as part of commenting on the forums or blog. We may also
need to collect details of any communications that you've sent to us.
</p>

<h3>Information You Give Us Indirectly</h3>
<p>
We may gather and process information about your visits to the site that we get 
from you or your browser, such as which pages you go to, information and the 
resources that you've used.
<br>
We also obtain limited information on your usage through the Piwik analysis service 
hosted on our own servers, unless you block it using third-party addons to your 
browser. These data are then aggregated for statistical analysis about our 
website in order for us to provide a better service and experience and are
not used to identify individual habits.
</p><p>
Any indirect information we get will not identify who you are, but will be 
numerical data about our visitors and what you do on publicly accessible areas 
of the site. This information will not contain or process any personal details.
</p><p>
We might use Cookies to store some of this non-identifiable information.
Cookies are small text files that are automatically downloaded to and stored on
your computer. If you don't wish to allow Cookies to be used on your computer, 
you should be able to disable them through your browser:</p>
<ul>
    <li>In Firefox go to the Privacy tab in the Options panel, then select 
        "Never remember history" from the dropdown menu.</li>

   <li> In Internet Explorer 9 by going to Privacy tab in the Internet Options
       menu, then move the slider up to the top.</li>

   <li> In Chrome going to Options > Under the Hood > Privacy > Content Settings.</li>
</ul>
<p>
Do note that some functions on our website need Cookies to work, so you may have 
problems using our website with them disabled. If you have any problems with
Cookies (or disabling them), let us know and we will try to help.
What We Do with Your Information
</p>
<p>
We will never give your information to a third party without your explicit
permission, unless compelled to do so by law.
</p>
Any personal information about you that we do collect and store about you is 
for the explicit purpose of helping us to provide you a better service.
Much of this information is voluntary, and we limit the information we require
from our users to the minimum required by Law (in terms of Membership of the Party) 
and to the minimum required to provide a service (in terms of website account
for use of the Forums).
      </p><p>
We may use any contact details you provide to give you information about our 
campaigns, services, and ongoing development unless you opt out. You are able
to opt out of these messages at any time via your profile page.
      </p><p>
We may use any information we collect to fulfil any commitments we've made
to you, if the information is needed to do so.
      </p>
      
      <h3>Storing Your Information</h3>
<p>
All information about you that we store will be kept on our secure servers, 
and any transfer of data will be encrypted to protect your privacy.  
Sadly, even our IT systems may not be secure 100% all the time, and
sending data over the Internet carries some risks, but we guarantee that
we will do the best we can to take care of your data. Whenever it is
moved we will encrypt it, and we will limit who has access to it within the 
party to the smallest number of people we need to do the job.
</p>

<?php }
          if ( have_posts() ) while ( have_posts() ) : the_post(); 
	  the_content(); 
        endwhile;  
        edit_post_link( __( 'Edit', 'piratenkleider' ), '', '' ); 
   
 ?>     
       
            
            
                   
          
      </div>
    </div>

    <div class="content-aside">
      <div class="skin">

        <h1 class="skip"><?php _e( 'More information', 'piratenkleider' ); ?></h1>   
            <?php

            get_piratenkleider_seitenmenu($options['zeige_sidebarpagemenu'],$options['zeige_subpagesonly'],$options['seitenmenu_mode']);       
            get_sidebar(); ?>
      </div>
    </div>
  </div>
   <?php get_piratenkleider_socialmediaicons(2); ?>
</div>

<?php get_footer(); ?>

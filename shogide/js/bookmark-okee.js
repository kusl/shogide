/*https://www.sitepoint.com/community/t/how-to-create-the-more-link-button-to-display-rest-of-the-text/7437*/


$(function(){ /* to make sure the script runs after page load */

	$('.bookmrk').each(function(event){ /* select all divs with the bookmrk class */

		var max_length = 0; /* set the max content length before a read more link will be added */

		if($(this).html().length > max_length){ /* check for content length */

			var short_content 	= $(this).html().substr(0,max_length); /* split the content in two parts */
			var long_content	= $(this).html().substr(max_length);

			$(this).html(short_content+
						 '<a href="#" class="read_more"><br/><span style="color: black; font-size:22px;">Click to Bookmark: Okeechobee Music & Arts Festival, March 1st-4th 2018</span></a>'+ /* read more - text that shows */
						 '<span class="more_text" style="display:none;">'+long_content+'</span>'); /* Alter the html to allow the read more functionality */

			$(this).find('a.read_more').click(function(event){ /* find the a.read_more element within the new html and bind the following code to it */

				event.preventDefault(); /* prevent the a from changing the url */
				$(this).hide(); /* hide the read more button */
				$(this).parents('.bookmrk').find('.more_text').show(); /* show the .more_text span */

			});
		}
	});
});

function readless(reload)
   {
    window.location.hash = '#foo'; /* change this to the id where you want the page to return to */
    window.location.reload(true);
   }

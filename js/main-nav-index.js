

	window.onload = function(){
				var aboutAlanList = document.getElementById("about-alan");
				var alanMusic = document.getElementById("alans-music");
				var gigsShows = document.getElementById("gigs-shows");
				var contactAlan = document.getElementById("contact-alan");
			
				
				aboutAlanList.onclick = displayAbout;
				
				alanMusic.onclick = displayMusic;
				gigsShows.onclick = displayGig;
				contactAlan.onclick = displayContact;
			
		}
		
			
	
	function displayContact(){
		var list = document.getElementById("contact-alan-sub");
		
			if(list.className == 'show'){
				list.className = 'hide';
				}else{
					list.className = 'show';
					}
			}	
			
	function displayGig(){
		var list = document.getElementById("gigs-shows-sub");
		
			if(list.className == 'show'){
				list.className = 'hide';
				}else{
					list.className = 'show';
					}
			}
				
	function displayMusic(){
		var list = document.getElementById("alans-music-sub");
		
			if(list.className == 'show'){
				list.className = 'hide';
				}else{
					list.className = 'show';
					}
			}
			
	function displayAbout(){
		var list = document.getElementById("about-alan-sub");
		
			if(list.className == 'show'){
				list.className = 'hide';
				}else{
					list.className = 'show';
					}
			}		

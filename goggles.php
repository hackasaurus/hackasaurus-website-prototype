<?php include_once("module/head.php") ?>

<body>

	<div class="wrapper">
	   
	    <div class="proto-col proto-col-1">
	    	<section>
	    		<h1>Web X-Ray Goggles</h1>
	    		<p>See into the web and change it. Like hacking the Matrix.</p>	    		
	    	</section>
	    </div>
	    
	    <div class="proto-col proto-col-1">
	    	
	    	<section>
	    				
				<ol class="step-by-step">
					
					<li class="step-1">
						
						<h2>Turn on your bookmarklet bar</h2>
						<p>Make sure your browser's bookmarks toolbar is turned on.</p>
						
						<ul class="tabs">
							<li class="browser-firefox current"><a href="#bookmarks-bar-firefox">Firefox</a></li>
							<li class="browser-chrome"><a href="#bookmarks-bar-chrome">Chrome</a></li>
							<li class="browser-safari"><a href="#bookmarks-bar-safari">Safari</a></li>
						</ul>
						
						<div class="tabcontainer">
							
							<div class="tabcontent current" id="bookmarks-bar-firefox">
								<img src="http://hackasaurus.org/include/image/bookmarks-bar-firefox.jpg" alt="Turning on the bookmarks bar in Firefox" />
								<p>In Firefox, go to View > Toolbars > Bookmarks Toolbar</p>
							</div>
							
							<div class="tabcontent" id="bookmarks-bar-firefox">
								<img src="http://hackasaurus.org/include/image/bookmarks-bar-chrome.jpg" alt="Turning on the bookmarks bar in Chrome" class="bookmarks-bar-Chrome" />
								<p>In Chrome, go to View > Always Show Bookmarks Bar</p>
							</div>
							
							<div class="tabcontent" id="bookmarks-bar-firefox">
								<img src="http://hackasaurus.org/include/image/bookmarks-bar-safari.jpg" alt="Turning on the bookmarks bar in Safari" class="bookmarks-bar-safari" />
								<p>In Safari, go to View > Show Bookmarks Bar</p>
							</div>
							
						</div>
		
						
					</li>
					
					<li class="step-2">
						
						<h2>Install X-Ray Goggles</h2>
						<p>Drag the X-Ray Goggles up to your web browser's bookmarks toolbar:</p>
				
						<p><a id="bookmarklet-link" href="javascript:(function(){'use strict';var script=document.createElement('script');script.src='https://secure.toolness.com/webxray/webxray.js';script.className='webxray';document.head.appendChild(script);})();"><span>Web X-Ray Goggles</span> <img src="/include/image/bookmarklet-instructions.png" alt="drag me to your bookmarklets bar" class="bookmarklet-drag-instructions" /></a></p>
						
						<img class="screenshot bookmarklet-demo" src="http://hackasaurus.org/include/image/bookmarklet.gif" alt="bookmarklet" width="328" height="142" />
						
					</li>
		
					<li class="step-3">
						
						<h2>Turn them on</h2>
						<p>Click on the X-Ray Goggles to activate. (Warning: may alter reality.)</p>
						<img class="screenshot" src="http://hackasaurus.org/include/image/screenshot-bookmarklet.png" alt="Example of the bookmarklet installed" />
						
					</li>
					
					<li class="step-4">
						
						<h2>Bust your hack</h2>
						<p>Go to your favorite web page. Mouse over any element. Hit "R" to remix it.</p>
						
					</li>
				</ol>
				
				</section>
	    		
	    		<section class="proto-mini">
	    				
    				<h2>X-Ray Goggles controls:</h2>
    		
    				
    				<ul class="goggle-controls">
    				<p>Once you've installed the Goggles, click on the icon in the bookmarklet bar to turn them on. Now hover over anywhere on the page and hit one of these keys on your keyboard to make something cool happen.</p>
    					<li>
    						<kbd>R</kbd>
    						<p><strong>Remix</strong> an element using HTML.</p>
    					</li>
    					<li>
    		
    						<kbd>I</kbd>
    						<p><strong>Inspect</strong> the element to learn more about it</p>
    					</li>
    					<li>
    						<kbd>T</kbd>
    						<p><strong>Tear</strong> out the page (automagically copies the page so you can make your own remix of it.)</p>
    		
    					</li>
    					<li>				
    						<kbd>Esc</kbd>	
    						<p>Hit "<strong>Esc</strong>" to deactivate the goggles.</p>
    					</li>
    				</ul>
	    			
	    		</section>
	    		
	    	</div>
	
	</div>
   
</body>

<script>
	$(document).ready(function(){
		$('.tabcontent').hide();
		$('.tabcontent.current').show();
		$('.tabs a').click(function() {
			var curChildIndex = $(this).parent().prevAll().length + 1;
			$(this).parent().parent().children('.current').removeClass('current');
			$(this).parent().addClass('current');
			$(this).parent().parent().next('.tabcontainer').children('.current').slideUp('fast',function() {
				$(this).removeClass('current');
				$(this).parent().children('div:nth-child('+curChildIndex+')').slideDown('normal',function() {
					$(this).addClass('current');
				});
			});
			return false;
		});
	}); 
</script>

<?php include_once("module/foot.php") ?>
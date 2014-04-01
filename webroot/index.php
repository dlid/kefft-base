<?php 
/**
 * This is a Kefft pagecontroller.
 *
 */
// Include the essential config-file which also creates the $kefft variable with its defaults.
include(__DIR__.'/config.php'); 

// We don't need jquery here
$kefft['jquery'] = null;

// Do it and store it all in variables in the kefft container.
$kefft['title'] = "Hello World";
$kefft['pageId'] = 'home';
 
$kefft['main'] = <<<EOD
<h1>Hej Världen</h1>
<p>Detta är en exempelsida som visar hur Kefft ser ut och fungerar.</p>

<section class='row'>
	<article class="col content">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent placerat sit amet libero et tempor. In hac habitasse platea dictumst. Phasellus ultricies accumsan ante, a accumsan odio dapibus eu. Aenean ipsum tellus, fringilla et risus accumsan, ullamcorper lacinia turpis. In gravida, est vitae feugiat dictum, enim enim scelerisque ipsum, quis scelerisque quam urna a quam. Vestibulum venenatis magna sit amet orci dictum, et venenatis nisi fermentum. Quisque ullamcorper ligula lectus, ac egestas turpis molestie a. Curabitur sed sapien erat. Ut interdum tristique lectus eget rhoncus. Suspendisse ut aliquet purus, non placerat massa. Aliquam laoreet, dui nec ultricies dapibus, massa nunc pellentesque dolor, nec interdum nisi purus ac magna.</p>		
	</article>
	<aside class="col toc">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent placerat sit amet libero et tempor. In hac habitasse platea dictumst. Phasellus ultricies accumsan ante, a accumsan odio dapibus eu. Aenean ipsum tellus, fringilla et risus accumsan, ullamcorper lacinia turpis. In gravida, est vitae feugiat dictum, enim enim scelerisque ipsum, quis scelerisque quam urna a quam. Vestibulum venenatis magna sit amet orci dictum, et venenatis nisi fermentum. Quisque ullamcorper ligula lectus, ac egestas turpis molestie a. Curabitur sed sapien erat. Ut interdum tristique lectus eget rhoncus. Suspendisse ut aliquet purus, non placerat massa. Aliquam laoreet, dui nec ultricies dapibus, massa nunc pellentesque dolor, nec interdum nisi purus ac magna.</p>		
	</aside>
</section>
EOD;

// Finally, leave it all to the rendering phase of Kefft.
include(KEFFT_THEME_PATH);

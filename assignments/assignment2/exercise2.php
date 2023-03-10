<?php

$webpageDisplayedName = "My Web Page";//Sets the phrase to be displayed in h1 and footer
$fullName = "Sarah Bloodworth ";//Sets the name to be displayed in h2
$copywriteYear = " &copy; 2018";//Sets the copywrite year to be displayed in footer ('&copy;' sets the copywrite symbol)

// Text block (below) for concatenation
$loremIpsum = <<<HTML
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus feugiat mollis dolor at bibendum. In congue maximus ligula, ut faucibus mi accumsan at. Vestibulum sagittis tortor eget dui ultricies, a vulputate lacus faucibus. Fusce aliquet bibendum erat, sed bibendum eros cursus eu. Nulla at neque rhoncus, ultricies odio at, accumsan elit. Proin in turpis eu leo dapibus pulvinar. Vivamus viverra massa ut enim fringilla ultricies. Donec in enim blandit, iaculis nulla quis, egestas elit. Nullam ut enim id erat bibendum finibus nec ac eros. Nulla malesuada ex facilisis ultrices rhoncus. Nullam in euismod nisl. Donec pulvinar ex sit amet aliquet egestas.
HTML;

//function that performs the concatenation
function concatenateLoremIpsum() {
    $timesToConcatenate = 3;//Sets the desired number of times to concatenate the given text block (local to function)
    global $loremIpsum;//Calls text block (above)
    $textBlockBuilder = "<br>";//Builds the text block to be output
    while ($timesToConcatenate > 0) {
        $textBlockBuilder .= "$loremIpsum<br><br>";
        $timesToConcatenate--;
    }
    return $textBlockBuilder;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercise 2 - Concatenation</title>
	<style>
		* {margin: 0; padding: 0;}
		body {font: 120%/1.5 sans-serif;}
		#wrapper {width: 1000px; margin: 0 auto; border: 1px solid black;}
		header {background: green; height: 150px; padding: 20px;}
		header h1 {color: white;}
		main {padding: 10px;}
		main h2 {margin: 15px 0;}
		main p {margin-bottom: 15px;}
		footer {background: #eee; padding: 10px 0; text-align: center}
		footer p {font-size: .8em;}
	</style>
</head>
<body>
	<div id="wrapper">
		<header>
			<h1><?php echo $webpageDisplayedName; ?></h1>
		</header>
		<main>
			<h2>My name is <?php echo $fullName; ?></h2>
			<p><?php echo concatenateLoremIpsum(); ?></p> <!--This line generates and outputs the desired text block -->
			
		</main>
		<footer>
			<p><?php echo $webpageDisplayedName; ?><?php echo $copywriteYear; ?> </p>
		</footer>
	</div>
	
</body>
</html>
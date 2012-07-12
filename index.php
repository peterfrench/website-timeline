<?php
/**
 * Website timeline helper
 * 
 * @author Peter
 */
	// data
	$stages = array(
		array(
			'title' => 'Solicitation of Client',
			'description' => 'AE will sway/force client to agree to initial meeting. Physical force not recommended.',
			'time' => 'Account Executive'
		),
		array(
			'title' => 'Initial Client Metting',
			'description' => 'Meeting at our offices to give client a tour of the grounds. Have them fill out the all powerful Project Planner packet/book.',
			'time' => 'AE, Project Manager, Client (All decision makers)'
		),
		array(
			'title' => 'Flowchart',
			'description' => 'Document listing all the website\'s pages and functionality.',
			'time' => 'PM | 4 hr/day'
		),
		array(
			'title' => 'Brainstorming Meeting',
			'description' => 'Team meeting to go over the Project Planner packet. Work out all the kinks/gray areas for the project. Developers & designers come up with questions that may need to be sent to the client to clarify.',
			'time' => 'AE, PM, Developer & Designer | 1-2 hrs'
		),
		array(
			'title' => 'Finalize Project Details',
			'description' => 'AE or PM gets the anwsers to the questions proposed in the brainstorming meeting. Those will help with the wireframes.',
			'time' => 'AE/PM?'
		),
		array(
			'title' => 'Wireframes',
			'description' => 'A visual guide that represents the framework of the website. Basically, a blueprint. This is usually created and finalized during a meeting with a developer and a designer.',
			'time' => 'Designer/Developer | 2-4 hrs'
		),
		array(
			'title' => 'Proposal Presentation',
			'description' => 'AE presents the proposed flowchart, explains our processes and gives them their Bid.',
			'time' => 'AE, Project Manager, Client (All decision makers) & developer/designer when needed.'
		),
		array(
			'title' => 'Proposal Acceptance Meeting',
			'description' => 'Flowchart is revised as need by client. AE hands off project over to the PM which now enters it into Work the Heat. The PM is now the main point of contact for that project.',
			'time' => 'Project Manager'
		),
		array(
			'title' => 'Mockups',
			'description' => 'Fully designed static preview of the website. Hopefully the designer is feeling creative that day.',
			'time' => 'Designer | 4 hr/day'
		),
		array(
			'title' => 'Design Review',
			'description' => 'PM will send the mockups off to the Client for them to review and (hopefully) approve.',
			'time' => 'Project Manager',
		),
		array(
			'title' => 'PSD to HTML',
			'description' => 'Design converted into HTML,CSS, & JS. Not always pixel perfect! (Unless, of course, you are using chrome, firefox, safari, or opera. Feeling left out IE?)',
			'time' => 'Designer/Developer | 4 hr/day'
		),
		array(
			'title' => 'Installation of CMS',
			'description' => 'Developer does the whatsit with the thingamajig. "Normal" people can now update the site.',
			'time' => 'Developer | 4 hr/day'
		),
		array(
			'title' => 'Content Generation',
			'description' => 'Adding pages, events etc. Uploading images & documents.',
			'time' => 'PM/Copywriter | 4 hr/day'
		),
		array(
			'title' => 'Quality Assurance Testing',
			'description' => 'Thoroughly test all aspects of the website. Great time to catch bugs, not so great after launch.',
			'time' => 'PM, Designer & Developer | 1 week'
		),
		array(
			'title' => 'Client Preview',
			'description' => 'Allow client to view finished product. Don\'t disrupt them as they cry in joy.',
			'time' => 'Client | 2-3 days'
		),
		array(
			'title' => 'Last Minute Changes/Fixes',
			'description' => 'You can\'t plan for everything. Things tend to fall though the cracks.',
			'time' => 'PM, Designer & Developer | 2-3 days'
		),
		array(
			'title' => 'Launch',
			'description' => 'Baaam! Website fully visible to everyone. Seriously. In the world.',
			'time' => 'Developer | 1-2 day'
		),
	);
	
	// view
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Website Timeline | 44i</title>

<style type="text/css">
	body { margin: 0; padding: 0; }
	header h1 { padding: 5px 15px 5px 20px; margin: 0; font-family: gerogia; font-style: italic; border-bottom: 6px solid #000; border-right: 6px solid #000; display: inline-block; }
	
	#timeline { padding: 0 20px; font-family: arial; overflow: hidden; font-size: 12px; }
	
	#timeline .stage { margin: 0 1px 0 0; padding: 40px 0 0 0; float: left; width: 320px; height: 120px; border-bottom: 6px solid #000; position: relative; }
	#timeline .stage:nth-child(6n+1) { border-bottom-color: #ef403d; }
	#timeline .stage:nth-child(6n+2) { border-bottom-color: #a22291; }
	#timeline .stage:nth-child(6n+3) { border-bottom-color: #72bd46; }
	#timeline .stage:nth-child(6n+4) { border-bottom-color: #03a8ae; }
	#timeline .stage:nth-child(6n+5) { border-bottom-color: #223f9b; }
	#timeline .stage:nth-child(6n+6) { border-bottom-color: #f7a51d; }	
	
	#timeline .stage .title { padding: 0 10px; font-size: 15px; }
	#timeline .stage .description { padding: 10px 60px 10px 10px; font-size: 12px; line-height: 16px; color: #333; }
	#timeline .stage .time { padding: 10px; position: absolute; right: 0; bottom: 0; font-size: 11px; color: #393939; font-style: italic; font-weight: bold; }
	
	footer { padding: 60px 20px 40px 0; overflow: hidden; }
	footer img { float: right; }
</style>

</head>

<body>
	<header>
		<h1>Website Timeline</h1>
	</header>

	<div id="timeline">
<?php
	foreach($stages as $stage) {
?>
		<section class="stage">
			<div class="title"><?php echo $stage['title']; ?></div>
			<div class="description"><?php echo $stage['description']; ?></div>
			<div class="time"><?php echo $stage['time']; ?></div>
		</section>
<?php
	}
?>
	</div>

	<footer>
		<img src="http://www.44interactive.com/wp-content/themes/44i-html5/images/44Tag.jpg" alt="44i" />
	</footer>
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript">
	$(function(){
		$('.stage').bind({
			'mouseenter' : function(){
				$('.stage').stop().fadeTo(300, .4);
				$(this).stop().fadeTo(300, 1);
			},
			'mouseleave' : function(){
				$('.stage').stop().fadeTo(300, 1);			
			}
		})
	});
	</script>
</body>
</html>

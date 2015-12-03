<?php
/**********************************************
/* Define things here
**********************************************/
$numberOfPeople = 0;
$placeholderPhoto = 'https://placehold.it/500x500';

class Person {
	public $memberName;
	public $photoURL;
	public $jobtitle;
	public $classOf;
	public $contactInfo;
	public $teams;
	public $bio;

	function __construct($memberName, $photourl, $jobtitle, $classOf, $contactInfo, $teams, $bio) {
		$this->memberName = $memberName;
		$this->jobtitle = $jobtitle;
		$this->photoURL = $photourl;
		$this->classOf = $classOf;
		$this->contactInfo = $contactInfo;
		$this->teams = $teams;
		$this->bio = $bio;
	}

}

$mech = 'Mechanical Engineering';
$aaron_bio = "Aaron has competed in various robotics competitions for over 12 years, including FIRST robotics, BEST robotics, RoboGames, and several smaller competitions. He has started and led several teams to state and global levels of competition. He hopes to make many more competitive and combat robots in the future.";

//new Person('name', $placeholderPhoto, 'title', 'class', 'email', 'teams', 'bio');

$jake = new Person('Jake Rawlins', $placeholderPhoto, 'Laser Operator', '0', 'jake.rawlins@utdallas.edu', 'teams', 'Jake is in charge of all things to do with lasers. He also eats our pizza.');
$alex = new Person('Alex Koala', $placeholderPhoto, 'Alum', '0', 'email', 'mechanical, alumi', 'Alex did a lot of important things, which we will list here.');
$stuart = new Person('Stuart Yun', $placeholderPhoto, 'Alum', '0', 'stuart.yun@gmail.com', 'mechanical, alumni', '"No."');

$alejandro = new Person('Alejandro Hernandez', '/assets/img/team/alejandro.jpg', $mech, '2015', 'email', 'teams', 'Coffee-drinker, email-sender and soldering expert.');
$noosh_noosh = new Person('Nusha Laleh', $placeholderPhoto, $mech, '2015', 'email', 'teams', 'Professional People Person&#8482;');
$brian = new Person('Brian Ca$h', $placeholderPhoto, $mech, '2015', 'email', 'teams', 'Brian helped build some stuff, and provided ample comic relief.');
$dor = new Person('Dor Gamliel', $placeholderPhoto, $mech, 'class', 'email', 'teams', 'bio');

$micah = new Person('Micah Brouwer', $placeholderPhoto, 'Electrical Engineering', '2017', 'micah.brouwer@utdallas.edu', 'teams', 'Micah helps with the wiring and electrical setup of the Blender. He also edits our videos, and promotes the team.');
$aaron = new Person('Aaron Plauch&#232;', '/assets/img/team/aaron.png', 'Beard Engineering', '2018', 'jeremiah@utdbattlebots.com', 'leadership, mechanical', $aaron_bio);

$david = new Person('David Merz', '/assets/img/team/david.jpg', $mech, '2018', 'david@utdbattlebots.com', 'teams', 'David works on the mechanical design team. He focuses on dampening and the main structure of the Blender.');

$jeremiah = new Person('Jeremiah Plauch&#232;', '/assets/img/team/jeremiah.jpg', $mech, '2018', 'jeremiah@utdbattlebots.com', 'leadership, mechanical', 'Jeremiah handles the CAD and modeling for the Blender, as well as the mechanical design. He focuses primarily on the drivetrain and dampening. He is also the primary driver during competitions.');
$haley = new Person('Haley Abitz', '/assets/img/team/haley.jpg', $mech, '2018', 'haley@utdbattlebots.com', 'leadership, mechanical', 'Haley works on the mechanical design for the Blender, makes financial decisions, and works with the university to organize STEM outreach events.');
$lance = new Person('Lance Gotohio', '/assets/img/team/lance.jpg', 'Computer Engineering', '2019', 'lance@utdbattlebots.com', 'electrical', 'I dont know! Uh, are you typing that?');
$morganne = new Person('Morganne Blaylock', '/assets/img/team/morganne.jpg', $mech, '2019', 'morganne@utdbattlebots.com', 'social', 'Morganne handles our social media, as well as outreach programs with local schools. ');
$jack = new Person('Jack Doan', '/assets/img/team/jack.jpg', 'Computer Engineering', 2018, 'jack@utdbattlebots.com', 'leadership, electrical', 'Jack handles most things related to the Blender\'s electronics, including battery management, motors & motor drivers, as well as the control systems.');
$goeckner = new Person('Dr. Matthew Goeckner', '/assets/img/team/goeckner.jpg', 'Faculty Mentor', 'n/a', 'goeckner@utdallas.edu', '', 'Dr. Goeckner helps us keep a good relationship with the university. He also acts as our Chief Safety Officer and primary plasma physics consultant'); 

$team = array($jack, $haley, $jeremiah, $david, $lance, $morganne, $alejandro, $aaron, $noosh_noosh, $stuart, $alex, $goeckner); // $jeremiah, $haley, 
$numberOfPeople = count($team);
$path = "/var/www/utdbattlebots.com/template/";

require($path . "head.php");
?>
    <div class="container theme-showcase" role="main">
	<div class="row">
		<div class="col-md-12"><br></div>
	</div>
	
	<div class="page-header">
                <h1>Team Members</h1>
        </div>
	
	<div class="row">


	<?php
		$i = 0;
		$printRow = 0;
		while ($i < $numberOfPeople) {
			print '<div class="col-md-4"><div class="thumbnail"><img src="'.$team[$i]->photoURL.'" alt="'.$team[$i]->memberName.'">';
			print '<div class="caption"><h3>'.$team[$i]->memberName.'<br> <small>'.$team[$i]->jobtitle.'</small></h3><p>'.$team[$i]->bio.'</p>';
			print '<p class="text-right" ><a href="mailto:'.$team[$i]->contactInfo.'" class="btn btn-warning" role="button">Email</a>';
			print '</p></div></div></div>';

			if (($i+1) % 3 == 0) {
				print '</div><div class="row">';
			}

			$i +=1;
		}	
	?>
		
	</div>
	
    </div> <!-- /container -->
<?php
	require($path . "foot.php");
?>

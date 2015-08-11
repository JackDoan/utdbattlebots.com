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


$alex = new Person('Alex Koala', $placeholderPhoto, 'Alum', '0', 'email', 'mechanical, alumi', 'Alex did a lot of important things, which we will list here.');
$stuart = new Person('Stuart Yun', $placeholderPhoto, 'Alum', '0', 'stuart.yun@gmail.com', 'mechanical, alumni', '"No."');

$alejandro = new Person('Alejandro Hernandez', '/assets/img/team/alejandro.jpg', $mech, '2015', 'email', 'teams', 'Coffee-drinker, email-sender and soldering expert.');
$noosh_noosh = new Person('Nusha Laleh', $placeholderPhoto, $mech, '2015', 'email', 'teams', 'Professional People Person&#8482;');
$brian = new Person('Brian Ca$h', $placeholderPhoto, $mech, '2015', 'email', 'teams', 'WHEEEEEEEEEEEEEEEEEEEEEEEEEEEE');
$dor = new Person('Dor Gamliel', $placeholderPhoto, $mech, 'class', 'email', 'teams', 'bio');

$micah = new Person('Micah Brouwer', $placeholderPhoto, 'title', '2017', 'email', 'teams', 'bio');
$aaron = new Person('Aaron Plauch&#232;', '/assets/img/team/aaron.png', 'Beard Engineering', '2018', 'jeremiah@utdbattlebots.com', 'leadership, mechanical', $aaron_bio);

$david = new Person('David Merz', $placeholderPhoto, 'Sheep Engineering', '2018', 'david@utdbattlebots.com', 'teams', 'David has a swiss army knife with a hammer. He calls it his pocket hammer. That\'s all you really need to know.');

$jeremiah = new Person('Jeremiah Plauch&#232;', $placeholderPhoto, $mech, '2018', 'jeremiah@utdbattlebots.com', 'leadership, mechanical', '"I don\'t know! Things?"');
$haley = new Person('Haley Abitz', $placeholderPhoto, $mech, '2018', 'haley@utdbattlebots.com', 'leadership, mechanical', 'insert short joke here lolololololol');
$jack = new Person('Jack Doan', $placeholderPhoto, 'Computer Engineering', 2018, 'jack@utdbattlebots.com', 'leadership, electrical', 'Often seen frantically poking things with a multimeter.');
$goeckner = new Person('Dr. Matthew Goeckner', '/assets/img/team/goeckner.jpg', 'Mentor', 'n/a', 'goeckner@utdallas.edu', '', 'Chief Safety Officer and plasma physics consultant'); 

$team = array($jack, $haley, $jeremiah, $noosh_noosh, $alejandro, $aaron, $brian, $micah, $david, $dor, $stuart, $alex, $goeckner); // $jeremiah, $haley, 
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

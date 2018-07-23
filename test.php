<?php
// Include config file
require_once 'config.php';

$page = $_SESSION['page'] = htmlspecialchars($_GET["page"]);
if ($_SERVER["REQUEST_METHOD"] == "GET"){
	if (isset($_GET["quiz"])) {
		$quizName = $_SESSION['quiz'] = htmlspecialchars($_GET["quiz"]);
	}
	
}

	  
if ($page == '#viewQuizzes'){
	
	$sql = "SELECT DISTINCT quiz FROM questions";
	if($stmt = $mysqli->prepare($sql)){
	            // Attempt to execute the prepared statement
	            if($stmt->execute()){
	                // Store result
	                $stmt->store_result();

	                $stmt->bind_result($quiz);
	                echo '<div class="dropdown">
					  <button class="btn btn-primary dropdown-toggle" type="button" id="quizzesMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quizzes
					  </button>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">';
	                while($stmt->fetch()){
	                	echo '<a class="dropdown-item" id="'.$quiz.'" href="#">'.$quiz.'</a>';
					}
					echo '</div>
						  </div>';
	            } else{
	                echo "Oops! Something went wrong. Please try again later.";
	        }
	    }
	echo "<h2>View Quizzes clicked</h2>";
	if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_SESSION['quiz'])){
		
		if (!empty($quizName)) {

			//$quiz = htmlspecialchars($_SESSION['quiz']);
			echo "<h3>$quizName</h3>";
			echo "<h4>Questions</h4>";
			$sql = "SELECT questionID, question, answerID FROM questions WHERE quiz = ?";
			if($stmt = $mysqli->prepare($sql)){
	            // Bind variables to the prepared statement as parameters
	            $stmt->bind_param("s", $param_quiz);
	            // Set parameters
	            $param_quiz = $quizName;

	            // Attempt to execute the prepared statement
	            if($stmt->execute()){
	                // Store result
	                $stmt->store_result();

	                $stmt->bind_result($questionID, $question, $answerID);
	                while($stmt->fetch()){
		                
		                echo "<table>";
					    //for($i=0; $i<2; $i++){
					        echo "<tr>";
					            echo "<td>$questionID $question</td>";
					        echo "</tr>";
					    //}
					    echo "</table>";
					}
	            } else{
	                echo "Oops! Something went wrong. Please try again later.";
	        	}
			}
		}
	}
	// $number = htmlspecialchars($_GET["number"]);
	// $_SESSION['page'] = "View Quizzes";
	// if(is_numeric($number) && $number > 0){
	// 	echo "<h2>WebbiSkools Quiz Manager</h2>";
	//     echo "<table>";
	//     for($i=0; $i<11; $i++){
	//         echo "<tr>";
	//             echo "<td>$number x $i</td>";
	//             echo "<td>=</td>";
	//             echo "<td>" . $number * $i . "</td>";
	//         echo "</tr>";
	//     }
	//     echo "</table>";
	// }
} elseif ($page == '#about') {
	echo "<h2>About clicked</h2>";
} elseif ($page == '#contact') {
	echo "<h2>Contact clicked</h2>";
} else {
	echo '<h2>WebbiSkools Quiz Manager</h2>
	    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';
}
?>
<?php
$finished = false;
$answers = getAllAnswers();
function getInput($qid,$width) {
	global $answers;
	global $finished;
	$answer = "";
	if(array_key_exists($qid, $answers)) {
		$answer = $answers[$qid];
		if($answer != '') {
			$finished = true;
		}
	}
	if($width == 'line'){
		return '<input type="text" name="'.$qid.'" id="'.$qid.'" class="answersInputField" value="'.$answer.'" answerShown="false"/>';
	}else if($width == '')
	return '<input maxlength="5" size="5" type="text" name="'.$qid.'" id="'.$qid.'" class="answersInputField" value="'.$answer.'"  answerShown="false"/>';
	
	switch ($width) {
    case 'line':
        return '<input type="text" name="'.$qid.'" id="'.$qid.'" class="answersInputField" value="'.$answer.'" answerShown="false"/>';
    case 'bool':
        return '<input maxlength="9" size="9" type="text" name="'.$qid.'" id="'.$qid.'" class="answersInputField" value="'.$answer.'" answerShown="false"/>';
    default:
        return '<input type="text" name="'.$qid.'" id="'.$qid.'" class="answersInputField" value="'.$answer.'" answerShown="false"/>';
	
	}
	
}
$quiz = array(
	
	array(
		'content'=>'			
				
			<h2>ANSWER SHEET</h2>
			<br/><br/>
			<div class="sect">
			<p><strong>1.</strong>&nbsp;&nbsp;&nbsp;'.getInput('a_1','line').' <i class="a_1"></i></p>
			<p><strong>2.</strong>&nbsp;&nbsp;&nbsp;'.getInput('a_2','line').' <i class="a_2"></i></p>
			<p><strong>3.</strong>&nbsp;&nbsp;&nbsp;'.getInput('a_3','line').' <i class="a_3"></i></p>
			<p><strong>4.</strong>&nbsp;&nbsp;&nbsp;'.getInput('a_4','line').' <i class="a_4"></i></p>
			<p><strong>5.</strong>&nbsp;&nbsp;&nbsp;'.getInput('a_5','line').' <i class="a_5"></i></p>
			<p><strong>6.</strong>&nbsp;&nbsp;&nbsp;'.getInput('a_6','line').' <i class="a_6"></i></p>
			<p><strong>7.</strong>&nbsp;&nbsp;&nbsp;'.getInput('a_7','line').' <i class="a_7"></i></p>
			<p><strong>8.</strong>&nbsp;&nbsp;&nbsp;'.getInput('a_8','line').' <i class="a_8"></i></p>
			<p><strong>9.</strong>&nbsp;&nbsp;&nbsp;'.getInput('a_9','line').' <i class="a_9"></i></p>
			<p><strong>10.</strong> '.getInput('a_10','line').'  <i class="a_10"></i></p>
			<p><strong>11.</strong> '.getInput('a_11','line').'  <i class="a_11"></i></p>
			<p><strong>12.</strong> '.getInput('a_12','line').'  <i class="a_12"></i></p>
			<p><strong>13.</strong> '.getInput('a_13','line').'  <i class="a_13"></i></p>
			<p><strong>14.</strong> '.getInput('a_14','line').'  <i class="a_14"></i></p>
			<p><strong>15.</strong> '.getInput('a_15','line').'  <i class="a_15"></i></p>
			<p><strong>16.</strong> '.getInput('a_16','line').'  <i class="a_16"></i></p>
			<p><strong>17.</strong> '.getInput('a_17','line').'  <i class="a_17"></i></p>
			<p><strong>18.</strong> '.getInput('a_18','line').'  <i class="a_18"></i></p>
			<p><strong>19.</strong> '.getInput('a_19','line').'  <i class="a_19"></i></p>
			<p><strong>20.</strong> '.getInput('a_20','line').'  <i class="a_20"></i></p>
			</div><div class="sect">
			<p><strong>21.</strong> '.getInput('a_21','line').'  <i class="a_21"></i></p>
			<p><strong>22.</strong> '.getInput('a_22','line').'  <i class="a_22"></i></p>
			<p><strong>23.</strong> '.getInput('a_23','line').'  <i class="a_23"></i></p>
			<p><strong>24.</strong> '.getInput('a_24','line').'  <i class="a_24"></i></p>
			<p><strong>25.</strong> '.getInput('a_25','line').'  <i class="a_25"></i></p>
			<p><strong>26.</strong> '.getInput('a_26','line').'  <i class="a_26"></i></p>
			<p><strong>27.</strong> '.getInput('a_27','line').'  <i class="a_27"></i></p>
			<p><strong>28.</strong> '.getInput('a_28','line').'  <i class="a_28"></i></p>
			<p><strong>29.</strong> '.getInput('a_29','line').'  <i class="a_29"></i></p>
			<p><strong>30.</strong> '.getInput('a_30','line').'  <i class="a_30"></i></p>
			</div><div class="sect">
			<p><strong>31.</strong> '.getInput('a_31','line').'  <i class="a_31"></i></p>
			<p><strong>32.</strong> '.getInput('a_32','line').'  <i class="a_32"></i></p>
			<p><strong>33.</strong> '.getInput('a_33','line').'  <i class="a_33"></i></p>
			<p><strong>34.</strong> '.getInput('a_34','line').'  <i class="a_34"></i></p>
			<p><strong>35.</strong> '.getInput('a_35','line').'  <i class="a_35"></i></p>
			<p><strong>36.</strong> '.getInput('a_36','line').'  <i class="a_36"></i></p>
			<p><strong>37.</strong> '.getInput('a_37','line').'  <i class="a_37"></i></p>
			<p><strong>38.</strong> '.getInput('a_38','line').'  <i class="a_38"></i></p>
			<p><strong>39.</strong> '.getInput('a_39','line').'  <i class="a_39"></i></p>
			<p><strong>40.</strong> '.getInput('a_40','line').'  <i class="a_40"></i></p>
			</div>
			<p></p>
			<p style="text-align:center; clear:left; padding-top:50px;">
			<button class="btn btn-primary btn-lg" id="handinbutton" onclick="handIn();">Hand In Answer Sheet</button> <button class="btn btn-primary btn-lg" id="showanswerbutton" onclick="showanswers();">Show Answers</button>

			<br><span id="checkingAnswers">Checking Answers <span id="spinner"><i class="fa fa-spinner fa-pulse"></i></span></span>
			</p>
						<p style="text-align:center; margin-top:30px;"><button class="btn btn-danger btn-lg resetbutton" onclick="resetTest();">RESET TEST</button></p>

		'
	)
	
	
);

$results = array(
	'a_1'=>array('t','true'),
	'a_2'=>array('f','false'),
	'a_3'=>array('t', 'true'),
	'a_4'=>array('NG','N G','Not Given'),
	'a_5'=>array('f','false'),
	'a_6'=>array('t','true'),
	'a_7'=>array('oysters'),
	'a_8'=>array('oxygen'),
	'a_9'=>array('rain gardens'),
	'a_10'=>array('pilings'),
	'a_11'=>array('wetlands'),
	'a_12'=>array('b','c'),
	'a_13'=>array('c','b'),
	'a_14'=>array('c','e'),
	'a_15'=>array('c','e'),
	'a_16'=>array('f'),
	'a_17'=>array('c'),
	'a_18'=>array('e'),
	'a_19'=>array('d'),
	'a_20'=>array('g'),
	'a_21'=>array('b'),
	'a_22'=>array('n','no'),
	'a_23'=>array('n','no'),
	'a_24'=>array('y','yes'),
	'a_25'=>array('NG','N G','Not Given'),
	'a_26'=>array('d'),
	'a_27'=>array('vii'),
	'a_28'=>array('vi'),
	'a_29'=>array('ii'),
	'a_30'=>array('iii'),
	'a_31'=>array('target'),
	'a_32'=>array('distributed'),
	'a_33'=>array('currency'),
	'a_34'=>array('buy'),
	'a_35'=>array('d'),
	'a_36'=>array('f'),
	'a_37'=>array('a'),
	'a_38'=>array('c'),
	'a_39'=>array('B','D'),
	'a_40'=>array('B','D')
);

$questions = array(
	'a_1'=>array('type' => 'normal'),
	'a_2'=>array('type' => 'normal'),
	'a_3'=>array('type' => 'normal'),
	'a_4'=>array('type' => 'normal'),
	'a_5'=>array('type' => 'normal'),
	'a_6'=>array('type' => 'normal'),
	'a_7'=>array('type' => 'normal'),
	'a_8'=>array('type' => 'normal'),
	'a_9'=>array('type' => 'normal'),
	'a_10'=>array('type' => 'normal'),
	'a_11'=>array('type' => 'normal'),
	'a_12'=>array('type' => 'combine', 'combined_question' => array('a_12', 'a_13')),
	'a_13'=>array('type' => 'combine', 'combined_question' => array('a_12', 'a_13')),
	'a_14'=>array('type' => 'combine', 'combined_question' => array('a_14', 'a_15')),
	'a_15'=>array('type' => 'combine', 'combined_question' => array('a_14', 'a_15')),
	'a_16'=>array('type' => 'normal'),
	'a_17'=>array('type' => 'normal'),
	'a_18'=>array('type' => 'normal'),
	'a_19'=>array('type' => 'normal'),
	'a_20'=>array('type' => 'normal'),
	'a_21'=>array('type' => 'normal'),
	'a_22'=>array('type' => 'normal'),
	'a_23'=>array('type' => 'normal'),
	'a_24'=>array('type' => 'normal'),
	'a_25'=>array('type' => 'normal'),
	'a_26'=>array('type' => 'normal'),
	'a_27'=>array('type' => 'normal'),
	'a_28'=>array('type' => 'normal'),
	'a_29'=>array('type' => 'normal'),
	'a_30'=>array('type' => 'normal'),
	'a_31'=>array('type' => 'normal'),
	'a_32'=>array('type' => 'normal'),
	'a_33'=>array('type' => 'normal'),
	'a_34'=>array('type' => 'normal'),
	'a_35'=>array('type' => 'normal'),
	'a_36'=>array('type' => 'normal'),
	'a_37'=>array('type' => 'normal'),
	'a_38'=>array('type' => 'normal'),
	'a_39'=>array('type' => 'combine', 'combined_question' => array('a_39', 'a_40')),
	'a_40'=>array('type' => 'combine', 'combined_question' => array('a_39', 'a_40')),
);

?>
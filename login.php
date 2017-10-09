<?php
	include('header.php');
?>

 <?php
 
	session_start();
       
    echo '<div class="login">
    <h1>Login</h1>';
    
	use PFBC\Form;
	use PFBC\Element;
 
	include("PFBC/Form.php");
	$form = new Form("sidebyside");
	$form->configure(array(
		"prevent" => array("bootstrap", "jQuery")
		));
	$form->addElement(new Element\Email("Email Address:", "Email", array(
		"required" => 1
		)));
	$form->addElement(new Element\Password("Password:", "Password", array(
	    "required" => 1
		)));
	$form->addElement(new Element\Checkbox("", "Remember", array(
	    "1" => "Remember me"
		)));
	$form->addElement(new Element\Button("Login"));
	$form->addElement(new Element\Button("Cancel", "button", array(
		    "onclick" => "history.go(-1);"
		)));
	$form->render();
	
    ?>

<?php
	
	include('footer.php');

?>
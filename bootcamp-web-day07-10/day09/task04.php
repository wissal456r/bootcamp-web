<?php
function whoami():void { $name=trim($_POST['name']??'');$age=$_POST['age']??null;$ok=filter_var($age,FILTER_VALIDATE_INT)!==false&&(int)$age>=0;if($name&&$ok)echo "Hi, my name is $name and I'm $age years old.";elseif($name)echo "Hi, my name is $name.";elseif($ok)echo "Hi, I have no name and I'm $age years old.";else echo 'Hi, I have no name.'; }

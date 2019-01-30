<?php

    require_once('header.php');

    if(isset($_POST)){
        var_dump($_POST);
    }

?>

<form action="" method="POST">

<?php

   require_once('Form.php');

    $form = new Form( 
        [
            'lastname' => 'Smith',
            'firstname' => 'john',
            'pwd'=> ''
        ]
    );

    
    echo $form->label('lastname');
    echo $form->input('lastname');
    echo $form->label('firstname');
    echo $form->input('firstname');
    echo $form->label('pwd');
    echo $form->input('pwd');
    echo $form->button();
        
?>

</form>

<?php

    require_once('footer.php');
    
?>















    














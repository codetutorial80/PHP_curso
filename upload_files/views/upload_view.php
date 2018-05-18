<h2>Subir foto</h2>

<div style="background: #A0A0A0; border: 1px solid #787878; border-radius:10px; padding:10px; width:500px;">
<form action="<?=base_url("User/upload_image")?>" method="post" enctype="multipart/form-data">
    <!--the value of the field name always have to be "userfile"-->
    Subir archivo: <input type="file" name="userfile" value="fichero"/>
    <input type="submit" value="Enviar"/>
</form>
</div>
<?php

    if (isset($error)) {
        echo "<strong style='color:red;'>" . $error . "</strong>";
    }
 
    if (isset($img)) {
        echo "<strong style='color:green;'>" . $img["orig_name"] . " se subio sin problemas </strong>";
    }

?>

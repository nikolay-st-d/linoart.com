<?php
$title='Contact Linoart Ltd. - Bulgaria';
$description='Contact data to contact the Linoart Ltd. company. If you have to ask or tell us something, this is the rifgt place';
$keywords='linoart, contacts, ask, question';

include("includes/head.php");
echo '<body>';
include("includes/header.php");
include("includes/menu.php");
?>
<table width="940" height="400" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="middle" width="280"><div class="div_main_textbox">
      <h1>CONTACT LiNOART STUDIO</h1>
      <p><img src="images/m.png" alt="graphic design and advertising photography studio" /></p>
	  <form action="contacts2.php" name="form1" class="text_top_left" onSubmit="MM_validateForm('name','','R','email','','RisEmail','phone','','NisNum','subject','','R','body','','R');return document.MM_returnValue">
        <p> <span class="main_text">Your name:<br>
              <input name="name" type="text" id="name" size="35" maxlength="90">
        </span></p>
        <p class="main_text"> Your e-mail address:<br>
            <input name="email" type="text" id="email" size="35" maxlength="90">
        </p>
        <p class="main_text">Your phone:<br>
            <input name="phone" type="text" id="phone" size="35" maxlength="120">
        </p>
        <p class="main_text">Subject:<br>
            <input name="subject" type="text" id="subject" size="35" maxlength="120">
        </p>
        <p class="main_text"> Message body:<br>
            <textarea name="body" cols="31" rows="8" wrap="VIRTUAL" id="body"></textarea>
        </p>
        <p class="main_text">Please type the three digits:<br>
            <input name="mp" type="text" id="mp" size="6" maxlength="3">
            <span class="top-right">*_3_2_4_*</span> </p>
        <p> <span class="body_text">
          <input type="submit" name="Submit" value="SEND">
        </span></p>
	    </form>
	  </div>	</td>
	<td align="right" valign="bottom">
	<div class="port_content" align="left" style="padding-left:40px;padding-bottom:180px;">
contact phone:<br>
+359 89 856 25 98<br><br>
contact mail address:<br>
72-b-25 Graf Ignatiev Str.<br>
8600 Yambol<br>
Bulgaria
</div>
	<div align="right"><img src="images/top_3.jpg" width="250" height="203" alt="Samle of an advert photo by LiNOART studio" title="Samle of an advert photo by LiNOART studio"></div></td>
  </tr>
</table>
<?php include("includes/footer.php"); ?>
</body>
</html>

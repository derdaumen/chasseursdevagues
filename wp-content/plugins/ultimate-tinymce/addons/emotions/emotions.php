<?php ob_start(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>{#emotions_dlg.title}</title>
    <?php
	include ('../../includes/tinymce_addon_scripts.php');
	?>
    <!--
	<script type="text/javascript" src="../../tinymce/tiny_mce_popup.js"></script>
    -->
	<script type="text/javascript" src="js/emotions.js"></script>
</head>
<body style="display:none;" role="application" aria-labelledby="app_title">
<span style="display:none;" id="app_title">{#emotions_dlg.title}</span>
<div align="center">
	<div class="title">{#emotions_dlg.title}:<br /><br /></div>

	<table id="emoticon_table" role="presentation" border="0" cellspacing="0" cellpadding="4">
    <th colspan="16">Primary Emoticons:</th>
		<tr>
			<td><a class="emoticon_link" role="button" title="{#emotions_dlg.cool}" href="javascript:EmotionsDialog.insert('smiley-cool.gif','emotions_dlg.cool');"><img src="img/smiley-cool.gif" width="18" height="18" border="0" alt="{#emotions_dlg.cool}" /></a></td>
			<td><a class="emoticon_link" role="button" title="{#emotions_dlg.cry}" href="javascript:EmotionsDialog.insert('smiley-cry.gif','emotions_dlg.cry');"><img src="img/smiley-cry.gif" width="18" height="18" border="0" alt="{#emotions_dlg.cry}" /></a></td>
			<td><a class="emoticon_link" role="button" title="{#emotions_dlg.embarassed}" href="javascript:EmotionsDialog.insert('smiley-embarassed.gif','emotions_dlg.embarassed');"><img src="img/smiley-embarassed.gif" width="18" height="18" border="0" alt="{#emotions_dlg.embarassed}"  /></a></td>
			<td><a class="emoticon_link" role="button" title="{#emotions_dlg.foot_in_mouth}" href="javascript:EmotionsDialog.insert('smiley-foot-in-mouth.gif','emotions_dlg.foot_in_mouth');"><img src="img/smiley-foot-in-mouth.gif" width="18" height="18" border="0" alt="{#emotions_dlg.foot_in_mouth}" /></a></td>
			<td><a class="emoticon_link" role="button" title="{#emotions_dlg.frown}" href="javascript:EmotionsDialog.insert('smiley-frown.gif','emotions_dlg.frown');"><img src="img/smiley-frown.gif" width="18" height="18" border="0" alt="{#emotions_dlg.frown}" /></a></td>
			<td><a class="emoticon_link" role="button" title="{#emotions_dlg.innocent}" href="javascript:EmotionsDialog.insert('smiley-innocent.gif','emotions_dlg.innocent');"><img src="img/smiley-innocent.gif" width="18" height="18" border="0" alt="{#emotions_dlg.innocent}"  /></a></td>
			<td><a class="emoticon_link" role="button" title="{#emotions_dlg.kiss}" href="javascript:EmotionsDialog.insert('smiley-kiss.gif','emotions_dlg.kiss');"><img src="img/smiley-kiss.gif" width="18" height="18" border="0" alt="{#emotions_dlg.kiss}" /></a></td>
			<td><a class="emoticon_link" role="button" title="{#emotions_dlg.laughing}" href="javascript:EmotionsDialog.insert('smiley-laughing.gif','emotions_dlg.laughing');"><img src="img/smiley-laughing.gif" width="18" height="18" border="0" alt="{#emotions_dlg.laughing}" /></a></td>
		<!-- </tr>
		<tr> -->
			<td><a class="emoticon_link" role="button" title="{#emotions_dlg.money_mouth}" href="javascript:EmotionsDialog.insert('smiley-money-mouth.gif','emotions_dlg.money_mouth');"><img src="img/smiley-money-mouth.gif" width="18" height="18" border="0" alt="{#emotions_dlg.money_mouth}"/></a></td>
			<td><a class="emoticon_link" role="button" title="{#emotions_dlg.sealed}" href="javascript:EmotionsDialog.insert('smiley-sealed.gif','emotions_dlg.sealed');"><img src="img/smiley-sealed.gif" width="18" height="18" border="0" alt="{#emotions_dlg.sealed}" /></a></td>
			<td><a class="emoticon_link" role="button" title="{#emotions_dlg.smile}" href="javascript:EmotionsDialog.insert('smiley-smile.gif','emotions_dlg.smile');"><img src="img/smiley-smile.gif" width="18" height="18" border="0" alt="{#emotions_dlg.smile}" /></a></td>
			<td><a class="emoticon_link" role="button" title="{#emotions_dlg.surprised}" href="javascript:EmotionsDialog.insert('smiley-surprised.gif','emotions_dlg.surprised');"><img src="img/smiley-surprised.gif" width="18" height="18" border="0" alt="{#emotions_dlg.surprised}" /></a></td>
			<td><a class="emoticon_link" role="button" title="{#emotions_dlg.tongue_out}" href="javascript:EmotionsDialog.insert('smiley-tongue-out.gif','emotions_dlg.tongue_out');"><img src="img/smiley-tongue-out.gif" width="18" height="18" border="0" alt="{#emotions_dlg.tongue_out}" /></a></td>
			<td><a class="emoticon_link" role="button" title="{#emotions_dlg.undecided}" href="javascript:EmotionsDialog.insert('smiley-undecided.gif','emotions_dlg.undecided');"><img src="img/smiley-undecided.gif" width="18" height="18" border="0" alt="{#emotions_dlg.undecided}" /></a></td>
			<td><a class="emoticon_link" role="button" title="{#emotions_dlg.wink}" href="javascript:EmotionsDialog.insert('smiley-wink.gif','emotions_dlg.wink');"><img src="img/smiley-wink.gif" width="18" height="18" border="0" alt="{#emotions_dlg.wink}" /></a></td>
			<td><a class="emoticon_link" role="button" title="{#emotions_dlg.yell}" href="javascript:EmotionsDialog.insert('smiley-yell.gif','emotions_dlg.yell');"><img src="img/smiley-yell.gif" width="18" height="18" border="0" alt="{#emotions_dlg.yell}" /></a></td>
		</tr>    <tr><td>&nbsp;</td></tr>   
        
    <th colspan="16">Blueticons</th>
        <tr>
           <td><a class="emoticon_link" role="button" title="{#emotions_dlg.Ahhhh}" href="javascript:EmotionsDialog.insert('blueicons/Ahhhh.png','emotions_dlg.Ahhhh');"><img src="img/blueicons/Ahhhh.png" width="18" height="18" border="0" alt="{#emotions_dlg.Ahhhh}" /></a></td>
           <td><a class="emoticon_link" role="button" title="{#emotions_dlg.Alien}" href="javascript:EmotionsDialog.insert('blueicons/Alien.png','emotions_dlg.Alien');"><img src="img/blueicons/Alien.png" width="18" height="18" border="0" alt="{#emotions_dlg.Alien}" /></a></td>
           <td><a class="emoticon_link" role="button" title="{#emotions_dlg.Blush}" href="javascript:EmotionsDialog.insert('blueicons/Blush.png','emotions_dlg.Blush');"><img src="img/blueicons/Blush.png" width="18" height="18" border="0" alt="{#emotions_dlg.Blush}" /></a></td>
           <td><a class="emoticon_link" role="button" title="{#emotions_dlg.Cool1}" href="javascript:EmotionsDialog.insert('blueicons/Cool1.png','emotions_dlg.Cool1');"><img src="img/blueicons/Cool1.png" width="18" height="18" border="0" alt="{#emotions_dlg.Cool1}" /></a></td>
           <td><a class="emoticon_link" role="button" title="{#emotions_dlg.Crying}" href="javascript:EmotionsDialog.insert('blueicons/Crying.png','emotions_dlg.Crying');"><img src="img/blueicons/Crying.png" width="18" height="18" border="0" alt="{#emotions_dlg.Crying}" /></a></td>
           <td><a class="emoticon_link" role="button" title="{#emotions_dlg.Devil}" href="javascript:EmotionsDialog.insert('blueicons/Devil.png','emotions_dlg.Devil');"><img src="img/blueicons/Devil.png" width="18" height="18" border="0" alt="{#emotions_dlg.Devil}" /></a></td>
           <td><a class="emoticon_link" role="button" title="{#emotions_dlg.Happy}" href="javascript:EmotionsDialog.insert('blueicons/Happy.png','emotions_dlg.Happy');"><img src="img/blueicons/Happy.png" width="18" height="18" border="0" alt="{#emotions_dlg.Happy}" /></a></td>
           <td><a class="emoticon_link" role="button" title="{#emotions_dlg.Huh}" href="javascript:EmotionsDialog.insert('blueicons/Huh.png','emotions_dlg.Huh');"><img src="img/blueicons/Huh.png" width="18" height="18" border="0" alt="{#emotions_dlg.Huh}" /></a></td>
        <!-- </tr>
        <tr> -->
           <td><a class="emoticon_link" role="button" title="{#emotions_dlg.Love}" href="javascript:EmotionsDialog.insert('blueicons/Love.png','emotions_dlg.Love');"><img src="img/blueicons/Love.png" width="18" height="18" border="0" alt="{#emotions_dlg.Love}" /></a></td>
           <td><a class="emoticon_link" role="button" title="{#emotions_dlg.Sick}" href="javascript:EmotionsDialog.insert('blueicons/Sick.png','emotions_dlg.Sick');"><img src="img/blueicons/Sick.png" width="18" height="18" border="0" alt="{#emotions_dlg.Sick}" /></a></td>
           <td><a class="emoticon_link" role="button" title="{#emotions_dlg.Sleep}" href="javascript:EmotionsDialog.insert('blueicons/Sleep.png','emotions_dlg.Sleep');"><img src="img/blueicons/Sleep.png" width="18" height="18" border="0" alt="{#emotions_dlg.Sleep}" /></a></td>
           <td><a class="emoticon_link" role="button" title="{#emotions_dlg.Smile1}" href="javascript:EmotionsDialog.insert('blueicons/Smile1.png','emotions_dlg.Smile1');"><img src="img/blueicons/Smile1.png" width="18" height="18" border="0" alt="{#emotions_dlg.Smile1}" /></a></td>
           <td><a class="emoticon_link" role="button" title="{#emotions_dlg.Tear}" href="javascript:EmotionsDialog.insert('blueicons/Tear.png','emotions_dlg.Tear');"><img src="img/blueicons/Tear.png" width="18" height="18" border="0" alt="{#emotions_dlg.Tear}" /></a></td>
           <td><a class="emoticon_link" role="button" title="{#emotions_dlg.Tounge}" href="javascript:EmotionsDialog.insert('blueicons/Tounge.png','emotions_dlg.Tounge');"><img src="img/blueicons/Tounge.png" width="18" height="18" border="0" alt="{#emotions_dlg.Tounge}" /></a></td>
           <td><a class="emoticon_link" role="button" title="{#emotions_dlg.Wink1}" href="javascript:EmotionsDialog.insert('blueicons/Wink1.png','emotions_dlg.Wink1');"><img src="img/blueicons/Wink1.png" width="18" height="18" border="0" alt="{#emotions_dlg.Wink1}" /></a></td>
           <td><a class="emoticon_link" role="button" title="{#emotions_dlg.Yikes}" href="javascript:EmotionsDialog.insert('blueicons/Yikes.png','emotions_dlg.Yikes');"><img src="img/blueicons/Yikes.png" width="18" height="18" border="0" alt="{#emotions_dlg.Yikes}" /></a></td>
        </tr>    <tr><td>&nbsp;</td></tr>
        
   <th colspan="16">Popo Icons</th>
        <tr>
           <td><a class="emoticon_link" role="button" title="{#emotions_dlg.amazing}" href="javascript:EmotionsDialog.insert('popo/amazing.png','emotions_dlg.amazing');"><img src="img/popo/amazing.png" width="18" height="18" border="0" alt="{#emotions_dlg.amazing}" /></a></td>
           <td><a class="emoticon_link" role="button" title="{#emotions_dlg.big_smile}" href="javascript:EmotionsDialog.insert('popo/big_smile.png','emotions_dlg.big_smile');"><img src="img/popo/big_smile.png" width="18" height="18" border="0" alt="{#emotions_dlg.big_smile}" /></a></td>
           <td><a class="emoticon_link" role="button" title="{#emotions_dlg.cry1}" href="javascript:EmotionsDialog.insert('popo/cry1.png','emotions_dlg.cry1');"><img src="img/popo/cry1.png" width="18" height="18" border="0" alt="{#emotions_dlg.cry1}" /></a></td>
           <td><a class="emoticon_link" role="button" title="{#emotions_dlg.electric_shock}" href="javascript:EmotionsDialog.insert('popo/electric_shock.png','emotions_dlg.electric_shock');"><img src="img/popo/electric_shock.png" width="18" height="18" border="0" alt="{#emotions_dlg.electric_shock}" /></a></td>
           <td><a class="emoticon_link" role="button" title="{#emotions_dlg.exciting}" href="javascript:EmotionsDialog.insert('popo/exciting.png','emotions_dlg.exciting');"><img src="img/popo/exciting.png" width="18" height="18" border="0" alt="{#emotions_dlg.exciting}" /></a></td>
           <td><a class="emoticon_link" role="button" title="{#emotions_dlg.eyes_dropped}" href="javascript:EmotionsDialog.insert('popo/eyes_dropped.png','emotions_dlg.eyes_dropped');"><img src="img/popo/eyes_dropped.png" width="18" height="18" border="0" alt="{#emotions_dlg.eyes_dropped}" /></a></td>
           <td><a class="emoticon_link" role="button" title="{#emotions_dlg.girl}" href="javascript:EmotionsDialog.insert('popo/girl.png','emotions_dlg.girl');"><img src="img/popo/girl.png" width="18" height="18" border="0" alt="{#emotions_dlg.girl}" /></a></td>
           <td><a class="emoticon_link" role="button" title="{#emotions_dlg.grimace}" href="javascript:EmotionsDialog.insert('popo/grimace.png','emotions_dlg.grimace');"><img src="img/popo/grimace.png" width="18" height="18" border="0" alt="{#emotions_dlg.grimace}" /></a></td>
        <!-- </tr>
        <tr> -->
           <td><a class="emoticon_link" role="button" title="{#emotions_dlg.haha}" href="javascript:EmotionsDialog.insert('popo/haha.png','emotions_dlg.haha');"><img src="img/popo/haha.png" width="18" height="18" border="0" alt="{#emotions_dlg.haha}" /></a></td>
           <td><a class="emoticon_link" role="button" title="{#emotions_dlg.scorn}" href="javascript:EmotionsDialog.insert('popo/scorn.png','emotions_dlg.scorn');"><img src="img/popo/scorn.png" width="18" height="18" border="0" alt="{#emotions_dlg.scorn}" /></a></td>
           <td><a class="emoticon_link" role="button" title="{#emotions_dlg.secret_smile}" href="javascript:EmotionsDialog.insert('popo/secret_smile.png','emotions_dlg.secret_smile');"><img src="img/popo/secret_smile.png" width="18" height="18" border="0" alt="{#emotions_dlg.secret_smile}" /></a></td>
           <td><a class="emoticon_link" role="button" title="{#emotions_dlg.shame}" href="javascript:EmotionsDialog.insert('popo/shame.png','emotions_dlg.shame');"><img src="img/popo/shame.png" width="18" height="18" border="0" alt="{#emotions_dlg.shame}" /></a></td>
           <td><a class="emoticon_link" role="button" title="{#emotions_dlg.shocked}" href="javascript:EmotionsDialog.insert('popo/shocked.png','emotions_dlg.shocked');"><img src="img/popo/shocked.png" width="18" height="18" border="0" alt="{#emotions_dlg.shocked}" /></a></td>
           <td><a class="emoticon_link" role="button" title="{#emotions_dlg.unhappy}" href="javascript:EmotionsDialog.insert('popo/unhappy.png','emotions_dlg.unhappy');"><img src="img/popo/unhappy.png" width="18" height="18" border="0" alt="{#emotions_dlg.unhappy}" /></a></td>
           <td><a class="emoticon_link" role="button" title="{#emotions_dlg.victory}" href="javascript:EmotionsDialog.insert('popo/victory.png','emotions_dlg.victory');"><img src="img/popo/victory.png" width="18" height="18" border="0" alt="{#emotions_dlg.victory}" /></a></td>
           <td><a class="emoticon_link" role="button" title="{#emotions_dlg.what}" href="javascript:EmotionsDialog.insert('popo/what.png','emotions_dlg.what');"><img src="img/popo/what.png" width="18" height="18" border="0" alt="{#emotions_dlg.what}" /></a></td>
        </tr>     <tr><td>&nbsp;</td></tr>
       
<th colspan="16">More Popo's</th>
        <tr>
           <td colspan="2"><a class="emoticon_link" role="button" title="{#emotions_dlg.popoadore}" href="javascript:EmotionsDialog.insert('popobig/adore.png','emotions_dlg.popoadore');"><img src="img/popobig/adore.png" width="36" height="36" border="0" alt="{#emotions_dlg.popoadore}" /></a></td>
           <td colspan="2"><a class="emoticon_link" role="button" title="{#emotions_dlg.popoah}" href="javascript:EmotionsDialog.insert('popobig/ah.png','emotions_dlg.popoah');"><img src="img/popobig/ah.png" width="36" height="36" border="0" alt="{#emotions_dlg.popoah}" /></a></td>
           <td colspan="2"><a class="emoticon_link" role="button" title="{#emotions_dlg.popoangry}" href="javascript:EmotionsDialog.insert('popobig/angry.png','emotions_dlg.popoangry');"><img src="img/popobig/angry.png" width="36" height="36" border="0" alt="{#emotions_dlg.popoangry}" /></a></td>
           <td colspan="2"><a class="emoticon_link" role="button" title="{#emotions_dlg.popobaffle}" href="javascript:EmotionsDialog.insert('popobig/baffle.png','emotions_dlg.popobaffle');"><img src="img/popobig/baffle.png" width="36" height="36" border="0" alt="{#emotions_dlg.popobaffle}" /></a></td>
           <td colspan="2"><a class="emoticon_link" role="button" title="{#emotions_dlg.popobeat_ball}" href="javascript:EmotionsDialog.insert('popobig/beat_ball.png','emotions_dlg.popobeat_ball');"><img src="img/popobig/beat_ball.png" width="36" height="36" border="0" alt="{#emotions_dlg.popobeat_ball}" /></a></td>
           <td colspan="2"><a class="emoticon_link" role="button" title="{#emotions_dlg.popobeat_brick}" href="javascript:EmotionsDialog.insert('popobig/beat_brick.png','emotions_dlg.popobeat_brick');"><img src="img/popobig/beat_brick.png" width="36" height="36" border="0" alt="{#emotions_dlg.popobeat_brick}" /></a></td>
           <td colspan="2"><a class="emoticon_link" role="button" title="{#emotions_dlg.popobig_smile}" href="javascript:EmotionsDialog.insert('popobig/big_smile.png','emotions_dlg.popobig_smile');"><img src="img/popobig/big_smile.png" width="36" height="36" border="0" alt="{#emotions_dlg.popobig_smile}" /></a></td>
           <td colspan="2"><a class="emoticon_link" role="button" title="{#emotions_dlg.popoboss}" href="javascript:EmotionsDialog.insert('popobig/boss.png','emotions_dlg.popoboss');"><img src="img/popobig/boss.png" width="36" height="36" border="0" alt="{#emotions_dlg.popoboss}" /></a></td>
       </tr>
       
       <tr>
           <td colspan="2"><a class="emoticon_link" role="button" title="{#emotions_dlg.popoburn_joss_stick}" href="javascript:EmotionsDialog.insert('popobig/burn_joss_stick.png','emotions_dlg.popoburn_joss_stick');"><img src="img/popobig/burn_joss_stick.png" width="36" height="36" border="0" alt="{#emotions_dlg.popoburn_joss_stick}" /></a></td>
           <td colspan="2"><a class="emoticon_link" role="button" title="{#emotions_dlg.popocanny}" href="javascript:EmotionsDialog.insert('popobig/canny.png','emotions_dlg.popocanny');"><img src="img/popobig/canny.png" width="36" height="36" border="0" alt="{#emotions_dlg.popocanny}" /></a></td>
           <td colspan="2"><a class="emoticon_link" role="button" title="{#emotions_dlg.popofurious}" href="javascript:EmotionsDialog.insert('popobig/furious.png','emotions_dlg.popofurious');"><img src="img/popobig/furious.png" width="36" height="36" border="0" alt="{#emotions_dlg.popofurious}" /></a></td>
           <td colspan="2"><a class="emoticon_link" role="button" title="{#emotions_dlg.popoconfident}" href="javascript:EmotionsDialog.insert('popobig/confident.png','emotions_dlg.popoconfident');"><img src="img/popobig/confident.png" width="36" height="36" border="0" alt="{#emotions_dlg.popoconfident}" /></a></td>
           <td colspan="2"><a class="emoticon_link" role="button" title="{#emotions_dlg.popoconfuse}" href="javascript:EmotionsDialog.insert('popobig/confuse.png','emotions_dlg.popoconfuse');"><img src="img/popobig/confuse.png" width="36" height="36" border="0" alt="{#emotions_dlg.popoconfuse}" /></a></td>
           <td colspan="2"><a class="emoticon_link" role="button" title="{#emotions_dlg.popocry}" href="javascript:EmotionsDialog.insert('popobig/cry.png','emotions_dlg.popocry');"><img src="img/popobig/cry.png" width="36" height="36" border="0" alt="{#emotions_dlg.popocry}" /></a></td>
           <td colspan="2"><a class="emoticon_link" role="button" title="{#emotions_dlg.popodoubt}" href="javascript:EmotionsDialog.insert('popobig/doubt.png','emotions_dlg.popodoubt');"><img src="img/popobig/doubt.png" width="36" height="36" border="0" alt="{#emotions_dlg.popodoubt}" /></a></td>
           <td colspan="2"><a class="emoticon_link" role="button" title="{#emotions_dlg.popodribble}" href="javascript:EmotionsDialog.insert('popobig/dribble.png','emotions_dlg.popodribble');"><img src="img/popobig/dribble.png" width="36" height="36" border="0" alt="{#emotions_dlg.popodribble}" /></a></td>
       </tr>
       
       <tr>
           <td colspan="2"><a class="emoticon_link" role="button" title="{#emotions_dlg.popoembarrassed}" href="javascript:EmotionsDialog.insert('popobig/embarrassed.png','emotions_dlg.popoembarrassed');"><img src="img/popobig/embarrassed.png" width="36" height="36" border="0" alt="{#emotions_dlg.popoembarrassed}" /></a></td>
           <td colspan="2"><a class="emoticon_link" role="button" title="{#emotions_dlg.popofeel_good}" href="javascript:EmotionsDialog.insert('popobig/feel_good.png','emotions_dlg.popofeel_good');"><img src="img/popobig/feel_good.png" width="36" height="36" border="0" alt="{#emotions_dlg.popofeel_good}" /></a></td>
           <td colspan="2"><a class="emoticon_link" role="button" title="{#emotions_dlg.popohaha}" href="javascript:EmotionsDialog.insert('popobig/haha.png','emotions_dlg.popohaha');"><img src="img/popobig/haha.png" width="36" height="36" border="0" alt="{#emotions_dlg.popohaha}" /></a></td>
           <td colspan="2"><a class="emoticon_link" role="button" title="{#emotions_dlg.popohell_boy}" href="javascript:EmotionsDialog.insert('popobig/hell_boy.png','emotions_dlg.popohell_boy');"><img src="img/popobig/hell_boy.png" width="36" height="36" border="0" alt="{#emotions_dlg.popohell_boy}" /></a></td>
           <td colspan="2"><a class="emoticon_link" role="button" title="{#emotions_dlg.popolook_down}" href="javascript:EmotionsDialog.insert('popobig/look_down.png','emotions_dlg.popolook_down');"><img src="img/popobig/look_down.png" width="36" height="36" border="0" alt="{#emotions_dlg.popolook_down}" /></a></td>
           <td colspan="2"><a class="emoticon_link" role="button" title="{#emotions_dlg.popomatrix}" href="javascript:EmotionsDialog.insert('popobig/matrix.png','emotions_dlg.popomatrix');"><img src="img/popobig/matrix.png" width="36" height="36" border="0" alt="{#emotions_dlg.popomatrix}" /></a></td>
           <td colspan="2"><a class="emoticon_link" role="button" title="{#emotions_dlg.popomisdoubt}" href="javascript:EmotionsDialog.insert('popobig/misdoubt.png','emotions_dlg.popomisdoubt');"><img src="img/popobig/misdoubt.png" width="36" height="36" border="0" alt="{#emotions_dlg.popomisdoubt}" /></a></td>
           <td colspan="2"><a class="emoticon_link" role="button" title="{#emotions_dlg.popooh}" href="javascript:EmotionsDialog.insert('popobig/oh.png','emotions_dlg.popooh');"><img src="img/popobig/oh.png" width="36" height="36" border="0" alt="{#emotions_dlg.popooh}" /></a></td>
       </tr>
       
       <tr>
           <td colspan="2"><a class="emoticon_link" role="button" title="{#emotions_dlg.popoops}" href="javascript:EmotionsDialog.insert('popobig/ops.png','emotions_dlg.popoops');"><img src="img/popobig/ops.png" width="36" height="36" border="0" alt="{#emotions_dlg.popoops}" /></a></td>
           <td colspan="2"><a class="emoticon_link" role="button" title="{#emotions_dlg.poposad}" href="javascript:EmotionsDialog.insert('popobig/sad.png','emotions_dlg.poposad');"><img src="img/popobig/sad.png" width="36" height="36" border="0" alt="{#emotions_dlg.poposad}" /></a></td>
           <td colspan="2"><a class="emoticon_link" role="button" title="{#emotions_dlg.popostill_dreaming}" href="javascript:EmotionsDialog.insert('popobig/still_dreaming.png','emotions_dlg.popostill_dreaming');"><img src="img/popobig/still_dreaming.png" width="36" height="36" border="0" alt="{#emotions_dlg.popostill_dreaming}" /></a></td>
           <td colspan="2"><a class="emoticon_link" role="button" title="{#emotions_dlg.poposurrender}" href="javascript:EmotionsDialog.insert('popobig/surrender.png','emotions_dlg.poposurrender');"><img src="img/popobig/surrender.png" width="36" height="36" border="0" alt="{#emotions_dlg.poposurrender}" /></a></td>
           <td colspan="2"><a class="emoticon_link" role="button" title="{#emotions_dlg.poposweet_kiss}" href="javascript:EmotionsDialog.insert('popobig/sweet_kiss.png','emotions_dlg.poposweet_kiss');"><img src="img/popobig/sweet_kiss.png" width="36" height="36" border="0" alt="{#emotions_dlg.poposweet_kiss}" /></a></td>
           <td colspan="2"><a class="emoticon_link" role="button" title="{#emotions_dlg.popotired}" href="javascript:EmotionsDialog.insert('popobig/tired.png','emotions_dlg.popotired');"><img src="img/popobig/tired.png" width="36" height="36" border="0" alt="{#emotions_dlg.popotired}" /></a></td>
           <td colspan="2"><a class="emoticon_link" role="button" title="{#emotions_dlg.popotoo_sad}" href="javascript:EmotionsDialog.insert('popobig/too_sad.png','emotions_dlg.popotoo_sad');"><img src="img/popobig/too_sad.png" width="36" height="36" border="0" alt="{#emotions_dlg.popotoo_sad}" /></a></td>
           <td colspan="2"><a class="emoticon_link" role="button" title="{#emotions_dlg.popowhat}" href="javascript:EmotionsDialog.insert('popobig/what.png','emotions_dlg.popowhat');"><img src="img/popobig/what.png" width="36" height="36" border="0" alt="{#emotions_dlg.popowhat}" /></a></td>
       </tr>
</table>
    <br />
    <br />
	<div>{#emotions_dlg.usage}</div>
</div>
</body>
</html>

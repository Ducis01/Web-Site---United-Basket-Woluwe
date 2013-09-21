<?php
    
    $passage_ligne = "\n";
    $boundary = "-----=".md5(rand());
    
    
$recipient = "unitedbasketwoluwe_dt@hotmail.com,unitedbasketwoluwe-secretaire@hotmail.be ,$sender_email";
$subject = "Inscription via le site web";
    
    
$mailheaders = "From: Inscription United Basket Woluwe <no_reply@arcbluedevils.be> \n";
$mailheaders .= "Reply-To: $sender_email\n";
$mailheaders .= "MIME-Version: 1.0".$passage_ligne;
$mailheaders .= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
    
$msg = "
    <html><head></head><body>
    <p><b>Merci !</b></p>
<p>La demande d&rsquo;inscription de votre enfant au club de basket United Basket Woluwe ( ex-Wolu Blue Devils ) a bien &eacute;t&eacute; enregistr&eacute;e. Votre inscription implique l&rsquo;acceptation du <b>R&eacute;glement d&rsquo;Ordre Int&eacute;rieur (ROI)</b> qui est disponible sur notre site et peut &ecirc;tre consult&eacute;e <a href='http://www.unitedbasketwoluwe.be/team/?page_id=313'>via ce lien</a>.  Vous y trouverez tous les renseignements (cotisations) utiles.  Lisez-le attentivement.\n</p>
<p><u><b>1. Coordonn&eacute;es de l&rsquo;enfant\n</b></u></p>
Pr&eacute;nom:\t$sender_firstname<br>
Nom:\t$sender_name<br>
E-Mail:\t$sender_email<br>
Adresse:\t$sender_address<br>
Code Postal:\t$sender_zip<br>
Localit&eacute;:\t$sender_city<br>
T&eacute;l&eacute;phone Priv&eacute;:\t$sender_privatephone<br>
GSM:\t$sender_gsm<br>
Pr&eacute;nom enfant:\t$sender_childfirstname<br>
Nom enfant:\t$sender_childname<br>
Date naissance enfant:\t$sender_childbirthdate<br>
Num&eacute;ro National:\t$sender_childnumber<br>
Nationalit&eacute;:\t$sender_nationality<br>
Pratique du basket:\t$sender_basket<br>
Si oui club:\t$sender_childclub<br>
Message:\t$message<br>
    
    <p><u><b>2. Un essai ?\n</b></u></p>
    
    <p>Avant de confirmer l&rsquo;inscription et jusqu&rsquo;&agrave; la fin des entrainements le 24 mai (25 mai en baby), votre enfant peut participer &agrave; un entrainement du vendredi au Centre Sportif de la Woluwe (samedi pour les babys).\n</p>
    
    <p>Les heures d&rsquo;entra&icirc;nements et la cat&eacute;gorie &agrave; laquelle appartient votre enfant figurent sur notre site.\n</p>
    
    <p>Pour ceux qui s&rsquo;inscrivent durant les vacances d&rsquo;&eacute;t&eacute; vous disposez, si vous le souhaitez, de deux entrainements d&eacute;couvertes la premi&egrave;re quinzaine de septembre. Si cela ne convient pas l&rsquo;acompte vous sera rembours&eacute;.\n</p>
    
    <p>N&eacute;anmoins, il est indispensable de confirmer d&egrave;s &agrave; pr&eacute;sent votre inscription, le nombre de places disponibles &eacute;tant limit&eacute; dans certaines cat&eacute;gories et  &agrave; cette fin il est indispensable de :\n
        <ul><li>Effectuer le paiement d&rsquo;un acompte de 100 euros (65 euros pour les baby) minimum dans les 5 jours suivant l&rsquo;inscription ou l&rsquo;essai sur le compte <b>BE 46 1915 3104 3236</b> avec en communication le nom et le pr&eacute;nom de l&rsquo;enfant. A d&eacute;faut de ce versement, l&rsquo;inscription ne sera pas retenue en ordre utile.
        <li>Le solde de la moiti&eacute; de la cotisation est &agrave; verser au plus tard avant le d&eacute;but des entrainements qui commencent au plus tard durant la 1er semaine de septembre. Les dates pr&eacute;cises seront affich&eacute;es sur notre site au cours du mois d&rsquo;ao&ucirc;t.</li></ul>\n</p>
    
    <p>L&rsquo;acompte et les montants pay&eacute;s ne sont pas rembours&eacute;s en cas d&rsquo;annulation de votre part sans que l&rsquo;enfant se pr&eacute;sente aux entrainements d&eacute;couvertes (mais bien si l&rsquo;annulation intervient suite &agrave; deux s&eacute;ances infructueuses durant la premi&egrave;re quinzaine de septembre ou &agrave; notre initiative).  L&rsquo;inscription dans certaines &eacute;quipes est soumise par le club &agrave; une &eacute;valuation des aptitudes techniques du joueur.\n</p>
    
<p><u><b>3. Autres formalit&eacute;s \n</b></u></p>
    
    <p>Nous vous contacterons ensuite concernant la signature des documents d&rsquo;affiliation &agrave; la F&eacute;d&eacute;ration de basket-ball (ou des documents de mutation, si votre enfant &eacute;tait d&eacute;j&agrave; affili&eacute; &agrave; un club).  Le cas &eacute;ch&eacute;ant ces formalit&eacute;s peuvent &ecirc;tre accomplies lors de la premi&egrave;re semaine d&rsquo;entrainement.</p>
    
    <p>Pour tout autre renseignement n&rsquo;h&eacute;sitez pas &agrave; nous adresser un mail.\n</p>
    
    <p>En vous remerciant pour la confiance que vous nous accordez, nous vous souhaitons d&egrave;s &agrave; pr&eacute;sent la bienvenue et beaucoup de plaisir sportif dans notre club.\n</p>
    
    <p>Le comit&eacute; organisateur de United Basket Woluwe </p> \n
    
    
    </body></html>";
    
    $message.= $passage_ligne."--".$boundary.$passage_ligne;
    //=====Ajout du message au format HTML
    $message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
    $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
    $message.= $passage_ligne.$msg.$passage_ligne;
    //==========
    $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
    $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
    //==========
    
    
    
mail($recipient, $subject, $message, $mailheaders);
echo "<HTML><HEAD>";
echo "<TITLE>Formulaire_inscription_envoye</TITLE></HEAD><BODY bgcolor=f5f4f4>";
echo "<H1 align=center><font face=ARIAL>Demande d&rsquo;inscription envoy&eacute;e</FONT></H1>";
echo "<P><FONT FACE=ARIAL size=2>Bonjour,<BR><BR>Un mail de confirmation &agrave; l&rsquo;adresse que vous avez mentionn&eacute;e dans le formulaire doit vous parvenir dans les prochaines minutes.<BR><BR>
<b>Si vous ne recevez pas cet e-mail, veuillez r&eacute;essayer ou envoyer un mail &agrave; <a href='mailto:unitedbasketwoluwe@hotmail.be'>cette adresse</a> en communiquant les diff&eacute;rentes informations demand&eacute;es dans le formulaire.</b><BR><BR>
    Apr&egrave;s r&eacute;ception de votre demande ou de votre mail, nous vous enverrons &agrave; notre tour un mail avec les modalit&eacute;s pratiques.<BR><BR>Cordialement.<BR><BR>
United Basket Woluwe</font></P>";
echo "</BODY></HTML>";
?> 

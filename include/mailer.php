<? 
/**
 * Mailer.php
 *
 * The Mailer class is meant to simplify the task of sending
 * emails to users. Note: this email system will not work
 * if your server is not setup to send mail.
 *
 * If you are running Windows and want a mail server, check
 * out this website to see a list of freeware programs:
 * <http://www.snapfiles.com/freeware/server/fwmailserver.html>
 *
 * Written by: Jpmaster77 a.k.a. The Grandmaster of C++ (GMC)
 * Last Updated: August 19, 2004
 */
 
class Mailer
{
   /**
    * sendWelcome - Sends a welcome message to the newly
    * registered user, also supplying the username and
    * password.
    */
   function sendWelcome($user, $email, $pass){
      $from = "From: ".EMAIL_FROM_NAME." <".EMAIL_FROM_ADDR.">";
      $subject = "bludot - Welcome!";
      $body = $user.",\n\n"
             ."Welcome! You've just registered at the bludot Site "
             ."with the following information:\n\n"
             ."Username: ".$user."\n"
             ."Password: ".$pass."\n\n"
             ."If you ever lose or forget your password, a new "
             ."password will be generated for you and sent to this "
             ."email address, if you would like to change your "
             ."email address you can do so by going to the "
             ."Settings->User Settings.\n\n"
             ."If you are a Developer or want to be one please email: dev@bludotos.com\n"
             ."You will be verified by the Administrator for access to the Developer Center"
             ."- Bludot Administrator";

      return mail($email,$subject,$body,$from);
   }
   
   /**
    * sendNewPass - Sends the newly generated password
    * to the user's email address that was specified at
    * sign-up.
    */
   function sendNewPass($user, $email, $pass){
      $from = "From: ".EMAIL_FROM_NAME." <".EMAIL_FROM_ADDR.">";
      $subject = "bludot - Your new password";
      $body = $user.",\n\n"
             ."We've generated a new password for you at your "
             ."request, you can use this new password with your "
             ."username to log in to http://bludotos.com \n\n"
             ."Username: ".$user."\n"
             ."New Password: ".$pass."\n\n"
             ."It is recommended that you change your password "
             ."to something that is easier to remember, which "
             ."can be done by going to the My Account page "
             ."after signing in.\n\n"
             ."- Bludot Administrator";
             
      return mail($email,$subject,$body,$from);
   }
   
   function sendunlock($user, $email, $pass){
      $from = "From: ".EMAIL_FROM_NAME." <".EMAIL_FROM_ADDR.">";
      $subject = "bludot - Your new password";
      $body = $user.",\n\n"
             ."We've generated a code for you at your "
             ."request, you can use this code to unlock "
             ."your account. \n\n"
             ."http://bludotos.com/unlock.php?code=".$pass."\n\n"
             ."It is recommended that you change your password "
             ."to something more difficult, which "
             ."can be done by going to the Preferences app "
             ."after signing in.\n\n"
             ."- Bludot Administrator";
             
      return mail($email,$subject,$body,$from);
   }
};

/* Initialize mailer object */
$mailer = new Mailer;
 
?>

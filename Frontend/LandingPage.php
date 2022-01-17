<!--
created  by  @Hoang
-->
<?php
session_start();

?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <title>LandingPage</title>
    <link rel="stylesheet" href="../CSS/LandingPage.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="../Frontend/LandingPage.js"></script>
</head>
<body>
<?php include "../Frontend/NavBar.php" ?>


<div class="UnderNavbar">
    <!--------------------------------------- Section für linke Seite für mittlere Einrückung ----------------------------------- -->
    <div class="LeftSide">
        <!--------------------------------------- Section für IconBar ----------------------------------- -->
        <div class="IconBar">
            <ul >
                <br>
                <li><button>    <a style="color:black; text-decoration:none" href="../Frontend/FAQ_Page.php" >            <i class="material-icons">create          </i>    Create New Post                 </a></button></li>
                <br>
                <li><button>    <a style="color:black; text-decoration:none" href="../Frontend/FAQ_Page.php" >            <i class="material-icons">help            </i>    FAQ                             </a></button></li>
                <br>
                <li> <button>   <a style="color:black; text-decoration:none" href="../Backend/SessionValidation.php" >    <i class="material-icons">account_circle  </i>    Mein Account                    </a></button></li>
                <br>
                <li><button>    <a style="color:black; text-decoration:none" href="../Backend/logout.php" >               <i class="material-icons">logout          </i>    Logout                          </a></button></li>
                <br>
            </ul>
        </div>
    </div>




    <!-------------------------------------  Section für Post ------------------------------------->

    <div class="PostSection">

        <!-------------------------------------  WelcomeCard ------------------------------------->
        <div class='WelcomeCard'>
                <article>
                    <?php
                    require_once('../Backend/CFeedsloading.php');
                    CFeedsloading::generateWelcomeCard();
                    ?>
                </article>
        </div>

        <!-------------------------------------  User Post  ------------------------------------->
                    <?php
                        require_once('../Backend/CFeedsloading.php');
                        $KeyIndex = count(CFeedsloading::getAllPostId());

                        //started by one, because the Key in Post - Database started by one
                        //everytime the loop is called, the PostKey will be increment by 1, so all the keys will be load
                        $PostKey   = 1;

                        /*
                            PostNumber is a specific Value for the functions "generateHeadlineID(), generateLikeButtonID(), generateCommentButtonID(), generateShareButtonID()
                            Those function has the task to generate different IDs from each other for the HTML Tags
                         */
                        $IDNumber = 1;

                        for ($Index = 0; $Index < $KeyIndex ; $Index++)
                        {
                            $HeadlineID         = CFeedsloading::generateHeadlineID($IDNumber);
                            $LikeButtonID       = CFeedsloading::generateLikeButtonID($IDNumber);
                            $CommentButtonID    = CFeedsloading::generateCommentButtonID($IDNumber);
                            $ShareButtonID      = CFeedsloading::generateShareButtonID($IDNumber);
                            $LikeLabelID        = CFeedsloading::generateLikeLabel($IDNumber);
                            $CommentLabelID     = CFeedsloading::generateCommentLabel($IDNumber);
                            CFeedsloading::generateHtml($PostKey, $HeadlineID, $LikeButtonID, $CommentButtonID, $ShareButtonID, $LikeLabelID, $CommentLabelID);
                            $PostKey =  $PostKey + 1;
                            $IDNumber = $IDNumber + 1;
                        }

                    ?>
    </div>

    <!-------------------------------------  Section rechte Seite für mittlere Einrückung ------------------------------------->
    <div class="RightSide" id="RightSide">

    </div>





</div>
</body>
</html>

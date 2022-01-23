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
    <!--------------------------------------- Left Section for indentation of the Midpart ----------------------------------- -->
    <div class="LeftSide">
        <!--------------------------------------- Section for IconBar ----------------------------------- -->
        <div class="IconBar">
            <ul >
                <br>
                <li><button>    <a style="color:black; text-decoration:none" href="../Backend/CreatePostSuperUserValidation.php" >                  <i class="material-icons">create          </i>    Create New Post                 </a></button></li>
                <br>
                <li><button>    <a style="color:black; text-decoration:none" href="../Frontend/FAQ_Page.php" >                                      <i class="material-icons">help            </i>    FAQ                             </a></button></li>
                <br>
                <li> <button>   <a style="color:black; text-decoration:none" href="../Backend/UserProfilValidation.php" >                           <i class="material-icons">account_circle  </i>    Mein Account                    </a></button></li>
                <br>
                <li><button>    <a style="color:black; text-decoration:none" href="../Backend/logout.php" >                                         <i class="material-icons">logout          </i>    Logout                          </a></button></li>
                <br>
            </ul>
        </div>
    </div>




    <!-------------------------------------  Section for Post && Midpart ------------------------------------->

    <div class="PostSection">

        <!-------------------------------------  WelcomeCard ------------------------------------------------------------

            - The Welcome Card has the task to finding out the Users First and Lastname and greet the User.
            - The 2nd Task is to show if a Session is started or not
            - The Welcome Card will be build in the Backend. In the class "CFeedsloading". For more Information go to CFeedsloading
        ----------------------------------------------------------------------------------------------------------------->

        <div class='WelcomeCard'>
                <article>
                    <?php
                    require_once('../Backend/CFeedsloading.php');
                    CFeedsloading::generateWelcomeCard();
                    ?>
                </article>
        </div>

        <!-------------------------------------  User Post  --------------------------------------------------------------

        The User Post will be build in the dynamically in the Backend. For more technical details go to the "CFeedsloading::generateHtml".

        // ========= MAIN IDEA =========

        // ========= 1st Phase =========
        1.1 Step: Load all the PostID of the Table Post into an array and save them in a local variable "$PostKeyIndex"
        1.2 Step: sort the data in ascending order of the Array "$PostKeyIndex"

        // +--------+-----------------+-------------------------+---------------+------+-----+
        // | PostID | SuperUserRefKey | Headline                | Pricturefile  | .... |     | |
        // +--------+-----------------+-------------------------+---------------+------+-----+ |
        // | 1      | 1               | Wunderschönes Lissabon  | ../img        | ...  | ... | |
        // +--------+-----------------+-------------------------+---------------+------+-----+ |
        // | 2      | 2               | Metropole  - London     | ../img        | ...  | ... | | ======> array ======> count() ======> sort()
        // +--------+-----------------+-------------------------+---------------+------+-----+ |
        // | 3      | 3               | Barcelona - Mehr ...    | ../img        | ...  | ... | |
        // +--------+-----------------+-------------------------+---------------+------+-----+ |
        // | 4      | 4               | ...                     | ../img        | ...  | ... | |
        // +--------+-----------------+-------------------------+---------------+------+-----+ |

        1.3 Step: Define a $IDNumber = 1, this will be use for the HTML ID-Tag Generator

        // ========= 2nd Phase =========

        2.1 Step: Knowing from the counts of the PostID, we know how many Post the program has to generate => building a for - loops which
        will be stopped, if the value is bigger than the counted PostID value:
        "for ($Index = 0; $Index < $KeyIndex ; $Index++)"

        2.2 Step: Using the ID TagGenerator to create for every button and layer an unique identifier

        2.3 Step: Calling the Post Builder and give this Builder parameters, which will be use for the unique identifier:
        Parameters: $HeadlineID, $LikeButtonID,$CommentButtonID,$LocationButtonID,$LikeLabelID,$CommentLabelID

         // ========= 3nd Phase =========

        3.1 Step: WHY DO WE NEED SPECIFIC IDENTIFIER?

        The Post consist as an article, which has headline, paragraph, labels and buttons. For the comments, likes and location button
        and the interaction with the user we have to declare specific IDs of the tags,
        because it will be used by DOM and Vanilla Javascript for the user interaction (through AJAX/XMLHttpRequest).


        3.1 HOW DOES THE POST BUILDER WORKS?

        The Builder will be generated in the Class CFeedsloading. It consist as an article, which has headline, paragraph, labels and buttons.
        Every Label and buttons have their own unique identifier and every button has an javascript function. Those funtion will get parameters,
        which are create by PHP but using as an string in javasript.

        It will generate as many post as the loop is going on.

        3.2 HOW DOES THE LIKES AND COMMENTS WORKS?

        Likes and Comments are generated through AJAX and will be sent over HTTP Request.

        For more information look into our documentation.


        //  ========= MAIN IDEA =========





        ----------------------------------------------------------------------------------------------------------------->
                    <?php
                        require_once('../Backend/CFeedsloading.php');
                        $PostKeyIndex   = CFeedsloading::getAllPostId();
                        sort($PostKeyIndex);


                        $KeyIndex = count(CFeedsloading::getAllPostId());

                        /*
                            PostNumber is a specific Value for the functions "generateHeadlineID(), generateLikeButtonID(), generateCommentButtonID(), generateShareButtonID()
                            Those function has the task to generate different IDs from each other for the HTML Tags
                         */
                        $IDNumber = 1;

                        for ($Index = 0; $Index < $KeyIndex ; $Index++)
                        {

                            $PostKey = implode($PostKeyIndex[$Index]);
                            $HeadlineID         = CFeedsloading::generateHeadlineID($IDNumber);
                            $LikeButtonID       = CFeedsloading::generateLikeButtonID($IDNumber);
                            $CommentButtonID    = CFeedsloading::generateCommentButtonID($IDNumber);
                            $LocationButtonID   = CFeedsloading::generateLocationButtonID($IDNumber);
                            $LikeLabelID        = CFeedsloading::generateLikeLabel($IDNumber);
                            $CommentLabelID     = CFeedsloading::generateCommentLabel($IDNumber);
                            CFeedsloading::generateHtml($PostKey, $HeadlineID, $LikeButtonID, $CommentButtonID, $LocationButtonID, $LikeLabelID, $CommentLabelID);
                            $IDNumber = $IDNumber + 1;
                        }

                    ?>
    </div>

    <!------------------------------------- Left Section for indentation of the Midpart and CommentSection ------------------------------------->
    <div class="RightSide" id="RightSide"></div>

</div>

</body>
</html>

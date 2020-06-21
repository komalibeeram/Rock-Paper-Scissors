<?php
    $human='';
    $computer='';
    $names = array('Rock','Paper','Scissor');
    if (isset($_POST['human'])){
        $human = $_POST['human'];
    }
    $randIndex = array_rand($names);
    $computer = $names[$randIndex];
    $result = check($computer,$human);
    // echo $computer;
    // echo $human;
    $Img = display($human,$computer);

    function display($human,$computer){
        $dis = array();
        if ($human == '' || $computer == ''){
            $humanImg = '';
        }
        if ($human == 'Rock'){
            $humanImg = '<i class="fas fa-hand-rock" style="font-size:64px; margin-left: 200px; margin-top:50px"></i>';
        }else if ($human == 'Paper'){
            $humanImg = '<i class="fas fa-hand-paper" style="font-size:64px; margin-left: 200px; margin-top:50px"></i>';
        }else if ($human == 'Scissor'){
            $humanImg = '<i class="fas fa-hand-scissors" style="font-size:64px; margin-left: 200px; margin-top:50px"></i>';
        }
        if ($computer == 'Rock'){
            $compImg = '<i class="fas fa-hand-rock" style="font-size:64px; margin-left: 250px; margin-top:50px"></i>';
        }else if ($computer == 'Paper'){
            $compImg = '<i class="fas fa-hand-paper" style="font-size:64px; margin-left: 250px; margin-top:50px"></i>';
        }else if ($computer == 'Scissor'){
            $compImg = '<i class="fas fa-hand-scissors" style="font-size:64px; margin-left: 250px; margin-top:50px"></i>';
        }
        array_push($dis,$humanImg);
        array_push($dis, $compImg);
        return $dis;
    }
    function  check($computer, $human){
        if ($human == $computer){
           return "Oops! It is a draw!";
        } else if ($human == 'Scissor' && $computer == 'Rock'){
            return 'Sorry! You lose!';
        } else if($human == 'Paper' && $computer == 'Rock'){
            return 'Yay! You win!';
        } else if ($human == 'Rock' && $computer == 'Scissor'){
            return 'Yay! You win!';
        } else if ($human == 'Paper' && $computer == 'Scissor'){
            return 'Sorry! You lose!';
        } else if ($human == 'Rock' && $computer == 'Paper'){
            return 'Sorry! You lose!';
        } else if ($human =='Scissor' && $computer == 'Paper'){
            return 'Yay! You win!';
        }
    }            
?>    
<html>
    <head>
        <title>Rock paper scissors</title> 
        <link rel="stylesheet" href="style1.css">
        <script src="https://kit.fontawesome.com/2db298c112.js" crossorigin="anonymous"></script> 
    </head>
    <body>
    <div class='row'>
        <div class="column-left">
            <h1>YOU</h1>
            <form method="post"> 
                <input type="submit" class='button' name="human" value="Rock" style=" 
                margin-left: 100px;
                margin-top: 50px;
                font-size: 24px;
                border-radius: 12px;
                transition-duration: 0.4s;
                color:#EB3F3F;
                padding: 10px 10px;"/> 
                <input type="submit" class='button' name="human" value="Paper" style=" 
                margin-left: 100px;
                margin-top: 50px;
                font-size: 24px;
                border-radius: 12px;
                transition-duration: 0.4s;
                color:#EB3F3F;
                padding: 10px 10px;"/>
                <input type="submit" class='button' name="human" value="Scissor" style=" 
                margin-left: 100px;
                margin-top: 50px;
                font-size: 24px;
                border-radius: 12px;
                transition-duration: 0.4s;
                color:#EB3F3F;
                padding: 10px 10px;"my/> 
            </form>
            <pre>
                <?php
                    $score = 0;
                    
                    if ($human == ''){
                        echo '<span style="font-size: 24px;margin-left: 100px;">';
                        echo "Please select a strategy!\n";
                    } else {
                        print "$Img[0] \n";
                        echo '<span style="font-size: 24px;margin-left: 250px;">' ;
                        echo $result;
                    }
                    // Result: $result;                        
                    
                    
                    // print "Your play: \n";
                    // print "Computer play: ";
                ?>
            </pre>
             
        </div>
        <div class="column-right">
            <h1>COMPUTER</h1>
            <form> 
                <input type="submit" class='button' name="human" value="Rock" style=" 
                margin-left: 150px;
                margin-top: 50px;
                font-size: 24px;
                border-radius: 12px;
                transition-duration: 0.4s;
                color:#EB3F3F;
                padding: 10px 10px;"/> 
                <input type="submit" class='button' name="human" value="Paper" style=" 
                margin-left: 100px;
                margin-top: 50px;
                font-size: 24px;
                border-radius: 12px;
                transition-duration: 0.4s;
                color:#EB3F3F;
                padding: 10px 10px;"/>
                <input type="submit" class='button' name="human" value="Scissor" style=" 
                margin-left: 100px;
                margin-top: 50px;
                font-size: 24px;
                border-radius: 12px;
                transition-duration: 0.4s;
                color:#EB3F3F;
                padding: 10px 10px;"my/> 
            </form>
            <pre>
                <?php
                    $scoreC = 0;
                    
                    if ($human == ''){
                        print "\n";
                    } else {
                        print "$Img[1] \n";
                        
                        // if ($result == 'You win'){
                        //     print "Score: $scoreC";
                        // }
                    }
                    // Result: $result;
                    
                    // print "Your play: \n";
                    // print "Computer play: ";
                ?>
            </pre>
        </div>
    </div>
    </body>
</html>

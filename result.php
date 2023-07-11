<?php
  require('data.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="Style.css">  
<title>Pokemon Searcher</title>
</head>
<body>
  <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
            <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
            <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
            <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
            <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
            <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
            <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
            <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
            <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
            <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
          </div>
        </div>
      </div>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          <h1><a href="" rel="dofollow">Pokefinder</a></h1>
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <form id="stripe-login" action="index.php" >
                <div class="field padding-bottom--24">
                  <div id="div_root">
                    <div id="nametag"> 
                      <h2><a href="" rel="dofollow"><?php echo strtoupper($pokemon); ?></a></h2>
                      <div id="type">
                          <p><?php echo $type; ?></p>
                          <?php echo'<img src="'.$logo.'" width="20">' ?>
                      </div>
                    </div>
                      <?php echo '<img id="imagePkm" src="'.$image.'" width="200">' ?>
                      <span id="desc">Description</span>
                         <p id="descText"><?php echo strtoupper($description); ?></p>
                      <span id="atk">Skill</span>
                        <div id="skill">
                            <p><?php echo $atk; ?></p>
                            <?php echo'<img src="'.$atkLogo.'" width="20">' ?>
                        </div>
                  </div>
                </div>
                <div class="field padding-bottom--24">
                  <input type="submit"  value="Back">
                </div>
                
              </form>
            </div>
          </div>
          <div class="footer-link padding-top--24">
            <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
              <span><a href="#">© Stackfindover</a></span>
              <span><a href="#">Contact</a></span>
              <span><a href="#">Privacy & terms</a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<style>
  #imagePkm{

    border-radius: 25%;
  }
  #type{
    display: flex;
    align-self: end;
    justify-content: space-between;

  }
  #descText{
    font-size: 11px;
  }
  #atk{
    color: black;
    display: flex;
    font-weight: bolder;
    align-self: start;
    
  }
  #desc{
    color: black;
    display: flex;
    font-weight: bolder;
    align-self: start;
  }
  #div_root{
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  #skill{
    width: 100% ;
    display: flex;
    justify-content: space-around;
    align-items: center;

  }
  #nametag{
    width: 100% ;
    display: flex;
    justify-content: space-between;
    align-items: center;

  }
</style>
</html>

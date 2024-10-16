
<script type="text/javascript" src="scripts/jquery.cookies.2.2.0.min.js"></script> 


<?php
    $logo = get_field("logo","option");
    $menu = get_field("menu","option");
    $icon = get_field("icon","option");
    $button = get_field("button","option");
  ?>
  <div class="header">
      <div class="header-container">
        <div class="logo-container">
          <div class="logo">
            <img src="<?php echo $logo ["url"]?>">
          </div>
        </div>
          <div class="link-align">
            <?php foreach ($menu as $menu_item){
                if($menu_item ['choose_type'] == "normal"){
                  ?>
                      <div class="link-container">
                        <div class="link">
                          <a href="<?php echo $menu_item ["link"]["url"]?>"><?php echo $menu_item ["link"]["title"]?></a>
                        </div>
                      </div>
                  <?php
                }
              ?>
            <?php }?>
          </div>        
        <div class="align">
          <?php foreach($icon as $iconss){ ?>
              <div class="wrap">
                  <div class="image">
                  
                  <a href="<?php echo $iconss ["links"]["url"]?>"><img src="<?php echo $iconss['icons']['url'];?>"></a>
                  </div>
              </div>
          <?php }?>
          <div class="button-container">
            <?php foreach($button as $press){ ?>
                <div class="button-wrap">
                    <div class="button">
                    <a href="<?php echo $press ["buttons"]["url"]?>"><?php echo $press ["buttons"]["title"]?></a>
                    </div>
                </div>
            <?php }?>
          </div>
        </div>  

      </div>  
    </div>
    <div class="mobile-container">
          <div class="logo-mobile">
                  <img src="<?php echo $logo ["url"]?>">
                </div>
                
                  <div class="hamburger-wrap">
                <div class="hamburger-open"><svg width="30" height="30" viewBox="0 0 30 30" fill="#00000" xmlns="http://www.w3.org/2000/svg">
                <g opacity="1">
                <path d="M3.74998 5.625C3.58434 5.62266 3.41989 5.65326 3.26618 5.71503C3.11247 5.7768 2.97257 5.8685 2.8546 5.9848C2.73664 6.10111 2.64297 6.2397 2.57904 6.39252C2.5151 6.54534 2.48218 6.70935 2.48218 6.875C2.48218 7.04066 2.5151 7.20466 2.57904 7.35749C2.64297 7.51031 2.73664 7.6489 2.8546 7.7652C2.97257 7.88151 3.11247 7.97321 3.26618 8.03498C3.41989 8.09674 3.58434 8.12735 3.74998 8.125H26.25C26.4156 8.12735 26.5801 8.09674 26.7338 8.03498C26.8875 7.97321 27.0274 7.88151 27.1454 7.7652C27.2633 7.6489 27.357 7.51031 27.4209 7.35749C27.4849 7.20466 27.5178 7.04066 27.5178 6.875C27.5178 6.70935 27.4849 6.54534 27.4209 6.39252C27.357 6.2397 27.2633 6.10111 27.1454 5.9848C27.0274 5.8685 26.8875 5.7768 26.7338 5.71503C26.5801 5.65326 26.4156 5.62266 26.25 5.625H3.74998ZM3.74998 13.75C3.58434 13.7477 3.41989 13.7783 3.26618 13.84C3.11247 13.9018 2.97257 13.9935 2.8546 14.1098C2.73664 14.2261 2.64297 14.3647 2.57904 14.5175C2.5151 14.6703 2.48218 14.8343 2.48218 15C2.48218 15.1657 2.5151 15.3297 2.57904 15.4825C2.64297 15.6353 2.73664 15.7739 2.8546 15.8902C2.97257 16.0065 3.11247 16.0982 3.26618 16.16C3.41989 16.2217 3.58434 16.2523 3.74998 16.25H26.25C26.4156 16.2523 26.5801 16.2217 26.7338 16.16C26.8875 16.0982 27.0274 16.0065 27.1454 15.8902C27.2633 15.7739 27.357 15.6353 27.4209 15.4825C27.4849 15.3297 27.5178 15.1657 27.5178 15C27.5178 14.8343 27.4849 14.6703 27.4209 14.5175C27.357 14.3647 27.2633 14.2261 27.1454 14.1098C27.0274 13.9935 26.8875 13.9018 26.7338 13.84C26.5801 13.7783 26.4156 13.7477 26.25 13.75H3.74998ZM3.74998 21.875C3.58434 21.8727 3.41989 21.9033 3.26618 21.965C3.11247 22.0268 2.97257 22.1185 2.8546 22.2348C2.73664 22.3511 2.64297 22.4897 2.57904 22.6425C2.5151 22.7953 2.48218 22.9593 2.48218 23.125C2.48218 23.2907 2.5151 23.4547 2.57904 23.6075C2.64297 23.7603 2.73664 23.8989 2.8546 24.0152C2.97257 24.1315 3.11247 24.2232 3.26618 24.285C3.41989 24.3467 3.58434 24.3773 3.74998 24.375H26.25C26.4156 24.3773 26.5801 24.3467 26.7338 24.285C26.8875 24.2232 27.0274 24.1315 27.1454 24.0152C27.2633 23.8989 27.357 23.7603 27.4209 23.6075C27.4849 23.4547 27.5178 23.2907 27.5178 23.125C27.5178 22.9593 27.4849 22.7953 27.4209 22.6425C27.357 22.4897 27.2633 22.3511 27.1454 22.2348C27.0274 22.1185 26.8875 22.0268 26.7338 21.965C26.5801 21.9033 26.4156 21.8727 26.25 21.875H3.74998Z" fill="black"/>
                </g>
                </svg>
                </div>
                <div class="hamburger-close"><svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" width="30px" height="30px">    <path d="M 7 4 C 6.744125 4 6.4879687 4.0974687 6.2929688 4.2929688 L 4.2929688 6.2929688 C 3.9019687 6.6839688 3.9019687 7.3170313 4.2929688 7.7070312 L 11.585938 15 L 4.2929688 22.292969 C 3.9019687 22.683969 3.9019687 23.317031 4.2929688 23.707031 L 6.2929688 25.707031 C 6.6839688 26.098031 7.3170313 26.098031 7.7070312 25.707031 L 15 18.414062 L 22.292969 25.707031 C 22.682969 26.098031 23.317031 26.098031 23.707031 25.707031 L 25.707031 23.707031 C 26.098031 23.316031 26.098031 22.682969 25.707031 22.292969 L 18.414062 15 L 25.707031 7.7070312 C 26.098031 7.3170312 26.098031 6.6829688 25.707031 6.2929688 L 23.707031 4.2929688 C 23.316031 3.9019687 22.682969 3.9019687 22.292969 4.2929688 L 15 11.585938 L 7.7070312 4.2929688 C 7.5115312 4.0974687 7.255875 4 7 4 z"/></svg></div>
              </div>
            </div>    

    <div class="mobile-navigation">
      <div class="container">
        <div class="nav-wrap">
        <?php foreach ($menu as $menu_item){
                if($menu_item ['choose_type'] == "normal"){
                  ?>
                      <div class="menu-item">
                          <a href="<?php echo $menu_item ["link"]["url"]?>"><?php echo $menu_item ["link"]["title"]?></a>
                      </div>
                  <?php
                }
            
              ?>
            <?php }?>
        </div>
        <?php foreach($icon as $iconss){ ?>
              <div class="wrap">
                  <div class="image">
                  <a href="<?php echo $iconss ["links"]["url"]?>"> <img src="<?php echo $iconss['icons']['url'];?>"></a>
                  </div>
              </div>
          <?php }?>
          <?php foreach($button as $press){ ?>
              <div class="button-wrap">
                  <div class="button">
                  <a href="<?php echo $press ["buttons"]["url"]?>"><?php echo $press ["buttons"]["title"]?></a>

                  </div>
              </div>
          <?php }?>
        </div>
        </div>



 
    <script>
        $(".hamburger-wrap").click(function(){
          if($(this).hasClass("active")){
            $(this).removeClass("active")
            $(".mobile-navigation").removeClass("active")
          }else{
            $(this).addClass("active")
            $(".mobile-navigation").addClass("active")
          }
        })
      </script>

      





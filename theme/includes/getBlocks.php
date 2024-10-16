<?php
  function get_blocks() {
    global $post;

    $fields = get_fields($post->ID);
    loop_blocks($fields);
  }

  function loop_blocks($blocks) {
    if (isset($blocks['blocks'])){
      if ($blocks['blocks']){
        foreach ($blocks['blocks'] as $key => $block) {
          switch ($block['acf_fc_layout']) {
            case 'global_block':
              if ($block['global_block']){
                $blocks = get_fields($block['global_block'][0]);
                loop_blocks($blocks);
              }
              break;
            case 'fullwidth_text':
              include 'blocks/fullwidth_text.php';
              break;
            case 'hero':
              include 'blocks/Home.php';
              break;
            case 'product':
              include 'blocks/Product.php';
              break;
            case 'animate':
              include 'blocks/Animate.php';
              break;
            case 'main':
              include 'blocks/Heading.php';
              break;
            case 'steps_block':
              include 'blocks/steps.php';
              break;
            case 'blog':
              include 'blocks/Blog.php';
              break;
            case 'gallery':
              include 'blocks/gallery.php';
              break;
            case 'contact':
              include 'blocks/Contact.php';
              break;
            case 'testimonials':
              include 'blocks/Testimonials.php';
              break;
            case 'steps':
              include 'blocks/Steps.php';
              break;
            case 'products':
              include 'blocks/Products.php';
              break;
            case 'sign':
              include 'blocks/sign.php';
              break;
            case 'sign':
              include 'blocks/sign.php';
              break;
            case 'fade':
              include 'blocks/Fade.php';
              break;
            case 'reviews':
              include 'blocks/Reviews.php';
              break;
              case 'video':
                include 'blocks/Video.php';
                break;
                case 'advertise':
                  include 'blocks/Advertise-buttons.php';
                  break;
                  case 'gradient':
                    include 'blocks/Gradient.php';
                    break;
                    case 'cards':
                      include 'blocks/Cards.php';
                      break;
                      case 'george-image':
                        include 'blocks/george.php';
                        break;
                        case 'story-hero':
                          include 'blocks/story-hero.php';
                          break;
                          case 'gradient_heading_story':
                            include 'blocks/gradient-heading-story.php';
                            break;
 
          }
        }
      }
    }
  }

?>
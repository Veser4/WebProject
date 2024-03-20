<?php
  $posts = [
    [
      "id" => 1,
      "title" => "The Road Ahead",
      "image" => "http://localhost:8001/static/images/background1.png",
      "description" => "The road ahead might be paved - it might not be.",
      "text" => "Dark spruce forest frowned on either side the frozen waterway.
      The trees had been stripped by a recent wind of their white
      covering of frost, and they seemed to lean towards each other,
      black and ominous, in the fading light. A vast silence reigned
      over the land. The land itself was a desolation, lifeless,
      without movement, so lone and cold that the spirit of it was not
      even that of sadness. There was a hint in it of laughter, but of
      a laughter more terrible than any sadness—a laughter that was
      mirthless as the smile of the sphinx, a laughter cold as the
      frost and partaking of the grimness of infallibility. It was the
      masterful and incommunicable wisdom of eternity laughing at the
      futility of life and the effort of life. It was the Wild, the
      savage, frozen-hearted Northland Wild.
  
      But there was life, abroad in the land and defiant. Down the
      frozen waterway toiled a string of wolfish dogs. Their bristly
      fur was rimed with frost. Their breath froze in the air as it
      left their mouths, spouting forth in spumes of vapour that
      settled upon the hair of their bodies and formed into crystals
      of frost. Leather harness was on the dogs, and leather traces
      attached them to a sled which dragged along behind. The sled was
      without runners. It was made of stout birch-bark, and its full
      surface rested on the snow. The front end of the sled was turned
      up, like a scroll, in order to force down and under the bore of
      soft snow that surged like a wave before it. On the sled,
      securely lashed, was a long and narrow oblong box. There were
      other things on the sled—blankets, an axe, and a coffee-pot and
      frying-pan; but prominent, occupying most of the space, was the
      long and narrow oblong box.
    
      In advance of the dogs, on wide snowshoes, toiled a man. At the
      rear of the sled toiled a second man. On the sled, in the box,
      lay a third man whose toil was over,—a man whom the Wild had
      conquered and beaten down until he would never move nor struggle
      again. It is not the way of the Wild to like movement. Life is
      an offence to it, for life is movement; and the Wild aims always
      to destroy movement. It freezes the water to prevent it running
      to the sea; it drives the sap out of the trees till they are
      frozen to their mighty hearts; and most ferociously and terribly
      of all does the Wild harry and crush into submission man—man who
      is the most restless of life, ever in revolt against the dictum
      that all movement must in the end come to the cessation of
      movement.
  
      But at front and rear, unawed and indomitable, toiled the two
      men who were not yet dead. Their bodies were covered with fur
      and soft-tanned leather. Eyelashes and cheeks and lips were so
      coated with the crystals from their frozen breath that their
      faces were not discernible. This gave them the seeming of
      ghostly masques, undertakers in a spectral world at the funeral
      of some ghost. But under it all they were men, penetrating the
      land of desolation and mockery and silence, puny adventurers
      bent on colossal adventure, pitting themselves against the might
      of a world as remote and alien and pulseless as the abysses of
      space.",
    ],
    [
      "id"=> 2,
      "title"=> "From Top Down",
      "image" => "http://localhost:8001/static/images/background2.png",
      "description"=> "Once a year, go someplace you’ve never been before.",
      "text"=> "Once a year, go someplace you’ve never been before. These words by the Dalai Lama couldn’t be truer. 
      The call to travel to new and unfamiliar destinations compels us to expand our horizons, open our minds, and 
      embrace the richness and diversity of the world around us. Travel reminds us of the vastness and variety of 
      the world, and helps us appreciate the uniqueness of every place and its people.
      When we travel to a new destination, we are venturing into the unknown and stepping out of our comfort zone. 
      This can be both exhilarating and daunting, but it is always an opportunity for growth. Exploring new places 
      challenges us to adapt to different cultures, languages, and traditions, broadening our understanding of the 
      world and fostering a sense of empathy and tolerance.
      Furthermore, visiting new places allows us to experience the beauty of nature in all its diversity. From the 
      lofty peaks of the Himalayas to the pristine beaches of the Caribbean, each destination offers its own 
      awe-inspiring landscapes and natural wonders. By immersing ourselves in the untouched beauty of nature, 
      we can gain a deeper understanding of the Earth's incredible biodiversity and the importance of conservation.
      Traveling to new destinations also provides an opportunity for self-discovery and personal growth. 
      Stepping outside our familiar surroundings allows us to break free from routine and discover new aspects 
      of ourselves. We may find hidden skills and interests, or gain a fresh perspective on our lives and aspirations. 
      The challenges and triumphs of traveling to a new place can reveal our resilience and adaptability, 
      giving us confidence to face challenges in other areas of our lives.
      In addition, traveling to new destinations presents the chance to create lasting memories and meaningful 
      connections with new people. Whether it’s striking up a conversation with a local artisan, sharing a meal 
      with a host family, or forming friendships with fellow travelers, these encounters enrich our lives in 
      ways we never could have imagined. It’s these connections that remind us of the universality of human 
      experience, despite the differences in language, culture, and geography.
      Moreover, traveling to new destinations offers the opportunity to delve into the history and heritage 
      of different cultures. Whether it’s exploring ancient ruins, visiting museums, or partaking in traditional 
      ceremonies, each new destination presents a window into the past. This allows us to gain a deeper 
      appreciation for the diversity of human experience and the rich tapestry of global history.
      In many ways, the call to travel to new destinations is a call to embrace a more open-minded and 
      empathetic worldview. By experiencing the different landscapes, cultures, and traditions of the world, 
      we gain a deeper understanding of the interconnectedness of humanity and the importance of cross-cultural 
      exchange and cooperation. This understanding is essential in fostering global harmony and building a 
      more inclusive and compassionate world.
      Ultimately, the annual call to travel to new destinations is a reminder to live life to the fullest, 
      to seek out adventure, and to discover the beauty and wonder of the world. It encourages us to break 
      free from the monotony of everyday life and embrace the excitement and anticipation of exploring new 
      places. So, heed the call, and let each new journey be a testament to the depth and diversity of our 
      world, and a testament to our own capacity for curiosity, growth, and connection.
      In conclusion, the invitation to travel to new places each year is an invitation to embrace the joy 
      of discovery, the beauty of diversity, and the richness of human experience. It’s a call to step outside 
      our comfort zones, challenge our assumptions, and broaden our horizons. It’s an opportunity to make 
      cherished memories and form lasting connections. So, once a year, answer the call and embark on an 
      adventure to a place you’ve never been before. You won’t regret it.",
    ],
  ];
  if ($_GET['id'] > count($posts)) {
    header("Location: http://localhost:8001/pages/errorPage?type=404");
    exit( );
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="http://localhost:8001/static/style/style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Oxygen:wght@300;400;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header class="header">
      <div class="header_content">
        <div class="menu_row">
          <div class="logo">
            <a href="#" title="Escape"><img src="http://localhost:8001/static/images/logo_header.svg"  alt="Escape." width="92px" height="26px"></a>
          </div>
          <ul class="menu">
            <li><a href="#" title="HOME">HOME</a></li>
            <li><a href="#" title="CATEGORIES">CATEGORIES</a></li>
            <li><a href="#" title="ABOUT">ABOUT</a></li>
            <li><a href="#" title="CONTACT">CONTACT</a></li>
          </ul>
        </div>
      </div>
    </header>
    <main>
      <div class="main_container">
        <div class="main_container_content">
          <div class="article">
            <h1 class="article_title">#<?=$_GET['id']?> <?= $posts[$_GET['id'] - 1]['title']?></h1>
            <div class="article_description">
              <?= var_dump( $posts[$_GET['id'] - 1]['description']) ?>
              <?= $posts[$_GET['id'] - 1]['description']?>
            </div>
          </div>
          <div class="image">
            <img src="<?= $posts[$_GET['id'] - 1]['image']?>" alt="background" />
          </div>
          <div class="content_column">
            <div class="article_text">
              <p>
                <?= $posts[$_GET['id'] - 1]['text']?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer>
      <div class="footer_container">
        <div class="footer_content">
          <div class="menu_row">
            <div class="logo">
              <a href="#"><img src="http://localhost:8001/static/images/logo_footer.svg"  alt="Escape." width="92px" height="26px"></a>
            </div>
            <ul class="menu">
              <li><a href="#" title="HOME">HOME</a></li>
              <li><a href="#" title="CATEGORIES">CATEGORIES</a></li>
              <li><a href="#" title="ABOUT">ABOUT</a></li>
              <li><a href="#" title="CONTACT">CONTACT</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>

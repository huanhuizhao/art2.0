<?php
//$imagePATH="http://www.artshu.com/events/061807172011/slides/";
$path = "http://www.artshu.com/art2.0/events/122014123014/";
$imagePATH = $path . "web600x800/";
$imageThumb =$path ."thumbnails/";

$files = array( "pic1.JPG", "pic2.JPG", "pic3.JPG", "pic4.JPG", "pic5.JPG", "pic6.JPG", "pic7.JPG", "pic8.JPG", "pic9.JPG", 
"pic10.JPG", "pic11.JPG", "pic12.JPG", "pic13.JPG", "pic14.JPG", "pic15.JPG",
               );                                          
$filesLoc = array();
$tiles = array();
foreach($files as $key=>$value) {
    
    $filesLoc[] = "$imagePATH" . $value;
    
}
    date_default_timezone_set('America/Los_Angeles');
 if(time()<strtotime("Dec. 6, 2014 PST")) {
    $header = "Coming Exhibition";
} else if (time() > strtotime ("Jan. 09, 2015 PST")){
    $header = "Past Exhibition";
    
}  else {
    $header = "Current Exhibition";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?=$header?></title>
<style type="text/css">
<!--
body {
    font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
    background: #D3D4DB;
    margin: 0;
    padding: 0;
    color: #000;
}

/* ~~ Element/tag selectors ~~ */
ul, ol, dl { /* Due to variations between browsers, it's best practices to zero padding and margin on lists. For consistency, you can either specify the amounts you want here, or on the list items (LI, DT, DD) they contain. Remember that what you do here will cascade to the .nav list unless you write a more specific selector. */
    padding: 0;
    margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
    margin-top: 0;     /* removing the top margin gets around an issue where margins can escape from their containing div. The remaining bottom margin will hold it away from any elements that follow. */
    padding-right: 15px;
    padding-left: 15px; /* adding the padding to the sides of the elements within the divs, instead of the divs themselves, gets rid of any box model math. A nested div with side padding can also be used as an alternate method. */
    margin-right: auto;
    margin-bottom: 0px;
    margin-left: auto;
}
a img { /* this selector removes the default blue border displayed in some browsers around an image when it is surrounded by a link */
    border: none;
}
/* ~~ Styling for your site's links must remain in this order - including the group of selectors that create the hover effect. ~~ */
a:link {
    color: #42413C;
    text-decoration: underline; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */
}
a:visited {
    color: #6E6C64;
    text-decoration: underline;
}
a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */
    text-decoration: none;
}

/* ~~ this fixed width container surrounds the other divs ~~ */
.container {
    width: 960px;
    background: #FFF;
    margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout */
}

/* ~~ the header is not given a width. It will extend the full width of your layout. It contains an image placeholder that should be replaced with your own linked logo ~~ */
.header {
    background: #ADB96E;
}

/* ~~ This is the layout information. ~~ 

1) Padding is only placed on the top and/or bottom of the div. The elements within this div have padding on their sides. This saves you from any "box model math". Keep in mind, if you add any side padding or border to the div itself, it will be added to the width you define to create the *total* width. You may also choose to remove the padding on the element in the div and place a second div within it with no width and the padding necessary for your design.

*/

.content {

    padding: 10px 0;
}

/* ~~ The footer ~~ */
.footer {
    padding:  0;
    background: #CCC49F;
}

/* ~~ miscellaneous float/clear classes ~~ */
.fltrt {  /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
    float: right;
    margin-left: 8px;
}
.fltlft { /* this class can be used to float an element left in your page. The floated element must precede the element it should be next to on the page. */
    float: left;
    margin-right: 8px;
}
.clearfloat { /* this class can be placed on a <br /> or empty div as the final element following the last floated div (within the #container) if the #footer is removed or taken out of the #container */
    clear:both;
    height:0;
    font-size: 1px;
    line-height: 0px;
}
-->
</style>
<script src="../../../Spry-UI-1.7/includes/SpryDOMUtils.js" type="text/javascript"></script>
<script src="../../../Spry-UI-1.7/includes/SpryDOMEffects.js" type="text/javascript"></script>
<script src="../../../Spry-UI-1.7/includes/SpryWidget.js" type="text/javascript"></script>
<script src="../../../Spry-UI-1.7/includes/SpryPanelSelector.js" type="text/javascript"></script>
<script src="../../../Spry-UI-1.7/includes/SpryPanelSet.js" type="text/javascript"></script>
<script src="../../../Spry-UI-1.7/includes/SpryFadingPanels.js" type="text/javascript"></script>
<script src="../../../Spry-UI-1.7/includes/SprySliderPanels.js" type="text/javascript"></script>
<script src="../../../Spry-UI-1.7/includes/SpryFilmStrip.js" type="text/javascript"></script>
<script src="../../../Spry-UI-1.7/includes/SpryImageLoader.js" type="text/javascript"></script>
<script src="../../../Spry-UI-1.7/includes/SpryImageSlideShow.js" type="text/javascript"></script>
<script src="../../../Spry-UI-1.7/includes/plugins/ImageSlideShow/SpryThumbnailFilmStripPlugin.js" type="text/javascript"></script>
<script src="../../../Spry-UI-1.7/includes/plugins/ImageSlideShow/SpryTitleSliderPlugin.js" type="text/javascript"></script>
<script src="../../../Spry-UI-1.7/includes/plugins/ImageSlideShow/SpryPanAndZoomPlugin.js" type="text/javascript"></script>
<link href="../../../Spry-UI-1.7/css/ImageSlideShow/basicFS/basic_fs.css" rel="stylesheet" type="text/css" />
<style type="text/css">
/* BeginOAWidget_Instance_2141543: #ImageSlideShow */

#ImageSlideShow {
    width: 450px;
    border: solid 1px #000000;
    background-color: #717c96;
    padding-top: 10px;
    margin-top: 24px;
    margin-right: auto;
    margin-bottom: 0px;
    margin-left: auto;
}

#ImageSlideShow .ISSName {
    top: -24px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: normal;
    font-size: 18px;
    text-transform: none;
    color: #000000;
}

#ImageSlideShow .ISSSlideTitle {
    top: -18px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    font-size: 12px;
    overflow: hidden;
    color: #000000;
    text-transform: none;
}

#ImageSlideShow .ISSClip {
    height: 488px;
    margin: 0 10px 10px 10px;
    border: solid 1px #ffffff;
    background-color: #000000;
}

#ImageSlideShow .ISSControls {
    top: 11px;
    height: 488px;
}

#ImageSlideShow .FilmStrip {
    height: 80px;
    background-color: #2a3a5b;
}

#ImageSlideShow .FilmStripPreviousButton, #ImageSlideShow .FilmStripNextButton {
    width: 25px;
    height: 80px;
}

#ImageSlideShow .FilmStripTrack {
    height: 80px;
}

#ImageSlideShow .FilmStripContainer {
    height: 80px;
}

#ImageSlideShow .FilmStripPanel {
    height: 80px;
    padding-left: 10px;
    margin-right: 0px;
}

#ImageSlideShow .FilmStripPanel .ISSSlideLink {
    margin-top: 10px;
    border: solid 1px #2a3a5b;
    background-color: #2a3a5b;
}

#ImageSlideShow .FilmStripPanel .ISSSlideLinkRight {
    border: solid 1px #404f6b;
    width: 56px;
    height: 47px;
    margin: 4px 4px 4px 4px;
}

#ImageSlideShow .FilmStripCurrentPanel .ISSSlideLink {
    background-color: #59647d;
    border-color: #59647d;
}

#ImageSlideShow .FilmStripCurrentPanel .ISSSlideLinkRight {
    border-color: #404f6b;
}
    
/* EndOAWidget_Instance_2141543 */
</style>
<script type="text/xml">
/*
<oa:widgets>
  <oa:widget wid="2141543" binding="#ImageSlideShow" />
</oa:widgets>
*/
</script>
</head>

<body style="width:100%;height:100%;padding:0;margin:0">


  <div class="content">
    
       <?php
       
  echo '<ul id="ImageSlideShow" title="'. $header. '">';
       
    foreach($files as $key=>$value) {
        $str = explode(".", $value);

        //echo "<div>'$imagePATH". $value . "'</div>";
     //   echo "<div> '$imageThumb" . $value. " '</div>";
      //  $valueLow = str_replace("JPG", "jpg", $value);
      $valueLow = $value;

    
        echo "<li><a href='$imagePATH". $value . "'". ' title="'. $title . '"><img src="'. $imageThumb . $value. '" alt="photos-1.jpg" /></a></li>' ;
    }
    echo '</ul>';
    ?>
    
      
  
    <script type="text/javascript">
// BeginOAWidget_Instance_2141543: #ImageSlideShow

var ImageSlideShow = new Spry.Widget.ImageSlideShow("#ImageSlideShow", {
    widgetID: "ImageSlideShow",
    widgetClass: "BasicSlideShowFS",
    injectionType: "replace",
    autoPlay: true,
    displayInterval: 8000,
    transitionDuration: 10000,
    componentOrder: ["name", "title", "view", "controls", "links"],
    sliceMap: { BasicSlideShowFS: "3slice", ISSSlideLink: "3slice" },
    plugIns: [ Spry.Widget.ImageSlideShow.ThumbnailFilmStripPlugin, Spry.Widget.ImageSlideShow.TitleSliderPlugin, Spry.Widget.ImageSlideShow.PanAndZoomPlugin ],
    TFSP: { pageIncrement: 2, wraparound: true }
});
// EndOAWidget_Instance_2141543
    </script>
  <!-- end .content --></div>
 

</body>
</html>

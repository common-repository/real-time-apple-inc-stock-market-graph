<div id="wp_apple">

<script language="Javascript">        
  setInterval("settime()", 1000);
</script>
<?php /* if(empty($options['apple_first_name']) && empty($options['apple_second_name']) && empty($options['apple_third_name'])){
	*/?>
<form name="apple_myform" action="" method="GET">

  <!-- <span id="apple_between_boxes">Enter separate market names in the boxes:</span> <br />
   <input type="text" name="apple_first_name" id="apple_first_name" value="<?php echo $apple_first_name;?>" onkeydown="if(event.keyCode == 13){return apple_writeText(this.form)}"> vs 

<input type="text" name="apple_second_name" id="apple_second_name" value="<?php echo $apple_second_name;?>"onkeydown="if(event.keyCode == 13){return apple_writeText(this.form)}"> vs

 <input type="text" name="apple_third_name" id="apple_third_name" value="<?php echo $apple_third_name;?>" onkeydown="if(event.keyCode == 13){return apple_writeText(this.form)}"> -->
     
     </div> 
      <?php/* }*/?> 
<div id="apple_Stock-Market-Gadget">
  <h2> Real time Apple,Inc. Stock Market</h2>

     <div id="apple_Gadget-Img">

          <a href="http://www.google.com/finance?q=NASDAQ:AAPL"

target="_blank" title="Today's Apple Stock Market"><img width="100%"

src="http://www.google.com/finance/chart?cht=c&q=.CINDEXNASDAQ%3A.IXIC&tlf=12h&auto=1&zx=n1cdhz-28eb2o"></a>

 
    <div id="apple_Color-Index">

      <a href="http://www.google.com/finance?q=NASDAQ%3AAAPL"

target="_blank\" style="color: blue;">NASDAQ:AAPL</a>&nbsp;&nbsp;

     <!-- <a href="http://www.google.com/finance?q=INDEXSP:.INX"

target="_blank" style="color: red;">S&amp;P 500</a>&nbsp;&nbsp;-->

     <!-- <a href="http://www.google.com/finance?q=INDEXNASDAQ:.IXIC"

target="_blank" style="color: orange;">Nasdaq</a>-->

<a id="apple_enlarge_image"  target="_blank" href="http://www.google.com/finance?q=INDEXDJX:.DJI,INDEXSP:.INX,INDEXNASDAQ:.IXIC&date=ytd&geo=all&graph=weekly_img&sort=0&sa=N">Enlarge Image</a> 

</div>

    </div> 
  </div>
    <div id="apple_date">
             <input type="button" name="clock" id="apple_show_clock"  value=""> 
        </form>

    </div> 

<div id="apple_Gadget-Img">

<?php 
/*
 * Let's check if they have checked the box, that that means three things:
 *  1. They want the back link on
 *  2. They want to edit the default names
 *  3. They want, in the front end, to be fields ready for users to type in new markets
 *  4. Show the Market trend graph also, if checkbox is checked
 */
  
?>
<?php if(!empty($options['apple_first_name']) && !empty($options['apple_second_name']) && !empty($options['apple_third_name'])){
  
    echo $showDivTitle = "
  <div id=\"apple_trendTitle\">     
    <h3 id=\"apple_trendTitle\"> Market Trend Graphs </h3>
  </div>
     ";
     }else echo $showDivTitle="";?>

<a target="_blank" title="Click to see graph at Google.com" href="http://trends.google.com/trends/?q=<?php 

if(empty($options['apple_first_name']) && empty($options['apple_second_name']) && empty($options['apple_third_name'])){ echo $apple_first_name; echo ",";echo $apple_second_name; echo ","; echo $apple_third_name;}else echo "AAPL,MSFT,IBM";?>&date=ytd&geo=all&graph=weekly_img&sort=0&sa=N"><img src="http://trends.google.com/trends/viz?q=<?php 

if(empty($options['apple_first_name']) && empty($options['apple_second_name']) && empty($options['apple_third_name'])){echo $apple_first_name; echo ", "; echo $apple_second_name;}else echo "AAPL,MSFT,IBM";?>&date=ytd&geo=all&graph=weekly_img&sort=0&sa=N" /></a>

<?php 
  if(!empty($options['apple_first_name'])&& !empty($options['apple_second_name']) && !empty($options['apple_third_name'])){?>
  <div id="apple_Color-Index">

       <a id="apple_enlarge_image"  target="_blank" href="http://trends.google.com/trends/?q=<?php  

if(!empty($options['apple_first_name']) && !empty($options['apple_second_name'])&& !empty($options['apple_third_name'])){echo $apple_first_name; echo ",";echo $apple_second_name; echo ","; echo $apple_third_name;}else echo "AAPL,MSFT,IBM";?>&date=ytd&geo=all&graph=weekly_img&sort=0&sa=N">Enlarge Image</a>


<a id="apple_firstname" target="_blank" href="http://trends.google.com/trends/?q=<?php if(empty($options['apple_first_name'])){ echo $apple_first_name= "AAPL";}else echo $apple_first_name;?>&date=ytd&geo=all&graph=weekly_img&sort=0&sa=N"><?php echo $apple_first_name;?></a>&nbsp;&nbsp;

      <a  id="apple_secondname" target="_blank" href="http://trends.google.com/trends/?q=<?php 

   if(empty($options['apple_second_name'])){ echo $apple_second_name="MSFT"; } else echo $apple_second_name;?>&date=ytd&geo=all&graph=weekly_img&sort=0&sa=N"><?php echo $apple_second_name; ?></a>&nbsp;&nbsp;

 <a  id="apple_third_name" target="_blank" href="http://trends.google.com/trends/?q=<?php 

   if(empty($options['apple_third_name'])){ echo $apple_third_name="IBM"; } else echo $apple_third_name;?>&date=ytd&geo=all&graph=weekly_img&sort=0&sa=N"><?php echo $apple_third_name; ?></a>&nbsp;&nbsp;

    </div>
    <?php 
  }?>
 </div>

<?php
 if(!empty($options['apple_first_name'] ) && !empty($options['apple_second_name']) && !empty($options['apple_third_name'])){

  	echo $apple_backLink ="Get your own <a title='Get Your Own Live Daily Real time Apple,Inc. Real time Apple,Inc. Stock Market Graph Sidebar Widget HERE' href='http://personalmoneystore.com/moneyblog/real-time-apple-inc-stock-market-graph/'>Live Daily Real time Apple,Inc. Real time Apple,Inc. Stock Market Graph  Sidebar Widget</a>";

  }  else {
  	echo $apple_backLink = " ";
  }?>
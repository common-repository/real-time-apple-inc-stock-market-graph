<script type="text/javascript">

function enableDisable(box_checked)
{
	var disable = !box_checked.checked;
	var argument_length = arguments.length;
	var obj, startIndex = 1;
	var frm = box_checked.form;

	for (var i=startIndex;i<argument_length;i++)
	{
		obj = frm.elements[arguments[i]];

		if (typeof obj=="object")
			{
			if (document.layers) 
				{
				if (disable)
					{

					obj.onfocus=new Function("this.blur()");

					if (obj.type=="text") obj.onchange=new Function("this.value=this.defaultValue");
					}
				else 
					{
					obj.onfocus=new Function("return");
					if (obj.type=="text") obj.onchange=new Function("return");
					}
				}
			else obj.disabled=disable;	
			}
	}
}
</script>
<script language="Javascript">
jQuery("#versionNote a").tooltip({ 
    bodyHandler: function() { 
        return $($(this).attr("href")).html(); 
    }, 
    showURL: false 
});
</script>
<p>

<label for="apple_title">Title for Real time Apple,Inc. Stock Market Sidebar Widget:
<input  name="apple_title" type="text" value="<?php echo $apple_title;?>" /></label>
<input type="hidden" id="apple_submit" name="apple_submit" value="1" />

</p>

<p class="apple_box1">
For this Real time Apple,Inc. Stock Market Graph version 1.0, the admins will not be able 
to input other markets to compare with the Apple stock market.  The upcoming version will
have these functions. Please check this box which will display a link to share the widget with others as well as the trend graphs for Apple, Microsoft and IMB.

<div id="versionNote">
 
</div>

<input type="checkbox" id="apple_enable_checkbox" name="apple_enable_checkbox" value="<?php echo $apple_enable_checkbox; ?>" onclick="enableDisable(this,'apple_first_name','apple_second_name','apple_third_name');" />
<input type="hidden" id="apple_submit" name=" apple_submit" value="4" />

<br />
</p>

<p>

<label for="apple_first_name">Enter stock name you want to compare:



<input  id="apple_first_name" name="apple_first_name" disabled="disabled" type="text" value="<?php 

if(empty($options['apple_first_name'])){

   echo $apple_first_name = "AAPL";

}else echo $apple_first_name;?>" /></label>			

<input type="hidden" id="apple_submit" name="apple_submit" value="2" />

</p>

<p>

<label for="apple_second_name">Enter stock name you want to compare:

<input id="apple_second_name" name="apple_second_name" disabled="disabled" type="text" value="<?php 

  if(empty($options['apple_second_name'])){

   echo $apple_first_name = "MSFT";

}else echo $apple_second_name;?>" /></label>	

<label for="apple_third_name">Enter stock name you want to compare:

<input id="apple_third_name" name="apple_third_name" disabled="disabled" type="text" value="<?php 

  if(empty($options['apple_third_name'])){

    echo $apple_third_name = "IBM";

}else echo $apple_third_name;?>" /></label>

		
<input type="hidden" id="apple_submit" name="apple_submit" value="3" />

</p>
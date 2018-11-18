<?php
	@$html = file_get_contents('https://reliefweb.int/country/ind');// for getting the htmlusing @ on starting to avoid warnings 
 $link= new DOMDocument();
libxml_use_internal_errors(TRUE);//disable libxml errors
if(!empty($html)){//check whether the html is returned or not
              $link->loadHTML($html);
	libxml_clear_errors(); //remove errors for yucky html
	
	$link_xpath = new DOMXPath($link);            
    	$percent=$link_xpath->query('//div[@id="content"]/div[@class="region region-content"]/div[@class="river-list river-updates river-sort-latest"]/div[@class="item "]/div[@class="title"]');
    	//print_r($percent);
		            	foreach($percent as $r){
                echo $r->nodeValue."<br>";}       
}
?>
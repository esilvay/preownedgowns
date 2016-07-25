<?php	
			
				// Get page data
				if($sortby == "2" || $sortby == "3" || $sortby == "4"){
					//print $sortby;
					if($sortby == 2){
						//print $sortby;
						$query1 = "SELECT * FROM $tableName WHERE Designer LIKE '$q' OR ID LIKE '$q' OR StyleNumber LIKE '$q' ORDER BY ID DESC LIMIT $start, $limit";
						//$query1 = "SELECT * FROM $tableName ORDER BY ID DESC LIMIT $start, $limit";
					}
					elseif($sortby == 3){
						//print $sortby;
						$query1 = "SELECT * FROM $tableName WHERE Designer LIKE '$q' OR ID LIKE '$q' OR StyleNumber LIKE '$q' ORDER BY AskingPrice ASC LIMIT $start, $limit";
						//$query1 = "SELECT * FROM $tableName ORDER BY AskingPrice ASC LIMIT $start, $limit";
					}
					elseif($sortby == 4){
						//print $sortby;
						$query1 = "SELECT * FROM $tableName WHERE Designer LIKE '$q' OR ID LIKE '$q' OR StyleNumber LIKE '$q' ORDER BY AskingPrice DESC LIMIT $start, $limit";
						//$query1 = "SELECT * FROM $tableName ORDER BY AskingPrice DESC LIMIT $start, $limit";
					}
				}
				else{
					$query1 = "SELECT * FROM $tableName WHERE Designer LIKE '$q' OR ID LIKE '$q' OR StyleNumber LIKE '$q' LIMIT $start, $limit";
				}
				
				//$query1 = "SELECT * FROM $tableName WHERE Designer LIKE '$q' OR ID LIKE '$q' OR StyleNumber LIKE '$q' LIMIT $start, $limit";
				#$query1 = "SELECT * FROM $tableName LIMIT $start, $limit";
				$result = mysql_query($query1);
		
		
				// Initial page num setup
				if ($page == 0){$page = 1;}
				$prev = $page - 1;	
				$next = $page + 1;							
				$lastpage = ceil($total_pages/$limit);		
				$LastPagem1 = $lastpage - 1;					
				
				
				$paginate = '';
				if($lastpage > 1){	
					$paginate .= "<div class='paginate'>";
					// Previous
					if ($page > 1){
						$paginate.= "<a href='$targetpage?page=$prev'>previous</a>";
					}else{
						$paginate.= "<span class='disabled'>previous</span>";	}
					// Pages	
					if ($lastpage < 7 + ($stages * 2))	// Not enough pages to breaking it up
					{	
						for ($counter = 1; $counter <= $lastpage; $counter++)
						{
							if ($counter == $page){
								$paginate.= "<span class='current'>$counter</span>";
							}else{
								$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}					
						}
					}
					elseif($lastpage > 5 + ($stages * 2))	// Enough pages to hide a few?
					{
						// Beginning only hide later pages
						if($page < 1 + ($stages * 2))		
						{
							for ($counter = 1; $counter < 4 + ($stages * 2); $counter++)
							{
								if ($counter == $page){
									$paginate.= "<span class='current'>$counter</span>";
								}else{
									$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}					
							}
							$paginate.= "...";
							$paginate.= "<a href='$targetpage?page=$LastPagem1'>$LastPagem1</a>";
							$paginate.= "<a href='$targetpage?page=$lastpage'>$lastpage</a>";		
						}
						// Middle hide some front and some back
						elseif($lastpage - ($stages * 2) > $page && $page > ($stages * 2))
						{
							$paginate.= "<a href='$targetpage?page=1'>1</a>";
							$paginate.= "<a href='$targetpage?page=2'>2</a>";
							$paginate.= "...";
							for ($counter = $page - $stages; $counter <= $page + $stages; $counter++)
							{
								if ($counter == $page){
									$paginate.= "<span class='current'>$counter</span>";
								}else{
									$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}					
							}
							$paginate.= "...";
							$paginate.= "<a href='$targetpage?page=$LastPagem1'>$LastPagem1</a>";
							$paginate.= "<a href='$targetpage?page=$lastpage'>$lastpage</a>";		
						}
						// End only hide early pages
						else
						{
							$paginate.= "<a href='$targetpage?page=1'>1</a>";
							$paginate.= "<a href='$targetpage?page=2'>2</a>";
							$paginate.= "...";
							for ($counter = $lastpage - (2 + ($stages * 2)); $counter <= $lastpage; $counter++)
							{
								if ($counter == $page){
									$paginate.= "<span class='current'>$counter</span>";
								}else{
									$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}					
							}
						}
					}
								
							// Next
					if ($page < $counter - 1){ 
						$paginate.= "<a href='$targetpage?page=$next'>next</a>";
					}else{
						$paginate.= "<span class='disabled'>next</span>";
						}
						
					$paginate.= "</div>";		
				
				
			}
			 //echo $total_pages.' Results';
			 // pagination
			 echo $paginate;
			?>
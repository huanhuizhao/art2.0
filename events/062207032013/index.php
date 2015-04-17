<?php
      
      class event {
        public static function getEventHTML() {
        $html = ""; 
        
        $html .= "<div class='event_box t2'>Annual Exhibition of Members from San Francisco Chinese Art Association</div>";
        
        $html .= "<div class='event_box t2'>Calligraphy Exhibition of Liu Yuan Society from China</div>";
        
        $html .= "<div class='event_box t2'> Ink Pacific: the innovation of Chinese ink painting in U.S. Zhejiang Art Museum, Hangzhou</div>";
        
        
        return $html;        
        
          date_default_timezone_set('America/Los_Angeles');
        if($event_index == 'current') {
            if(time()<strtotime("May. 4, 2013")) {
                $header = "Coming Exhibition";
            } else if (time() > strtotime ("May 22, 2013")){
                $header = "Past Exhibition";
                
            }  else {
                $header = "Current Exhibition";
            }
            //$header = "Current Exhibition";
           // return $html;
        } else {
                      
          //  return "";
          // return $html;
         //   return $html_cn;
         
            $header = "Coming Lecture";
            $header = "";
            //return $header;
        }
        
        $event = $event_list[$event_index];
        if($event) {
             $html .="<div class='event_box t2 event_header'>$header</div>";  
            if($event['link']) {
               
                $html .= "<div class='event_box t2'><a href='". $event['link']. "' target='_blank'><span class='event_title'>" . $event['title'] . '</span></a></div>';
            }  else {
                $html .= "<div class='event_box t2'>" . $event['title'] . "</div>";
            }
            

            
            if(isset($event['date']) && $event['date'] != null) {
                if ($header != '')
                {
                                     $html .= "<div class='event_date'>";
                $html .= $event['date'];
                
                $html .= "</div>";
                }

                
               
                    
            }
            
                        if($event['multilink']) {
                $html .= "<div class='event_box t2' style='width:100%;'>";
                foreach($event['multilink'] as $index=>$value) {
                   if($value['poster'] == '0')  {
                       $html .= "<a href='" . $value['link'] . "' >" . $value['title'] . "</a><br/>";
                   } else {
                    $html .= "<a href='" . $value['link'] ."' ><img src='". $value['poster'] ."' style='margin:1px;width:90%'></a>";
                       
                   }
                   $html .="<br/>";
                   
                }
                $html .="</div>";
                
            }
            if(isset($event['reports']) && $event['reports'] != null) {
/*                $html .= "<div class='event_box'>Reports</div>";*/
                $html .= "<div class='event_box'></div>";
                foreach($event['reports'] as $index=>$value) {
                      $html .= "<div class='event_box'><a href='". $value['link']. "' target='_blank'>". $value['title']."</a></div>";
                }
            }
            
            if(isset($event['poster']) && $event['poster']) {
                $html .="<div  class='plain_image'><div class='frame_image'>";
                $html .= "<a href='" . $event['poster'] . "' target='_blank'><img style='width:100%'  src='" . $event['poster'] . "'></a>";
                $html .="</div></div>";
            }
        }
        return $html;
    }
  
      }
      
      echo event::getEventHTML();
   
?>

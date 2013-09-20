<?php

foreach ($output as $rows){
    $html .= "<h2>".$rows[1]."</h2>";
    $html .= "<p> id: ".$rows[0]."</p>";
    $html .= "<p>Text: ".$rows[2]."</p></br>";
}
print $html;
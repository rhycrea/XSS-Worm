<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>

    <style type="text/css">
/*<![CDATA[*/
    th {
        font: bold 11px "Trebuchet MS", Verdana, Arial, Helvetica,
        sans-serif;
        border-right: 1px solid #C1DAD7;
        border-bottom: 1px solid #C1DAD7;
        border-top: 1px solid #C1DAD7;
        letter-spacing: 2px;
        text-transform: uppercase;
        text-align: left;
        padding: 6px 6px 6px 12px;
        background: #CAE8EA ;
    }

    th.nobg {
        border-top: 0;
        border-left: 0;
        border-right: 1px solid #C1DAD7;
        background: none;
    }
    th.spec {       
        border-left: 1px solid #C1DAD7;
        border-top: 0;
        background: #fff url(images/bullet1.gif) no-repeat;
        font: bold 10px "Trebuchet MS", Verdana, Arial, Helvetica,
        sans-serif;
    }

    th.specalt {
        border-left: 1px solid #C1DAD7;
        border-top: 0;
        background: #f5fafa url(images/bullet2.gif) no-repeat;
        font: bold 10px "Trebuchet MS", Verdana, Arial, Helvetica,
        sans-serif;
        color: #B4AA9D;
    }
    td {
        border-right: 1px solid #C1DAD7;
        border-bottom: 1px solid #C1DAD7;
        background: #fff;
        padding: 6px 6px 6px 12px;
        color: #6D929B;
    }
    td.alt {
        background: #F5FAFA;
        color: #B4AA9D;
    }
    /*]]>*/
    </style>
    <title></title>
  </head>
  <body>
    <table  width="80%">
		<tr>
			<th>Cookie & PHPSESSID</th>
			<th>Referrer</th>
			<th>Protocol</th>
			<th>User IP</th>
			<th>Browser</th>
			<th>OS</th>
			<th>Date</th>
		</tr>
      <?php
            $txt_file    = file_get_contents('C:\Users\Aybars\IdeaProjects\459-4\cookies.txt');
            $rows        = preg_split('/$\R?^/m', $txt_file);
            array_shift($rows);

            foreach($rows as $row => $data)
            {
                //get row data
                $row_data = explode('#', $data);

                $info[$row]['cookie']           = $row_data[0];
                $info[$row]['referrer']         = $row_data[1];
                $info[$row]['protocol']  = $row_data[2];
                $info[$row]['userip']       = $row_data[3];
                $info[$row]['browser']       = $row_data[4];
                $info[$row]['os']       = $row_data[5];
                $info[$row]['date']       = $row_data[6];
                    
                    echo '<tr>';
                //display data
                echo '<th>'  . $info[$row]['cookie'] . '</th>' ;
                echo '<th>'. $info[$row]['referrer'] . '</th>';
                echo '<th>' .  $info[$row]['protocol'] . '</th>';
                echo '<th>' .  $info[$row]['userip'] . '</th>';
                echo '<th>' .  $info[$row]['browser'] . '</th>';
                echo '<th>' .  $info[$row]['os'] . '</th>';
                echo '<th>' .  $info[$row]['date'] . '</th>';
                    echo '</tr>';
            }
            ?>
    </table>
  </body>
</html>
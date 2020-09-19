<!DOCTYPE html>
<html lang="cs">
    <head>
        <title>Kawaii akuma</title>
        <link rel="stylesheet" type="text/css" href="newcss.css">
        <meta charset="UTF-8"/>
    </head>
    
    <body>
        <h1>Akuma</h1>
        Watashi wa Kuroshiro no bara.<br>
        <b> Anata wa kawaii!</b> <br>
       Boku wa daisuki. <br>
        <i>Saran he 
        Ai shiteru 
        I love u <3 </i> <br>
        <table border="2">
            <tr>
                <td>1</td>
            </tr>
            <tr>
                <td>2</td>
            </tr>
            <tr>
                <td>3</td>
            </tr>
        </table>
        <ul>    
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
        </ul> 
        <dl>
            <dt>Akuma</dt>
            <dd>Japonsky démon</dd>
            <dt>Anma</dt>
            <dd>Korejsky ďábel</dd>
        </dl>
        
        <b>Neodsuzujte <span style=" color: blueviolet">L</span> <span style=" color: blue">G</span> <span style="color: green">B</span> <span style="color: red">T</span> komunitu!</b> <br>
        <img src="LGBT vlajka.jpeg">
        <form>
            Co jste? <br>
 
        <input type="checkbox"> selenophil <br>
        <input type="checkbox">nictophil   <br>
        <input type="checkbox">pluviophil   <br>
        <input type="checkbox">ceraunophil  <br>
        <br>
        Co chcete být nejvíce? <br>
        <input type="radio"> upír <br>
        <input type="radio"> démon <br>

        <input type="radio"> anděl <br>
        <input type="radio"> ghoul <br>
        <input type="radio"> smrtka <br>
        
        <input type="textarea">
        <input type="text">
        <input type="password">
        
        <select name="jazyk">
            <option value="čeština">čeština</option>
            <option value="angličtina">angličtina</option>
            <option value="japonština">japonština</option>
            <option value="slovenština">slovenština</option>
            
        </select>
        
        
        
        
        </form>
        
        <?PHP
        echo "baf";
        
        print_r("baf");
        
        var_dump("baf");
        
        echo "bakaaaaa";
        echo "a href=\"index.php\">Homepage</a>";
        
        
        $k = 666;
        $l = 444;
        $m = '444';
        
      var_dump($k==$l);
      var_dump($l===$m);
      var_dump($k===$l);
      var_dump($k+$l);
      var_dump($k-$l);
      var_dump($k*$l);
      var_dump($k/$l);
      var_dump($k++);
      var_dump($l--);
      var_dump($k+=$l);
      var_dump($k-=$l);
      var_dump($k*=$l);
      var_dump($k/=$l);
      var_dump($k!=$l);
      var_dump($k<$l);
      var_dump($k>$l);
      var_dump($k||$l);
      var_dump($k&&$l);
      var_dump(!$k);
      
      
      $ovoce = array ('jablko','mandarinka','banán','kiwi','třešeň');
      $ovoce = array (1=>'jablko',2=>'mandarinka',3=>'banán',4=>'kiwi',5=>'třešeň');
      $ovoce[6] = 'broskev';
      $ovoce[7] = 'jahoda';
      $ovoce[8] = 'malina';
      $ovoce[9] = 'hruška';
      $ovoce[10] = 'citron';
      
     var_dump($ovoce);
     
     $minerály ["kameny"]["drahokamy"][1] = 'diamant';
     $minerály ["kameny"]["drahokamy"][2]='smaragd';
     $minerály ["kameny"]["drahokamy"][3]='rubín';
     $minerály ["kameny"]["drahokamy"][4]='safír';
     $minerály ["kameny"]["drahokamy"][5]='drahý opál';
     $minerály ["kameny"]["drahokamy"][6]='spinel';
     
     $minerály ["kameny"]["polodrahokamy"][7]= 'ametist'; 
     $minerály ["kameny"]["polodrahokamy"][8]='obsidián'; 
     $minerály ["kameny"]["polodrahokamy"][9]='pyrit'; 
     $minerály ["kameny"]["polodrahokamy"][10]='krajkový achát'; 
     $minerály ["kameny"]["polodrahokamy"][11]='tyrkys'; 
     $minerály ["kameny"]["polodrahokamy"][12]='tygří oko'; 
     $minerály ["kameny"]["polodrahokamy"][13]='křemen'; 
     $minerály ["kameny"]["polodrahokamy"][14]='růženín'; 
                 
     $minerály ["kovy"]["ušlechtilé"][15]= 'zlato';
     $minerály ["kovy"]["ušlechtilé"][16]='stříbro';
     $minerály ["kovy"]["ušlechtilé"][17]='osmium';
     $minerály ["kovy"]["ušlechtilé"][18]='měď';
     $minerály ["kovy"]["ušlechtilé"][19]='platina';
     $minerály ["kovy"]["ušlechtilé"][20]='palladium';
     
     var_dump($minerály);
     
     
     
     $count= 10;
     $count2= 5;
     
    for($index = 1;$index < $count+1; $index++); {
    
        echo "<table>";
        echo "<tr>";
         for($index2 = 1;$index2 < $count2+1; $index2++); {
            echo "<td>".$index.$index2."<td>";
         }
         echo "</tr>";
         echo "</table>";
    }
    
     
      ?>
        
        
    </body>
</html>
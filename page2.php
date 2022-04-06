
        <?php
            $name = "Sankalp Singh";
            $file = "shortstory.txt";
            $current = file_get_contents($file);
            if(isset($_POST["user_string"])){
                $data = $_POST["user_string"];
                $nchar = $_POST["nchar"];
             }
             
           // $input = $_POST['user_string'];
           /*  $c=[',',':',';','"'];
            $d=['','','',''];
            $current2 =str_replace($c,$d,$current);
            $current2=str_replace("'","",$current2);
            $current2 = preg_replace("/(?![.=$'€%-])\p{P}/u", "", $current2);
        
            $delimiter = ' ';
            $words = explode($delimiter, $current2);
            $a =['and', 'or', 'the', 'is', 'am', 'are','if', 'else','The','an','it','for','but','in','my','your','our','their','And','Or','The','Is','Am','Are','If','Else','An','It','For','But','In','My','Your','Their'];
            $b=['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',''];
            $strreplace = str_replace($a,$b,$words);  
            $strreplace = implode($strreplace); */
            //echo $strreplace;            
            //echo json_encode(42);
            ?>
           
 <html>
 
    <body>
        <h2>Find data in the text file</h2>
            <h3 id = "space"><h3>
            <h3>Name :-  </h3><h3 id="indata"></h3>
            <h3>Index:-  </h3><h3 id ="indexof"></h3>
            <h3>Total numner of characters : -  <h3> <h3 id ="qwe"></h3>
            <textarea id="txtar" " rows="4" cols="50">
            </textarea>
        <script>
            var data = <?=json_encode($current)?>;
            var nchar = <?=json_encode($nchar)?>;
            data = data.replace(/[^\w\s]|_/g, "").replace(/\s+/g, " ");
             
            data = data.toLowerCase();

            var stopWords = [
                "the","to","a" , "about" , "above" , "after" , "again" , "against" , "all" , "am" ,"were",
                 "an" , "and" , "any" , "are" , "aren't" , "as" , 
                 "at" , "be" , "because" , "been" , "before" , "being" , "below" , "between" , 
                 "both" , "but" , "by" , "can't" , "cannot" , "could" , "couldn't" , "did" , "didn't" , "do" ,
                  "does" , "doesn't" , "doing" , "don't" , "down" , "during" , "each" , "few" , "for" , "from" , 
                  "further" , "had" , "hadn't" , "has" , "hasn't" , "have" , "haven't" , "having" , "he" , "he'd" , 
                  "he'll" , "he's" , "her" , "here" , "here's" , "hers" , "herself" , "him" , "himself" , "his" , 
                  "how" , "how's" , "i" , "i'd" , "i'll" , "i'm" , "i've" , "if" , "in" , "into" , "is" , "isn't" ,
                   "it" , "it's" , "its" , "itself" , "let's" , "me" , "more" , "most" , "mustn't" , "my" , 
                   "myself" , "no" , "nor" , "not" , "of" , "off" , "on" , "once" , "only" , "or" , "other" , "ought" , 
                   "our" , "ours"
            ]
            var expStr = stopWords.join("|");
                data = data.replace(new RegExp('\\b(' + expStr + ')\\b', 'gi'), ' ')
                    .replace(/\s{2,}/g, ' ');
                var inputword = <?=json_encode($data)?>;
                var myWords = data.split(" ");
                
                myWords.length=<?=json_encode($nchar)?>
                //var count = myWords.length;

                document.getElementById("qwe").innerHTML = myWords.length-1;
                document.getElementById("txtar").innerHTML = myWords;
                
                for (var i = 1; i < myWords.length; i++) {
                  // myWords.toString();
                  i.toString();
                   var arraytwo = [];
                    if(i===inputword){
                    arraytwo[i];
                    }
                    else{
                        console.log("Not found in array");
                    }
                    
                }
                console.log(arraytwo);
                console.log(myWords);
                //console.log(myWords);
                var output = myWords.includes(<?=json_encode($data)?>);
                
                
                
                
                
                
                if(output) {
                    alert("found");
                  // document.getElementById("space").innerHTML = "Data found in the Text File\n Word name:-";
                   document.getElementById("indata").innerHTML = <?=json_encode($data)?>;
                   
                var indexEncode = myWords.indexOf(<?=json_encode($data)?>);
                
                document.getElementById("indexof").innerHTML = indexEncode;
                }
                else{
                    alert("not found");
                }
           </script>
    </body>    
</html>



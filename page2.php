
        <?php
            $name = "Sankalp Singh";
            $file = "shortstory.txt";
            $current = file_get_contents($file);
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
        <h1> DEMO </h1>
        <script>
            var data = <?=json_encode($current)?>;
            data = data.replace(/[^\w\s]|_/g, "").replace(/\s+/g, " ");

            data = data.toLowerCase();

            var stopWords = [
                "the","to","a" , "about" , "above" , "after" , "again" , "against" , "all" , "am" ,
                 "an" , "and" , "any" , "are" , "aren't" , "as" , 
                 "at" , "be" , "because" , "been" , "before" , "being" , "below" , "between" , 
                 "both" , "but" , "by" , "can't" , "cannot" , "could" , "couldn't" , "did" , "didn't" , "do" ,
                  "does" , "doesn't" , "doing" , "don't" , "down" , "during" , "each" , "few" , "for" , "from" , 
                  "further" , "had" , "hadn't" , "has" , "hasn't" , "have" , "haven't" , "having" , "he" , "he'd" , 
                  "he'll" , "he's" , "her" , "here" , "here's" , "hers" , "herself" , "him" , "himself" , "his" , 
                  "how" , "how's" , "i" , "i'd" , "i'll" , "i'm" , "i've" , "if" , "in" , "into" , "is" , "isn't" ,
                   "it" , "it's" , "its" , "itself" , "let's" , "me" , "more" , "most" , "mustn't" , "my" , 
                   "myself" , "no" , "nor" , "not" , "of" , "off" , "on" , "once" , "only" , "or" , "other" , "ought" , "our" , "ours"
            ]
            var expStr = stopWords.join("|");
                data = data.replace(new RegExp('\\b(' + expStr + ')\\b', 'gi'), ' ')
                    .replace(/\s{2,}/g, ' ');

                var myWords = data.split(" ");
                var output = myWords.includes("book");
                if(output) {
                    console.log("found");
                    console.log(myWords.indexOf("book"));
                }
                else{
                    console.log("not found");
                }
           </script>
    </body>    
</html>



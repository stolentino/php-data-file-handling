<form>
    <label for="country">Country</label>
    <select name="country" id="country">
        <?php include '../data/html/countries.html'; ?>
    </select>
    <label for="state">State</label>
    <select name="state" id="state">
        <?php
        if($fh = fopen('../data/html/states.html', 'r')){
            while(!feof($fh)){
                $line = fgets($fh);
                if(strpos($line, 'Oregon')){
                    echo str_replace('>Oregon', ' selected>Oregon', $line);
                } else {
                    echo $line;
                }
            }
            fclose($fh);
        }
        ?>
    </select>
    </form>
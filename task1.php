
<?php
    echo "First method: ";
    $arr = array (-9, 13, 1, 6, 10, 41, 3, 0, -19);

    sort($arr);

    $string = implode("," , $arr );
    echo $string;

    echo "Second method : ";

    function sortArr ($arr) {
        $arr_size = count($arr)-1;
        for ($i = 0; $i < $arr_size; $i++){
            for ($j = 0; $j < $arr_size - $i; $j++){
                if ($arr[$j+1] < $arr[$j]){
                    $aux= $arr[$j+1];
                    $arr[$j+1] = $arr[$j];
                    $arr[$j] = $aux;
                }
            }
        }
        return $arr;
    }

    $string = sortArr($arr);
    $sortedStr = implode(",", $string);
    echo $sortedStr;

?>


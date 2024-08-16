<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $unsortedArray = array(3,5,6,1,2);
        $sortedArray = array();
        // $sortedArray[3] = 5;
        // $sortedArray[1] = 51;
        // for ($i=0; $i < 5; $i++) { 
        //     //echo $i;
        //     echo $sortedArray[$i];
        // }
        // echo "hello";
        $length = count($unsortedArray);
        quickSort($unsortedArray,0,$length-1);

        function quickSort($Arr,$start,$end){
            if($end<=$start){
                return;
            }
            $p = partition($Arr,$start,$end);

            quickSort($Arr,$start,$p -1);
            quickSort($Arr,$p +1,$end);

        }
        function partition($arr,$s,$e){
            $pivot = $arr[$s];

            $cnt = 0;
            for($i = s+1; $i<=$e; $i++) {
                if($arr[$i] <=$pivot) {
                    $cnt++;
                }
            }

            //place pivot at right position
            $pivotIndex = $s + $cnt;
            // swap(arr[pivotIndex], arr[s]);
            $tt = $arr[$s];
            $arr[$s] = $arr[$pivotIndex];
            $arr[$pivotIndex] = $tt;
            //left and right wala part smbhal lete h 
            $i = $s;
            $j = $e;

            while($i < $pivotIndex && $j > $pivotIndex) {

                while($arr[$i] <= $pivot) 
                {
                    $i++;
                }

                while($arr[j] > $pivot) {
                    $j--;
                }

                if($i < $pivotIndex && $j > $pivotIndex) {
                    // swap(arr[i++], arr[j--]);
                    $t = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $t;
                    
                }

            }

            return $pivotIndex;

        }
    ?>
</body>
</html>
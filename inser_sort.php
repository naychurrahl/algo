<?php

  function liist($x){
    $ret = [];
    for ($i = 0; $i < $x; $i++){
      $ret[] = rand(0, 9);
    }
    return $ret;
  }

  function show($list){
    return ("A = [".implode(", ", $list)."]\n");
  }

  function insSort($list){
    $n = count($list);
    echo show($list);
    for ($i = 1; $i < $n; $i++){
      $k = $list[$i];
      $j = $i - 1;
      echo "iter {$i}: n = {$n}, i = {$i}, key = {$k}, j = {$j}\n";
      $sub = 1;
      while($j >= 0 and $list[$j] > $k){
        $q = $j + 1;
        $list[$q] = $list[$j];
        echo "\titer {$i}.{$sub}: {$j} >= 0 AND {$list[$j]} > {$k} (TRUE)\n";
        echo "\t\tA[{$q}] = {$list[$q]}, j = {$j}\n";
        $j = $j - 1;
        $sub++;
        sleep(1);
        echo "\t".show($list);
      }
      $q = isset($q)? $q : $j + 1;
      $list[$j + 1] = $k;
      $val = $j >= 0? $list[$j] : "NaN";
      echo "\titer {$i}.{$sub}: {$j} >= 0 AND {$val} > {$k} (FALSE)\n";
      echo "\t\tA[{$q}] = {$list[$q]}, j = {$j} || \n";
      sleep(1);
      echo show($list);
    }
    return $list;
  }

  $a = liist(rand(3,10));
  $b = insSort($a);
  echo ("Unsorted array => ".implode(", ", $a)."\n"."Sorted array => ".implode(", ", $b)."\n");

?>

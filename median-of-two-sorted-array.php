<?php 
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $array = array_merge($nums1,$nums2);
        sort($array);
        
        if(count($array)%2) {
            $count = ceil(count($array)/2)-1;
           return (float) $array[$count];
        } else {
            $output = array_slice($array,count($array)/2);
            $count = count($array)/2-1;
            return ((float)$array[$count]+$output[0])/2;
                
        }
    }
}

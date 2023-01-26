<?php
    $pattern = '#a.b#';
    $replacement = '!';
    $subject = 'ahb acb aeb aeeb adcb axeb';
    $res = preg_replace($pattern, $replacement, $subject );
    //echo $res; // ! ! ! aeeb adcb axeb
    
    
    //________________________________________________________________
    $pattern = '#ab+a#';
    $replacement = '!';
    $subject = 'aa aba abba abbba abca abea';
    $res = preg_replace($pattern, $replacement, $subject );
    //echo $res; // aa ! ! ! abca abea

    
    //________________________________________________________________
    $pattern = '#ab?a#';
    $replacement = '!';
    $subject = 'aa aba abba abbba abca abea';
    $res = preg_replace($pattern, $replacement, $subject );
    //echo $res; // ! ! abba abca abea

    
    //________________________________________________________________
    $pattern = '#(ab)+#';
    $replacement = '!';
    $subject = 'ab abab abab abababab abea';
    $res = preg_replace($pattern, $replacement, $subject );
    //echo $res; // ! ! ! ! !ea


    //________________________________________________________________
    $pattern = '#2\++3#';
    $replacement = '!';
    $subject = '23 2+3 2++3 2+++3 345 567';
    $res = preg_replace($pattern, $replacement, $subject );
    //echo $res; // 23 ! ! ! 345 567


    //________________________________________________________________
    $pattern = '#ab{4,}a#';
    $replacement = '!';
    $subject = 'aa aba abba abbba abbbba abbbbba';
    $res = preg_replace($pattern, $replacement, $subject );
    echo $res; // aa aba abba abbba ! !

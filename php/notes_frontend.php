<?php 

function createElement($element,$id,$class,$inner)
    {
        $elementString='';
        $elementString=$elementString.'<'.$element.' id="'.$id.'" class="'.$class.'"';
        $elementString=$elementString.'>';
        $elementString=$elementString.$inner;
        $elementString=$elementString.'</'.$element.'>';
        return $elementString;
    }

function createInput($id,$class)
    {
        $elementString='';
        $elementString=$elementString.'<input id="'.$id.'" class="'.$class.'"';
        $elementString=$elementString.'/>';
       // $elementString=$elementString.$inner;
    //    $elementString=$elementString.'</'.$element.'>';
        return $elementString;
    }

function createButton($id,$class,$function,$inner)
    {
        $elementString='';
        $elementString=$elementString
            .'<button id='.$id.' class='.$class.' onclick="'.$function.'()">'
            .$inner 
            .'</button>';
        return $elementString;
    }
    $pageId='notesPage';
    $titleId='notesTitle';
    $notesInputId='notesInput';
    $submitButtonId='notesSubmitButton';
    $statusIndicatorId='notesStatusIndicator';
    $outputAreaId='notesOutputArea';
    $panelId='notesInputPanel';

    $textAreaRows=5;


    $title='<h1 id='.$titleId.'>Notes</h1>';
    //$title=createElement('h1','notesTitle','title','Notes');
    $scriptLink='<script src="js/notesScripts.js"></script>';

    $wholePageOpener ='<div id="'.$pageId.'">';
    $wholePageCloser='</div>';
    $inputTextbox='<textarea rows='.$textAreaRows.' id='.$notesInputId.'></textarea>';
    $submitButton='<button onclick="handleNotesSubmitButton()" id="'.$submitButtonId.'">Submit</button>';
    $statusIndicator='<div id="notesStatusIndicatorBox"><p id="'.$statusIndicatorId.'">Ready</p></div>';
    $notesOutputArea='<div id="'.$outputAreaId.'"></div>';
    $inputPanel=
        '<div id="'.$panelId.'">'
        .$inputTextbox
        .'</br>'
        .$submitButton
        .$statusIndicator
        .'</div>';
    
    $fullOutput=
        $wholePageOpener.
        
        $title.
        $scriptLink.
        $inputPanel.
        $notesOutputArea.
        
        $wholePageCloser;
    
    echo $fullOutput;

?> 
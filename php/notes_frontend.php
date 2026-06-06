<?php 
    $pageId='notesPage';
    $testTitle='<h1>Notes Frontend</h1>';
    $scriptLink='<script src="js/notesScripts.js"></script>';
    $testButton=
    '
        <button onclick="notesTestFunction0()">Test Script Link</button>
    ';
    $wholePageOpener ='<div id="'.$pageId.'">';
    $wholePageCloser='</div>';
    $inputTextbox='<textarea id="notesInput"></textarea>';
    $submitButton='<button onclick="handleNotesSubmitButton()" id="notesSubmitButton">Submit</button>';
    $statusIndicator='<div id="notesStatusIndicatorBox"><p id="notesStatusIndicator">Ready</p></div>';
    $notesOutputArea='<div id="notesOutputArea"></div>';
    $inputPanel=
        '<div id="notesInputPanel">'
        .$inputTextbox
        .'</br>'
        .$submitButton
        .$statusIndicator
        .'</div>';
    
    $fullOutput=
        $wholePageOpener.
        
        $testTitle.
        $scriptLink.
        $inputPanel.
        $notesOutputArea.
        
        $wholePageCloser;
    
    echo $fullOutput;

?> 
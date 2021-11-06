$(function(){
    $('.lined').linedtextarea({
        selectedLine: 1
    });

    $('#code_editer').keydown(function(e){
        if( e.keyCode!=9 ){ return; }
        e.preventDefault();

        var cursorPosition = this.selectionStart;
        var cursorLeft     = this.value.substr( 0, cursorPosition );
        var cursorRight    = this.value.substr( cursorPosition, this.value.length );

        this.value = cursorLeft+"\t"+cursorRight;
        this.selectionEnd = cursorPosition+1;
    });

    $('#programming').click(function(){
        var html_str = $('#code_editer').val();
        $('#code_design').append(html_str);
    });

    $('#all').click(function(){
        $('#code_design').empty();
    });
});


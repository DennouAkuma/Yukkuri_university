$(function(){
    var border_array = ["solid",
                       "double",
                       "groove",
                       "ridge",
                       "inset",
                       "outset",
                       "dashed",
                       "dotted"];

    fast_method(border_array);

    $('#heading_input').keyup(function(){
        add_heading_text();
    });

    $("#top_border").change(function(){change_method(border_array );});
    $("#left_border").change(function(){change_method(border_array );});
    $("#right_border").change(function(){change_method(border_array );});
    $("#bottom_border").change(function(){change_method(border_array );});

    $("#top_boder_size").change(function(){change_method(border_array );});
    $("#left_boder_size").change(function(){change_method(border_array );});
    $("#right_boder_size").change(function(){change_method(border_array );});
    $("#bottom_boder_size").change(function(){change_method(border_array );});

    $("#top_padding_size").change(function(){change_method(border_array );});
    $("#left_padding_size").change(function(){change_method(border_array );});
    $("#right_padding_size").change(function(){change_method(border_array );});
    $("#bottom_padding_size").change(function(){change_method(border_array );});


    $('#top_boder_color').change(function(){change_method(border_array );});
    $('#left_boder_color').change(function(){change_method(border_array );});
    $('#right_boder_color').change(function(){change_method(border_array );});
    $('#bottom_boder_color').change(function(){change_method(border_array );});

    $('#font_color').change(function(){change_method(border_array );});
    $('#bg_color').change(function(){change_method(border_array );});

    $("#font_seize_select").change(function(){change_method(border_array );});
    $("#font_position_select").change(function(){change_method(border_array );});

    $("#reset_bt").click(function(){
        console.log("hogehoge");
        check_point();
    });
    $("#insert_bt").click(function(){});
});

//初期処理
function fast_method(chas_boder_array){
    add_heading_text();
    add_font_size();
    add_border_type(chas_boder_array);
    check_point();
    change_method(chas_boder_array);
}

//border selct add
function add_heading_text(){
    var heading_str = $('#heading_input').val();
    $('#heading_heading').text(heading_str);
}

//border type add
function add_border_type(get_array){
    var boder_array_chas = get_array
    for(var i = 0;i < boder_array_chas.length;i++){
        var chas_add_str = "<option value=" + i + ">" + boder_array_chas[i] + "</option>";
        $('.heading_border').append(chas_add_str);
    }
}

//border fontsize add
function add_font_size(){
    for(var i = 1; i < 100;i++){
        var chas_add_str = "<option value=" + i + ">" + i + "</option>";
        $('.size_select').append(chas_add_str);
    }
}

//reset

//default config
function check_point(){
    var font_size = 19;
    var top_type = 0;
    var left_type = 1;
    var right_type = 0;
    var bottom_type = 1;

    var top_size = 0;
    var left_size = 11;
    var right_size = 0;
    var bottom_size = 2;

    var top_padding = 6;
    var left_padding = 6;
    var right_padding = 6;
    var bottom_padding = 6;

    var top_color = "#006a27";
    var left_color = "#006a27";
    var right_color = "#006a27";
    var bottom_color = "#006a27";

    var font_color = "#000000";
    var bg_color = "#e9e9e9";
    var font_position_select = 0;

    $("#top_border").find("option").eq(top_type).attr("selected", "selected");
    $("#left_border").find("option").eq(left_type).attr("selected", "selected");
    $("#right_border").find("option").eq(right_type).attr("selected", "selected");
    $("#bottom_border").find("option").eq(bottom_type).attr("selected", "selected");

    $("#top_boder_size").find("option").eq(top_size).attr("selected", "selected");
    $("#left_boder_size").find("option").eq(left_size).attr("selected", "selected");
    $("#right_boder_size").find("option").eq(right_size).attr("selected", "selected");
    $("#bottom_boder_size").find("option").eq(bottom_size).attr("selected", "selected");

    $("#top_padding_size").find("option").eq(top_padding).attr("selected", "selected");
    $("#left_padding_size").find("option").eq(left_padding).attr("selected", "selected");
    $("#right_padding_size").find("option").eq(right_padding).attr("selected", "selected");
    $("#bottom_padding_size").find("option").eq(bottom_padding).attr("selected", "selected");

    $('#top_boder_color').val(top_color);
    $('#left_boder_color').val(left_color);
    $('#right_boder_color').val(right_color);
    $('#bottom_boder_color').val(bottom_color);

    $('#font_color').val(font_color);
    $('#bg_color').val(bg_color);

    $("#font_seize_select").find("option").eq(font_size).attr("selected", "selected");
    $("#font_position_select").find("option").eq(font_position_select).attr("selected", "selected");
}

//css変更
function change_method(chas_boder_array){
    $('#heading_heading').removeAttr('style');

    var top_type = $("#top_border").val();
    var left_type = $("#left_border").val();
    var right_type = $("#right_border").val();
    var bottom_type = $("#bottom_border").val();

    var top_padding_size = $("#top_padding_size").val() + "px";
    var left_padding_size = $("#left_padding_size").val() + "px";
    var right_padding_size = $("#right_padding_size").val() + "px";
    var bottom_padding_size = $("#bottom_padding_size").val() + "px";

    $("#heading_heading").css('padding-top' , top_padding_size);
    $("#heading_heading").css('padding-left' , left_padding_size);
    $("#heading_heading").css('padding-right' , right_padding_size);
    $("#heading_heading").css('padding-bottom' , bottom_padding_size);
    
    if(top_type != "null"){
        var border_color = $("#top_boder_color").val();
        var border_size = $("#top_boder_size").val();
        var boder_str = border_size + "px " + chas_boder_array[top_type] + " " + border_color;

        $("#heading_heading").css('border-top' , boder_str);
    }

    if(left_type != "null"){
        var border_color = $("#left_boder_color").val();
        var border_size = $("#left_boder_size").val();
        var boder_str = border_size + "px " + chas_boder_array[left_type] + " " + border_color;

        $("#heading_heading").css('border-left' , boder_str);
    }

    if(right_type != "null"){
        var border_color = $("#right_boder_color").val();
        var border_size = $("#right_boder_size").val();
        var boder_str = border_size + "px " + chas_boder_array[right_type] + " " + border_color;

        $("#heading_heading").css('border-right' , boder_str);
    }

    if(bottom_type != "null"){
        var border_color = $("#bottom_boder_color").val();
        var border_size = $("#bottom_boder_size").val();
        var boder_str = border_size + "px " + chas_boder_array[bottom_type] + " " + border_color;

        $("#heading_heading").css('border-bottom' , boder_str);
    }

    var bg_color = $('#bg_color').val();
    $("#heading_heading").css('background-color' , bg_color);

    var font_color = $('#font_color').val();
    $("#heading_heading").css('color' , font_color);

    var font_size = $('#font_seize_select').val() + "px";
    $("#heading_heading").css('font-size' , font_size);

    var text_postion = $("#font_position_select").val();
    switch(text_postion){
        case "0":
            $("#heading_heading").css('text-align' , 'left');
            break;
        case "1":
            $("#heading_heading").css('text-align' , 'center');
            break;
        case "2":
            $("#heading_heading").css('text-align' , 'right');
            break;
    }

    var style_str = $("#heading_heading").attr("style");

    style_str = '<h2 style="' + style_str + '">' + $('#heading_input').val() + '</h2>'
    $("#generation_heading_str").val(style_str);
}